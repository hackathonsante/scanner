<?php
use App\Config\Config;
use App\Tools\Gravatar;
use App\Tools\Request;


session_start();
include_once "/vendor/autoload.php";

    $myid = $_SESSION['me']->id;
    $chatlist = Request::perform("chatlist/{$myid}");
    $userlist = Request::perform("userlist");
    $config = Config::getConfig("kinder");
    if (empty($chatlist)){
        echo "vous n'avez pas encore de conversations";
        die;
    }
    $old = $chatlist[0]->kinder;

 ?>
<div id="ex1" style="display:none;">
   <p id="nameadd" style="text-align: center;font-size: 18px; "></p>
    <input type="hidden" name="idadd" id="idadd" value=""/>

    <button id="addToConv" class="btn btn-primary btn-sm m-t-10 send-button" >Ajouter a la conversation</button>
</div>



<div id="chat-section">
    <ul class="tab-nav tn-justified" role="tablist">
        <li role="presentation" class="active"><a href="#chan" role="tab" data-toggle="tab">Channels</a></li>
        <li role="presentation"><a href="#annuaire" role="tab" data-toggle="tab">Annuaire</a></li>
    </ul>

    <div class="chat-search">
        <div class="fg-line">
            <input type="text" class="form-control" id="filter" placeholder="Rechercher un contact">
        </div>
    </div>
    <div id="tab-content-chan">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="chan">
                <p class="section-listview"><?=$config[$chatlist[0]->kinder]?></p>

                <?php foreach ($chatlist as $k => $chat):?>
                    <?php if ($chat->kinder != $old):?>
                        <p class="section-listview"><?=$config[$chat->kinder]?></p>
                    <?php $old = $chat->kinder; endif ?>

                <div role="presentation" class="listview">
                    <a id="chat<?=$chat->id?>" class="lv-item <?php if ($k == 0) echo 'active' ;?> conv" data-id="<?=$chat->id?>" href="#chat-content<?=$chat->id?>">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title"><?=$chat->title?></div>
                            </div>
                        </div>
                    </a>
                </div>

                <?php  endforeach;?>
                </div>



            <div role="tabpanel" class="tab-pane fade" id="annuaire">
                    <div class="listview">
                        <?php foreach($userlist as $user): ?>
                        <a class="lv-item lv-item-users" href="#" data-id="<?=$user->id?>" data-name="<?=$user->name?>">
                            <div class="media">
                                <div class="pull-left p-relative">
                                    <img class="lv-img-sm" src="<?php echo Gravatar::get($user->email) ?>" alt="">
                                    <i class="chat-status-busy"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lv-title"><?=$user->name?></div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach;?>

                    </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var  id = $(".conv.active").attr("data-id");
        $.get("chat.content.php?id="+id).done(function(data){
            $("#chat-content").html(data);
        });

        $(".conv").click(function(){
            $(".active.conv").removeClass("active");
            $(this).addClass("active");
            var id = $(this).attr("data-id");
            $.get("chat.content.php?id="+id).done(function(data){
                $("#chat-content").html(data);
            });
        });

        $(".lv-item-users").click(function(){
            console.log("test");
            var id = $(this).attr("data-id");
            $("#ex1").modal();
            $("#idadd").val(id);
            $("#nameadd").text($(this).attr("data-name"));
        });
    });
</script>
