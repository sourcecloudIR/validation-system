<?php
/*
Product Name :              oxoo
Version :                   1.3.3
URI :                       Sourcecloud.IR
Email :                     support@Sourcecloud.IR
Developer Team :            Codegraphi team
*/
function send_lis( $params ) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$params);
		$content = curl_exec($ch);
		$content = json_decode($content, true);

		return $content;
	}

function get_host() {
			$whitelist = array(
    '0.0.0.0',
	'127.0.0.1',
    '::1'
);
	if(in_array($_SERVER['SERVER_NAME'], $whitelist)){
		$host='localhost';
return trim($host);
}else{
		$possibleHostSources = array('HTTP_X_FORWARDED_HOST', 'HTTP_HOST', 'SERVER_NAME', 'SERVER_ADDR');
		$sourceTransformations = array(
			"HTTP_X_FORWARDED_HOST" => function($value) {
				$elements = explode(',', $value);
				return trim(end($elements));
			}
		);
		$host = '';
		foreach ($possibleHostSources as $source)
		{
			if (!empty($host)) break;
			if (empty($_SERVER[$source])) continue;
			$host = $_SERVER[$source] . $_SERVER['REQUEST_URI'];
			if (array_key_exists($source, $sourceTransformations))
			{
				$host = $sourceTransformations[$source]($host);
			}
		}




    	$host = preg_replace('/:\d+$/', '', $host);
	    $file_info = pathinfo($host);
        $host= isset($file_info['extension']) ? str_replace($file_info['filename'] . "." . $file_info['extension'], "", $host) : $host;
        $host=rtrim($host, '/');
		$host = str_ireplace('www.', '', $host);
		return trim($host);
		}
	}

?>