<?php 

$ch = curl_init();
$url = 'http://openapi.animal.go.kr/openapi/service/rest/abandonmentPublicSrvc/sigungu'; /*URL*/
$ServiceKey = 'rytrjlevx94%2F3A%2Btq6TKEWMsvkG8bB9HU2ToZ%2F%2BM3msyqyecwr1I%2F%2BXJ9XTkAGrxJzvxi9TvCsbuhtAasf9HMA%3D%3D';
$queryParams = '?' . urlencode('ServiceKey') . '='.$ServiceKey; /*Service Key*/
$queryParams .= '&' . urlencode('upr_cd') . '=' . urlencode('6110000'); //요청인수

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

echo $response;


?>
