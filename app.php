<?php
session_start();

if(!isset($_SESSION['company'])){
	$_SESSION['company']=1;
}


$http_host = 'http://'. (substr($_SERVER['HTTP_HOST'],-1)=='/' ? substr($_SERVER['HTTP_HOST'], 0,-1) : $_SERVER['HTTP_HOST']);
$doc_root = substr($_SERVER['DOCUMENT_ROOT'],-1)=='/' ? substr($_SERVER['DOCUMENT_ROOT'], 0,-1) : $_SERVER['DOCUMENT_ROOT'];
$url = str_replace($doc_root, '', str_replace('\\', '/', realpath(dirname(__file__))));

$baseUrl = $http_host . (substr($url,-1)=='/' ? $url : $url.'/');
function is_active($names){
	$filename = str_replace('.php','',basename($_SERVER['PHP_SELF']));
	$name = explode(',',$names);
	return in_array($filename,$name) ? true : false;
	
}
$expire = time()+(60*60*24*1);
setcookie("desimals", 2, $expire);
setcookie("des_sep", '.', $expire);
setcookie("val_sep", ',', $expire);
setcookie("baseurl", 'http://localhost/eccountant/html', $expire);


$from 	= isset($_GET['from']) ? date('d-m-Y', strtotime($_GET['from'])): date('01-m-Y', time()) ;
$to 	= isset($_GET['to']) ? date('d-m-Y', strtotime($_GET['to'])): date('d-m-Y', time()) ;

//var desimals='2',des_sep='.',val_sep=',',baseurl='http://localhost/eccountant/new-dev/';
?>