<?php include('header.inc.php'); ?>

<!-- body -->
        <section id="main">
            <?php include('sidebar.inc.php'); ?>
            
        
        
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Messages</h2>
                    </div>
                
                    <div class="card m-b-0" id="messages-main">
                        
                        <!-- <a href="" class="btn bgm-red btn-float m-btn" id="ms-compose">
                            <i class="zmdi zmdi-plus"></i>
                        </a> -->
                        
                        <div class="ms-menu">
                            <div class="ms-block">
                                <div class="ms-user">
                                    <img src="https://fr.gravatar.com/userimage/33965088/b5a35a1d7a90dd3b7992af75c8413f0a?size=200" alt="">
                                    <div>Connecté en tant que <br/> paul@gmail.com</div>
                                </div>
                            </div>
                            
                            <div class="ms-block">
                                <div class="dropdown">
                                    <a class="btn btn-primary btn-block" href="" data-toggle="dropdown">Messages <i class="caret m-l-5"></i></a>

                                    <ul class="dropdown-menu dm-icon w-100">
                                        <li><a href=""><i class="zmdi zmdi-email"></i> Messages</a></li>
                                        <li><a href=""><i class="zmdi zmdi-account"></i> Contacts</a></li>
                                        <li><a href=""><i class="zmdi zmdi-format-list-bulleted"> </i>Todo Lists</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="listview lv-user m-t-20" style="overflow-y: scroll; height: 630px;">
                            
                            <?php include('chat.section.php'); ?>
                            <!-- <div>
                                <div class="lv-item media active">
                                    <div class="lv-avatar pull-left">
                                        <img src="https://fr.gravatar.com/userimage/33965088/b5a35a1d7a90dd3b7992af75c8413f0a?size=200" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Paul Jarysta</div>
                                        <div class="lv-small">Fierent fastidii recteque ad pro</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar bgm-red pull-left">a</div>
                                    <div class="media-body">
                                        <div class="lv-title">Ann Watkinson</div>
                                        <div class="lv-small">Cum sociis natoque penatibus </div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar bgm-orange pull-left">m</div>
                                    <div class="media-body">
                                        <div class="lv-title">Marse Walter</div>
                                        <div class="lv-small">Suspendisse sapien ligula</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar pull-left">
                                        <img src="img/profile-pics/2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Jeremy Robbins</div>
                                        <div class="lv-small">Phasellus porttitor tellus nec</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar pull-left">
                                        <img src="img/profile-pics/3.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Reginald Horace</div>
                                        <div class="lv-small">Quisque consequat arcu eget</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar bgm-cyan pull-left">s</div>
                                    <div class="media-body">
                                        <div class="lv-title">Shark Henry</div>
                                        <div class="lv-small">Nam lobortis odio et leo maximu</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar bgm-purple pull-left">p</div>
                                    <div class="media-body">
                                        <div class="lv-title">Paul Van Dack</div>
                                        <div class="lv-small">Nam posuere purus sed velit auctor sodales</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar pull-left">
                                        <img src="img/profile-pics/4.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">James Anderson</div>
                                        <div class="lv-small">Vivamus imperdiet sagittis quam</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar pull-left">
                                        <img src="img/profile-pics/6.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Kane Williams</div>
                                        <div class="lv-small">Suspendisse justo nulla luctus nec</div>
                                    </div>
                                </div>

                                <div class="lv-item media">
                                    <div class="lv-avatar pull-left">
                                        <img src="img/profile-pics/3.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Reginald Horace</div>
                                        <div class="lv-small">Quisque consequat arcu eget</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar bgm-cyan pull-left">s</div>
                                    <div class="media-body">
                                        <div class="lv-title">Shark Henry</div>
                                        <div class="lv-small">Nam lobortis odio et leo maximu</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar bgm-purple pull-left">p</div>
                                    <div class="media-body">
                                        <div class="lv-title">Paul Van Dack</div>
                                        <div class="lv-small">Nam posuere purus sed velit auctor sodales</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar pull-left">
                                        <img src="img/profile-pics/4.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">James Anderson</div>
                                        <div class="lv-small">Vivamus imperdiet sagittis quam</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar pull-left">
                                        <img src="img/profile-pics/6.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Kane Williams</div>
                                        <div class="lv-small">Suspendisse justo nulla luctus nec</div>
                                    </div>
                                </div>

                                <div class="lv-item media">
                                    <div class="lv-avatar pull-left">
                                        <img src="img/profile-pics/3.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Reginald Horace</div>
                                        <div class="lv-small">Quisque consequat arcu eget</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar bgm-cyan pull-left">s</div>
                                    <div class="media-body">
                                        <div class="lv-title">Shark Henry</div>
                                        <div class="lv-small">Nam lobortis odio et leo maximu</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar bgm-purple pull-left">p</div>
                                    <div class="media-body">
                                        <div class="lv-title">Paul Van Dack</div>
                                        <div class="lv-small">Nam posuere purus sed velit auctor sodales</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar pull-left">
                                        <img src="img/profile-pics/4.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">James Anderson</div>
                                        <div class="lv-small">Vivamus imperdiet sagittis quam</div>
                                    </div>
                                </div>
                                
                                <div class="lv-item media">
                                    <div class="lv-avatar pull-left">
                                        <img src="img/profile-pics/6.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Kane Williams</div>
                                        <div class="lv-small">Suspendisse justo nulla luctus nec</div>
                                    </div>
                                </div>

                            </div> -->

                            </div>

                            
                        </div>
                        
                        <div class="ms-body tab-content" role="tablist">
                            
                            <?php include('chat.content.php'); ?>

                        </div>
                    </div>
                </div>
            </section>
        </section>
        
        <!-- /body -->

<?php include('footer.inc.php'); ?>