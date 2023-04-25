

<?php 

$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'sameer' && $password == 'sameer'){
    header('Location: http://localhost/sameer.php');

}
else {
  echo "invalid login";
}

?>