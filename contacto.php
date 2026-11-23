<?php
//Comprobamos que se haya presionado el boton enviar
if(isset($_POST['enviar'])){
//Guardamos en variables los datos enviados
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
 
///Validamos del lado del servidor que el nombre y el email no estén vacios
    if($nombre == ''){
        echo "Debe ingresar su nombre";
    }
    else if($email == ''){
        echo "Debe ingresar su email";
    }
    else if($telefono == ''){
        echo "Debe ingresar su teléfono";
    }
    else if($mensaje == ''){
        echo "Debe ingresar un mensaje";
    }
    else{
        $para = "javier.gonzalez.cases@gmail.com";//"anacasesrobres@gmail.com";//Email al que se enviará
        $asunto = "Consulta Tintoreria";//Puedes cambiar el asunto del mensaje desde aqui
        //Este sería el cuerpo del mensaje
        $mensaje = "
        <table border='0' cellspacing='3' cellpadding='2'>
        <tr>
        <td width='30%' align='left' bgcolor='#f0efef'><strong>Nombre:</strong></td>
        <td width='80%' align='left'>$nombre</td>
        </tr>
        <tr>
        <td align='left' bgcolor='#f0efef'><strong>E-mail:</strong></td>
        <td align='left'>$email</td>
        </tr>
        <tr>
        <td width='30%' align='left' bgcolor='#f0efef'><strong>Teléfono:</strong></td>
        <td width='70%' align='left'>$telefono</td>
        </tr>
        <tr>
        <td width='30%' align='left' bgcolor='#f0efef'><strong>Ciudad:</strong></td>
        <td width='70%' align='left'>$ciudad</td>
        </tr>
        <tr>
        <td width='30%' align='left' bgcolor='#f0efef'><strong>País:</strong></td>
        <td width='70%' align='left'>$pais</td>
        </tr>
        <tr>
        <td align='left' bgcolor='#f0efef'><strong>Comentario:</strong></td>
        <td align='left'>$mensaje</td>
        </tr>
        </table>
        ";

        //Cabeceras del correo
        $headers = "MIME-Version: 1.0" . "\r\n"; //Quien envia?
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: $nombre <$email>';

        //Comprobamos que los datos enviados a la función MAIL de PHP estén bien y si es correcto enviamos
        if(mail($para, $asunto, $mensaje, $headers)){
            /*echo "Su mensaje se ha enviado correctamente";
            echo "<br />";
            echo '<a href="contacto.html">Volver</a>';*/
			echo "Correo enviado";
            header("location: contacto.html");
        }
		
		header("location: contacto.html");
    }
}
?>