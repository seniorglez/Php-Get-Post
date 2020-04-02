<?php
$rows = file ('file.txt');

foreach ($rows as $num_row => $row)
{
    print_r($row . "<br>");
}