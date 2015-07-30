<?php require('../header.php');?>

<!-- Generate $tabs with contains information of photos in this page, 
    pictures() will be able to generate html for those photos -->
<?php

function showPicturesInDirectory($directory , $folder){
    $photosFormat = ['.jpg','.gif','.jpeg','.JPG'];
    $files = scandir($directory);
    $tabs = [];
    $photos = [];
    foreach($files as $name){
        $indexOfDot = strpos($name , '.');
        if($indexOfDot===FALSE){
            array_push($tabs , $name);
        }else{
            $extension = substr($name , $indexOfDot);
            if(in_array($extension , $photosFormat )){
                array_push($photos , $name);
            }
        }
    }
    if(count($tabs)===0){
        pictures($photos , $directory);
    }else{     
        echo '<ul class="nav nav-tabs" role="tablist">';
            if(count($photos)!==0){
                echo '<li class="active bar"><a href="#'.$folder.'" role="tab" data-toggle="tab">'.str_replace("_", " ", $folder).'</a></li>';
            }
            foreach($tabs as $name){
                echo '<li class="bar"><a href="#'.$name.'" role="tab" data-toggle="tab">'.str_replace("_", " ", $name).'</a></li>';
            }
        echo '</ul>';
        echo '<div class="tab-content">';
            if(count($photos)!==0){
                echo '<div class="active tab-pane fade in" id="'.$folder.'">';
                    pictures($photos , $directory);
                echo '</div>';
            }
            foreach($tabs as $name){
                echo '<div class="tab-pane fade" id="'.$name.'">';
                    showPicturesInDirectory($directory.'/'.$name , $name);
                echo '</div>';
            }
        echo '</div>';
    }
}

function pictures($files , $path){
    foreach($files as $f) {
        $p = $path.'/'.$f;
        $n = substr($f , 0 , strpos($f , '.') );
        $n = str_replace("_", " ", $n);//all _ in the name is interpreted as space.
?>
        <figure class='box col-sx-12 col-sm-6 col-md-4 col-lg-3'>
            <div class="thumbnail">
                <a href="<?=$p?>" title="<?=$n?>" data-gallery>
                    <img class="image" src="<?=$p?>" alt="<?=$n?>" width="270" height="200" />
                </a>
<!--                <figcaption class="caption"><?=$n?></figcaption>-->
            </div>
        </figure>
    
<?php }}?>


<div class="container">
    <?php showPicturesInDirectory('img' , 'Gallery');?>
</div>


<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.min.js"></script>
      
<?php require('../footer.php')?>