<?php 
   $name = $_POST['name']; 
   $subname = $_POST['subname'];
   $sex =  $_POST['sex'];
   $email =  $_POST['email'];
   $password =$_POST['password'];
$password =md5($password."wrajsdfaskf21412");
    

   $mysqli =  mysqli_connect('localhost','root','','waikiki'); // подключение к базе данных
   if(!$mysqli){  // проверка работоспособности базы 
    die(mysqli_error()); // вывод ошибки если таковая будет
   }
   $mysqli->query("INSERT INTO `regg` (`name`,`sub-name`,`gender`,`email`,`password`) VALUES('$name','$subname','$sex','$email','$password')"); // обращение к базе данных и ввод полученных переменных

   $mysqli->close(); // закрытие базы данных

   header('Location:/');// переход на главную страницу 
   exit(); // закрытие скрипта 
?>