<?php require('../header.php');?>
<div id="content" class="container content_box">  
</div>
<script>
       $("#content").load( "details/"+'<?=$_GET["a"] ?>'+".html" );

</script>
<?php require('../footer.php')?>