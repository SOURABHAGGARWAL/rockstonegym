<?php 
include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='index.php?page=index') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='index.php?page=about') {
	include $browser_t.'/about.html';
	}
elseif ($page_name=='index.php?page=service') {
	include $browser_t.'/service.html';
	}
elseif ($page_name=='index.php?page=blog') {
	include $browser_t.'/blog.html';
	}
elseif ($page_name=='index.php?page=contact') {
	include $browser_t.'/contact.html';
	}
elseif ($page_name=='index.php?page=details') {
	include $browser_t.'/details.html';
	}
elseif ($page_name=='index.php?page=details') {
	include $browser_t.'/404.html';
	}
elseif ($page_name=='index.php?page=contact-post') {
	include 'app/contact.php';
	}
else{
	include $browser_t.'/index.html';
	}

?>
