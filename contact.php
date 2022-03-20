<?php



session_start();



//require_once '../include/connection.php';







use PHPMailer\PHPMailer\PHPMailer;



use PHPMailer\PHPMailer\Exception;







require 'PHPMailer-master/src/Exception.php';



require 'PHPMailer-master/src/PHPMailer.php';






$name = $_POST['name'];

$email = $_POST['email'];

$number = $_POST['number'];

$subject = $_POST['subject'];

$message = $_POST['message'];
// print_r($data); die();





//if($_SERVER['REQUEST_METHOD']=='POST') { 



//    



//    if($fld_name != '' || $fld_phone != '' || $fld_email != '' || $fld_message != ''){



        



//        $data = [			

//            'name' => $name,

//            'email' => $email,

//            'phone' => $phone,

//            'subject' => $subject,

//            'message' => $message,

//            'is_active' => "1",

//        ];

//

////

//

//        $sql = "INSERT INTO pwn_tbl_contact (name,email,phone_number,msg_subject,message,is_active) VALUES (:name,:email,:phone,:subject,:message,:is_active)";

//

//        $stmt= $db->prepare($sql);

//

//        $sql_excute=$stmt->execute($data);

//

//

//

//        $product_id = $db->lastInsertId();

//

//

//

//        $count = $stmt->rowCount();

//

////        print_r($product_id); die();

//

//        if($product_id > '0'){



			 if($name != '' || $number != '' || $email != '' || $message != ''){



             $from = "dynamaxs";



//                             $to = "mypropertywale64@gmail.com";

                             $to = "varunrsurti@gmail.com";



                             $subject = "New user is interested";



                             $messageB = "<p><b>A new user is interested please find below details for the same:</b></p>



                                             <table border='0' cellpadding='5' cellspacing='5'>



                                                 <tr>



                                                   <td><p>Name:".$name."</p>



                                                   </td>



                                                 </tr>



                                                 <tr>



                                                   <td><p>Mobile number:".$phone."</p></td>



                                                 </tr>



                                                 <tr>



                                                   <td><p>Email:".$email."</p>



                                                   </td>



                                                 </tr>



                                                 <tr>



                                                   <td><p>Message:".$message."</p></td>



                                                 </tr>



                                               </table>";



                             $headers  = 'MIME-Version: 1.0' . "\r\n";



                             $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";



                             $headers .= "From:" . $from;



                             mail($to,$subject,$messageB, $headers);     



                             header("Location:index.html#contact-us");
                              echo" form submitted successfully";




                     }else{



                          echo json_encode(201);



                     }







          



?>