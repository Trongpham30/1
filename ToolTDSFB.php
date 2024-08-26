$denden="\033[1;30m";
$red="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$blud="\033[1;34m";
$res="\033[1;35m";
$nau="\033[1;36m";
$trang="\033[1;37m";

error_reporting(0);
system("clear");
$y="👉";
$y1="👈";


$ac="Host:traffic90.com";
$a1="Host:api.traffic90.com";
$a2="content-type:application/json";
$a3="referer: https://traffic90.com/";

$m1="https://api.traffic90.com/api/v1/auth/login";
$m2="https://api.traffic90.com/api/v1/hashCode";


function cc($vanban){$str = strlen($vanban);
for($i=0;$i<=$str;$i++){echo $vanban[$i]; usleep(1000);}
return 1;}


function clear(){system('clear');}
function mothai(){echo"                                                    \r";}


function tkvmk(){global $gmai,$pass,$c,$user;
file_put_contents('tkvmk.txt',"$gmai|$pass|$c|$user\n",FILE_APPEND);}

function suatien(){global $suatien;
file_put_contents("money.txt",implode("\n",$suatien));}


function luutien(){global $tien7;
file_put_contents('money.txt',"$tien7|\n",FILE_APPEND);}




function mcode() {global $c,$e;
    $i = 0; // Khởi tạo biến đếm $i

    $hashcode = "";

    $x = function () use (&$c, &$i) {
        return $c[$i++];
    };

    $hashcode .= $x() . $e[9] . $x() . $e[1] . $x() . $e[2] . $e[5] . $e[6] . $e[7] . $x() . $e[0] . $e[1] . $x() . $e[4] . $x() . $e[2] . $x() . $e[12] . $x() . $x() . $e[3] . $x() . $e[9] . $e[10] . $x() . $e[10] . $e[11] . $x() . $e[8] . $e[9] . $x() . $e[5] . $x() . $e[7] . $e[8] . $x() . $x() . $e[9] . $x() . $e[4] . $e[5] . $x() . $e[2] . $x() . $e[14] . $e[15] . $x() . $e[9] . $x() . $e[4] . $e[5] . $x() . $e[2] . $x() . $x() . $x() . $e[14] . $e[15];

    return $hashcode;
}






function timeo(){global $blud,$trang,$yellow,$green,$y1,$y,$web,$delay; 
for($ni=1;$ni<999;$ni++){ $maul=rand(91,97); $maui="\033[1;".$maul."m"; 
if($ni>$delay){mothai();break;} $cay5=$maui."$y $web $y1 ".$blud."[ 
$green$ni".$trang."/$yellow$delay ".$blud."]\r";cc($cay5);sleep(1);
}}



function edom(){global $trang;
for($xa=1;$xa<99;$xa++){
if($xa>3){mothai();break;}
echo$trang."DANG TIM LAI JOB [$xa/19] GIAY\r";sleep(1);}}




function random(){global $blud,$res,$yellow,$green;
$quay=mt_rand(5,10);
for($vi=1;$vi<99999;$vi++){
$maul=rand(10,15);
$maui="\033[1;".$maul."m";
if($vi>$quay){mothai();break;}
$cay1=$maui."XEM LAI AUTHOZATION CO BI DIE KHONG ".$blud."[$yellow$vi".$red."/$green$quay".$blud."]\r";
cc($cay1);
sleep(1);}}





function ebom(){global $trang;
for($xa=1;$xa<999;$xa++){
$dam=mt_rand(60,70);
if($xa>$dam){mothai();break;}
echo$trang."DANG TIM LAI JOB [$xa/$dam] GIAY\r";sleep(1);}}

function ebom1(){global $trang;
for($xa=1;$xa<999;$xa++){
$dam=mt_rand(60,70);
if($xa>$dam){mothai();break;}
echo$trang."VUI LONG DOI CHUT [$xa/$dam] GIAY\r";sleep(1);}}






function baoloi(){global $tsm2;
$baoloi=get("https://api.traffic90.com/api/v1/worker/list/cancel",$tsm2);}



