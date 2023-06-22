<?php

ob_start();

if(basename($_SERVER['SCRIPT_FILENAME']) == 'cf.php'){
	header('location: index.php');
}

function passLogin(){
	if(isset($_COOKIE['username'])){
		header('location: home.php');
	}
}

function loggedIn(){
	if(!isset($_COOKIE['username'])){
		header('location: index.php');
	}
}

function connect(){
	mysql_connect('localhost','root','');
	mysql_select_db('image_share');
}

function checkGallery(){
	connect();
	$select_gallery = mysql_query("SELECT name FROM gallery");
	
	echo "<ol>";
	while($get_gallery = mysql_fetch_assoc($select_gallery)){
		$gallery = $get_gallery["name"];
		echo "<li>";
		echo '<a href="upload.php?gallery=' . $gallery. '">' . $gallery . '</a><br />';
		echo "</li>";
	}
	echo "</ol>";
}

function createGa(){
	$new_gallery = @$_POST['new_gallery'];
	$check_gallery_av = mysql_query("SELECT name FROM gallery WHERE name='$new_gallery'");
	
	if(isset($_POST['create'])){
		if($new_gallery != ""){
			if(strpbrk($new_gallery,' ')){
				echo 'The gallery name can not contain spaces.';
			} else{
				if(strlen($new_gallery)>25){
					echo 'Gallery name too long';
				} else{
					if(mysql_num_rows($check_gallery_av)==1){
						echo "The name of your gallery is alreadi in use.";
					} else{
						$insert_query = mysql_query("INSERT INTO gallery VALUES ('','$new_gallery')");
						if($insert_query){
							if(mkdir("images/" . $new_gallery,0777)){
								echo "The gallery has been created.";
								echo "<meta http-equiv=\"refresh\" content=\"3; url=as.php\">";
							}
						}
					}
				}
			}
		} else if($new_gallery == ""){
			echo "The gallery name can't be blank.";
		}
	}
}

function uploadScript(){
	$gallery_name = @$_GET['gallery'];
	
	echo '
			<form action="" method="post" enctype="multipart/form-data">
			
			<input type="file" name="images" />
			<input type="submit" name="upload" value="" class="submitb" />
			
			</form>
		';
	
	if(isset($_FILES['images'])){
		$ext = @$_FILES['images']['name'];
		$ext = strtolower($ext);
		$ext_split = explode('.',$ext);
		$ext_split_f = @$ext_split[1];
		
		if($ext_split_f == "jpg" || $ext_split_f == "gif" || $ext_split_f == "png"){
			if(move_uploaded_file($_FILES['images']['tmp_name'],'images/'.$gallery_name.'/'.$ext)){
				if($ext_split_f == "png"){
					$dir = "images/" . $gallery_name . "/";
					opendir($dir);
					$img = imagecreatefrompng("images/" . $gallery_name . "/" . $ext);
					
					$width_img = imagesx($img);
					$height_img = imagesy($img);
					
					$new_height = 150;
					$new_width = floor($width_img * ($new_height/$height_img ));
					
					$tmp_img = imagecreatetruecolor($new_width,$new_height);
					
					imagecopyresized($tmp_img,$img,0,0,0,0,$new_width,$new_height,$width_img,$height_img);
					
					$new_fname = $ext_split[0] . "_thumb.png";
					
					$dir_name = "images/" . $gallery_name . "/Thumbs/";
					
					if(!file_exists($dir_name)){
						mkdir($dir_name);
					}
					
					imagepng($tmp_img,"images/" . $gallery_name . "/Thumbs/" .$new_fname);
					
					@closedir($dir);
					echo 'The image you selected has been uploaded.';
				}
				
				if($ext_split_f == "jpg"){
					$dir = "images/" . $gallery_name . "/";
					opendir($dir);
					$img = imagecreatefromjpeg("images/" . $gallery_name . "/" . $ext);
					
					$width_img = imagesx($img);
					$height_img = imagesy($img);
					
					$new_height = 150;
					$new_width = floor($width_img * ($new_height/$height_img ));
					
					$tmp_img = imagecreatetruecolor($new_width,$new_height);
					
					imagecopyresized($tmp_img,$img,0,0,0,0,$new_width,$new_height,$width_img,$height_img);
					
					$new_fname = $ext_split[0] . "_thumb.jpg";
					
					$dir_name = "images/" . $gallery_name . "/Thumbs/";
					
					if(!file_exists($dir_name)){
						mkdir($dir_name);
					}
					
					imagejpeg($tmp_img,"images/" . $gallery_name . "/Thumbs/" .$new_fname);
					
					@closedir($dir);
					echo 'The image you selected has been uploaded.';
				}   
					
				if($ext_split_f == "gif"){
					$dir = "images/" . $gallery_name . "/";
					opendir($dir);
					$img = imagecreatefromgif("images/" . $gallery_name . "/" . $ext);
					
					$width_img = imagesx($img);
					$height_img = imagesy($img);
					
					$new_height = 150;
					$new_width = floor($width_img * ($new_height/$height_img ));
					
					$tmp_img = imagecreatetruecolor($new_width,$new_height);
					
					imagecopyresized($tmp_img,$img,0,0,0,0,$new_width,$new_height,$width_img,$height_img);
					
					$new_fname = $ext_split[0] . "_thumb.gif";
					
					$dir_name = "images/" . $gallery_name . "/Thumbs/";
					
					if(!file_exists($dir_name)){
						mkdir($dir_name);
					}
					
					imagegif($tmp_img,"images/" . $gallery_name . "/Thumbs/" .$new_fname);
					
					@closedir($dir);
					echo 'The image you selected has been uploaded.';
				}
			} else{
				echo 'There was an error while uploading the image.';
			}
		} else{
			echo 'The file format of the file you tried to upload is not supported.';
		}
	}
}

function viewGalleryList(){
	connect();
	$select_gallery = mysql_query("SELECT name FROM gallery");
	
	echo "<ol style='margin-bottom: 30px;'>";
	while($get_gallery = mysql_fetch_assoc($select_gallery)){
		$gallery = $get_gallery["name"];
		echo "<li>";
		echo '<a href="view.php?gallery=' . $gallery. '">' . $gallery . '</a><br />';
		echo "</li>";
	}
	echo "</ol>";
}

?>