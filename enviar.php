<!DOCTYPE html>
<html>
      <head>
            <link rel="stylesheet" href="./css/
                                         stilo.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width", initial-scale=1.0>
           <title>ROMARH</title>
      </head>
    
     <body>

      
    <center>
        <?php 
$myemail = 'daniel4dl17gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
       <h3><a href="index.html">Regresar</a></h3>
      
         </center>
         
    
    </body>






</html