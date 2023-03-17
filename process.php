<?php
session_start();
require_once 'database.php';
if(isset($_POST['save'])){
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) 
    && isset($_POST['city']) ){
        if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['city'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $_SESSION['status'] = 'Email invalide';
                header('Location:http://inserdataindatabase.test/ ');

            }
            $city = $_POST['city'];
            $select = "SELECT * from user WHERE email='$email'";
            $result = mysqli_query($conn,$select);
            $present = mysqli_num_rows($result);
            if($present>0){
                $row =mysqli_fetch_assoc($result);
                if ($email == isset($row['email'])) {
                    $_SESSION['status']= "Addresse Email deja existane!!";
                    header('Location:http://inserdataindatabase.test/ ');
                }
            }else{
            $sql = "INSERT INTO user (firstname,lastname,email,city) VALUES ('$firstname','$lastname','$email','$city')";
            if(mysqli_query($conn, $sql)){
                $to      = $email;
                $subject = 'Enregistrement réussit!';
                $message = 'Bienvenue'.$firstname;
                $headers = 'From: jeffrygayvynnsomeminko@gmail.com';
                mail($to, $subject, $message, $headers);
                header('Location:http://inserdataindatabase.test/ ');
                
            }else{
                echo "Error: " . $sql . " " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }


        }else{
            echo " champ Obligatoire";
        }

    }
}
