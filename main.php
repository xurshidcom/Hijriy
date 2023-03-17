<?php 

include_once 'simple_html_dom.php';

function curlGetPage ($url, $referer='https://xurshid.com'){

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36');
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_REFERER, $referer);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);

	curl_close($ch);

	return $response;

}


$page = curlGetPage('https://islom.uz/kirill');
$html = str_get_html($page);


foreach ($html->find('.body_ds') AS $post) {

	$post0 = $post->find('.date_time', 0);
	

}


echo $post0;


// print_r($_SERVER);



 ?>