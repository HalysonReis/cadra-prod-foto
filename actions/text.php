<?php

if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
    echo "no e";
}else{
    echo "e";
}