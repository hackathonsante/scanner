<?php
session_start();

require "vendor/autoload.php";

use App\Tools\Gravatar;
use App\Tools\Request;

function getUser($id, $list)
{
    foreach ($list->users as $user) {
        if ($user->id == $id) {
            return $user;
        }
    }
    return null;
}

$id = $_GET['id'];
$me = $_SESSION['me'];
$chatinfos = Request::perform("chat/{$id}");
if ($chatinfos === null) {
    die ("Pas de conversation pour le moment");
}
if (count($chatinfos->users) <= 2 && count($chatinfos->users) > 0) {
    $convpic = Gravatar::get($chatinfos->users[0]->email);
} else {
    $convpic = "img/profile-pics/2.jpg";
}
foreach ($chatinfos->users as $user) {
    $user->pic = Gravatar::get($user->email);
}
$mypic = Gravatar::get($me->email);
?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <!-- Listview HEADER -->
<div class="lv-header-alt clearfix">
    <div id="ms-menu-trigger">
        <div class="line-wrap">
            <div class="line top"></div>
            <div class="line center"></div>
            <div class="line bottom"></div>
        </div>
    </div>

    <div class="lvh-label hidden-xs">
        <div class="lv-avatar pull-left">
            <img src="<?= $convpic ?>" alt="">
        </div>
        <span class="c-black"><?= $chatinfos->chat->title ?></span>
    </div>

    <ul class="lv-actions actions">
        <li>
            <a href="">
                <i class="zmdi zmdi-archive"></i>
            </a>
        </li>

        <li>
            <a href="">
                <i class="zmdi zmdi-delete"></i>
            </a>
        </li>


        <li class="dropdown">
            <a href="" data-toggle="dropdown" aria-expanded="true">
                <i class="zmdi zmdi-more-vert"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a href="">Rafraichir</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="lv-body content-size-bloc msgarea">

    <!-- Listview BODY -->
    <?php
    foreach ($chatinfos->messages as $message):
        $date = new DateTime($message->created_at);

        ?>
        <div class="lv-item media <?php if ($message->user_id == $me->id) echo 'right';?>">
            <div class="lv-avatar pull-<?php if ($message->user_id == $me->id) echo 'right'; else echo 'left'; ?>">
                <img
                    src="<?php if ($message->user_id == $me->id) echo $mypic; else echo getUser($message->user_id, $chatinfos)->pic;?>"
                    alt="">
            </div>
            <div class="media-body">
                <p><?php if ($message->user_id == $me->id) echo "moi"; else echo getUser($message->user_id, $chatinfos)->name;?></p>

                <div class="ms-item">
                    <?php if (strncmp("B64:", $message->text, "4") == 0) {
                        $message->text = substr($message->text, 4);
                        echo '<img style="width:300px" src="data:image/gif;base64,' . $message->text . '" />';
                    } else {

                        echo $message->text;
                    } ?>
                </div>
                <small class="ms-date"><i class="zmdi zmdi-access-time"></i> <?= $date->format("Y-m-d H:i:s") ?></small>
            </div>
        </div>

    <?php
    endforeach;
    ?>

</div>

<!-- Listview FOOTER -->
<div class="lv-footer ms-reply">
    <textarea placeholder="Écrivez votre message..." id="sendMsg" name="sendMsg"></textarea>

    <button id="send"><i class="zmdi zmdi-mail-send"></i></button>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>

<script>

    var opts = {
        lines: 13 // The number of lines to draw
        , length: 19 // The length of each line
        , width: 12 // The line thickness
        , radius: 33 // The radius of the inner circle
        , scale: 0.25 // Scales overall size of the spinner
        , corners: 1 // Corner roundness (0..1)
        , color: '#000' // #rgb or #rrggbb or array of colors
        , opacity: 0.25 // Opacity of the lines
        , rotate: 34 // The rotation offset
        , direction: 1 // 1: clockwise, -1: counterclockwise
        , speed: 1 // Rounds per second
        , trail: 60 // Afterglow percentage
        , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
        , zIndex: 2e9 // The z-index (defaults to 2000000000)
        , className: 'spinner' // The CSS class to assign to the spinner
        , top: '50%' // Top position relative to parent
        , left: '50%' // Left position relative to parent
        , shadow: false // Whether to render a shadow
        , hwaccel: false // Whether to use hardware acceleration
        , position: 'absolute' // Element positioning

    }

    $(document).ready(function () {

        var pushMsg2 = function (text) {
            var date = new Date();

            var html = "<div class='lv-item media right'>" +
                "<div class='lv-avatar'>" +
                '</div>' +
                '<div class="media-body">' +
                '<p>' + text + ' a été ajouté a la conversation.</p>' +

                '<small class="ms-date"><i class="zmdi zmdi-access-time"></i>' + date.getFullYear() + '-' + (parseInt(date.getUTCMonth()) + 1) + '-' + date.getDate() + ' ' + date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds() + '</small>' +
                '</div>' +
                '</div>';
            $(".msgarea").append(html);
            $(".msgarea").scrollTo($(".lv-item:last"), "slow");
        }

        var pushMsg = function (text) {
            var date = new Date();
            var html = "<div class='lv-item media right'>" +
                "<div class='lv-avatar pull-right'>" +
                "<img src=\"<?php echo $mypic;?>\" alt=''>" +
                '</div>' +
                '<div class="media-body">' +
                '<p>moi</p>' +
                '<div class="ms-item">' +
                text +
                '</div>' +
                '<small class="ms-date"><i class="zmdi zmdi-access-time"></i>' + date.getFullYear() + '-' + (parseInt(date.getUTCMonth()) + 1) + '-' + date.getDate() + ' ' + date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds() + '</small>' +
                '</div>' +
                '</div>';
            $(".msgarea").append(html);
            $(".msgarea").scrollTo($(".lv-item:last"), "slow");
        }
        $("#send").click(function (e) {
            e.preventDefault();
            var target = document.getElementById('content');
            var spinner = new Spinner(opts).spin(target);
            var text = $("#sendMsg").val();
            $("#sendMsg").val("");
            $.post("sendMsg.php", {
                "chat_id": "<?=$id?>",
                "user_id": "<?=$me->id?>",
                "text": text
            }).done(function (data) {
                spinner.stop();
                pushMsg(text);
            });
        });

        $("#addToConv").click(function (e) {
            e.preventDefault();
            $.modal.close();

            var target = document.getElementById('content');
            var spinner = new Spinner(opts).spin(target);
            var id_user = $("#idadd").val();
            var id_conv = "<?=$id?>";
            $.post("addUser.php", {"chat_id": id_conv, "user_id": id_user}).done(function (data) {
                spinner.stop();
                pushMsg2($("#nameadd").text());
            });
        });
    });

</script>