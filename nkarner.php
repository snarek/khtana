<!DOCTYPE HTML>
<html>
	<head>
		<?php include "header.php"; ?>
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
									echo '<a href="#myPopup" class="imagebox"><img src="img\\' . $row['hasce'] .'" /></a>';
							}
						}
					?>
					<div id ="myPopup">
						<a href="#artNkarner">
							<svg>
						   		<circle cx="95%" cy="15px" r="15px" stroke="white" stroke-width="3px" fill="black" />
							</svg>
						</a>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</article>
		<script>
		$(document).ready(function(){
			$("img").click(function()
				{
					var i='url(' + $(this).attr('src') +')';
					i=i.replace("\\", "/");
					$('#myPopup').css("background-image", i);
				});
		});
		</script>
	</body>
</html>
