<?php
	session_start();
	include 'fonctions/config.php';
	include 'template/header.phtml';
?>
<section class="bloc title_text">
	<?php include_once("template/form_login.phtml");?></br>
	<div class="bloc_content">
		<h2>My_Meetic</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus nunc et leo sagittis, quis bibendum purus condimentum. 
		</p>
	</div>
	<div class="form_content">
		<?php include_once("template/form_register.phtml");?>
	</div>
</section>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="script/datepicker.js"></script>
<?php include 'template/footer.phtml';?>