function chaytk(){global $trang,$green,$nau,$ten,$poi9,$y1,$y,$den3;
echo"$y $trang$ten $y1 $y $green$poi9 ".$nau."DIEM $y1\n";
for($zi=1;$zi<999;$zi++){
$maul=rand(91,97);
$maui="\033[1;".$maul."m";
if($zi>$den3){echo"\n\n";break;}
$cay3=$maui."=";
cc($cay3);}


}




function nhanxu(){global $y,$y1,$trang,$red,$blud,$nau,$yellow,$denden,$blud,$res,$tien7,$mmu;
$gio=date('H:i:s');
$ngay=date('Y-m-d');
$hay1=explode('-',$ngay)[2];
$hay2=explode('-',$ngay)[1];
$gio1=explode(':',$gio)[0];
$gio2=explode(':',$gio)[1];

$tuatien=explode("\n",file_get_contents('money.txt'));
$tien1=$tuatien[0];
$tien=explode('|',$tien1)[0];
$tien7=$tien+800;

unlink('money.txt');
luutien();
$poi10=number_format($tien7);



$cay4=$blud."[$trang$hay1".$green."/$trang$hay2".$denden."] ".$blud."[$nau$gio1".$red."/$nau$gio2".$blud."] ".$denden."+ ".$res."800 DIEM ".$trang."HIEN CO $y $yellow$poi10 ".$green."DIEM ".$blud."[$yellow$mmu ".$nau."JOB".$blud."]\n";
cc($cay4);}








function nhaptk(){global $gmai,$pass,$user,$c,$y;
while(true){
echo $trang."NHAP GMAIL $y ";
$gmai=trim(fgets(STDIN));clear();
$dem1=strlen($gmai);
if($dem1<5){continue;}
break;}
while(true){
echo $trang."NHAP PASSWORD $y ";
$pass=trim(fgets(STDIN));clear();
if($pass==false){continue;}
break;}

while(true){
echo $trang."NHAP USER_AGEN $y ";
$user=trim(fgets(STDIN));clear();
$dem3=strlen($user);
if($dem3<20){continue;}
break;}


while(true){
echo $trang."NHAP HACODE $y ";
$ie=trim(fgets(STDIN));clear();
$dem3=strlen($ie);
if($dem3<10){continue;}



$c = $ie[0].$ie[2].$ie[4].$ie[9].$ie[12].$ie[14].$ie[16].$ie[18].$ie[19].$ie[21].$ie[24].$ie[27].$ie[30].$ie[32].$ie[35].$ie[36].$ie[38].$ie[41].$ie[43].$ie[46].$ie[48].$ie[51].$ie[53].$ie[54].$ie[55];



tkvmk();
break;}}

















