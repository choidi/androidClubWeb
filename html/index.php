
<?php 
   include 'head.php'
?>

	<div class="container" >

      <!-- Main hero unit for a primary marketing message or call to action -->
	  <div id="slideshow" height="200px">

        <ul class="slides">
          <?php
            $files = glob("img/photos/*");
            foreach($files as $each_file){
              echo "<li><img src=$each_file width='620' height='320'></li>";
             }
          ?>
		</ul>

		<span class="arrow previous"></span>
		<span class="arrow next"></span>
	 </div>

      <!-- Example row of columns -->
      <div class="row" style="margin-top:40px">
		    <div class="span8">
		      <h2>Android Club</h2>
		      <p style="line-height:200%;">Google Android手机俱乐部隶属中山大学学生软件技术发展中心，于2010年4月1日正式成立，以中山大学与Google公司共建的“手机平台应用开发实验室”为依托，主要开展Google Android手机软件的研究与开发、相关课程以及实训课题的设计、对外技术培训等活动</p>
		      
		    </div>
		    <div class="span8">
		      <h2>新闻动态</h2>
				<ul style= "list-style-type:none; ">
					<?php
						$i = 0;
						$news_list = file("../contexts/about/news/list.txt");
						foreach($news_list as $each_news){
							if($i > 2)
								break;
							$each_news_information = explode("|",$each_news);
					?>
							<li>
								<a href="<?= $each_news_information[2]?>"><?= $each_news_information[1]?></a>
								<span><?= $each_news_information[0]?></span>
							</li>
							
					<?php
							$i++;
						}
					?>
					
				</ul>
				<a class="btn" href="news.php">更多信息</a>
		   </div>
		   
      </div>

<style>
span{
	display:block;
	color: #999;
	font-size: 12px;
	text-align: right;
}
</style>
<?php
    include 'foot.php'
?>
