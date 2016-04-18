<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Landing Framework - Test">
		<title>My_Meetic</title>
		<link rel="stylesheet" href="css/index.css"/>
	</head>

	<body>
		<section class="bloc title_text">
		<?php include_once("form_login.phtml");?></br>
			<div class="bloc_content">
				<h2>My_Meetic</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus nunc et leo sagittis, quis bibendum purus condimentum. 
				</p>
			</div>
			<div class="form_content">
			<?php include_once("form_register.phtml");?>
			</div>
		</section>
	</body>
</html>

