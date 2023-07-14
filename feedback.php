<?php
  $fullname = $_GET['fullname'];
  $email = $_GET['email'];
  $emojiRating = $_GET['emojiRating'];
  $feedbackType = $_GET['feedbackType'];
  $feedback = $_GET['feedback'];
  $message = "Feedback submitted successfully.";
  $conn = mysqli_connect("localhost", "root","", "feedback");
  $query ="insert into feedbackinfo (fullname,email,emojiRating,feedbackType,feedback) values('$fullname','$email',$emojiRating,'$feedbackType','$feedback')";
  $result = mysqli_query($conn, $query);
  if($result)
    echo <<<abc
      <script>
        alert("$message");
    </script>
    <div style= "text-align: center; margin-top: 150px; font-size: 60px;">Thankyou for your valuable Feedback!</div>
    abc;
  else
  die("Something terrible happened. Please try again. ");
?>