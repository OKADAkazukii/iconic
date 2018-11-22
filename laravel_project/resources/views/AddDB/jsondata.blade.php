<?php
$json = <<< JSON_DOC
    [
       {
        "id": 1,
        "name":"岡田",
        "service_s":"2018-11-01",
        "postal":"121-0801",
        "address":"東京都 足立区 東伊興 x-x-x",
        "room_number":"011"
        }
    ]
JSON_DOC;

header("Content-Type: application/json; charset=utf-8");
echo $json;
exit();
