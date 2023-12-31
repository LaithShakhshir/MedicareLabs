<?php

if(isset($_POST['send_op'])){
    $n=$_POST['name'];
    $el=$_POST['email'];
    $su=$_POST['sub'];
    $ms=$_POST['message'];
    $mailTo="medicarelab1995@gmail.com";
    $headers="Form:".$el;
    $txt="You have received an e-mail form".$n.".\n\n".$ms ;
    mail($mailTo,$su,$txt,$headers);
    @$db =new mysqli('localhost', 'clinic', '123456', 'clinic');
    $query1="INSERT INTO contactus ( `Name`, `Emal`, `message`) VALUES ('".$n."', '".$el."', '".$ms."');";
    $res=$db->query($query1);
    header('location:../ind.php');
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="contactus.css" />
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
</head>
<body>
<div class="container">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
        <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
               Contact US You Won't Regret. You Will Get the Care That You Want. We Have Professional Doctors With More Than 15 Year of Experience.
            </p>

            <div class="info">
                <div class="information">
                    <img src="../img/location.png" class="icon" alt="" />
                    <p>Nablus,Ramallah , Hebron , Tulkarm</p>
                </div>
                <div class="information">
                    <img src="../img/email.png" class="icon" alt="" />
                    <p>    $mailTo="medicarelab1995@gmail.com";
                    </p>
                </div>
                <div class="information">
                    <img src="../img/phone.png" class="icon" alt="" />
                    <p>1700 110 111</p>
                </div>
            </div>

            <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <?php
        $msg="";
        if(isset($_GET['error'])){
            $msg="Please Fill in the Blanks";
            echo'<div class="alert alert-danger">'.$msg.'</div>';
        }
        if(isset($_GET['success'])){
            $msg="Your Message Has Been Sent";
            echo'<div class="alert alert-danger">'.$msg.'</div>';
        }
        ?>

        <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            <form action="contact.php" method="post" >
                <h3 class="title">Contact us</h3>
                <div class="input-container">



                    <input type="text" name="name" class="input" />
                    <label for="">Username</label>
                    <span>Username</span>
                </div>
                <div class="input-container">
                    <input type="email" name="email" class="input" />
                    <label for="">Email</label>
                    <span>Email</span>
                </div>
                <div class="input-container">
                    <input type="tel" name="sub" class="input" />
                    <label for="">Subject</label>
                    <span>Subject</span>
                </div>
                <div class="input-container textarea">
                    <textarea name="message" class="input"></textarea>
                    <label for="">Message</label>
                    <span>Message</span>
                </div>
                <input type="submit" name="send_op" value="Send" class="btn" />
            </form>
        </div>
    </div>
</div>

<script src="contactus.js"></script>
</body>
</html>
