<?php 
!defined('DEBUG') AND exit('Access Denied.');
$action = param(3);

$movie_nav = param('movie_nav');
$movie_index = param('movie_index');

$ak_movie = kv_get('ak_movie');
if($method == 'GET') {

		$setting['gonggao'] = setting_get('gonggao');
		$setting['jiekou'] = setting_get('jiekou');
		$setting['mrjk'] = setting_get('mrjk');

if(empty($ak_movie)) {
	$ak_movie = array(
		'movie_nav'=>$movie_nav, 
		'movie_index'=>$movie_index, 
	);
	kv_set('ak_movie', $ak_movie);
}			
	

	$movie_nav = form_radio_yes_no('movie_nav',$ak_movie['movie_nav']);
	$movie_index = form_radio_yes_no('movie_index',$ak_movie['movie_index']);

	include _include(APP_PATH.'plugin/ak_movie/setting.htm');		
	} else {
		$ak_movie['movie_nav'] = param('movie_nav');
		$ak_movie['movie_index'] = param('movie_index');
		kv_set('ak_movie', $ak_movie);	
		setting_set('gonggao', param('gonggao', '', FALSE));
		setting_set('jiekou', param('jiekou', '', FALSE));
		setting_set('mrjk', param('mrjk', '', FALSE));
		
		message(0, '修改成功');
}
	



?>
