<?php
header('Access-Control-Allow-Origin: *');
// Varios destinatarios
    $para = "";
    $para .= 'markfuentes2991@gmail.com';

// título
    $título = 'Nuevo Email';

//variables
$nombre = isset($_POST["nombre"])? $_POST["nombre"]: "NA";
$email = isset($_POST["email"])? $_POST["email"]: "NA";
$tel = isset($_POST["tel"])?$_POST["tel"]: "NA";
$msg = isset($_POST["msg"])?$_POST["msg"]: "NA";

// mensaje
    $mensaje = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .header{
                width: 100%;
                background-color: #007BFF;            
                text-align: center;
                color: #FFF;
                vertical-align: middle;
            }
            .body{
                position: relative;
                width: 70%;
                margin: auto;
                border: 1px solid black;
                padding: 5%;
            }
            table{
                width: 100%;
            }
            th, td{
                text-align: justify;
            }
            h1{
                text-align: center;
            }
            #logoImg{
                width: 100px;
                height: 100px;            
                border-radius: 50%;
                border: 2px solid #197BFF;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>Médica Integral Sur</h1>
            <img src="img/logo/LogoMedicaIntegral.jpg" alt="" id="logoImg">
        </div>
        <div class="body">
            <h1>
                Nuevo Email                    
            </h1>
            <table>
                <tr>
                    <th>Nombre</th>                                
                </tr>
                <tr>
                    <td>
                        '.$nombre.'
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>'.$email.'</td>
                </tr>
                <tr>
                    <th>Teléfono</th>
                </tr>
                <tr>                                
                    <td>'.$tel.'</td>
                </tr>
            </table>
            <h3>Mensaje:</h3>
            <p>
                '.$msg.'
            </p>
        </div>
    </body>
    </html>
    ';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";    
    $cabeceras .= 'Reply-To: markfuentes1992@hotmail.com'. "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
    $cabeceras .= 'From: Medica Integral Sur <medicaIntegralSur@gmail.com>' . "\r\n";

// Enviarlo
    $success = mail($para, $título, $mensaje, $cabeceras);
    $success = true;
    if ($success) {        
        echo json_encode(array('success' => 1));
    }else{
        $errorMessage = error_get_last()['message'];
        echo json_encode(array('success' => 0, 'message' => $errorMessage));
    }
?>