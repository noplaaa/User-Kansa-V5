<?php
error_reporting(0);
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifikasi reCAPTCHA dengan Google reCAPTCHA API
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $secret = '6LcIEVooAAAAANsZP4EP4JrnAWT-NLY0kHOt29Nn';
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];

    // Kumpulkan data untuk permintaan POST
    $postData = http_build_query([
        'secret' => $secret,
        'response' => $response,
        'remoteip' => $remoteip,
    ]);

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => $postData,
        ],
    ];

    $context = stream_context_create($options);
    $verifyResponse = file_get_contents($url, false, $context);
    
    // Konversi hasil verifikasi menjadi objek JSON
    $responseData = json_decode($verifyResponse);
    
    if ($responseData && $responseData->success) {
        include "database.php";
        $username = $_POST['username'];
        $password = md5($_POST['pass']);
        $SQL = mysqli_query($conn,"SELECT * FROM user WHERE Nama_User='$username' AND Pass='$password'");
        $data = mysqli_fetch_assoc($SQL);

        if($data['Rolenya'] == "User"){
            $_SESSION['ID_User'] = $data['ID_User'];
            $_SESSION['Nama_User'] = $username;
            $_SESSION['Rolenya'] = "User";
            header("location:dashboard.php");
        } else if($data['Rolenya'] == "Admin"){
            $_SESSION['Nama_User'] = $username;
            $_SESSION['Rolenya'] = "Admin";
            header("location:Login.php");
        } else {
            header("location:Incorrect_Password.php"); //incorrect input
        }
    } else {
        header("location:Incorrect_Recaptcha.php"); //reCAPTCHA failed
    }
}
?>
