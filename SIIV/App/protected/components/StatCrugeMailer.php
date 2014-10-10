<?php
/**
    1. copiar esta clase en protected/components/MiCrugeMailer.php
    2. configurar SwiftMailer en protected/config/main.php
        'components'=>array(
        'swiftmailer' => array( 'class'=>
            'application.extensions.swiftmailer.SwiftMailer' ),
    3. configurar el componente crugemailer en config/main
        'components'=>array(
            'crugemailer'=>array(
            'class' => 'application.components.MiCrugeMailer',
            'mailfrom' => 'alguncorre@gmail.com',
            'subjectprefix' => 'Tu Aplicacion',
            'bcc'=>'copiapara@gmail.com',
            'smtp_user' => 'cuenta@gmail.com',
            'smtp_pwd' => 'clavede cuenta@gmail.com',
        ),
        
    uso:
    
    Yii::app()->crugemailer->nuevoPedido(
        "123","zapato","christiansalazarh@gmail.com","Christian S.");

*/
class StatCrugeMailer extends CrugeMailer {

    public $smtp_user;
    public $smtp_pwd;

    public function envioCorreo() {
        // correo principal del encargado de RRHH
            // para recibir anomalias.
            $to = "jagorax@gmail.com";  

            $asunto = "qrgfwe";

            $this->sendEmail($to,$asunto);
    }
} 