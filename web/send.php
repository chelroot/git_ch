<?php
foreach ($_GET as $check_url) {
	if ((eregi("<[^>]*script*\"?[^>]*>", $check_url)) || (eregi("<[^>]*object*\"?[^>]*>", $check_url)) ||
		(eregi("<[^>]*iframe*\"?[^>]*>", $check_url)) || (eregi("<[^>]*applet*\"?[^>]*>", $check_url)) ||
		(eregi("<[^>]*meta*\"?[^>]*>", $check_url)) || (eregi("<[^>]*style*\"?[^>]*>", $check_url)) ||
		(eregi("<[^>]*form*\"?[^>]*>", $check_url)) || (eregi("\([^>]*\"?[^)]*\)", $check_url)) ||
		(eregi("\"", $check_url))) {
	die ();
	}
}
unset($check_url);
// сюда вписываем адрес получателя
$my_email = "vova@salomatin.ru";
// ---------------------- //
// $text = "email-отправителя:";
$topemail = $_POST['topemail'];
$middleemail = $_POST['middleemail'];
$footeremail = $_POST['footeremail'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$title = "Заявка с it.site.camera";
// if ($email=="") {
// 	$text = "";
// }
if ($topemail == true) {
	$email = $topemail;
	$type = "E-mail";
	$tip = "Заявка на подключение камеры";
}
if ($middleemail == true) {
	$email = $middleemail;
	$type = "E-mail";
	$tip = "Заявка на подключение камеры";
}
if ($footeremail == true && $message == true) {
	$email = $footeremail;
	$type = "E-mail";
	$tip = "Вопрос клиента: ".$message;
}
if ($phone == true) {
	$type = "Телефон";
	$tip = "Просьба перезвонить";
}
$mess = "$type: $email\n $phone\n $tip";

$header ='From: info@site.camera'."\n";
$header .='Content-Type: text/html; charset="utf-8"'."\n";
$header .="Content-Transfer-Encoding: 8bit\n";

mail( $my_email , $title , $mess , $header);
echo json_encode(array("status"=>"OK"));

?>