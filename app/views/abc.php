<?php
require_once('../dbconn.php');

$err = "";
$suc = "";

if (isset($_POST['signup_btn'])) {

    $mail = $_POST['mail'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $nic = $_POST['nic'];
    $role = "customer";

    $check1 = "SELECT * from user where email='$mail' OR nic='$nic' OR contact='$contact'";
    $confirm1 = mysqli_query($conn, $check1);

    if ($row = mysqli_fetch_assoc($confirm1)) {

        $err = "Already Registered user";
    } elseif ($pass1 != $pass2) {
        $err = "Password not matching";
    } elseif (empty($pass1) || empty($pass2) || empty($mail) || empty($fname) || empty($lname) || empty($address) || empty($contact) || empty($nic)) {

        $err = "Please fill all the fields";
    } elseif (strlen($pass1) < 5 || !preg_match("/[A-Z]/", $pass1) || !preg_match("/[a-z]/", $pass1) || !preg_match("/[0-9]/", $pass1)) {

        $err = "Require at least 5 characters, lower and upper case, and numbers";
    } elseif (!preg_match("/^[a-zA-Z]+$/", $fname) || !preg_match("/^[a-zA-Z]+$/", $lname)) {

        $err = "Only letters are valid in the name";
    } else {

        if (preg_match("/^0[0-9]{9}$/", $contact) && ctype_digit($contact)) {
            if (preg_match("/^[0-9]{9}V$/", $nic) || preg_match("/^[0-9]{12}$/", $nic)) {

                $pic = $_FILES['pic'];
                $directory = "../assets/";

                $images   = $_FILES["pic"]["name"];
                $size_check = getimagesize($_FILES["pic"]["tmp_name"]);
                $img_type  = strtolower(pathinfo($_FILES["pic"]["name"], PATHINFO_EXTENSION));
                $path  = $directory . basename($images);

                if ($size_check !== false) {
                    if ($_FILES["pic"]["size"] < 50000000) {
                        if ($img_type == 'jpg' || $img_type == 'jpeg' || $img_type == 'png') {
                            $output = move_uploaded_file($_FILES["pic"]["tmp_name"], $path);
                            if ($output) {
                                $query = "INSERT INTO user(email, password, address, contact, firstname, lastname, nic, role, photo)VALUES('$mail','$pass1','$address','$contact','$fname','$lname','$nic','$role','$path')";
                                $result = mysqli_query($conn, $query);

                                if ($result) {
                                    header("location:../login.php");
                                } else {
                                    $err = "Error occured";
                                }
                            }
                        }
                    }
                }
            } else {
                $err = "Inalid NIC";
            }
        } else {
            $err = "Invalid Phone Number";
        }
    }
}
