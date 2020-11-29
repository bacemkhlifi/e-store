<?php
session_start();
$nonavbar ='';
$title = "Login";

if (isset($_SESSION['Username'])) {
    header('Location:dashborad.php');}

include "init.php";

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedPass = sha1($password);
    //check if the user exist in database
    $stmt = $conn->prepare("SELECT Username, Password FROM ecommerce WHERE Username= ?  AND Password = ? AND GroupID =1");
    $stmt->execute(array($username,$hashedPass));
    $count = $stmt->rowCount();

if ($count > 0) {
    $_SESSION['Username'] = $username ;
    header('Location:dashborad.php');
 }
}
?>
<form class='login' action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <h4 class="text-center">Login</h4>
    <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off" />
    <input class='form-control' type="password " name="pass" placeholder="Password" autocomplete="new-password" />
    <input class="btn btn-primary btn-block" type="submit" value="login" />
</form>

