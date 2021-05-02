<?php
// var_dump($_FILES);
//  127.0.0.1\xiaoxiaoran\bfcc\xiaoxiaoran5\ajax\3.html
$path = '../../f/images/' . $_FILES['face']['name'];
echo move_uploaded_file($_FILES['face']['tmp_name'], $path);

