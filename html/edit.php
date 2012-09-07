<?php
    include 'head.php'

?>
<?php
    $login_name = $_POST["name"];
    $login_passwd = $_POST["password"];
   
    if(!($login_name == "admin" && $login_passwd == "androidclub")){
	print "no!";
    }
    else{
	$context_info = file("../contexts/");	
	
?>    
	<script language="javascript">
		function go_up(){
		 document.getElementById('new_up').innerHTML+='<input type="file" name="photoes[]" id="file" /><br/><br/>';
		}
	</script>
     <div class="container" id="about_content">
		<ul class="pills">
		  <li><a href="#">修改</a></li>
		  <li><a href="#">新添</a></li>
		  <li><a href="#">删除</a></li>
		</ul>
		<form action="handle_upload.php" method="post" enctype="multipart/form-data">
		<fieldset id="upload">
			目录:  	<select name="stackedSelect" id="stackedSelect">
				      <option> about</option>
				      <option> projects</option>
				      <option> shares</option>
				</select>
			<br/><br/>
			标题:	<input class="xlarge" id="xlInput3" name="title" type="text"/>
                        <br/><br/>
                        正文上传:       <input type="file" name="text" id="file" /> 
                        <br /><br />
			上传图片:	<input type="file" name="photoes[]" id="file" /> 
			<br/><br/>
			<div id="new_up"></div>
			
                        <input type="button" name="add_img" value="新增上传" onclick="go_up()"/><br/><br/>
			<input type="submit" value="ok"/> 
		</fieldset>
	</form>
	
		
     </div>

<?php
    }
?>
<?php
   include 'foot.php'
?>
