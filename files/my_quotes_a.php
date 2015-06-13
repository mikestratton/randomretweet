<?php

$d1 = 'Hello World, I am integrating PHP code into Twitter.'; 
$d2 = 'Mike Stratton, Professional Freelance Web Developer. Rate: $25/hr To hire me, please call: (330)802-0285'; 
$d3 = 'I have developed hundreds of websites for nonprofits and small businesses.'; 
$d4 = 'Do you have a software project you are excited about? I would love to hear about it.';
$d5 = 'Hello World, I am bot created to Tweet on Twitter.';
$d6 = 'I often dream in code as writing code takes up most of my days and night. Dreaming in code is exhilarating!';

$data = array(
$d1,$d2,$d3,$d4,$d5,$d6
);
$dkey = array_rand($data);
echo $data[$dkey];

?>