<?php
require "inc/my-clean.php";
require "inc/my-add.php";
require "inc/my-theme-setting.php";
require "inc/my-meta-box.php";
require "inc/upgrade.php";
$xjpdf_update_checker = new ThemeUpdateChecker(
	'XJPDF',
	''
);