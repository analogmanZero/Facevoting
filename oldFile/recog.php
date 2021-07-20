<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://lambda-face-recognition.p.rapidapi.com/recognize",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"albumkey\"\r\n\r\n21dc87b9abe643901bfc15c052fe857ac9cae5d44bc48511378a409709ece009\r\n-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"files\"\r\n\r\n\r\n-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"urls\"\r\n\r\nhttps://i.postimg.cc/CLK10N3G/deep4.jpg\r\n-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"album\"\r\n\r\nuser\r\n-----011000010111000001101001--\r\n\r\n",
    CURLOPT_HTTPHEADER => [
        "content-type: multipart/form-data; boundary=---011000010111000001101001",
        "x-rapidapi-host: lambda-face-recognition.p.rapidapi.com",
        "x-rapidapi-key: 932571abf0msh45cf0f3cef74aacp19e151jsn33e9949a1974"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}