<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "obrm770@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "טופס חדש מאתר לורם פיננסים", $message . ' - ' . $phone, "מ:" . $email);
    
    // Location
    header('Location: https://obrm.github.io/flex-website/success.html');
  }