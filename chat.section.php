<?php 
    
    $url_api = "http://10.45.18.223:3000/api/v1/chatlist";
    $json = file_get_contents($url_api);
    $obj = json_decode($json);
    var_dump($obj);

 ?>


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
                <p class="section-listview">Services</p>
                <div role="presentation" class="listview">
                    <a id="chat1" class="lv-item active" href="#chat-content1" role="tab" data-toggle="tab">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Oncologie</div>
                                <small class="lv-small">5 personnes connectées</small>
                            </div>
                        </div>
                    </a>
                </div>

                <p class="section-listview">Patients</p>
                <div role="presentation" class="listview">
                    <a id="chat2" class="lv-item" href="#chat-content2" role="tab" data-toggle="tab">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Jonathan Morris</div>
                                <small class="lv-small">Available</small>
                            </div>
                        </div>
                    </a>
                </div>

                <p class="section-listview">Privés</p>
                <div class="listview">
                 

                    <a id="chat3" class="lv-item" href="#chat-content3" role="tab" data-toggle="tab">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img-sm" src="https://secure.gravatar.com/avatar/b7fb752b4fe725de8bd4a3334661f3c0" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Hugo Meloni</div>
                                <small class="lv-small">Last seen 3 hours ago</small>
                            </div>
                        </div>
                    </a>

                    <a id="chat4" class="lv-item" href="#chat-content4" role="tab" data-toggle="tab">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="https://scontent.xx.fbcdn.net/hphotos-ash2/v/t1.0-9/10896882_10152658296291089_5290786946191292517_n.jpg?oh=8b407744a47313016aacda2c3a907072&oe=56A4E9CD" alt="">
                                <i class="chat-status-online"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Aurélien Lambert</div>
                                <small class="lv-small">Disponible</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="#">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="https://scontent.xx.fbcdn.net/hphotos-xal1/t31.0-8/11226016_10153014446676879_2611767396701923891_o.jpg" alt="">
                                <i class="chat-status-online"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">David Lakomski</div>
                                <small class="lv-small">Availble</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="#">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img-sm" src="img/profile-pics/5.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Bill Phillips</div>
                                <small class="lv-small">Last seen 3 days ago</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="#">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img-sm" src="img/profile-pics/6.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Wendy Mitchell</div>
                                <small class="lv-small">Last seen 2 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <a class="lv-item" href="#">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="img/profile-pics/7.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Teena Bell Ann</div>
                                <small class="lv-small">Busy</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <div role="tabpanel" class="tab-pane fade" id="annuaire">
                    <div class="listview">
                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left p-relative">
                                    <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                    <i class="chat-status-busy"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">Jonathan Morris</div>
                                    <small class="lv-small">Available</small>
                                </div>
                            </div>
                        </a>

                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left p-relative">
                                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                    <i class="chat-status-online"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                    <small class="lv-small">Availble</small>
                                </div>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
    </div>
</div>
