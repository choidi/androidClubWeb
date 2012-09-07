
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Android Club</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/turn.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-1.2.6.pack.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/script2.js"></script>
	<script type="text/javascript" src="js/jquery.rotate.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-darkness/jquery-ui.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.2.6.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/index.css" rel = "stylesheet">
      </head>

  <body>
         <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="index.php">Android Club</a>
          <ul class="nav"> 
            <li id="main"><a href="index.php">首页</a></li>
            <li id="about"><a href="html/about.php?pages=introduce">关于俱乐部</a></li>
            <li id="projects"><a href="html/projects.php">项目成果</a></li>
                        <li><a href="html/shares.php">资源共享</a></li>
                        <li><a href="http://eclc.sysu.edu.cn/mctl/mctl/about/">中山大学移动终端创新实验室</a></li>
                    </ul>
            <script>
          </script>
            

        </div>
      </div>
    </div>

	<div class="container" >

      <!-- Main hero unit for a primary marketing message or call to action -->
	  <div id="slideshow" height="200px">

        <ul class="slides">
          <?php
            $files = glob("html/img/photos/*");
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
						$news_list = file("contexts/about/news/list.txt");
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
    include 'html/foot.php'
?>
