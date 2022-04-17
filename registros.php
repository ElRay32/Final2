<?php
session_start();
include_once "config/config.php";

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT * FROM user WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
            echo "$email - ¡Este e-mail ya existe!"; } 
            else{ 
        
         $ran_id = rand(time(), 100000000);
         $status = "Activo ahora";
         $encrypt_pass = md5($password);
         $insert_query = mysqli_query($conn, "INSERT INTO user (unique_id, fname, lname, email, password, status)
                                     VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$status}')");  
        if($insert_query){
        $select_sql2 = mysqli_query($conn, "SELECT * FROM user WHERE email = '{$email}'");
        if(mysqli_num_rows($select_sql2) > 0){
                $result = mysqli_fetch_assoc($select_sql2);
                $_SESSION['unique_id'] = $result['unique_id'];
                echo "success";
            } else { echo "¡Esta dirección de correo electrónico no existe!";}
            }   
        }
    } else{ echo "$email no es un email valido!";}
} else{ echo "¡Todos los campos de entrada son obligatorios!";}
?>