<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "upr1");

// Check connection
if ($conn === false) {
die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['name'])){

    $name = $_POST['name'];

}else{

    $name = " John - This is our default name";

}
if(isset($_POST['email'])){

    $email = $_POST['email'];

}else{

    $email = " John123@gmail.com - This is our default email";

}
if(isset($_POST['feedback'])){

    $feedback = $_POST['feedback'];

}else{

    $feedback = " John:feedback - This is our default feedback";

}
// echo 'Name: '.$name;
// echo "email".$email;
// echo "feedback".$feedback;
// // Get the form data
// $name = $_POST['name'];
// $email = $_POST['email'];
// $feedback = $_POST['feedback'];

// Insert the data into the database
$sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

// Execute the query
if (mysqli_query($conn, $sql)) {
echo "Feedback successfully submitted!";
} else {
echo "Error submitting feedback: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>

