<?php
$email=$_REQUEST['email'];
$name=$_REQUEST['name'];

if(empty($email))
{
echo "Please fill out all the fields"; 
}
else
{
 mail("cmo@spellgrab.in","Site message","Client","From:$email");
 echo"<script type='text/javascript'>alert('Your message has been sent,we will be in touch soon.');
   window.history.log(-1);
   </script>";
}
?>