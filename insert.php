<?php
//connect to DB


$connect = new PDO("mysql:host=localhost;dbname=elev", "root", "");

if(isset($_POST['name'])) {
  $courses = implode(", ", $_POST['courses']);

  $data = array (
      ':name' => $_POST['name'],
      ':courses' => $courses
  );

  $query = "INSERT INTO student
            (name, courses)
            VALUES(:name, :courses)";

  $statement = $connect->prepare($query);
  if($statement->execute($data)) {
    echo '
      <div class="alert alert-success">Data Inserted</div> 
    ';
  } else {
    die('Data not inserted');
  }
}