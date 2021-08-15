<?php

$host="localhost";
$user="minevers_root";
$password="user@mineversal.c0m";
$db="minevers_property";

$kon = mysqli_connect($host,$user,$password,$db);

if (!$kon) die("Koneksi gagal: ".mysqli_connect_error());

function msg($tambah) {
    
    global $kon;
    
    $name = htmlspecialchars($tambah['name']);
    $email = htmlspecialchars($tambah['email']);
    $phone = htmlspecialchars($tambah['telp']);
    $subject = htmlspecialchars($tambah['subject']);
    $message = htmlspecialchars($tambah['msg']);

    mysqli_query($kon, "INSERT INTO msg (name, email, phone, subject, message) VALUES ('$name','$email','$phone','$subject','$message')");

    return mysqli_affected_rows($kon);
}

function login($login) {
    
    global $kon;

    $username = strtolower(stripslashes(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING)));
    $password = mysqli_real_escape_string($kon, $login['password']);

    $query = mysqli_query($kon, "SELECT * FROM admin WHERE username = '$username'");

    if (mysqli_num_rows($query) === 1) {

        $row = mysqli_fetch_assoc($query);

        if(password_verify($password, $row["password"])) {
            $_SESSION['login']=true;
            $_SESSION['username']=$row["username"];
            $_SESSION['berhasil-login']=true;
        } else {
            $_SESSION['salahpas']=true;
        }
    } else {
        $_SESSION['salahuser']=true;
    }
}

function pass($pass) {
    
    global $kon;
    
    $id = mysqli_real_escape_string($kon, $pass['id']);
    $pass_lama = mysqli_real_escape_string($kon, $pass['password_lama']);
    $password = mysqli_real_escape_string($kon, $pass['password_baru']);
    $re_password = mysqli_real_escape_string($kon, $pass['konf_password_baru']);
    
    $cek = mysqli_query($kon, "SELECT password FROM admin WHERE id = '$id'");
    
    $row = mysqli_fetch_assoc($cek);

    if(password_verify($pass_lama, $row["password"])) {
        if ($password == $re_password) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            mysqli_query($kon, "UPDATE admin SET password='$password' WHERE id='$id'");
            $_SESSION['berhasil']=true;
            return mysqli_affected_rows($kon);
        } else {
            $_SESSION['salahkonf']=true;
            return false;
        }
    } else {
        $_SESSION['salahpas']=true;
        return false;
    }
}

?>