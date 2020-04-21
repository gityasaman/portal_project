<?php
    if($_POST){
        $pname=$_POST['pname'];
        $clg=$_POST['clg#'];
        $clgname=$_POST['clgname'];
        $city=$_POST['city'];
        $server='localhost';
        $dbname='portal_project';
        $pdo=new PDO("mysql:host=$server;dbname=$dbname",'root','');
        $query="INSERT INTO college (pname,clg,city,clgname) VALUES 
        ('$pname','$clg','$city','$clgname')";
        $res=$pdo->prepare($query);
        $res->execute();
        

    }
?>



<html>
    <head>
        <h1>
            Add College:
        </h1>
    </head>
    <body>
        <form method="post">
            College number:
            <br/>
            <input name="clg#" type="text">
            <br/>
            College name:
            <br/>
            <input name="clgname" type="text">
            <br/>
            city:
            <br/>
            <input name="city" type="text">
            <br/>
            college head professor:
            <br/>
            <input name="pname" type="text">
            <br/>
            <input type="submit">
        </form>
    </body>
</html>