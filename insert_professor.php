<?php
    if($_POST){
        $pname=$_POST['pname'];
        $office=$_POST['office'];
        $esp=$_POST['esp'];
        $degree=$_POST['degree'];
        $clg=$_POST['clg#'];
        $server='localhost';
        $dbname='portal_project';
        $pdo=new PDO("mysql:host=$server;dbname=$dbname",'root','');
        $query="INSERT INTO professor_tbl (pname,office,esp,degree,clg) VALUES 
        ('$pname','$office','$esp','$degree','$clg')";
        $res=$pdo->prepare($query);
        $res->execute();

    }
?>



<html>
    <head>
        <h1>
            Add Professor:
        </h1>
    </head>
    <body>
        <form method="post">
            Full Name:
            <br/>
            <input name="pname" type="text">
            <br/>
            Office Number:
            <br/>
            <input name="office" type="text">
            <br/>
            Expertise:
            <br/>
            <input name="esp" type="text">
            <br/>
            Degree:
            <br/>
            <select id="degree" name="degree">
                <option value=NULL>   </option>
                <option value="PHD">PHD</option>
                <option value="BSC">BSC</option>
                <option value="MSC">MSC</option>
                <option value="POSTDOC">POSTDOC</option>
            </select>
            <br/>
            College NUmber:
            <br/>
            <input name="clg#" type="text">
            <br/>
            <input type="submit">
        </form>
    </body>
</html>