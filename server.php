<?php

$data = $_POST;

$file = 'cartfile.txt';

if(file_put_contents($file,json_encode($data))){
    echo 1;
}else{
    echo 2;
}

