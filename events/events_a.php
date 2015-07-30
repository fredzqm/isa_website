<?php require('../header.php');?>
<div id="content" class="container content_box">
    <script>
        $("#content").load("details/"+<?=$_GET["activity"]?>+".html");
    </script>  
</div>
<?php require('../footer.php')?>