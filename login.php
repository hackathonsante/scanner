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
    <section id="content">
        <?php include('sidebar.inc.php'); ?>
        <div class="container">
            <div class="block-header">
                <h2>Connexion</h2>
            </div>
            <div class="card m-b-0 content-element-section" id="messages-main">
                <form method="POST">
                    <div class="content-element-login">
                        <p class="c-black f-500 m-b-20">Se connecter</p>
                        <div class="form-group fg-float">
                            <div class="fg-line">
                                <input type="email" name="email" class="input-lg form-control fg-input">
                            </div>
                            <label class="fg-label">Email</label>
                        </div>
                        <div class="form-group fg-float">
                            <div class="fg-line">
                                <input type="password" class="input-lg form-control fg-input">
                            </div>
                            <label class="fg-label">Mot de passe</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                                Se souvenir de moi
                            </label>
                        </div>
                        <?php
                        if (isset($_GET['callback_url'])){
                            echo "<input type='hidden' name='callback_url' value='{$_GET["callback_url"]}'>";
                        }
                        ?>
                        <button type="submit" class="btn btn-primary btn-sm m-t-10 send-button" onClick="location.href='message.php'">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php include('footer.inc.php'); ?>