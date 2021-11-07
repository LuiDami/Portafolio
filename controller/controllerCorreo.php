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
    $email_emisor= $_POST["emailCorreo"];
    $mensaje= $_POST["mensajeCorreo"];
    $asunto=$_POST["asuntoCorreo"];

    $email_mio="luidami10@gmail.com";

    /**con este header se enviara el correo a mi correo */
    $header_para_recibir="From: $email_emisor"."\r\n";
    $header_para_recibir.="Reply-To: $email_emisor"."\r\n";
    $header_para_recibir.="X-Mailer: PHP".phpversion();

    /**con este headr responderemos al emisor */
    $header_para_enviar="From: $email_mio"."\r\n";
    $header_para_enviar.="Reply-To: $email_mio"."\r\n";
    $header_para_enviar.="X-Mailer: PHP".phpversion();

    if((!empty($name))&&(!empty($email_emisor))&&(!empty($mensaje))&&(!empty($asunto))){


        /**me envio correo a mi mismo */
        $mail= mail($email_mio,$asunto,$mensaje, $header_para_recibir);

        if($mail){
            $mensajeRespuesta="Buenas $name, he recibido tu mensaje \n me pondre en contacto con la mayor brevedad posible. \n Un saludo. \n Este mensaje es un envio automatico";
            $asuntoRespuesta="respuesta Luis Damian";

            /**envio correo respuesta */
            $mail= mail($email_emisor,$asuntoRespuesta,$mensajeRespuesta, $header_para_enviar);

            echo"Hola $name Gracias por contactarme \n He recibido tu mensaje me pondre en contaco con la mayor brevedad posible";
        }else{
            echo"El mensaje no ha podido ser enviado, puedes contactar con los iconos de la parte inferior";
        }

    }else{
        echo"El nombre, email, asunto y mensaje son datos requeridos para enviar el mensaje";
    }
    
 }else{
     echo"Algo a salido mal, no ha sido posible enviar el mensaje";
 }



?>