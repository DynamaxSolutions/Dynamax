<?php
include_once('process/__constants.php');
include_once('process/_db_query.php');
include_once('../process/_user.php');
require '/var/www/html/jacinter-online.com_test/PHPMailer-master/PHPMailerAutoload.php';

//$sql = "SELECT name,userId, pass_raw, email FROM student_reg_tbl";//die();
//$sel = $mysqli->query($sql);
//$res = $sel->fetch_assoc();
//die();
$userEmail = 'pssolanki1903@gmail.com';
$name = 'PANKHURI SINGH SOLANKI';
$user = '8001595';
$pass = '8HDLBKQE1B';

//$i=0;


$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.falconide.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'runtimefal';                 // SMTP username
$mail->Password = '4ae$64c47657b';                          // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                     // TCP port to connect to 
$mail->SMTPOptions = array(
'ssl' => array(
	'verify_peer' => false,
	'verify_peer_name' => false,
	'allow_self_signed' => true
)
); 


//while($rValue = $sel->fetch_array()){
//           
$mail->setFrom('helpdesk@jac-nts.com', 'Help Desk'); 		
//$mail->addAddress('chandan@runtime-solutions.com');
$mail->addAddress($userEmail);
$mail->isHTML(true);  
$mail->Subject = 'JAC NTS Registration';
$mail->Body = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta content="telephone=no" name="format-detection" />
    <title>JAC NATIONAL TALENT SEARCH EXAMINATION</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <style type="text/css" media="screen">
        /* Linked Styles */
        
        body {
            padding: 0 !important;
            margin: 0 !important;
            display: block !important;
            background: #ffffff;
            -webkit-text-size-adjust: none;
			
        }
        
        a {
            color: #00b8e4;
            text-decoration: underline
        }
        
        h3 a {
            color: #1f1f1f;
            text-decoration: none
        }
        
        .text2 a {
            color: #ea4261;
            text-decoration: none
        }
        /* Campaign Monitor wraps the text in editor in paragraphs. In order to preserve design spacing we remove the padding/margin */
        
        p {
            padding: 0 !important;
            margin: 0 !important
        }
		table {border: 1px solid #000; max-width:800px; margin:0 auto;}
	    table tr {padding: 10px; display: block;}
		table tr td {font-size:17px;}
    </style>
</head>

<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; background:#ffffff; -webkit-text-size-adjust:none">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#fffaf6">
        <tr>
			<td>Dear <b>'.$name.'</b>,</td>
		</tr>
		<tr>
			<td>Thank you for registering for the NATIONAL TALENT SEARCH (NTS) EXAMINATION 2018-19 online application system for the state of JHARKHAND.</td>
		</tr>
		<tr>
			<td>Your User ID to logging into the NTS Examination 2018-19 portal is <strong>'.$user.'</strong><br></td>
		</tr>
		<tr>
			<td>Your Password to logging into the NTS Examination 2018-19 portal is <strong>'.$pass.'</strong><br></td>
		</tr>
		<tr>
			<td><br><b style="text-decoration:underline;">Next Step :</b></td>
		</tr>
		<tr>
			<td>In order to complete and submit your application online for NTS Examination 2018-19, click on the link below and login using your login Id & password.<br></td>
		</tr>
		<tr>
			<td>Link : <a href="'.HOME.'existing-user.php">Click here to login</a></td>
		</tr>
    </table>

</body>

</html>';

	//var_dump($isSend);
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }	
//}
//echo 'Total mail sent'.$i;
//die();

?>