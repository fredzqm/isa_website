<?php require('header.php')?>        
        
<div class="container content_box">
    <h1 id="canvasText" style="display:none;">Welcome to Rose-Hulman!</h1>
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
        <div id= "aside" class="inner_box col-xs-12 col-md-6 col-lg-6">
            <h2><a href="events/details/welcome_party.php">Welcome Party!!</h2>
            <ul>
                <a href="http://www.rose-hulman.edu/offices-and-services/student-life/orientation/international-students.aspx" target="_blank">
                    <li>2015 International student orientation schedule</li>
                </a>
                <a href="http://www.rose-hulman.edu/offices-and-services/registrar/calendars-schedules/2015-16-calendar.aspx" target="_blank">
                    <li>Academic scedule</li>
                </a>
                <a href="#"><li>Airport pick-up information</li></a>
                <a href="http://www.rose-hulman.edu/intranet.aspx" target="_blank"><li>Intranet, every site you will need in Rose</li></a>
            </ul>
            <hr>

            <div class="inner_box">


            </div>
        </div>
</div>
    
<script src="lib/jssor.slider.min.js"></script>
<script src="lib/alphabet.js"></script>
<script src="lib/bubbles.js"></script>
    
<?php require('footer.php')?>   