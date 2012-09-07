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

<body>

<div id="slideShowContainer">
	
    <div id="slideShow">
    
    	<ul>
        	<li><img src="img/photos/1.jpg" width="100%" alt="Fish" /></li>
            <li><img src="img/photos/2.jpg" width="100%" alt="Ancient" /></li>
            <li><img src="img/photos/3.jpg" width="100%" alt="Industry" /></li>
            <li><img src="img/photos/4.jpg" width="100%" alt="Rain" /></li>
        </ul>
    
    </div>
    
    <a id="previousLink" href="#">&raquo;</a>
    <a id="nextLink" href="#">&laquo;</a>
    
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="js/jquery.rotate.js"></script>
<script src="js/script.js"></script>

</body>
</html>
<?php
	include 'foot.php'
?>
