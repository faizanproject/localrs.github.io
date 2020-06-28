<?php
// variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

//check input fields
if (empty($name) || empty($email) || empty($message))
{
	   echo "Please fill all the fields";
}
else
{
   mail("faizan1601it016@gmail.com","RS Designing Message", $message , "From: $name <$email>");
   echo "<script type='texr/javascript'>alert('your message send successfully');
  window.history.log(-1);
   </script>";
}
?>