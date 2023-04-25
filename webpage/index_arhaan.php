<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    background-image: url('wallpaper2.jpeg');
    background-size: cover;
    .table {
      border-radius: 20px;
      overflow: hidden;
    }
    .table th:first-child,
    .table td:first-child {
      border-radius: 50px 0 0 50px;
    }
    .table th:last-child,
    .table td:last-child {
      border-radius: 0 45px 45px 0;
    }
  }
</style>
<style>
        nav {
			background-color:lightblue;
			overflow: hidden;
		}

		nav a {
			font-size: large;
			float: right;
			color:black;
			text-align: center;
			padding: 20px 16px;
			text-decoration: none;
		}

		nav a:hover {
			background-color: red;
			color: black;                               
		}
    </style>
  <title>MYC Assignment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav>
    <div class= "nav">
        <a href="#">Hi Arhaan</a>
		<a href="#">My Company  </a>
	<div class=" nav_container">
		    <a class="navbar-brand" href="#">
		    <img src="logo.jpeg" style="max-width: 100px; max-height: 100px"></img> 
            </a>
	</div>
</nav>

</head>
<body>
<div class="container">
  <h2>Table -1 :</h2>
  <p>This table contains the details of the students enrolled in internship</p>       
  <table class="table table-hover">
    <thead>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Email</th>
      <th>Gender</th>
         </tr>
  </thead>
  <tbody>
   
    <?php

    $student_details = array(
      array("jahnavi","vignesh","varshini","rahul","sameer","tasneem","lizy","arhaan", "raja babu"),
      array("jahnavi@gmail.com","vignesh@gmail.com","varshini@gmail.com","rahul@gmail.com","sameer@gmail.com","tasneem@gmail.com","lizy@gmail.com","arhaan@gmail.com", "raja babu@gmail.com"),
      array("Female","Female","Female","Male","Male","Male","Female","Male", "Male"),
    );
    for($each_record=0;$each_record<9;$each_record++){
        if($student_details[2][$each_record]=="Male"){
          echo "<tr style='background-color: powderblue;;'>
            <td>".$each_record."</td>
            <td>".$student_details[0][$each_record]."</td>
            <td>".$student_details[1][$each_record]."</td>
            <td>".$student_details[2][$each_record]."</td>
          </tr>";
        }
        else{
          echo "<tr style='background-color: pink;'>
          <td>".$each_record."</td>
          <td>".$student_details[0][$each_record]."</td>
          <td>".$student_details[1][$each_record]."</td>
          <td>".$student_details[2][$each_record]."</td>
        </tr>";
        }
    }
    
    ?>
    
    

    </tbody>
  </table>
</div>
<div class="container">
  <h2>Table -2 :</h2>
  <p>This table contains the details of the Teaching faculty</p>       
  <table class="table table-hover">
    <thead>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Subject</th>
      <th>Salary</th>
    </tr>
  </thead>
  <tbody>
   
    <?php

$faculty_details = array(
  array("Ranjith","Sirisha","Gayathri","PVR","Harsha","Varma","Hanumanthu","Annie Kezia","Kishore"),
  array("Ranjith@gmail.com","Sirisha@gmail.com","gayathri@gmail.com","pvr@gmail.com","Harsha@gmail.com","Varma@gmail.com","Hanumanthu@gmail.com","Annie@gmail.com","kishore@gmail.com"),
  array("Male","Female","Female","Male","Male","Female","Female","Male","Female"),
  array("Computer science engineering","Electronics and Communications Engineering","Civil Engineering","Mechanical Engineering","Computer science engineering","Civil Engineering","Computer science engineering","Civil Engineering","Mechanical Engineering"),
  array("50000","78000","85000","45000","48000","50000","78000","35000","25000")
);

for($each_record=0;$each_record<9;$each_record++){
    if($faculty_details[3][$each_record]=="Computer science engineering"){
      echo "<tr style='background-color: powderblue;;'>
        <td>".$each_record."</td>
        <td>".$faculty_details[0][$each_record]."</td>
        <td>".$faculty_details[1][$each_record]."</td>
        <td>".$faculty_details[2][$each_record]."</td>
        <td>".$faculty_details[3][$each_record]."</td>
        <td>".$faculty_details[4][$each_record]."</td>
        
      </tr>";
    }
    elseif($faculty_details[3][$each_record]=="Electronics and Communications Engineering"){
      echo "<tr style='background-color: aqua;'>
      <td>".$each_record."</td>
      <td>".$faculty_details[0][$each_record]."</td>
      <td>".$faculty_details[1][$each_record]."</td>
      <td>".$faculty_details[2][$each_record]."</td>
      <td>".$faculty_details[3][$each_record]."</td>
      <td>".$faculty_details[4][$each_record]."</td>
    </tr>";
    }
    elseif($faculty_details[3][$each_record]=="Civil Engineering"){
        echo "<tr style='background-color: red;'>
        <td>".$each_record."</td>
        <td>".$faculty_details[0][$each_record]."</td>
        <td>".$faculty_details[1][$each_record]."</td>
        <td>".$faculty_details[2][$each_record]."</td>
        <td>".$faculty_details[3][$each_record]."</td>
        <td>".$faculty_details[4][$each_record]."</td>
      </tr>";
}
else{
    echo "<tr style='background-color: blue;'>
    <td>".$each_record."</td>
    <td>".$faculty_details[0][$each_record]."</td>
    <td>".$faculty_details[1][$each_record]."</td>
    <td>".$faculty_details[2][$each_record]."</td>
    <td>".$faculty_details[3][$each_record]."</td>
    <td>".$faculty_details[4][$each_record]."</td>
  </tr>";
}
}

?>
    

    </tbody>
  </table>


</body>
</html>


</body>
</html>

