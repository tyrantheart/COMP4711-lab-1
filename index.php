<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Students</title>
        <style>
            body{
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <?php

      include('Student.php');
      $students = array();
      
      $first = new Student();
      $first->surname = "Doe";
      $first->first_name = "John";
      $first->add_email('home','john@doe.com');
      $first->add_email('work','jdoe@mcdonalds.com');
      $first->add_grade(65);
      $first->add_grade(75);
      $first->add_grade(55);
      $students['j123'] = $first;
      
      
      $second = new Student();
      $second->surname = "Einstein";
      $second->first_name = "Albert";
      $second->add_email('home','albert@braniacs.com');
      $second->add_email('work1','a_einstein@bcit.ca');
      $second->add_email('work2','albert@physics.mit.edu');
      $second->add_grade(95);
      $second->add_grade(80);
      $second->add_grade(50);
      $students['a456'] = $second;
      
      $third = new Student();
      $third->surname = "Zhenhua";
      $third->first_name = "Chen";
      $third->add_email('home','1226950749@qq.com');
      $third->add_email('work1','A01057683@bcit.ca');
      $third->add_email('work2','chenzhenhua1999@163.com');
      $third->add_grade(90);
      $third->add_grade(85);
      $third->add_grade(80);
      $students['d789'] = $third;
      
    ksort($students); // one of the many sort functions
      
      foreach ($students as $student) {
            echo $student->toString();
            
        }

        ?>
    </body>
</html>
