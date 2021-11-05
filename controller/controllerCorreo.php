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
    $name= $_POST["nombreCorreo"];
    $email= $_POST["emailCorreo"];
    $mensaje= $_POST["mensajeCorreo"];
    $asunto="prueba";
    $header="From: luidami10@gmail.com"."\r\n";
    $header="Reply-To: luidami10@gmail.com"."\r\n";
    $header="X-Mailer: PHP".phpversion();
    $mail= mail($email,$asunto,$mensaje,$header);
    if($mail){
        echo"mensaje enviado correctamente";
    }else{
        echo"el mensaje no ha podido ser enviado";
    }
    
 }


?>