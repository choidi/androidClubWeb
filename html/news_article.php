<?php
	include 'head.php'
?>
<?php
	$article = $_REQUEST["article"];

?>

<div class="container" >
	<ul class="tabs">
			<li><a href="about.php?pages=introduce">俱乐部简介</a></li>
			<li><a href="about.php?pages=rules">俱乐部章程</a></li>
			<li><a href="about.php?pages=trains">内部培训</a></li>
            <li class="active"><a href="news.php">新闻动态</a></li>
            <li><a href="teachers.php">指导老师</a></li>
            
     </ul>
	<?php
            $text = file("../contexts/about/news/$article/$article.txt");
        
            $i = 0;       
            if($i == 0){
                echo "<h1 style='text-align:center;'>".$text[0]."</h1><br/>";                
             }

        ?>

	<div id="slideshow" height="200px">

        <?php 
            $files = glob("../contexts/about/news/$article/img/");

            if(count($files) != 0){
            
        ?>
    

		<ul class="slides">
			<?php
				$files = glob("../contexts/about/news/$article/img/*");

				foreach($files as $each_file){					
						echo "<li><img src=$each_file width='620' height='320' /></li>";					
				}
				
			?>		
			
        </ul>
      <?php }?>

		<span class="arrow previous"></span>
		<span class="arrow next"></span>
	 </div>
        <p><?php
             foreach($text as $text_each){
                if(preg_match("/\\n/", $text_each) && $i != 0){
                     echo "<br/>";
                     echo $text_each;
                 }
                 $i++;
             }
            ?></p>
	
</div>
<?php
	include 'foot.php'
?>
