<?php 

$ch = curl_init();
$url = 'http://openapi.animal.go.kr/openapi/service/rest/abandonmentPublicSrvc/abandonmentPublic'; /*URL*/
$ServiceKey = 'rytrjlevx94%2F3A%2Btq6TKEWMsvkG8bB9HU2ToZ%2F%2BM3msyqyecwr1I%2F%2BXJ9XTkAGrxJzvxi9TvCsbuhtAasf9HMA%3D%3D';
$queryParams = '?' . urlencode('ServiceKey') . '='.$ServiceKey; /*Service Key*/

$queryParams .= '&' . urlencode('bgnde') . '=' . urlencode(''); //유기날짜
$queryParams .= '&' . urlencode('endde') . '=' . urlencode(''); //유기날짜(종료일)
$queryParams .= '&' . urlencode('upkind') . '=' . urlencode('417000'); //동물 종류
$queryParams .= '&' . urlencode('kind') . '=' . urlencode(''); //동물의 품종
$queryParams .= '&' . urlencode('upr_cd') . '=' . urlencode('6110000'); //시도
$queryParams .= '&' . urlencode('org_cd') . '=' . urlencode(''); //시군구
$queryParams .= '&' . urlencode('care_reg_no') . '=' . urlencode(''); //보호소 넘버
$queryParams .= '&' . urlencode('state') . '=' . urlencode(''); //상태
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); //페이지넘버
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('5'); //한 페이지당 보여주는 정보의 수
$queryParams .= '&' . urlencode('neuter_yn') . '=' . urlencode(''); ///중성화 여부





// $queryParams .= '&' . urlencode('upkind') . '=' . urlencode('417000'); //동물 종류
// $queryParams .= '&' . urlencode('state') . '=' . urlencode('notice'); //상태
// $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); //페이지넘버
// $queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('10');; //한 페이지당 보여주는 정보의 수
// $queryParams .= '&' . urlencode('neuter_yn') . '=' . urlencode('y');



curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

echo $response;


?>



