<!DOCTYPE html>
<html>
<body>


<?php 

    if(isset($_POST['random_person'])){
        $student_list = array("jahnavi","vignesh","varshini","rahul","sameer","tasneem","lizy","arhaan", "raja babu","pavan");
        $_detailed_string = "<h1 style='color:aqua;'>Thanks Arhaan</h1>";
        $random_index = array_rand($student_list,1);
        echo `
        <h1>`.$student_list[$random_index].`</h1>
        `;

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<form action="" method="post">
    <button type="submit" class="btn btn-primary" name="random_person" id="random_person" >Random person</button>
    </div>
</form>


<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>   
  <?php
  if(isset($_GET['uname']) && isset($_GET['password'])){
    $username =  $_GET['uname'];
    $password = $_GET['password'];
    echo "uname ::".$username." password::".$password; 
  }

  ?>         
  <table class="table table-hover">
    <thead>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <tr style='background-color: aqua;'>
      <td>1</td>
      <td>Arhaan</td>
      <td>Mohammad</td>
      <td>arhaan@gmail.com</td>
    </tr>
    <tr>
    <tr style='background-color: pink;'>
      <td>2</td>
      <td>Jahnavi</td>
      <td>Gorrela</td>
      <td>jahnavi@gmail.com</td>
    </tr>
    <tr>
    <tr style='background-color: aqua;'>
      <td>3</td>
      <td>Sameer</td>
      <td>Shaik</td>
      <td>sameer@gmail.com</td>
    </tr>
    <tr>
    <tr style='background-color: pink;'>
      <td>4</td>
      <td>Lizy</td>
      <td>Dogacharla</td>
      <td>lizy@gmail.com</td>
    </tr>
    <tr>
    <tr style='background-color: aqua;'>
      <td>5</td>
      <td>Rajababu</td>
      <td>Desala</td>
      <td>rajababu@gmail.com</td>
    </tr>
    <tr>
    <tr style='background-color: pink;'>
      <td>6</td>
      <td>Tasneem</td>
      <td>Shaikk</td>
      <td>tasneem@gmail.com</td>
    </tr>
    <tr>
    <tr style='background-color: aqua;'>
      <td>7</td>
      <td>Rahul</td>
      <td>Nallala</td>
      <td>rahul@gmail.com</td>
    </tr>
    <tr>
    <tr style='background-color: pink;'>
      <td>8</td>
      <td>Varshini</td>
      <td>Yelamanchili</td>
      <td>varshini@gmail.com</td>
    </tr>
    
    <tr>
    <tr style='background-color: aqua;'>
      <td>9</td>
      <td>vignesh</td>
      <td>SNSS</td>
      <td>vignesh@gmail.com</td>
    </tr>
    

    </tbody>
  </table>
</div>



</body>
</html>


</body>
</html>

