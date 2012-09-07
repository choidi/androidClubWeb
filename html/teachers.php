<?php
	include 'head.php'
?>
<div class="container">
	<ul class="tabs" id="tabs">
			<li><a href="about.php?pages=introduce">俱乐部简介</a></li>
			<li><a href="about.php?pages=rules">俱乐部章程</a></li>
			<li><a href="about.php?pages=trains">内部培训</a></li>
            <li><a href="news.php">新闻动态</a></li>
            <li class="active"><a href="teachers.php">指导老师</a></li>
            
        </ul>
     <div class="hero-unit">
		<img src="http://ss.sysu.edu.cn/~ln/res/img/me.jpg" class="teacher_image"/>	
		<div id="teacher_introduce">
			<h2 >刘宁<h2>
			<h3>个人简介</h3>
			<ul>
			<li>博士，副教授</li>
			<li>硕士生导师：
				<ul>
					<li>软件学院 软件工程</li>
					<li>信科学院 计算机应用</li>
				</ul>
			</li>
			</ul>
			<h3>研究兴趣</h3>
			<ul>
				<li>
				<h4 >智能多媒体处理与分析</h4>
				<span>视频/图像处理与智能分析关键技术，主要围绕包括嵌入式设备在内的数字视频/图像分析技术、无线环境下视频传输技术及相关产品进行研究与开发</span>
				</li>
				<li>
				<h4>对等网络中多媒体传输技术</h4>
				<span>研究在对等网络（P2P）环境下，基于数字电视平台和互联网络中的可扩展视频传输、编码关键技术及产品</span>
				<li>
				<h4>移动终端软件开发技术</h4>
				<span>依托“中山大学-谷歌手机平台应用开发实验室”，研发移动环境中Android平台下软件开发技术</span>
				</li>
			</ul>
			<h3>个人主页:</h3><a href="http://ss.sysu.edu.cn/~ln/">http://ss.sysu.edu.cn/~ln/</a>
		</div>
	</div>
    <div class="hero-unit">
		<img src="http://ss.sysu.edu.cn/~zk/images/home_1_00.png" class="teacher_image"/>	
		<div id="teacher_introduce">
			<h2 >曾坤<h2>
			<h3>个人简介</h3>
			<ul>
			<li>博士</li>
			<li>讲师,研究生导师</li>
			</ul>
			<h3>研究兴趣</h3>
			<ul>
				<li>
				<h4 >数字图像与艺术</h4>
					<ul>
						<li>计算机美学</li>
						<li>数字艺术</li>
						<li>卡通动画</li>
						<li>图像与视频风格化</li>
					</ul>
				</li>
				<li>
				<h4 >计算机视觉与机器学习</h4>
					<ul>
						<li>对象识别</li>
						<li>稀疏编码与应用</li>						
					</ul>
				</li>
			</ul>
			<h3>个人主页：</h3><a href="http://ss.sysu.edu.cn/~zk/">http://ss.sysu.edu.cn/~zk/</a>
		</div>
	</div>
</div>

<style>

.teacher_image{
	float:right;
	clear:left;
	width:170px;
	height:250px;

}

#teacher_introduce h2{
	text-shadow: 4px 4px 4px #aaa;
}
#teacher_introduce img{
	float:left;
}
#teacher_introduce ul{
list-style-type:none; 
}






</style>
<?php
	include 'foot.php'
?>
