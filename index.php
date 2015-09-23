<?php require('header.php')?>        
        
<div class="container content_box">
    <h1 id="canvasText" style="display:none;">Welcome to International Student Association!</h1>
    <canvas id="myCanvas"></canvas>
</div>

<div class="container content_box">
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="slider_container" style="height:250px;width:350px;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px;left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move;position: absolute;left: 0px;top: 0px;overflow: hidden;height:250px;width:350px;">
            <?php
                $photosFormat = ['.jpg','.gif','.jpeg','.JPG'];
                $files = scandir('slide_image');
                foreach($files as $f){
                    $indexOfDot = strpos($f , '.');
                    if($indexOfDot>0){
                        echo "<div>";
                        echo "<a u=image href='#'><img src='slide_image/".$f."'></a>";
                        echo "</div>";
                    }
                }
            ?>
        </div>

        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb13" style="display:block;bottom: 16px;right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
    </div>

        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
            <!-- Jssor Slider End -->
    <div id= "recent" class="inner_box col-xs-12 col-md-6 col-lg-6">
        <hr class="visible-lg">
        <h2><a id = 'r1' href="events/events_a.php?a=Welcome_Party">Have a mooncake!</a></h2>
        <h3><a id = 'r2' href="events/">On Sept. 26th, Saturday, 7:00pm-9:00pm</a></h3>
        <h3 id = "r3"> See you at <u>Speed beach!</u></h3>
        <h2 id = 'r4'> Come and enjoy mooncake. How full it the moon tonight?</h2>
        <br class="visible-lg">
        <hr class="visible-lg">
    </div>
        
    <div class="inner_box col-xs-12 col-md-8">
        <img class='full' src="img/inforCard1.png">
        <img class='full' src="img/inforCard2.png">
    </div>
    <div class="inner_box col-xs-12 col-md-4">
        <img class='full' src="img/sleeve.jpg">
    </div>
    
</div>
    
<script src="lib/jssor.slider.min.js"></script>
<script src="lib/alphabet.js"></script>
<script src="lib/bubbles.js"></script>
    
<?php require('footer.php')?>   