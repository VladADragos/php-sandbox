<!DOCTYPE html>
<html lang="en">
<?php include './includes/_head.php'?>

<body>
    <?php include './includes/config.php' ?>
    <?php include './includes/functions.php' ?>
    
    
    <?php 
    $user = queryOne("users","user_name","vlad",$pdo);
    

    
if(isset($_POST['loginSubmit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(($username == $user->user_name)&&($password==$user->user_password)){
        setcookie('isLogedIn',true,time()+3600);
        $isLogedIn = true;
    }elseif($username=="" || $password==""){
        echo "<p> Username and passoword are required</p>";

    }else{
        echo "<p> Wrong username or passowrd</p>";
    }
    
}
?>
    <?php if($isLogedIn==true):?>
    <div class="container">
    <?php include './includes/_navbar.php'?>
    <?php include './includes/_main.php'?>
    </div>
<?php else:?>
<?php include 'login.php'?>
<?php endif?>






</body>
</html>