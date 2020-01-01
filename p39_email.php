<?php

$to = $_REQUEST["txt_to"];
$cc = $_REQUEST["txt_cc"];
$bcc = $_REQUEST["txt_bcc"];
$sub = $_REQUEST["txt_sub"];
$mess = $_REQUEST["txa_message"];


$frm = "pacha60@gmail.com";

$head = "From:".$frm;
/*
syntax: mail(to,subject,message,headers,parameters);
*/

mail($to,$sub,$mess,$head);

echo "Mail Sent Successfully \r\n <a href='p39_email.html'> Click Here </a> to send another Mail";


?>
