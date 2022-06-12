<?php 
	exit;
	$ak_movie = kv_get('ak_movie');
	if($ak_movie['movie_index'] == 1){
		include _include(APP_PATH.'plugin/ak_movie/jiexi.php');
	}else{
		include _include(APP_PATH.'view/htm/index.htm');
	}
	exit;
?>

