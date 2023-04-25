

<?php 

$username = $_POST['uname'];
$password = $_POST['user_password'];


if($username == 'jahnavi@gmail.com' && $password == 'admin'){
    header('Location: http://localhost/jahnavi_24apr/1016_index.php');

}   
else {
  echo "invalid login credentials";
}

?>