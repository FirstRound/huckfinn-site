<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$letter = '<html><body>';
$letter = '<p>You\'ve received message from visitor on the <a href="http://'.$_SERVER['HTTP_HOST'].'" target="_blank">Huckfinn site</a>.</p>';
$letter .= '<p><strong>Name:</strong> ' . $name . '</p>';
$letter .= '<p><strong>Email:</strong> '.$email.'</p>';
if ($subject) {
    $letter .= '<p><strong>Subject:</strong> '.$subject.'</p>';
}
if ($message) {
    $letter .= '<p><strong>Message:</strong> '.$message.'</p>';
}
$letter .= '</body></html>';

mail('info@huckfinn.com', 'Message from visitor | Huckfinn', $letter, 'Content-type: text/html; charset=utf-8')

?>