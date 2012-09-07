<?php
	include 'head.php'
?>
<div class="container" id="about_content">
	<ul class="tabs" id="tabs">
			<li><a href="about.php?pages=introduce">俱乐部简介</a></li>
			<li><a href="about.php?pages=rules">俱乐部章程</a></li>
			<li><a href="about.php?pages=trains">内部培训</a></li>
            <li class="active"><a href="news.php">新闻动态</a></li>
            <li><a href="teachers.php">指导老师</a></li>
            
     </ul>
	
	<ul style= "list-style-type:none; ">
		<?php
			$news_list = file("../contexts/about/news/list.txt");
			foreach($news_list as $each_news){
				$each_news_information = explode("|",$each_news);
		?>
				<li>
					<a href="<?= $each_news_information[2]?>"><?= $each_news_information[1]?></a>
					<span><?= $each_news_information[0]?></span>
				</li>
				<br/>
		<?php
			}
		?>
		
		
	</ul>
</div>
<?php
	include 'foot.php'
?>
