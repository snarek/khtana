<!DOCTYPE HTML>
<html>
	<head>
		<?php include "header.php"; ?>
		<script src="script.js"></script>
	</head>
	<body>
		<?php require_once "navigation.php"; ?>
		<article class="container">
			<div class="row" id="artNkarner">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<h2>Նկարներ</h2>
					<?php
						require_once 'connect.php';
						$query="SELECT * FROM nkarner";
						$result=$connect->query($query);
						if ($result){
							while($row=$result->fetch_assoc()){
									echo '<div class="imagediv">
											<img src="img\\' . $row['hasce'] .'" class="imagebox"  onclick="forImage(this)" alt="' . $row['anun'] . '"/>
										  </div>';
							}
						}
					?>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</article>
		<div id="popup" onclick="forImageHide()"><h4 id="imageTitle"></h4><img id="popupimage" /></div>
	</body>
</html>
