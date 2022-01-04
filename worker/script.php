<?php

while (true) {
    $file = '/usr/share/nginx/html/index.html';
    $handle = fopen($file, 'w');
    $data = random_int(0, 100);
    fwrite($handle, $data);
    fclose($handle);
    sleep(1);
}
