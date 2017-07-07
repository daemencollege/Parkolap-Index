<?php
if($_POST['update_content'] == "Update Content"){
	$update_content_sql = "
		UPDATE
			`index`.`bricks`
		SET
			`title` = '" . $_POST['content_title'] . "',
			`content` = '" . $_POST['content_text'] . "'
		WHERE
			`id` = '1'
	";
	mysqli_query($db, $update_content_sql) or die(mysqli_error($db)); 
	
}

if($_POST['update_style'] == "Update Style"){
	$update_style_sql = "
		UPDATE
			`index`.`bricks`
		SET
			`size` = '" . $_POST['size'] . "',
			`background_color` = '" . $_POST['background_color'] . "'
		WHERE
			`id` = '1'
	";
	mysqli_query($db, $update_style_sql) or die(mysqli_error($db)); 
	
}

$info_sql = "
	SELECT	
		*
	FROM
		`index`.`bricks`
	WHERE
		`id` = '1'
";
$info_query = mysqli_query($db, $info_sql) or die(mysqli_error($db)); 
$info = mysqli_fetch_assoc($info_query); 

?>

<style>

.alignment {
	display: inline-block; 
	width: 150; 
}

input, textarea, select {
	margin: 5px; 
}

#background_color:hover, #background-color:active {
	outline: none; 
	outline-color: none; 
}

option:hover {
	background-color: none; 
}



.portrait {
	width: 140px;
	height: 300px; 
}
.landscape {
	width: 300px; 
	height: 140px; 
}
.large {
	width: 300px; 
	height: 300px;
}
.small {
	width: 140px; 
	height: 140px; 
}

</style>

<h1> Brick Content Management </h1>

<div style="float: left" >
	<h2> Content </h2>
		<?php
		$find_content_sql = "
			SELECT
				`title`,
				`content`
			FROM
				`index`.`bricks`
			WHERE
				`id` = '1'
		";
		$find_content_query = mysqli_query($db, $find_content_sql) or die(mysqli_error($db)); 
		$find_content = mysqli_fetch_assoc($find_content_query); 
		
		?>
		<form method="post">
			<b><span class="alignment"> Title: </span></b>
				<input id="content_title" name="content_title" type="text" value="<?php print $info['title']; ?>" /></br>
			<b><span class="alignment"> Information: </span></b>
				<textarea id="content_text" name="content_text" /><?php print $info['content']; ?></textarea></br>
			<span class="alignment"></span><input type="submit" id="update_content" name="update_content" value="Update Content" />
		</form>

	<h2> Style </h2>

		<form method="post">
			<b><span class="alignment"> Size: </span></b>
				<select id="size" name="size" >
					<option value="small" <?php if($info['size'] == "small"){ ?> selected <?php } ?> > Small </option>
					<option value="large" <?php if($info['size'] == "large"){ ?> selected <?php } ?> > Large </option>
					<option value="portrait" <?php if($info['size'] == "portrait"){ ?> selected <?php } ?> > Portrait </option>
					<option value="landscape" <?php if($info['size'] == "landscape"){ ?> selected <?php } ?> > Landscape </option>
				</select></br>
			<b><span class="alignment"> Background Color: </span></b>
				<select id="background_color" name="background_color" style="width: 200px; " >
					<option value="#AC725E" style="background-color: #AC725E; " <?php if($info['background_color'] == "#AC725E"){ ?> selected <?php } ?> > Brown </option>
					<option value="#F83A22" style="background-color: #F83A22; " <?php if($info['background_color'] == "#F83A22"){ ?> selected <?php } ?> > Red </option>
					<option value="#FF7537" style="background-color: #FF7537; " <?php if($info['background_color'] == "#FF7537"){ ?> selected <?php } ?> > Orange </option>
					<option value="#FFAD46" style="background-color: #FFAD46; " <?php if($info['background_color'] == "#FFAD46"){ ?> selected <?php } ?> > Yellow-Orange </option>
					<option value="#42D692" style="background-color: #42D692; " <?php if($info['background_color'] == "#42D692"){ ?> selected <?php } ?> > Teal </option>
					<option value="#7BD148" style="background-color: #7BD148; " <?php if($info['background_color'] == "#7BD148"){ ?> selected <?php } ?> > Green </option>
					<option value="#FBE983" style="background-color: #FBE983; " <?php if($info['background_color'] == "#FBE983"){ ?> selected <?php } ?> > Yellow </option>
					<option value="#92E1C0" style="background-color: #92E1C0; " <?php if($info['background_color'] == "#92E1C0"){ ?> selected <?php } ?> > Torquoise </option>
					<option value="#9FE1E7" style="background-color: #9FE1E7; " <?php if($info['background_color'] == "#9FE1E7"){ ?> selected <?php } ?> > Blue </option>
					<option value="#9A9CFF" style="background-color: #9A9CFF; " <?php if($info['background_color'] == "#9A9CFF"){ ?> selected <?php } ?> > Purple </option>
					<option value="#C2C2C2" style="background-color: #C2C2C2; " <?php if($info['background_color'] == "#C2C2C2"){ ?> selected <?php } ?> > Grey </option>
					<option value="#F691B2" style="background-color: #F691B2; " <?php if($info['background_color'] == "#F691B2"){ ?> selected <?php } ?> > Pink </option>
				</select></br>
			<span class="alignment"></span><input type="submit" id="update_style" name="update_style" value="Update Style" />
		</form>
</div>
<div id="preview" name="preview" style="float: right; " >
	
	<center><b><?php print $info['title']; ?></b></center></br>
	<?php print $info['content']; ?>
	
</div> 
<script type="text/javascript" >

var div = document.getElementById("preview"); 
div.style.backgroundColor = document.getElementById("background_color").value; 
div.className += document.getElementById("size").value; 

/* if(document.getElementById("size").value == "large"){
	div.style.width = "300px"; 
	div.style.height = "300px"; 
}
if(document.getElementById("size").value == "small"){
	div.style.width = "140px"; 
	div.style.height = "140px"; 
} */

</script>