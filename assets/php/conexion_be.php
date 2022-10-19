<?php
//aqui creamos la conexion con la base de datos

    //guardamos la conexion en una variable
    //como usaremos un servidor local ponemos localhost, especificamos nombre de usuario y la pass como no tengo se pone asi
    //aqui abrimos la caja fuerte (solo es referencia) ahora abrimos la tabla
    $conexion=mysqli_connect("localhost","root","","usuarios");//conexion a la abse de datos

    /*if($conexion){//verificamos la conexion
        echo 'conectado exitosamente a la base de datos';
    }else{
        echo 'no se ha podido realizar la conexion';
    }*/

    

?>