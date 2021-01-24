<?php

// Load WP components, no themes
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

add_filter('wp_mail_content_type', 'set_html_content_type');

$FormName = $_POST['formname'];
$Name = $_POST['name'];
$Number = $_POST['number'];
$ClientEmail = $_POST['email'];
$CompanyName = $_POST['companyname'];

$subject = 'Форма(Страница/Программа): '.$FormName;
$message = '
<p><b>Форма(Страница/Программа):</b> '.$FormName.'</p>
<p><b>Как вас зовут?:</b> '.$Name.'</p>
<p><b>Ваш номер телефона:</b> '.$Number.'</p>
<p><b>Эл. почта, на которую вы хотите получить программу:</b> '.$ClientEmail.'</p>
<p><b>Название компании:</b> '.$CompanyName.'</p>
';

$to = 'stasifish@gmail.com';

$headers = 'From: ABC-Technology <site@example.com>' . "\r\n";

$mail = wp_mail($to, $subject, $message, $headers);
remove_filter('wp_mail_content_type', 'set_html_content_type');
function set_html_content_type() {
	return 'text/html';
}
?>