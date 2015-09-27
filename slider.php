<?php
use App\Tools\Gravatar;
session_start();
    if (!isset($_SESSION['me']) || empty ($_SESSION['me'])){
        header("Location: login.php");
    die;
    }
$me = $_SESSION['me'];
require "vendor/autoload.php";
include('header.inc.php');

?>

<section id="content">
    <?php include('sidebar.inc.php'); ?>
    <div class="container">
        <div class="block-header">
            <h2>Scanner</h2>
        </div>

        <div class="card m-b-0 content-element-section" id="messages-main">

            <div class="container mt100">
            <div class="row">
                <div class="col-lg-12 mb20">
                    <img class="content-image" src="img/tdm/TDM.0001.jpg" style="width: 500px;">
                </div>
                <div class="col-lg-12">

                    <div id="slider"></div>
                    
                    <!-- <p class="mt20">Your slider has a value of <span id="slider-value"></span></p> -->
                    <p></p>
                </div>
            </div>
        </div>

        </div>

    </div>
</section>

<script type="text/javascript">

        var extension = ".JPG";
        var nameFile = "export";

        $("#slider").slider({
            value: 0,
            min: 1,
            max: 120,
            step: 1,
            slide: function( event, ui ) {
                $( "#slider-value" ).html( ui.value );
                
                    if (ui.value < 10) {
                        $('.content-image').replaceWith("<img style='width: 500px'; class='content-image' src='img/tdm/TDM.000"+ui.value+".jpg'>");
                    } else if (ui.value >= 10 && ui.value < 100) {
                        $('.content-image').replaceWith("<img style='width: 500px'; class='content-image' src='img/tdm/TDM.00"+ui.value+".jpg'>");
                    } else if (ui.value >= 100 && ui.value < 1000) {
                        $('.content-image').replaceWith("<img style='width: 500px'; class='content-image' src='img/tdm/TDM.0"+ui.value+".jpg'>");
                    } else if (ui.value >= 1000 && ui.value < 9999) {
                        $('.content-image').replaceWith("<img style='width: 500px'; class='content-image' src='img/tdm/TDM."+ui.value+".jpg'>");
                    }
                
            }
        });

        $( "#slider-value" ).html(  $('#slider').slider('value') );



    </script>

<?php include('footer.inc.php'); ?>