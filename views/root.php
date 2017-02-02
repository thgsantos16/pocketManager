<?php

$html = new HtmlHelper;

?>

<div id="noModal">
	<div id="inner">
		<?=$html->link('root', 'img', array('src' => 'assets/img/logo.png', 'id' => 'logo'));?>
		
		<div id="root" ng-show="rootView">
		<?=$html->link('login', 'a', array('id' => 'loginButton'), 'Log in');?>
		<?=$html->link('register', 'a', array('id' => 'registerButton'), 'Register');?>
		</div>

		<?php 
		include "views/login.php";
		include "views/register.php";
		include "views/dashboard.php";
		?>
		
	</div>
</div>

<?php
//session_unset()
?>