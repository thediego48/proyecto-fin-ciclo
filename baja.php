<?php
    include "config.php";
    session_start();
    $mail= $_SESSION['validado'];
    //$sql= "DELETE FROM usuarios WHERE email = $mail";
    //$result= mysqli_query($conn,$sql);
    //$nombreIndex= mysqli_fetch_array( $result );

    $borrar = $conn->prepare("DELETE FROM usuarios WHERE email='$mail'");

    $borrar->execute();

    session_destroy();
    header("location: login.php");
    //exit();


    ?>