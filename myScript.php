<?php

$user_text = $_POST['text'];

echo $user_text . "<br>";
echo strlen($user_text) . "<br>";

$taboo_word = $_POST['word'];

$censor_text = str_replace($taboo_word, '***', $user_text);

echo $censor_text . "<br>";
echo strlen($censor_text) . "<br>";