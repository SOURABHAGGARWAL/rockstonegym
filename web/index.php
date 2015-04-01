<?php 
include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.php';
	}
elseif ($page_name=='index.php?page=index') {
	include $browser_t.'/index.php';
	}
elseif ($page_name=='index.php?page=about') {
	include $browser_t.'/about.php';
	}
elseif ($page_name=='index.php?page=locator') {
	include $browser_t.'/locator.php';
	}
elseif ($page_name=='index.php?page=videos') {
	include $browser_t.'/videos.php';
	}
elseif ($page_name=='index.php?page=articles') {
	include $browser_t.'/articles.php';
	}
elseif ($page_name=='index.php?page=gym') {
	include $browser_t.'/gym.php';
	}
elseif ($page_name=='index.php?page=contact') {
	include $browser_t.'/contact.php';
	}
elseif ($page_name=='index.php?page=details') {
	include $browser_t.'/details.php';
	}
elseif ($page_name=='index.php?page=404') {
	include $browser_t.'/404.php';
	}
elseif ($page_name=='index.php?page=watch-video') {
	include $browser_t.'/watch-video.php';
	}
elseif ($page_name=='index.php?page=contact-post') {
	include 'app/contact.php';
	}
else{
	include $browser_t.'/index.php';
	}

?>
