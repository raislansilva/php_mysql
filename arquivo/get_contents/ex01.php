<?php

$link ="https://s2.glbimg.com/eFYV-eyVzm1oXnADf4j6RJEDh0o=/0x0:1280x853/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2018/R/G/zhH1UrSBGATzmMXnAcXg/whatsapp-image-2018-10-10-at-18.58.33.jpeg";

$content = file_get_contents($link);

//conveter em url o link da url
$parse = parse_url($link);
$basename = basename($parse["path"]);

//cria uma arquivo com base nos dados vindos da url
/*$file = fopen($basename,"w+");

fwrite($file, $content);

fclose($file);*/
//end

//conveter para imagem o link da url
$imagem = base64_encode($content);
$src = 'data:*;base64,'.$imagem;


?>

<img src="<?=$src?>" >