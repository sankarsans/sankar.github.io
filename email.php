<?php



$name = $_REQUEST['contactName'];
$number = $_REQUEST['contactMessage'];
$message = $_REQUEST['contactSubject'];
// $drop = $_REQUEST['select'];
$email      = $_REQUEST['contactEmail']; 

$txtmessage = "<html><body><p>I'm ".$name.","."</p>";
$txtmessage .= "<p>My work Email is ".$email."</p>";
$txtmessage .= "<p>YMessage ".$number."</p>";
if($drop != '1'){
    if($drop == 12){
        $dropms = "Mobile App UI/UX Design";
    }
    if($drop == 3){
        $dropms = "Web App UI/UX Design";
    }
    if($drop == 4){
        $dropms = "Web Design"; 
    }
    if($drop == 5){
        $dropms = "Branding"; 
    }
    
// $txtmessage .= "<p>What I'm looking for - ".$dropms."</p>";
}

$txtmessage .= "<p>If I were to decide what to do, I'd say"."</p>";
$txtmessage .= "<p>".$message."</p></body></html>";



$to = "sssankarsam@gmail.com";
$subject = 'sam message'; 
$message = $txtmessage; 
$fromname = "sankar";
$headers = 'From: hello@goprotoz.com' . "\r\n" . 
    'Reply-To: hello@goprotoz.com' . "\r\n" . 
    'X-Mailer: PHP/' . phpversion(); 
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
if(mail($to, $subject, $message, $headers)){ 

 echo '<script language="javascript">';

echo 'window.location.href="thank-you.html";';
echo '</script>';
}else{
     echo '<script language="javascript">';

echo 'window.location.href="thank-you.html";';
echo '</script>';
}
?>
