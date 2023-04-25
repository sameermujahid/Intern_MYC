<!DOCTYPE html>
<html lang="en">
<head>
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
        <a href="#">Hi Jahnavi</a>
		<a href="#">My Company  </a>
	<div class=" nav_container">
		    <a class="navbar-brand" href="#">
		    <img src="logo.jpeg" style="max-width: 40px; max-height: 40px"></img> 
            </a>
	</div>
</nav>


<div class="container">
     <h1>Table-1:</h2>
     <p>This table shows the details of MYC interns:</p>   
            
    <table class="table">
    <thead>
        
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Email</th>
      <th>gender</th>
    </tr>
    </thead>
    <tbody>
        
   
    <?php

    $student_details = array(
      array("Jahnavi","Vignesh","Varshini","Rahul","Sameer","Tasneem","Lizy","Arhaan", "Raja babu"),
      array("jahnavi@gmail.com","vignesh@gmail.com","varshini@gmail.com","rahul@gmail.com","sameer@gmail.com","tasneem@gmail.com","lizy@gmail.com","arhaan@gmail.com", "raja babu@gmail.com"),
      array("Female","Male","Female","Male","Male","Female","Female","Male", "Male"),
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
      <th>gender</th>
      <th>Department</th>
    </tr>
  </thead>
  <tbody>
   
    <?php

$faculty_details = array(
    array("Ranjith","Sirisha","Gayathri","PVR","Harsha","Varma","Hanumanthu","Annie Kezia","Kishore"),
    array("Ranjith@gmail.com","Sirisha@gmail.com","gayathri@gmail.com","pvr@gmail.com","Harsha@gmail.com","Varma@gmail.com","Hanumanthu@gmail.com","Annie@gmail.com","kishore@gmail.com"),
    array("male","female","female","male","male","female","female","male","female"),
    array("cse","ece","civ","mec","cse","civ","cse","civ","mec"));

  for($each_record=0;$each_record<9;$each_record++){
      if($faculty_details[3][$each_record]=="cse"){
        echo "<tr style='background-color: powderblue;;'>
          <td>".$each_record."</td>
          <td>".$faculty_details[0][$each_record]."</td>
          <td>".$faculty_details[1][$each_record]."</td>
          <td>".$faculty_details[2][$each_record]."</td>
          <td>".$faculty_details[3][$each_record]."</td>
          
        </tr>";
      }
      elseif($faculty_details[3][$each_record]=="ece"){
        echo "<tr style='background-color: pink;'>
        <td>".$each_record."</td>
        <td>".$faculty_details[0][$each_record]."</td>
        <td>".$faculty_details[1][$each_record]."</td>
        <td>".$faculty_details[2][$each_record]."</td>
        <td>".$faculty_details[3][$each_record]."</td>
      </tr>";
      }
      elseif($faculty_details[3][$each_record]=="civ"){
          echo "<tr style='background-color: yellow;'>
          <td>".$each_record."</td>
          <td>".$faculty_details[0][$each_record]."</td>
          <td>".$faculty_details[1][$each_record]."</td>
          <td>".$faculty_details[2][$each_record]."</td>
          <td>".$faculty_details[3][$each_record]."</td>
        </tr>";
  }
  else{
      echo "<tr style='background-color: aqua;'>
      <td>".$each_record."</td>
      <td>".$faculty_details[0][$each_record]."</td>
      <td>".$faculty_details[1][$each_record]."</td>
      <td>".$faculty_details[2][$each_record]."</td>
      <td>".$faculty_details[3][$each_record]."</td>
    </tr>";
}
}
  
  ?>
  </div>
</body>
</html>


