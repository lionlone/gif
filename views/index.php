<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>GIPHY</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
 
<body>
	<div class="wrapper">
		<div class="content">
			<div class="header">
				<div class="top">
					<div class="logo">
						<img class="logo-img" src="images/giphy_logo_laser.gif" />
						<h1>GIPHY</h1>
					</div>
					<div class="top-menu">
						<ul>
							<li><a href="controller/upload.php">Upload</a></li>
							<li><a href="controller/sign.php">Create</a></li>
							<li><a href="<?=$login_link;?>"><?=$login;?></a><?=$logout;?></li>
						</ul>
					</div>
					
				</div>
				<div class="nav">
					<ul>
						<li><a href="">CATEGORIES</a></li>
						<li><a href="">stickers</a></li>
						<li><a href="">artists</a></li>
						<li><a href="">giphy tv</a></li>
						<li><a href="">favorites</a></li>
					</ul>
				</div>
			</div>
			<div class="main-content">
				<div class="item">
                            <?php 
                            $arr[] = "";
                                while($row = $demo->fetch()){
                                    //print_r($row);
                                    //echo "<br />";
                                    array_push ($arr, $row);
                                }
                                array_shift ($arr);
                                //print_r($arr);
                                foreach($arr as $vale){
                                    echo $vale["title_img"];
                                    //print_r($vale);
                                    echo "<br />";
                                }
                            ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>