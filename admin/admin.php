<?php 

require_once ('./php/config.php');
session_start();
if (isset($_POST["login"])){
    $login =$_POST["username"];
    $password =$_POST["password"];
    
    $sql = $pdo->prepare("SELECT id,username FROM users WHERE username=:username AND password=:password");
    
    $sql->execute(array('username' => $login,'password' => $password));
    $array=$sql->fetch(PDO::FETCH_ASSOC);
    if($array["id"] == 75){
        $_SESSION['username']=$array["username"];   
        header('Location:admin.php');
    }
    else{
        header('Location:main.php');
    }

}

?>