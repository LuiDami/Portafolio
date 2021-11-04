<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerIndex
 *
 * @author Luis Damian
 * 
 */


 if(isset($_POST["emailCorreo"])){
    $name= $_POST["nameCorreo"];
    $email= $_POST["emailCorreo"];
    $mensaje= $_POST["mensajeCorreo"];
    $asunto="prueba";
    $header="From: luidami10@gmail.com"."\r\n";
    $header="Reply-To: luidami10@gmail.com"."\r\n";
    $header="X-Mailer: PHP".phpversion();
    $mail= mail($email,$asunto,$mensaje,$header);
    if(true){
        echo"mensaje enviado correctamente";
    }
    
 }


?>