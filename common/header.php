<?php

$html = new HtmlHelper;

?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$page->title;?></title>
	<link href="assets/css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="assets/css/print.css" media="print" rel="stylesheet" type="text/css" />
	  <!--[if IE]>
	      <link href="/assets/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
	  <![endif]-->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

</head>
<body ng-app="pocketManager" ng-controller="pocketManagerController">

<header>
	<?=$html->link('dashboard', 'img', array('src' => 'assets/img/logo.png', 'id' => 'logoHeader'));?>	
	<h1>DASHBOARD</h1>
</header>

<main>