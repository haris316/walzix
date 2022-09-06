<?php 
require('connection.inc.php');
require('functions.php');
$fname=get_safe_value($con,$_POST['fname']);
$email=get_safe_value($con,$_POST['email']);
$number=get_safe_value($con,$_POST['number']);
$company=get_safe_value($con,$_POST['company']);
$project=get_safe_value($con,$_POST['project']);
$subject=get_safe_value($con,$_POST['subject']);
$added_on=date('Y-m-d h:i:s');

mysqli_query($con,"insert into contactus(fname,email,number,company,project, subject, added_on) values('$fname','$email','$number','$company','$project','$subject','$added_on')");
echo "Thank you for contacting us!";
?>