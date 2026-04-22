<?php
header('Content-Type: application/json; charset=utf-8');

$to      = 'cbsformation0@gmail.com';
$name    = htmlspecialchars($_POST['name']    ?? '');
$email   = htmlspecialchars($_POST['email']   ?? '');
$phone   = htmlspecialchars($_POST['phone']   ?? '');
$subject = htmlspecialchars($_POST['subject'] ?? 'Contact CBS Formation');
$message = htmlspecialchars($_POST['message'] ?? '');

if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Champs obligatoires manquants.']);
    exit;
}

$body  = "Nom : $name\nEmail : $email\nTelephone : $phone\n\nMessage :\n$message\n";
$headers = "From: $email\r\nReply-To: $email\r\n";
$sent = mail($to, "CBS Formation - $subject", $body, $headers);

echo json_encode(['success' => $sent]);
