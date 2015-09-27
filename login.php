<?php
session_start();
use App\Tools\Request;


require "vendor/autoload.php";

if (isset($_POST['email'])){
    $userlist = Request::perform("userlist");
    $mail = $_POST['email'];
    foreach ($userlist as $user){
        if ($user->email === $mail){
            $_SESSION['me'] = $user;
            session_write_close();

            if (isset($_POST['callback_url'])){
                $url = $_POST['callback_url'];
            } else {
                $url = "message.php";
            }
             header("Location: {$url}");
            exit();
            break;
        }
    }
    echo "email inconnu, veuillez recommencer";
}
?>

<?php include('header.inc.php'); ?>



<form method="POST">
    <input type="email" name="email" placeholder="votre email">
    <?php
    if (isset($_GET['callback_url'])){
        echo "<input type='hidden' name='callback_url' value='{$_GET["callback_url"]}'>";
    }
    ?>
    <button type="submit">Se connecter (poil au nez)</button>
</form>

<?php include('footer.inc.php'); ?>