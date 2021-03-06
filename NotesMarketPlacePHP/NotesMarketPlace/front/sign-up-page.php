<?php
include "db.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail_exist = false;
$mail_sent = false;
$message = "Email already exists!";
$password_match = true;
$length_check = true;

if (isset($_POST['submit'])) {
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conform_psd = $_POST['conform_psd'];

    $email_checker = mysqli_query($con, "SELECT * FROM users WHERE emailid='$email'");
    $email_count = mysqli_num_rows($email_checker);

    if ($password != $conform_psd) {
        $password_match = false;
    }
    if (strlen($password) < 6) {
        $length_check = false;
    }
    if ($email_count == 0 && $password_match && $length_check) {
        $query = "INSERT INTO users(roleid,firstname,lastname,emailid,password,isemailverified,createddate,isactive) VALUES(1,'$firstName','$lastName','$email','$password',0,NOW(),1)";
        $result = mysqli_query($con, $query);

        //userid getter
        $id = mysqli_insert_id($con);

        //mail function
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $config_email = 'raj69gohil@gmail.com';
            $mail->Username = $config_email;
            $mail->Password = '123raj321';

            // Sender and recipient settings
            $mail->setFrom($config_email, 'NotesMarketPlace');

            $mail->addAddress($email, $firstName . $lastName);
            $mail->addReplyTo($config_email, 'NotesMarketPlace');

            $mail->IsHTML(true);
            $mail->Subject = "Email verification";
            $mail->AddEmbeddedImage('images/blue-logo.png', 'logo');

            $mail->Body = "<table>
            <tr>
                <td style='height: 75px;'><img src='cid:logo' alt='NMP-logo'></td>
            </tr>
            <tr>
                <td
                    style='color: #6255a5; font-size: 26px; font-weight: 600; line-height: 30px; height: 50px;'>
                    Email Verification</td>
            </tr>
            <tr>
                <td style='height: 30px; font-size: 18px; color: #333333;font-weight: 400;'>
                <php
                <b>Dear $firstName  $lastName,</b>
                </td>
            </tr>
            <tr>
                <td style='font-size: 16px;font-weight: 400; height: 25px; color: #333333;'>
                    Thanks for signing up</td>
            </tr>
            <tr>
                <td style='font-size: 16px;font-weight: 400; height: 25px; color: #333333;'>
                    Simply click below for email verification.</td>
            </tr>
            <tr>
                <td style='height: 50px;'><a href='http://localhost/NotesMarketPlace/front/email-checker.php?id=$id'><button
                style='width: 300px;background-color: #6255a5;height: 35px;border-radius: 3px;font-size: 18px; border:transparent;text-transform: uppercase;color: #fff;'>verify
                email address</button></a></td>
            </tr>
        </table>";

            $mail->AltBody = '';

            $mail->send();
            $mail_sent = true;
        } catch (Exception $e) {
            echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    if ($email_count > 0) {
        $mail_exist = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!--Meta tags-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0 ,user-scalable=no">

    <!--Title-->
    <title>Notes Marketplace</title>

    <!--Fevicon-->
    <link rel="icon" href="images/favicon.ico">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!--Font-Awesome-->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!--Custom css-->
    <link rel="stylesheet" href="css/style.css">

    <!--Responsive css-->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <div id="home-background">
        <div id="login-with-img">
            <!--Grid-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-2 col-0"></div>
                    <div id="logo" class="col-lg-4 col-md-6 col-sm-8 col-12 text-center signup-logo">
                        <img src="images/top-logo.png" alt="White-logo" title="Website White Logo"
                            class="img-responsive">
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-2 col-0"></div>
                    <div class="col-lg-4 col-md-3 col-sm-2 col-0"></div>
                    <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                        <!--Login form -->
                        <div id="log-in" class="signup-background">
                            <!--Form-->
                            <form action="sign-up-page.php" method="POST">
                                <h2 class="text-center heading-login">
                                    Create an Account
                                </h2>
                                <p id="sign-up-p" class="text-center">
                                    Enter your details to signup
                                </p>
                                <div id="account-success" class="text-center">
                                    <?php
                                    if ($mail_sent)
                                        echo "<span> Your account has been successfully created</span>";
                                    ?>
                                </div>
                                <div class="form-group signup-form">
                                    <label>First Name</label>
                                    <input type="text" name="fname" class="form-control signup-input" id="fname-signup"
                                        placeholder="Enter your first name" required>
                                </div>
                                <div class="form-group signup-form">
                                    <label>Last Name</label>
                                    <input type="text" name="lname" class="form-control signup-input" id="lname-signup"
                                        placeholder="Enter your last name" required>
                                </div>
                                <div class="form-group signup-form">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control signup-input" id="email-signup"
                                        placeholder="Enter your email address" required>
                                </div>
                                <div class="form-group signup-block signup-form">
                                    <label>Password</label>
                                    <img src="images/eye.png" toggle="#password-signup"
                                        class="pull-right toggle-password" alt="View">
                                    <input type="password" name="password" class="form-control signup-input"
                                        id="password-signup" placeholder="Enter your password" required>
                                    <div class="correct-email">
                                        <?php
                                        if (!$password_match)
                                            echo "The Password doesn't match!";
                                        else if (!$length_check) {
                                            echo "The Password Length Should be more then 6 characters";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group signup-block signup-form">
                                    <label>Confirm Password</label>
                                    <img src="images/eye.png" toggle="#re-password-signup"
                                        class="pull-right toggle-password" alt="View">
                                    <input type="password" name="conform_psd" class="form-control signup-input"
                                        id="re-password-signup" placeholder="Re-enter your password" required>
                                </div>
                                <div class="general-btn">
                                    <button id="signup-btn" type="submit" name="submit"
                                        class="btn btn-primary btn-block">sign
                                        up</button>
                                </div>
                                <div class="text-center" id="sign-up">
                                    Already have an account?<a href="log-in-page.php" title="click to Sign up">Login
                                    </a>
                                    <div id="email-exist">
                                        <?php
                                        if ($mail_exist) {
                                            echo "<br><h3>" . $message . "</h3>";
                                        }
                                        ?>
                                    </div>
                                    <div id="thanks-signup">
                                        <?php
                                        if ($mail_sent) {
                                            echo "<br><h3>" . "Thank you for Signup.<br>Please verify the email " . "<span>" . $email . "</span>" . " via clicking on the link we sent you via email. " . "</h3>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-2 col-0"></div>
                </div>
            </div>
        </div>
    </div>

    <!--jquery js-->
    <script src="js/jquery/jquery.min.js"></script>

    <!--bootstrap js-->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!--Custom Script-->
    <script src="js/script.js"></script>

</body>

</html>