<?php
if (isset($_REQUEST['email']))
{
  $domain='carcooper.github.io';
  $from='carcooper.github.io';
  $name = $_REQUEST['name1'] ;
  $add = $_REQUEST['add'] ;
  $phone = $_REQUEST['phone'] ;
  $exp = $_REQUEST['exp'] ;
  $attachment = $_REQUEST['attachment'] ;
    $subject = 'Massage recieved from Pearl : '.$domain.'';
    $body = $email.'

    The person that contacted you is : '.$name.'

    |------------------Full Details--------------------|

   Name:            '.$name.'
     Address:          '.$add.'
     Phone:          '.$phone.'
     Experience:         '.$exp.'
     Attachment:         '.$attachment.'

    |--------------------End---------------------------|'; 
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank you for your feedback. We will contact you shortly')
    window.location.href='http://www.pearlgroup.asia';
    </SCRIPT>");  

mail("rih281293@gmail.com",$from, $subject, $body);

// Check, if message sent to your email 
// display message "We've recived your information"

}
else
{
echo "Try again";
}
?>`
