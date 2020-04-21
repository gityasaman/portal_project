<?php
    $def_username="admin";
    $def_password="admin";
    if($_POST){
        if(isset($_POST['username'])){
            if($def_password == $_POST['password']  && $def_username == $_POST['username'] ){
                header("location:admin_dashboard.php");
            }else{
                echo "wrong password or username";
            }
        }
        
    }
?>


<html>
    <head>
        <title> Admin Login </title>
        <h1>
        Admin Login
        </h1>
    </head>
    <body>
        <form method="post">
            Username:
            <input type="text" name="username">
            <br/>
            <br/>
             Password:
            <input type="password" name="password">
            <br/>
            <br/>
            <input type="submit" name="submit">
        </form>
    </body>
</html>