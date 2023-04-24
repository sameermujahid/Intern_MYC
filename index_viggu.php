<!DOCTYPE html>
<html>
<body>


<?php 

    if(isset($_POST['random_person'])){
        $student_list = array("jhanvai", "vignesh","varshini","rahul","sameer","tasneem","lizy","arhaan", "raj babu","pavan");
        $_detailed_string = "<h1 style='color:blue;'>Thanks lizy</h1>";
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
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php 
            echo "<tr style='background-color: yellow;'>
            <td>1</td>
            <td>sripada</td>
            <td>vignesh</td>
            <td>viggu@example.com</td>
            <td><a href='index.php?1' target='_blank'>get_details</a></td>
        </tr>";
          echo "<tr style='background-color: yellow;'>
          <td>2</td>
          <td>N</td>
          <td>rahul</td>
          <td>nrahul@example.com</td>
          <td><a href='index.php?2'  target='_blank'>get_details</a></td>
        </tr>";
          echo "<tr style='background-color: yellow;'>
          <td>3</td>
          <td>sameer</td>
          <td>mujahid</td>
          <td>sammujahid@example.com</td>
          <td><a href='index.php?3'  target='_blank'>get_details</a></td>
        </tr>";
          echo "<tr style='background-color: yellow;'>
          <td>4</td>
          <td>tasneem</td>
          <td>kouser</td>
          <td>taskouser@example.com</td>
          <td><a href='index.php?4'  target='_blank'>get_details</a></td>
        </tr>";
          echo "<tr style='background-color: yellow;'>
          <td>5</td>
          <td>arhaan</td>
          <td>md</td>
          <td>arhaanmd@example.com</td>
          <td><a href='index.php?5'  target='_blank'>get_details</a></td>
        </tr>";
         echo "<tr style='background-color: yellow;'>
          <td>6</td>
          <td>lizzy</td>
          <td>D</td>
          <td>lizzyd@example.com</td>
          <td><a href='index.php?6'  target='_blank'>get_details</a></td>
        </tr>";
          echo "<tr style='background-color: yellow;'>
          <td>7</td>
          <td>yalamanchili</td>
          <td>varshini</td>
          <td>varshiniy@example.com</td>
          <td><a href='index.php?7'  target='_blank'>get_details</a></td>
        </tr>";
          echo "<tr style='background-color: yellow;'>
          <td>8</td>
          <td>Jahnavi</td>
          <td>g</td>
          <td>gjahnavi@example.com</td>
          <td><a href='index.php?$8'  target='_blank'>get_details</a></td>
        </tr>";
         echo "<tr style='background-color: yellow;'>
         <td>9</td>
         <td>rajababu</td>
         <td>D</td>
         <td>rajababud@example.com</td>
         <td><a href='index.php?$9'  target='_blank'>get_details</a></td>
        </tr>";
    ?>
    

    </tbody>
  </table>
</div>



</body>
</html>


</body>
</html>

