<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $contact = test_input($_POST["contact"]);
  $address = test_input($_POST["address"]);
  $problem = test_input($_POST["problem"]);

  $to = "chanasislam786@gmail.com";
  $subject = "New Problem Report";
  $message = "Name: $name\nContact: $contact\nAddress: $address\nProblem: $problem";
  $headers = "From: chanasislam786@gmail.com" . "\r\n" .
             "Reply-To: chanasislam786@gmail.com" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  mail($to, $subject, $message, $headers);
  echo "Thank you for your report!";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>