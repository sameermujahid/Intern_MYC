<!DOCTYPE html>
<html>
<body>
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
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php
if(isset($_GET['uname']) && isset($_GET['password'])){
  $username =  $_GET['uname'];
  $password = $_GET['password'];
  echo "uname ::".$username." password::".$password; 
}

$users = array(
  array("Id" => "1", "Firstname" => "lizy", "Lastname" => "d", "Email" => "sammujahid@example.com"),
  array("Id" => "2", "Firstname" => "rahul", "Lastname" => "N", "Email" => "nrahul@example.com"),
  array("Id" => "3", "Firstname" => "Jahnavi", "Lastname" => "G", "Email" => "gjahnavi@example.com"),
  array("Id" => "4", "Firstname" => "vignesh", "Lastname" => "s", "Email" => "viggu@example.com"),
  array("Id" => "5", "Firstname" => "rajababu", "Lastname" => "D", "Email" => "rajababud@example.com"),
  array("Id" => "6", "Firstname" => "tasneem", "Lastname" => "sk", "Email" => "taskouser@example.com"),
  array("Id" => "7", "Firstname" => "Sameer", "Lastname" => "sk", "Email" => "lizyd@example.com"),
  array("Id" => "8", "Firstname" => "varshini", "Lastname" => "Y", "Email" => "varshiniy@example.com"),
  array("Id" => "9", "Firstname" => "arhaan", "Lastname" => "md", "Email" => "arhaanmd@emple.com")
);

foreach ($users as $user) {
  echo "<tr style='background-color: #CCF1FF;'>
          <td>".$user['Id']."</td>
          <td>".$user['Firstname']."</td>
          <td>".$user['Lastname']."</td>
          <td>".$user['Email']."</td>
          <td><a href='index.php?".$user['Id']."'  target='_blank'>get_details</a></td> 
        </tr>";
}
?>
  

  </tbody>
</table>
</div>


</body>
</html>


</body>
</html>