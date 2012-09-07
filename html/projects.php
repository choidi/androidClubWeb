<!doctype html>
<?php
	include 'head.php'
?>

<?php
    $year = glob("../contexts/projects/*");
    rsort($year);
    $year_num = count($year);
	$page = 2 + $year_num ;
?>

<h5>俱乐部的成员组成各个小组，一起开发项目，并在多个比赛中获得不错的成绩，以下是作品的展示。</h5>
<button class="btn primary" id="catalog" style="float:right;left:400px">回到目录</button>
<br/><br/>
<div class = "container pages shadows" id='magazine' style = "position:relative">
	<div style="background-image:url(texture.jpg);"><h1 id="cover">Google Android 俱乐部</h1></div>
	<?php
		foreach($year as $each_year){
                $_each_year = basename($each_year);  
				$project_name = glob($each_year."/*");
				$each_year_project_num = count($project_name);
                echo "<div style='background-image:url(texture.jpg);'><h1
                        id='each_project_title'
                        style='font-family:serif'>".$_each_year."年度的项目</h1><br/>
						<ul style='list-style-type:none;'>";
				foreach($project_name as $each_project){
                  $each_project_name = basename($each_project);
                    $text = file($each_project."/".$each_project_name.".txt");
					echo "<li id = $page><img id='icon'src='$each_project/icon.png'/>".$text[0]."------------------------------".$page."</li><br/>";	
					$page = $page + 2;
				}
				echo"</ul></div>";
		}
	?>
		
        <?php
            foreach($year as $each_year){
                $_each_year = basename($each_year);                              
				$project_name = glob($each_year."/*");
				
			
			foreach($project_name as $each_project){
	?>
				<div style="background-image:url(back.png);">
				<?php					
					$each_project_name =  basename($each_project);
					$text = file($each_project."/".$each_project_name.".txt");
					$i = 0;       
					if($i == 0){
						  echo "<h1 id='each_project_title'style='color:#404045'>".$text[0]."</h1>";
					}
				
				?>
				 <?php
				      foreach($text as $text_each){
					if(preg_match("/<*>/", $text_each) && $i != 0){
					  echo"<p id='each_project_content' style='font-weight:bold'>".$text_each."</p>";
						
					}
					else if(preg_match("/http\\n/", $text_each) && $i != 0){
					  echo "<a id='each_project_content' href='>".$text_each."'></a>";

					}
					else if(preg_match("/\\n/", $text_each) && $i != 0){
						 echo "<p id='each_project_content'>".$text_each."</p>";
					}
					  $i++;
				     }
				?>
		
				</div>

				<div style="background-image:url(back.png);" id="project_image">
					<div id="gallery">		
					<?php

					/* Configuration Start */

					$thumb_directory = $each_project;
					$orig_directory = $each_project;

					$stage_width=400;	// How big is the area the images are scattered on
					$stage_height=400;

					/* Configuration end */

					$allowed_types=array('jpg','jpeg','gif','png');
					$file_parts=array();
					$ext='';
					$title='';
					$i=0;

					/* Opening the thumbnail directory and looping through all the thumbs: */

					$dir_handle = @opendir($thumb_directory) or die("There is an error with your image directory!");

					while ($file = readdir($dir_handle)) 
					{
						/* Skipping the system files: */
	
                      $file_parts = explode('.',$file);
                      
                      $ext = strtolower(array_pop($file_parts));
						/* Using the file name (withouth the extension) as a image title: */
                      $title = implode('.',$file_parts);
                    
					  $title = htmlspecialchars($title);

						/* If the file extension is allowed: */	
						if(in_array($ext,$allowed_types) )
						{
							/* Generating random values for the position and rotation: */
							$left=rand(120,$stage_width);
							$top=rand(80,400);
							$rot = rand(-40,40);
		
							if($top>$stage_height-130 && $left > $stage_width-230)
							{
								/* Prevent the images from hiding the drop box */
								$top-=120+130;
								$left-=230;
							}
		
							/* Outputting each image: */
							echo '
							<div id="pic-'.($i++).'" class="pic" style="top:'.$top.'px;left:'.$left.'px;background:url('.$thumb_directory.'/'.$file.') no-repeat 50% 50%; -moz-transform:rotate('.$rot.'deg); -webkit-transform:rotate('.$rot.'deg);">
							<a class="fancybox" rel="fncbx" href="'.$orig_directory.'/'.$file.'" target="_blank">'.$title.'</a>
							</div>';
						}
					}

					/* Closing the directory */
					closedir($dir_handle);

					?>
				</div>
				</div>
			<?php 
				}
			} ?>
	 <div style="background-image:url(09.jpg)"><h1 id="cover">Google Android 俱乐部<br/><br/>欢迎你的加入！</h1></div>

</div>


<script type="text/javascript">
	$('li').click(function(){
		var id = $(this).attr("id");
		$('#magazine').turn('page', parseInt(id));
	});
	$('#catalog').click(function(){
			$('#magazine').turn('page',2);
		}
	);
	$('#magazine').bind('turned', function(e, page) {
		console.log('Current view: ', $('#magazine').turn('view'));
	})

	$('#magazine').turn({acceleration: true, shadows: true, duration:400});


</script>

<?php
	include 'foot.php'
?>
