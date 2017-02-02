<?php

session_start();

// Setting the Application
include "config/setup.php";
include "controls/main.php";
include "common/conn.php";

// Call the HTML
$page = new Routes;

include "common/header.php";

include "views/".$page->file.".php";

include "common/footer.php";


// Setting the Initialization
include "controls/session.php";