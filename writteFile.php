<?php

$file = fopen('file2.txt', 'w');

fwrite($file, "HIIII");

fclose($file);