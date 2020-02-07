<?php
// Varios destinatarios
    $para = "";
    $para .= 'markfuentes2991@gmail.com';

// título
    $título = 'Prueba Email';

// mensaje
    $mensaje = '
    <html>
    <head>
    <title>Prueba de Email</title>
    </head>
    <body>
    <p>¡Este es un parrafo!</p>
    <table>
        <tr>
        <th>Nombre</th><th>Email</th>
        </tr>
        <tr>
        <td>Marco</td><td>markfuentes2991@gmail.com</td>
        </tr>
        <tr>
            <th>Mensaje</th>
        </tr>
        <tr>
        <td>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, repellat sint nulla impedit inventore nisi dolorum rem explicabo ea, doloribus ipsam numquam. Alias magni aliquam cumque fugiat nemo aperiam. Corporis!
                Blanditiis quas assumenda placeat minima repellendus officiis porro natus iste molestias magnam tenetur veritatis illum, pariatur est odit beatae? Voluptates voluptatem iste quas voluptatum id voluptas pariatur libero minima tenetur?
                Quas pariatur praesentium quibusdam temporibus numquam assumenda excepturi ut, commodi ipsa suscipit libero. Dignissimos odio, facere laboriosam architecto officiis totam eveniet ex et aliquam laudantium cumque eius recusandae esse similique.
            </p>
        </td>
        </tr>
    </table>
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
    //$success = mail($para, $título, $mensaje, $cabeceras);
    $success = true;
    if ($success) {        
        echo json_encode(array('success' => 1));
    }else{
        $errorMessage = error_get_last()['message'];
        echo json_encode(array('success' => 0, 'message' => $errorMessage));
    }
?>