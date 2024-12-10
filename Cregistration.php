<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "Adbms2023#";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$education = $_POST['education'];
$university = $_POST['university'];
$major = $_POST['major'];
$desired_position = $_POST['desired_position'];
$nation = $_POST['nation'];
$password = $_POST['password']; 

$major_query = "SELECT MajorID FROM majors WHERE MajorName = '$major'";
$major_result = $conn->query($major_query);

if ($major_result!== false) {
if ($major_result->num_rows > 0) {
    $major_row = $major_result->fetch_assoc();
    $major_id = $major_row['MajorID'];
    

    // SQL query to insert data into the table
    $sql = "INSERT INTO candidate (CFirstName, CLastName, EmailAddress, PhoneNumber, EducationLevel, DesiredPosition, RecentUniversityName, Nationality, Password, MajorID)
            VALUES ('$first_name', '$last_name', '$email', '$contact', '$education', '$desired_position', '$university', '$nation', '$password', '$major_id')";

    if ($conn->query($sql) === TRUE) {
       
        $sql1 = "SELECT CandidateID FROM candidate WHERE CFirstName = '$first_name' AND CLastName = '$last_name' AND EmailAddress = '$email' AND PhoneNumber = '$contact' AND EducationLevel = '$education' AND DesiredPosition = '$desired_position' AND RecentUniversityName = '$university' AND Nationality = '$nation' AND Password = '$password' AND MajorID = '$major_id'";
        $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0)
        {
            $row1 = $result1->fetch_assoc();
            $candidateID = $row1['CandidateID'];
            // $_SESSION['cid'] = $row1['CandidateID'];
            // echo $_SESSION['cid'];
        }
        // Registration successful, redirect to another page
        header("Location: update_hashing.php?cid=$candidateID&rid=-1");
        exit();
    } else {
                echo "Error inserting data into the table: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "No matching MajorID found for MajorName: '$major'";
        }
    } else {
        echo "Error executing the query: " . $major_query . "<br>" . $conn->error;
    }

$conn->close();
?>


