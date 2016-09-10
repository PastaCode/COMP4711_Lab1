<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('student.php');

            $students = array();
            
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j001'] = $first;

            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a001'] = $second;
            
            $third = new Student();
            $third->surname = "Yang";
            $third->first_name = "Jeremy";
            $third->add_email('home','jyjeremyyang@gmail.com');
            $third->add_email('work1','jyang236@my.bcit.ca');
            $third->add_email('work2','jyang236@learn.bcit.ca');
            $third->add_grade(87);
            $third->add_grade(98);
            $third->add_grade(74);
            $third->add_grade(81);
            $students['j002'] = $third;
            
            ksort($students);

            foreach($students as $student) {
                echo $student->toString();
            }
        ?>
    </body>
</html>
