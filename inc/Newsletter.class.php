<?php
class Newsletter
{
    private static $email;
    private static $datetime = null;

    private static $valid = true;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function register($email) {
        if (!empty($_POST)) {
            self::$email    = $_POST['signup-email'];
            self::$datetime = date('Y-m-d H:i:s');

            if (empty(self::$email)) {
                $status  = "error";
                $message = "The email address field must not be blank";
                self::$valid = false;
            } else if (!filter_var(self::$email, FILTER_VALIDATE_EMAIL)) {
                $status  = "error";
                $message = "You must fill the field with a valid email address";
                self::$valid = false;
            }

            if (self::$valid) {
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $existingSignup = $pdo->prepare("SELECT COUNT(*) FROM signups WHERE signup_email_address='$email'");
                $existingSignup->execute();
                $data_exists = ($existingSignup->fetchColumn() > 0) ? true : false;

                if (!$data_exists) {
                    $sql = "INSERT INTO signups (signup_email_address, signup_date) VALUES (:email, :datetime)";
                    $q = $pdo->prepare($sql);

                    $q->execute(
                        array(':email' => self::$email, ':datetime' => self::$datetime));

                    if ($q) {
                        $status  = "success";
                        $message = "</br></br>&check; You have been <strong>successfully subscribed</strong>.</br><meta http-equiv='Refresh' content='5;url=subscribe.php'>";
                    } else {
                        $status  = "error";
                        $message = "</br> </br><strong>Oops! </strong> 
                        Something went wrong, please try again.</br><meta http-equiv='Refresh' content='5;url=subscribe.php'>";
                    }
                } else {
                    $status  = "error";
                    $message = "</br> </br>&check; <strong>This email</strong> is already subscribed.</br><meta http-equiv='Refresh' content='5;url=subscribe.php'>";
                }
            }

            $data = array(
                'status'  => $status,
                'message' => $message
            );

            echo json_encode($data);

            Database::disconnect();
        }
    }
}