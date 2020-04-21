<?php
    
   /* $query="SELECT DISTINCT S.sname
            FROM student AS S,student AS T
            WHERE S.s!=T.s
            AND S.clg=T.clg
            AND S.city=T.city"; 
       */
      /*$query="SELECT sname
              FROM student,college
              WHERE student.clg=college.clg
              AND clgname='BME'
              AND sname LIKE '_asaman Shokri'";    
       */
    /*  $query="SELECT pname
              FROM college
              EXCEPT
              SELECT P.pname
              FROM college,professor_tbl AS P
              WHERE college.clg=P.clg
              AND clgname='Computer'";

$query="SELECT pname
FROM college
UNION
SELECT P.pname
FROM college,professor_tbl AS P
WHERE college.clg=P.clg
AND clgname='Computer'";

$query="SELECT pname
FROM college
INTERSECT
SELECT P.pname
FROM college,professor_tbl AS P
WHERE college.clg=P.clg
AND clgname='Computer'";
*/

    $query="SELECT SUM(avg)
            FROM student,college
            WHERE student.clg=college.clg
            AND clgname='Computer'";
    $connection=mysqli_connect("localhost","root","","portal_project");
    $data=mysqli_query($connection,$query);
    while($res=mysqli_fetch_assoc($data)){
        echo $res['SUM(avg)'];
        echo " ";
        echo "<br/>";
        echo "<br/>";
    }
    
?>