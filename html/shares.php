<?php
	include 'head.php'
?>
<div class="container-fluid">
      <div class="sidebar">
        <div class="well">
         
          <ul>
            <li><a href="shares.php">书籍下载</li><br/>
            <li><a href="sites_in_school.php">校内相关</a></li><br/>
            <li><a href="official_sites.php">官方网站</a></li><br/>
            <li><a href="development_sites.php">开发相关</a></li><br/>
            <li><a href="forums.php">论坛&社区</a></li>
          </ul>
          
        </div>
      </div>
      <div class="content">
        <!-- Main hero unit for a primary marketing message or call to action -->
	    <?php
	    	$share_name  = glob("../contexts/shares/*");

	    	foreach($share_name  as $each_share){
	    		$each_share_name  =  basename($each_share);	
	    		$_pdf_name  = glob($each_share."/*.pdf");
                $_img_name  = glob($each_share."/*.jpg");
                $text = file($each_share."/".$each_share_name.".txt");
    	?>
	    	<div  style="clear:both; margin-top:10px;" >
	        	<div  class="share_left">
		
	        	<a  href="../contexts/shares/<?= $each_share_name?>/<?= $_pdf_name?>"><img src="../contexts/shares/<?= $each_share_name?>/<?= basename($_img_name[0])?>" width="150" height="200"></a>
		
	    	    </div>

		        <div  class="share_right">
	            	<h3><a  href="<?= $_pdf_name[0]?>" ><?= basename($text[0]) ?></a></h3>
	            </div>

            <br/><br/>
	    <?php  }?>
        </div>
        
        
       </div>
</div>
       
<div class="container">

</div>


<?php
	include 'foot.php'
?>
