<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "com");

if (!$conn) {
    echo "Connection Failed";
}

// // Database Credentials
//     define('DB_HOST', 'localhost');
//     define('DB_DATABASE', 'loginsys');
//     define('DB_USERNAME', 'root');
//     define('DB_PASSWORD', '');

//     // Email Credentials
//     define('SMTP_HOST', 'smtp.gmail.com');
//     define('SMTP_PORT', 465);
//     define('SMTP_USERNAME', 'mdvh28@gmail.com');
//     define('SMTP_PASSWORD', 'lwtmegvsvdvafuds');
//     define('SMTP_FROM', 'noreply@mydomain.com');
//     define('SMTP_FROM_NAME', 'mau');
