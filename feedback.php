<!DOCTYPE HTML>
<html>
	<head>
		<?php require_once "header.php"; ?>
	</head>
	<body>
		<?php
			require_once "navigation.php";
		?>
		<article class="container">
			<div class="row" id="feedback">
				<div class="col-sm-1"></div>
					<div class="col-sm-6">
						<p>Մուտքագրեք միայն լատինատառ</p>
						<form action="feedback.php" method="post">
							<label for="anun">Անուն</label><input type="text" name="anun" id="anun" length=12 /><br>
							<label for="azganun">Ազգանուն</label><input type="text" name="azganun" id="azganun" length=12/><br>
							<label for="email">Email</label><input type="text" name="email" id="email" /><br>
							<label for="namak">Նամակ</label><textarea name="namak" id="namak" rows=6></textarea><br>
							<input type="submit" value="Ուղղարկել">
						</form>
					</div>
			</div>
		</article>
		<?php
			
			if (empty($_POST['anun']) && empty($_POST['azganun']) && empty($_POST['email']) && empty($_POST['namak']))
			{
				$message="<p class='errorMessage'>Դատարկ դաշտ չպետք է լինի</p>";
			}
			else
			{
				if (valText($_POST['anun']) && valText($_POST['azganun']) && valEmail($_POST['email']) && valText($_POST['namak']))
				{
					$anun=$_POST['anun'];
					$azganun=$_POST['azganun'];
					$email=$_POST['email'];
					$namak=$_POST['namak'];
					$message="<p class='successMessage'>Հաղորդագրությունը հաջողությամբ ուղղարկված ՝</p>";
					mail("admin@khtana.16mb.com", "message from $email", $namak, $anun . " " . $azganun);
				}
				else
				{
					$message="<p class='errorMessage'>Ճիշտ մուտքագրեք</p>";
				}
			}
			function valText($var)
			{
				if (preg_match("/^[a-zA-Z]*$/",$var)) {
					$bl=true;
				}
				else
				{
					$bl=false;
				}
				return $bl;
			}
			function valEmail($var)
			{
				if (filter_var($var, FILTER_VALIDATE_EMAIL)) {
					$bl = true;
				}
				return $bl;
			}
			echo $message;
		?>
	</body>
</html>
