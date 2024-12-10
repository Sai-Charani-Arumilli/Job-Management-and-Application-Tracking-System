/* Apply.php connects to database and updates applications table when candidate applies for a job to keep track of applications.*/

<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "Adbms2023#";
$dbname = "mydb";

//Database connection
$conn = new mysqli($servername, $username, $password, $dbname);


//If connection failed die.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //Post jobID to variable $jobID
    $jobID = $_POST["jobID"];
    ////Post jobID to variable $jobID
    $candiID = $_POST["candiID"];

    //SQL query to insert values into applications table
    $insertNotification = $conn->prepare("INSERT INTO applications (JobID, CandidateID, ApplicationDate, Status) VALUES (?, ?, NOW(), 'Active')");
    $insertNotification->bind_param("ii", $jobID, $candiID);
    
    //After executing redirect to CandDisplay.php
    if ($insertNotification->execute()) {
        header("Location: CandDisplay.php");
        exit();
    } else {
        //Display error
        echo "Error: " . $insertNotification->error;
    }
    
    //Close connection
    $insertNotification->close();
    $conn->close();
}
?>