while(true){


$motk2=explode("\n",file_get_contents('tkvmk.txt'));
$motk1=$motk2[0];
$gmai=explode('|',$motk1)[0];
if($gmai==false){
nhaptk();
continue;}else{}

$pass=explode('|',$motk1)[1];
$c=explode('|',$motk1)[2];
$user=explode('|',$motk1)[3];



if($c==false){exit;}




$b3="user-agent:$user";
$cx1="upgrade-insecure-requests:1";



while(true){

for($ff=1;$ff<13;$ff++){
if($ff>11){exit;}
if($ff==1 or $ff==3 or $ff==5 or $ff==7 or $ff==9){
//$het="https://api.myip.com/";
$het="https://ipconfig.io/json";}


if($ff==2 or $ff==4 or $ff==6 or $ff==8 or $ff==10){
$het="https://ipinfo.io/json";}


$tsm8000=array($cx1,$b3);
$api=json_decode(get($het,$tsm8000),true);
$api1=$api['ip'];

$tsm1=array($a1,$a2,$a3,$b3);
$da1='{"email":"'.$gmai.'","password":"'.$pass.'"}';
$url1=post($m1,$tsm1,$da1);


$iip=explode('"',explode('ip":"',$url1)[1])[0];



if($iip==true){
if($iip==$api1){break;}else{echo"$iip KHONG KHOP VOI $api1\n";ebom1();clear();continue;}}
}





$mss=explode('"',explode('message":"',$url1)[1])[0];


if($mss=="Đăng nhập thành công!"){
$ten=explode('"',explode('fullName":"',$url1)[1])[0];





$poi=explode(',',explode('point":',$url1)[1])[0];
$token=explode('"',explode('tokens":"',$url1)[1])[0];
$poi9=number_format($poi);

$suatien=explode("\n",file_get_contents('money.txt'));
$suatien[0]="$poi|";
suatien();

$den1=strlen($ten);$den2=strlen($poi);
$den3=$den1+$den2+20;


break;}else{
echo $nau."XEM LAI GMAI VOI MAT KHAU XEM CO DUNG KHONG\n";
echo $yellow."$gmai\n";
echo $green."$pass\n";
exit;}}





chaytk();
/////////////








while(true){$xay="0";



$a4="authorization:Bearer $token";
$tsm2=array($a2,$a4,$b3,$a3);
$url2=get($m2,$tsm2);



for($xa=1;$xa<999999;$xa++){

$e=explode('"',explode('code":"',$url2)[1])[0];


$mcode=mcode();



$link22=get("https://api.traffic90.com/api/v1/mission/get-one?hashCode=$mcode",$tsm2);


$tet=explode('"',explode('message":"',$link22)[1])[0];


if($tet=="Thành công"){break;}else{
random();
if($xa>1){break;}
continue;}}

if($xa>1){break;}




$web2=explode('"',explode('urlTarget":"',$link22)[1])[0];
if($web2==false){


while(true){$xay++;
date_default_timezone_set("Asia/Ho_Chi_Minh");
$bio=date('H:i');
if($bio=="00:00" or $bio=="06:00" or $bio=="08:00" or $bio=="12:00" or $bio=="18:00" or $bio=="20:00" or $bio=="22:00"){
mothai();break;}
$tay2=$trang."TRUA DEN GIO LAY JOB ".$denfen."[ $yellow$xay ".$denden."] ".$green."GIAY\r";
cc($tay2);sleep(1);
continue;}


edom();
continue;}




$coc =explode('"',explode('keyword":"',$link22)[1])[0];
$tien=explode(',',explode('price":',$link22)[1])[0];
$web=explode('/',$web2)[2];



$tsm99=array(
"upgrade-insecure-requests: 1",
"user-agent: $user",
"sec-fetch-site: none");

$link22=json_decode($link22,true);
$delay=$link22['data']['type']['timeOnSite'];


$g=get($web2,$tsm99);
$key=explode('"',explode('data-mission="',$g)[1])[0];
if($key==false){
baoloi();sleep(2);continue;}

















$tsm100=array();
$kim=get('https://traffic90.com/api/v1/code/'.$key.'?href='.$web2.'&hostname='.$web.'',$tsm100);
timeo();
$code=explode('"',explode('result":"',$kim)[1])[0];







$url3=get($m2,$tsm2);
$e=explode('"',explode('code":"',$url3)[1])[0];
//$hhcode = $e[5].$e[6].$e[7].$c[0].$e[0].$e[1].$c[1].$e[4].$c[2].$e[2].$c[3].$e[12].$c[4].$c[5].$e[3].$c[6].$e[9].$e[10].$c[7].$e[10].$e[11].$c[8].$e[8].$e[9].$c[9].$e[5].$c[10].$e[7].$e[8].$c[11].$c[12].$e[9].$c[13].$e[4].$e[5].$c[14].$e[2].$c[15].$e[14].$e[15].$c[16].$e[9].$c[17].$e[4].$e[5].$c[18].$e[2].$c[19].$e[14].$e[15];

$hhcode=mcode();






$tsm5=array($a2,$a3,$a4,$b3);
$da5='{"code":"'.$code.'"}';
$url4=post("https://api.traffic90.com/api/v1/worker/list/complete?hashCode=$hhcode",$tsm5,$da5);

$ketqua=explode('"',explode('message":"',$url4)[1])[0];
if($ketqua=="Thành công!"){$mmu++;
date_default_timezone_set("Asia/Ho_Chi_Minh");
nhanxu();
continue;
}else{baoloi();continue;}









}











}





















function GET($host,$tsm){
  $mr = curl_init();
  curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTPHEADER => $tsm));
  $mr2 = curl_exec($mr); curl_close($mr);
  return $mr2;}




function POST($host,$tsm,$data){
  $mr = curl_init();
  curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTPHEADER => $tsm));
  $mr2 = curl_exec($mr); curl_close($mr);
  return $mr2;}
