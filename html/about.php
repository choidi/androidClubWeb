<?php
   include 'head.php'
?>

<?php
    $page = $_REQUEST["pages"];
    $tags = array("introduce", "rules", "trains");
    $temp = "class = active";

?>
<div class="container" id="about_content">
	<ul class="tabs" id="tabs">
            <li id=<?= $tags[0]?> 
            <?php
                if ($tags[0] == $page){
                    echo $temp;
                }
            ?>><a href="#">俱乐部简介</a></li> 
            <li id=<?= $tags[1]?> 
            <?php
                if($tags[1] == $page){
                    echo $temp;
                }
            ?>><a href="#">俱乐部章程</a></li>
            <li id=<?= $tags[2]?>
            <?php
                if($tags[2] == $page){
                    echo $temp;
                }
            ?>
            ><a href="#">内部培训</a></li>
            <li><a href="news.php">新闻动态</a></li>
            <li><a href="teachers.php">指导老师</a></li>
        </ul>
        <?php
            $text = file("../contexts/about/$page.txt");
        
            $i = 0;       
            if($i == 0){
                echo "<h1>".$text[0]."</h1>";
                $image = "../contexts/about/".$page.".jpg";
                if(file_exists($image) != null){
                    echo "<img src=../contexts/about/".$page.".jpg>";
                }
             }

        ?>
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

<script>
	$(".tabs li").click(function(){
              var id = $(this).attr("id");
              location.href = '?pages='+id;

  			});
</script>
<?php
    include 'foot.php'
?>
