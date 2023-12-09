error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
$do = "\x1b[1;91m";
$den = "\x1b[1;33m";
$tim = "\x1b[1;34m";
$luc = "\x1b[1;92m";
$trang = "\x1b[1;97m";
$vang = "\x1b[1;93m";
$hong = "\x1b[1;95m";
$xnhac = "\x1b[1;36m";
$xduong = "\x1b[1;96m";
$thanhngang = "\x1b[1;37m---------------------------------------------------\n";
$dragonx = $do."[".$trang ."=.=".$do."] ".$trang."=> \033[1;32m";
if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
    system("clear");
} else {
    system("cls");
}
co_cai_con_cac_kkk();
function VDSVSDVSDAAQQB($logo)
{
    $thanhngang = "\033[1;37m---------------------------------------------------\n";
    while (true) {
        $luc = "\x1b[1;92m";
        $do = "\x1b[1;31m";
        $vang = "\x1b[1;93m";
        $trang = "\x1b[1;97m";
        $daucau2 = $do."[".$trang ."=.=".$do."] ".$trang."=> \033[1;32m";
        system("clear");
        echo $logo . "\n";
        if (file_exists("caidatdelaytds.txt")) {
            if (strlen(file_get_contents("caidatdelaytds.txt")) < 5) {
                unlink("caidatdelaytds.txt");
                continue;
            }
            $caidatdelay = fread(fopen("caidatdelaytds.txt", "r"), filesize("caidatdelaytds.txt"));
            $delaylike = explode("|", $caidatdelay)[0];
            $delayfollow = explode("|", $caidatdelay)[1];
            $delaycomment = explode("|", $caidatdelay)[2];
            $delayshare = explode("|", $caidatdelay)[3];
            $delaycamxuc = explode("|", $caidatdelay)[4];
            $delaycamxuccmt = explode("|", $caidatdelay)[5];
            $delaypage = explode("|", $caidatdelay)[6];
            $delaygr = explode("|", $caidatdelay)[7];
            $nvnghi = explode("|", $caidatdelay)[8];
            $delaynghi = explode("|", $caidatdelay)[9];
            echo $daucau2 . "Bạn đã cài đặt delay\n";
            echo $daucau2 . "Like: " . $trang . $delaylike . $luc . "s\n";
            echo $daucau2 . "Follow: " . $trang . $delayfollow . $luc . "s\n";
            echo $daucau2 . "Comment: " . $trang . $delaycomment . $luc . "s\n";
            echo $daucau2 . "Share: " . $trang . $delayshare . $luc . "s\n";
            echo $daucau2 . "Cảm Xúc: " . $trang . $delaycamxuc . $luc . "s\n";
            echo $daucau2 . "Cảm xúc Comment: " . $trang . $delaycamxuccmt . $luc . "s\n";
            echo $daucau2 . "Fanpage: " . $trang . $delaygr . $luc . "s\n";
            echo $daucau2 . "Group: " . $trang . $delaypage . $luc . "s\n";
            echo $thanhngang;
            echo $daucau2 . "Nghỉ sau _" . $trang . $nvnghi . $luc . "_ nhiệm vụ\n";
            echo $daucau2 . "Thời gian nghỉ: " . $trang . $delaynghi . $luc . "s\n";
            echo $thanhngang;
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . "Để sử dụng delay này \n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . "Nhập delay mới \n";
            echo $daucau2 . "Nhập " . $trang . "===>: {$vang}";
            $chon_tk = trim(fgets(STDIN));
            if ($chon_tk == "2") {
                unlink("caidatdelaytds.txt");
            } else {
                if ($chon_tk == "1") {
                    break;
                } else {
                    echo $do . " Lựa chọn không xác định !!!\n";
                    continue;
                }
            }
        }
        if (!file_exists("caidatdelaytds.txt")) {
            echo $daucau2 . "Nhập delay like: " . $vang;
            $delaylike = trim(fgets(STDIN));
            echo $daucau2 . "Nhập delay follow: " . $vang;
            $delayfollow = trim(fgets(STDIN));
            echo $daucau2 . "Nhập delay comment: " . $vang;
            $delaycomment = trim(fgets(STDIN));
            echo $daucau2 . "Nhập delay share: " . $vang;
            $delayshare = trim(fgets(STDIN));
            echo $daucau2 . "Nhập delay cảm xúc: " . $vang;
            $delaycamxuc = trim(fgets(STDIN));
            echo $daucau2 . "Nhập delay cảm xúc CMT: " . $vang;
            $delaycamxuccmt = trim(fgets(STDIN));
            echo $daucau2 . "Nhập delay Fanpage: " . $vang;
            $delaypage = trim(fgets(STDIN));
            echo $daucau2 . "Nhập delay tham gia nhóm: " . $vang;
            $delaygr = trim(fgets(STDIN));
            echo $daucau2 . "Tạm nghỉ sau ______ nhiệm vụ \r";
            echo $daucau2 . "Tạm nghỉ sau _" . $vang;
            $nvnghi = trim(fgets(STDIN));
            echo $daucau2 . "Thời gian nghỉ ______ giây \r";
            echo $daucau2 . "Thời gian nghỉ _" . $vang;
            $delaynghi = trim(fgets(STDIN));
            $nhapdelay = $delaylike . "|" . $delayfollow . "|" . $delaycomment . "|" . $delayshare . "|" . $delaycamxuc . "|" . $delaycamxuccmt . "|" . $delaypage . "|" . $delaygr . "|" . $nvnghi . "|" . $delaynghi;
            fwrite(fopen("caidatdelaytds.txt", "w+"), $nhapdelay);
            break;
        }
    }
    $caidatdelay = fread(fopen("caidatdelaytds.txt", "r"), filesize("caidatdelaytds.txt"));
    $delaylike = explode("|", $caidatdelay)[0];
    $delayfollow = explode("|", $caidatdelay)[1];
    $delaycomment = explode("|", $caidatdelay)[2];
    $delayshare = explode("|", $caidatdelay)[3];
    $delaycamxuc = explode("|", $caidatdelay)[4];
    $delaycamxuccmt = explode("|", $caidatdelay)[5];
    $delaypage = explode("|", $caidatdelay)[6];
    $delaygr = explode("|", $caidatdelay)[7];
    $nvnghi = explode("|", $caidatdelay)[8];
    $delaynghi = explode("|", $caidatdelay)[9];
    return $caidatdelay;
}
/*
function ASCASASAAQQB($delay)
{
    for ($i = $delay; $i > 1; $i--) {
        echo "\r \x1b[1;9" . rand(1, 9) . "m Vui Lòng Đợi Sau " . $i . " Giây     \r";
        sleep(1);
    }
    echo "\r\x1b[1;9" . rand(1, 9) . "m Tool Auto TDS An Orin       \r";
}
*/
function ASCASASAAQQB($delay)
{
    for ($i = $delay; $i >= 0; $i--) {
        echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mx.x.x.x.x\033[1;93m]       \r";
        usleep(166666);
        echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.x.x.x.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.x.x.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.X.x.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.X.X.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mAN_ORIN\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.X.X.X\033[1;93m]       \r";
       usleep(166666);
    }
    //echo "\r\033[1;9" . rand(1, 9) . "m " . "Tool Bản Quyền An Orin" . "       \r";
//    kiemtramang_dragonx();
}

function ASCJHBASCHDJKAAQQB($idfb)
{
    $data = "iddat=" . $idfb;
    $head = array("Host: traodoisub.com", "content-length: " . strlen($data), "accept: */*", "x-requested-with: XMLHttpRequest", "sec-ch-ua-mobile: ?1", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Mobile Safari/537.36", "content-type: application/x-www-form-urlencoded; charset=UTF-8", "origin: https://traodoisub.com", "sec-fetch-site: same-origin", "sec-fetch-mode: cors", "sec-fetch-dest: empty", "referer: https://traodoisub.com/view/cauhinh/");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => "https://traodoisub.com/scr/datnick.php", CURLOPT_FOLLOWLOCATION => TRUE, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_POSTFIELDS => $data, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_COOKIEFILE => "TDS.txt", CURLOPT_HTTPHEADER => $head, CURLOPT_ENCODING => TRUE));
    $a = curl_exec($ch);
    curl_close($ch);
    return $a;
}
function BHASBCAHBSBHWAAQQB($tp, $loai, $id)
{
    $clmm = 0;
    while (true) {
        $url = "https://traodoisub.com/ex/" . $loai . "/nhantien.php";
        $data = "id=" . $id . "&type=" . $tp;
        $head = array("Host: traodoisub.com", "content-length: " . strlen($data), "accept: */*", "origin: https://traodoisub.com", "x-requested-with: XMLHttpRequest", "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36", "content-type: application/x-www-form-urlencoded; charset=UTF-8", "referer: https://traodoisub.com/ex/" . $loai . "/");
        $ch = curl_init();
        curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_FOLLOWLOCATION => TRUE, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_POSTFIELDS => $data, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_COOKIEFILE => "TDS.txt", CURLOPT_HTTPHEADER => $head, CURLOPT_ENCODING => TRUE));
        $a = curl_exec($ch);
        curl_close($ch);
        if ($a == 2) {
            break;
        } else {
            $clmm++;
            if ($clmm == 2) {
                break;
            }
        }
    }
    return $a;
}
function BHJHABVDSJVLKAAQQB()
{
    $url = "https://traodoisub.com/view/setting/load.php";
    $head = array("Host: traodoisub.com", "accept: application/json, text/javascript, */*; q=0.01", "x-requested-with: XMLHttpRequest", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36", "sec-fetch-site: same-origin", "sec-fetch-mode: cors", "sec-fetch-dest: empty", "referer: https://traodoisub.com/view/setting/");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_FOLLOWLOCATION => TRUE, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_HTTPGET => true, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_COOKIEFILE => "TDS.txt", CURLOPT_HTTPHEADER => $head, CURLOPT_ENCODING => TRUE));
    $data = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($data, true);
    return $json;
}
function BHSACASADVQQB($username, $password)
{
    $dem = 0;
    while (true) {
        if (@fsockopen("www.google.com", 80)) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, "https://traodoisub.com/scr/login.php");
            curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36");
            $login = array("username" => $username, "password" => $password, "submit" => " Đăng Nhập");
            curl_setopt($ch, CURLOPT_POST, count($login));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
            curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
            $source = curl_exec($ch);
            curl_close($ch);
            if ($source != 1 && $source != '') {
                return 1;
                break;
            } elseif ($dem > 5) {
                return 0;
                break;
            }
            $dem++;
            sleep(3);
        } else {
            print "\r Vui lòng bật kết nối mạng      \r";
        }
    }
}
function HBBHSCHBDSHBJNJVQQB($loai)
{
    $head = array("Host: traodoisub.com", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36", "accept: */*", "sec-fetch-site: same-origin", "sec-fetch-mode: cors", "sec-fetch-dest: empty", "referer: https://traodoisub.com/ex/" . $loai . '');
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => "https://traodoisub.com/ex/" . $loai . "/load.php", CURLOPT_FOLLOWLOCATION => TRUE, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_HTTPGET => true, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_COOKIEFILE => "TDS.txt", CURLOPT_HTTPHEADER => $head, CURLOPT_ENCODING => TRUE));
    $a = curl_exec($ch);
    curl_close($ch);
    return $a;
}
function HBJHJABJDKVDNNKNB($id, $idfb, $type, $cookie)
{
    $type = strtoupper($type);
    $url = "https://mbasic.facebook.com/" . $id . '';
    $head = array("Host: mbasic.facebook.com", "upgrade-insecure-requests: 1", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: same-origin", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_FOLLOWLOCATION => false, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_HTTPGET => true, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_HTTPHEADER => $head, CURLOPT_HEADER => true, CURLOPT_COOKIE => $cookie, CURLOPT_ENCODING => TRUE));
    $data = curl_exec($ch);
    $one = explode("location: ", $data);
    $two = explode("rdr", $one[1]);
    $url = $two[0] . "rdr";
    if ($url == "rdr") {
    } else {
        $idpost = explode("&id=", $url)[0];
        $idvictim = explode("&id=", $url)[1];
        curl_close($ch);
        if (strpos($data, "xs=deleted") == true) {
        }
        $head = array("Host: mbasic.facebook.com", "cache-control: max-age=0", "sec-ch-ua-mobile: ?1", "save-data: on", "upgrade-insecure-requests: 1", "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Mobile Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
        $ch = curl_init();
        curl_setopt_array($ch, array(CURLOPT_URL => "https://mbasic.facebook.com/reactions/picker/?ft_id=" . $id . "&origin_uri=https://mbasic.facebook.com/" . $idvictim . "/posts/" . $idpost . "/?app=fbl&fbt_id=" . $id . "&lul&av=" . $idfb . "&__tn__=R", CURLOPT_FOLLOWLOCATION => false, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_HTTPGET => true, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_HTTPHEADER => $head, CURLOPT_HEADER => true, CURLOPT_COOKIE => $cookie, CURLOPT_ENCODING => TRUE));
        $cx = curl_exec($ch);
        $haha = explode("<a href=\"", $cx);
        if ($type == "LOVE") {
            $haha2 = explode("\" style=\"display:block\"", $haha[2])[0];
        } else {
            if ($type == "CARE") {
                $haha2 = explode("\" style=\"display:block\"", $haha[3])[0];
            } else {
                if ($type == "HAHA") {
                    $haha2 = explode("\" style=\"display:block\"", $haha[4])[0];
                } else {
                    if ($type == "WOW") {
                        $haha2 = explode("\" style=\"display:block\"", $haha[5])[0];
                    } else {
                        if ($type == "SAD") {
                            $haha2 = explode("\" style=\"display:block\"", $haha[6])[0];
                        } else {
                            $haha2 = explode("\" style=\"display:block\"", $haha[7])[0];
                        }
                    }
                }
            }
        }
        if ($type == "LIKE") {
            $data = explode("\"", explode("<a href=\"/ufi/reaction/?ft_ent_identifier=", $cx)[1])[0];
            curl_setopt($ch, CURLOPT_URL, "https://mbasic.facebook.com/ufi/reaction/?ft_ent_identifier=" . htmlspecialchars_decode($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_exec($ch);
            curl_close($ch);
        } else {
            $link2 = html_entity_decode($haha2);
            curl_setopt($ch, CURLOPT_URL, "https://mbasic.facebook.com" . $link2);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $x = curl_exec($ch);
            $location = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
            curl_close($ch);
        }
    }
    return $location;
}
function HBJHHVASHCBSBAHBCBH($id, $cookie)
{
    $useragent = "Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36";
    $ch = curl_init();
    if (strpos($id, "_")) {
        $uid = explode("_", $id, 2);
        $id2 = "story.php?story_fbid=" . $uid[1] . "&id=" . $uid[0];
    } else {
        $id2 = $id;
    }
    $header = array("Host:mbasic.facebook.com", "user-agent:{$useragent}", "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "cookie:{$cookie}");
    $linkbv = "https://mbasic.facebook.com/groups/" . $id2;
    curl_setopt($ch, CURLOPT_URL, $linkbv);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, "Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14");
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Expect\n                    :"));
    $post = curl_exec($ch);
    $link = explode("<form method=\"post\" action=\"/a/group/join/?group_id=", $post)[1];
    $link = explode("\"", $link)[0];
    $link = html_entity_decode($link);
    $link = "https://mbasic.facebook.com/a/group/join/?group_id=" . $link;
    $linkreac1 = $link;
    $header = array("Host:mbasic.facebook.com", "user-agent:{$useragent}", "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "referer:{$linkbv}", "cookie:{$cookie}");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $linkreac1);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, "Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14");
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Expect:"));
    $page = curl_exec($ch);
    $aa = $page;
    return $aa;
}
function HBJUHNJDNJDNJBVASBH($id, $cookie, $msg)
{
    $url = "https://mbasic.facebook.com/" . $id . '';
    $head = array("Host: mbasic.facebook.com", "upgrade-insecure-requests: 1", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: same-origin", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_FOLLOWLOCATION => false, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_HTTPGET => true, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_HTTPHEADER => $head, CURLOPT_HEADER => true, CURLOPT_COOKIE => $cookie, CURLOPT_ENCODING => TRUE));
    $data = curl_exec($ch);
    if (strpos($data, "xs=deleted") == true) {
        return 2;
    }
    $one = explode("location: ", $data);
    $two = explode("rdr", $one[1]);
    $url = $two[0] . "rdr";
    if ($url == "rdr") {
    } else {
        curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_FOLLOWLOCATION => false, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_HTTPGET => true, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_HTTPHEADER => $head, CURLOPT_HEADER => true, CURLOPT_ENCODING => TRUE));
        $a = curl_exec($ch);
        curl_close($ch);
        $data = explode("\"", explode("<a href=\"/composer/mbasic/?c_src=share&amp;", $a)[1])[0];
        $l1 = explode("amp;", $data)[0];
        $l2 = explode("amp;", $data)[1];
        $l3 = explode("amp;", $data)[2];
        $l4 = explode("amp;", $data)[3];
        $l5 = explode("amp;", $data)[4];
        $l6 = explode("amp;", $data)[5];
        $l7 = explode("amp;", $data)[6];
        $l8 = explode("amp;", $data)[7];
        $l9 = explode("amp;", $data)[8];
        $l10 = explode("amp;", $data)[9];
        $l11 = explode("amp;", $data)[10];
        $link = "https://mbasic.facebook.com/composer/mbasic/?c_src=share&" . $l1 . '' . $l2 . '' . $l3 . '' . $l4 . '' . $l5 . '' . $l6 . '' . $l7 . '' . $l8 . '' . $l9 . '' . $l10 . '' . $l11 . '';
    }
    $head = array("Host: mbasic.facebook.com", "cache-control: max-age=0", "save-data: on", "upgrade-insecure-requests: 1", "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36", "referer: https://mbasic.facebook.com/home.php", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $link, CURLOPT_FOLLOWLOCATION => TRUE, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_HTTPGET => true, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_COOKIE => $cookie, CURLOPT_HTTPHEADER => $head, CURLOPT_ENCODING => TRUE));
    $data = curl_exec($ch);
    curl_close($ch);
    $a = explode("\" id=\"composer_form\"", explode("<form method=\"post\" action=\"", $data)[1])[0];
    $a1 = explode("amp;", $a)[0];
    $a2 = explode("amp;", $a)[1];
    $a3 = explode("amp;", $a)[2];
    $a4 = explode("amp;", $a)[3];
    $link2 = "https://mbasic.facebook.com" . $a1 . '' . $a2 . '' . $a3 . '' . $a4 . "&ref=dbl";
    $fb_dtsg = explode("\" autocomplete=\"off\"", explode("name=\"fb_dtsg\" value=\"", $data)[1])[0];
    $jazoest = explode("\" autocomplete=\"off\"", explode("name=\"jazoest\" value=\"", $data)[1])[0];
    $target = explode("\"", explode("name=\"target\" value=\"", $data)[1])[0];
    $csid = explode("\"", explode("name=\"csid\" value=\"", $data)[1])[0];
    $privacyx = explode("\"", explode("name=\"privacyx\" value=\"", $data)[1])[0];
    $cver = explode("\"", explode("name=\"cver\" value=\"", $data)[1])[0];
    $m = explode("\"", explode("name=\"m\" value=\"", $data)[1])[0];
    $shared_from_post_id = explode("\"", explode("name=\"shared_from_post_id\" value=\"", $data)[1])[0];
    $cscr = explode("\"", explode("name=\"c_src\" value=\"", $data)[1])[0];
    $referrer = explode("\"", explode("name=\"referrer\" value=\"", $data)[1])[0];
    $ctype = explode("\"", explode("name=\"ctype\" value=\"", $data)[1])[0];
    $sid = explode("\"", explode("name=\"sid\" value=\"", $data)[1])[0];
    $waterfall_source = explode("\"", explode("name=\"waterfall_source\" value=\"", $data)[1])[0];
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $t = date("d-m-Y | H:i:s");
    $data = "comment=" . $msg . "&m=oneclick&privacyx=" . $privacyx . "&sid=" . $sid . "&shareID=" . $sid . "&fs=1&fr=null&internal_preview_image_id=null&should_share_post=false&direct=true&_ft_=" . $l11 . "&fb_dtsg=" . $fb_dtsg . "&jazoest=" . $jazoest . "__dyn=1KQEGiFo525Ujwh8-F42mml3onxG6UO3m2i5UfXwNwTwKwSwMxWUW16wZxm6Uhx6485-0SUhxm3O0AE8o11E52q3q5U2nweS787S78K1Jwt8-0lm68WUS2F0EU6i12wm8qwk888C0NEeo5Wq3q0H8-7E2swp82vwAwmE2ewnE2Lw5dw&__csr=&__req=7&__a=AYmQRaSRpckx8Ugg8YkSOfYUUczZWHGSt_e3GRCVZ-yzwoxI0JMFbt_4bf2bG-XPk4FOLrTs5QEGOofdlpo6f5hUReNVHgYej0SSg1hYsLZoMQ&__user=" . $target . '';
    $header = array("Host: m.facebook.com", "content-length: " . strlen($data), "origin: https://m.facebook.com", "x-requested-with: XMLHttpRequest", "user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Kiwi Chrome/68.0.3438.0 Safari/537.36", "x-response-format: JSONStream", "content-type: application/x-www-form-urlencoded", "accept: */*", "referer: https://m.facebook.com/");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => "https://m.facebook.com/a/sharer.php", CURLOPT_FOLLOWLOCATION => TRUE, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_POSTFIELDS => $data, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_COOKIE => $cookie, CURLOPT_HTTPHEADER => $head, CURLOPT_ENCODING => TRUE));
    $data = curl_exec($ch);
    curl_close($ch);
}
function HBNDNNJSDNVNJSABH($cookie)
{
    $useragent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.facebook.com/adsmanager/manage/campaigns");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate");
    $headers = array();
    $headers[] = "Authority: business.facebook.com";
    $headers[] = "Cache-Control: max-age=0";
    $headers[] = "Sec-Ch-Ua: \\\"Google Chrome\\\";v=\\\"95\\\", \\\"Chromium\\\";v=\\\"95\\\", \\\";Not A Brand\\\";v=\\\"99\\\"";
    $headers[] = "Sec-Ch-Ua-Mobile: ?0";
    $headers[] = "Sec-Ch-Ua-Platform: \\\"Windows\\\"";
    $headers[] = "Upgrade-Insecure-Requests: 1";
    $headers[] = "User-Agent: " . $useragent;
    $headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $headers[] = "Sec-Fetch-Site: same-origin";
    $headers[] = "Sec-Fetch-Mode: navigate";
    $headers[] = "Sec-Fetch-User: ?1";
    $headers[] = "Sec-Fetch-Dest: document";
    $headers[] = "Accept-Language: en-US,en;q=0.9";
    $headers[] = "Cookie: " . $cookie;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $access = curl_exec($ch);
    if (curl_errno($ch)) {
        return "die";
    }
    curl_close($ch);
    $ch = curl_init();
    $link = explode("&nav_source", explode("campaigns?act=", $access)[1])[0];
    curl_setopt($ch, CURLOPT_URL, "https://www.facebook.com/adsmanager/manage/campaigns?act=" . $link . "&nav_source=no_referrer");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate");
    $headers = array();
    $headers[] = "Authority: business.facebook.com";
    $headers[] = "Cache-Control: max-age=0";
    $headers[] = "Sec-Ch-Ua: \\\"Google Chrome\\\";v=\\\"95\\\", \\\"Chromium\\\";v=\\\"95\\\", \\\";Not A Brand\\\";v=\\\"99\\\"";
    $headers[] = "Sec-Ch-Ua-Mobile: ?0";
    $headers[] = "Sec-Ch-Ua-Platform: \\\"Windows\\\"";
    $headers[] = "Upgrade-Insecure-Requests: 1";
    $headers[] = "User-Agent: " . $useragent;
    $headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $headers[] = "Sec-Fetch-Site: same-origin";
    $headers[] = "Sec-Fetch-Mode: navigate";
    $headers[] = "Sec-Fetch-User: ?1";
    $headers[] = "Sec-Fetch-Dest: document";
    $headers[] = "Accept-Language: en-US,en;q=0.9";
    $headers[] = "Cookie: " . $cookie;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $access1 = curl_exec($ch);
    $access_token = explode("\";", explode("accessToken=\"", $access1)[1])[0];
    if ($access_token != '') {
        return $access_token;
    } else {
        return "die";
    }
}
function HBNASCASAWLKMDMKVABH($access_token, $id, $cookie, $msg)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/" . $id . "/comments");
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
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36");
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Expect:"));
    $data = array("message" => $msg, "access_token" => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function HUJBASBJBCSBSCJBBH($cookie, $id, $type)
{
    $cc3m = 0;
    while (true) {
        $cc = HABSBCBSBJJBSJBMMBH($cookie, $id);
        if (strpos($cc, "/a/like.php?ul&perm&ifab&ft_ent_identifier=" . $id)) {
            $type = "_" . $type . "_";
            $check = 0;
            if (strpos(strtolower($type), "like")) {
                $link = explode("/a/like.php?ul&perm&ifab&ft_ent_identifier=", $cc)[1];
                $link = "https://mbasic.facebook.com/a/like.php?ul&perm&ifab&ft_ent_identifier=" . explode("\"", $link)[0];
            } else {
                $link_ = explode("/reactions/picker/?is_permalink=1&ft_id=", $cc)[1];
                $link_ = "https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id=" . explode("\"", $link_)[0];
                $kq = ABHDSJHDVBUWEUBHVDH7GVC($cookie, $link_);
                $loc = "/ufi/reaction/?ft_ent_identifier=";
                $cd = "https://mbasic.facebook.com/ufi/reaction/?ft_ent_identifier=";
                $link_like = $cd . explode("\"", explode($loc, $kq)[1])[0];
                $link_love = $cd . explode("\"", explode($loc, $kq)[2])[0];
                $link_care = $cd . explode("\"", explode($loc, $kq)[3])[0];
                $link_haha = $cd . explode("\"", explode($loc, $kq)[4])[0];
                $link_wow = $cd . explode("\"", explode($loc, $kq)[5])[0];
                $link_sad = $cd . explode("\"", explode($loc, $kq)[6])[0];
                $link_angry = $cd . explode("\"", explode($loc, $kq)[7])[0];
                if (strpos(strtolower($type), "like")) {
                    $link = $link_like;
                } elseif (strpos(strtolower($type), "love")) {
                    $link = $link_love;
                } elseif (strpos(strtolower($type), "care")) {
                    $link = $link_care;
                } elseif (strpos(strtolower($type), "haha")) {
                    $link = $link_haha;
                } elseif (strpos(strtolower($type), "wow")) {
                    $link = $link_wow;
                } elseif (strpos(strtolower($type), "sad")) {
                    $link = $link_sad;
                } elseif (strpos(strtolower($type), "angry")) {
                    $link = $link_angry;
                }
            }
            $kq = ABHDSJHDVBUWEUBHVDH7GVC($cookie, $link);
            $cc3m++;
            if ($cc3m == 3) {
                break;
            }
        } elseif (strpos($cc, "/reactions/picker/?is_permalink=1&ft_id=")) {
            $check = 1;
            break;
        } else {
            $check = 2;
            break;
        }
    }
    return $check;
}
function HABSBCBSBJJBSJBMMBH($cookie, $id)
{
    $url = "https://mbasic.facebook.com/" . $id . '';
    $head = array("Host: mbasic.facebook.com", "upgrade-insecure-requests: 1", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: same-origin", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_FOLLOWLOCATION => false, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_HTTPGET => true, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_HTTPHEADER => $head, CURLOPT_HEADER => true, CURLOPT_COOKIE => $cookie, CURLOPT_ENCODING => TRUE));
    $data = curl_exec($ch);
    curl_close($ch);
    $link = explode("location:", $data)[1];
    $link = explode("reporting", $link)[0];
    $link = trim(str_replace(" ", '', $link));
    $kq = ABHDSJHDVBUWEUBHVDH7GVC($cookie, $link);
    return $kq;
}
function IASNJKJAVNBYGGUQYRYW($cookie, $id)
{
    $kq = '';
    $clmm = 0;
    while (true) {
        $link = "https://mbasic.facebook.com/";
        $cc1 = ABHDSJHDVBUWEUBHVDH7GVC($cookie, $link);
        if (strpos($cc1, "<title>Facebook - Đăng nhập hoặc đăng ký</title>")) {
            $kq = 0;
            break;
        } else {
            $clmm++;
            if ($clmm == 3) {
                break;
            }
            $link = "https://mbasic.facebook.com/profile.php?id=" . $id;
            $cc = html_entity_decode(ABHDSJHDVBUWEUBHVDH7GVC($cookie, $link));
            if (strpos($cc, "/a/profile.php?fan&id=" . $id)) {
                $link_follow = explode("/a/profile.php?fan&id=" . $id, $cc)[1];
                $link_follow = html_entity_decode("https://mbasic.facebook.com/a/profile.php?fan&id=" . $id . explode("\"", $link_follow)[0]);
                $cc = ABHDSJHDVBUWEUBHVDH7GVC($cookie, $link_follow);
            } elseif (strpos($cc, "/a/profile.php?unfan&id=" . $id)) {
                $kq = 1;
                break;
            }
        }
    }
    return $kq;
}
function ASCASCQWW3R3W($cookie)
{
    $useragent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36";
    $ch = curl_init();
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: m.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => "https://mbasic.facebook.com/profile.php", CURLOPT_TIMEOUT => 60, CURLOPT_RETURNTRANSFER => 1, CURLOPT_CONNECTTIMEOUT => 60, CURLOPT_USERAGENT => $useragent, CURLOPT_COOKIE => $cookie, CURLOPT_SSL_VERIFYPEER => TRUE, CURLOPT_HTTPHEADER => $head));
    $access = curl_exec($ch);
    if (strpos($access, "/profile.php?lst=")) {
        $name = explode("</title>", explode("xhtml\"><head><title>", $access)[1])[0];
        $id = explode("%", explode("/profile.php?lst=", $access)[1])[0];
        return array("NAME" => $name, "ID" => $id);
    } else {
        return "die";
    }
}
function ASCASCCDSVDJNNJJ47GVC($cookie, $id)
{
    $kq = '';
    $clmm = 0;
    while (true) {
        $link = "https://mbasic.facebook.com/";
        $cc1 = ABHDSJHDVBUWEUBHVDH7GVC($cookie, $link);
        if (strpos($cc1, "<title>Facebook - Đăng nhập hoặc đăng ký</title>")) {
            $kq = 0;
            break;
        } else {
            $link = "https://mbasic.facebook.com/profile.php?id=" . $id;
            $cc = ABHDSJHDVBUWEUBHVDH7GVC($cookie, $link);
            $clmm++;
            if ($clmm == 2) {
                break;
            }
            if (strpos($cc, "/a/subscribe.php?id=" . $id)) {
                $link_follow = explode("/a/subscribe.php?id=" . $id, $cc)[1];
                $link_follow = html_entity_decode("https://mbasic.facebook.com/a/subscribe.php?id=" . $id . explode("\"", $link_follow)[0]);
                $cc = ABHDSJHDVBUWEUBHVDH7GVC($cookie, $link_follow);
            } elseif (strpos($cc, "/a/subscriptions/remove?subject_id=" . $id)) {
                $kq = 1;
                break;
            }
        }
    }
    return $kq;
}
function ABHDSJHDVBUWEUBHVDH7GVC($cookie, $link)
{
    $useragent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36";
    $ch = curl_init();
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: m.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $link, CURLOPT_TIMEOUT => 60, CURLOPT_RETURNTRANSFER => 1, CURLOPT_CONNECTTIMEOUT => 60, CURLOPT_USERAGENT => $useragent, CURLOPT_COOKIE => $cookie, CURLOPT_SSL_VERIFYPEER => TRUE, CURLOPT_HTTPHEADER => $head));
    $access = curl_exec($ch);
    return html_entity_decode($access);
}
function co_cai_con_cac_kkk()
{
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $xnhac = "\x1b[1;96m";
    $luc = "\x1b[1;92m";
    $xduong = "\x1b[1;94m";
    $hong = "\x1b[1;95m";
    $do = "\x1b[1;31m";
    $vang = "\x1b[1;93m";
    $trang = "\x1b[1;97m";
    $logo = logox();
    $daucau2 = "\033[97m~\033[97m[\033[91m+\033[97m] \033[97m➪ " . $luc;
    $tool = "\033[97m~\033[97m[\033[91m+\033[97m] \033[97m➪ " . $luc;
    $vuhoangpro = "\033[97m~\033[97m[\033[91m+\033[97m] \033[97m➪ " . $luc;
    $thanhngang = "\033[1;37m---------------------------------------------------\n";
    $caidatdelay = VDSVSDVSDAAQQB($logo);
    $dl["follow"] = explode("|", $caidatdelay)[1];
    $dl["like"] = explode("|", $caidatdelay)[0];
    $dl["likesieure"] = explode("|", $caidatdelay)[0];
    $dl["likegiare"] = explode("|", $caidatdelay)[0];
    $dl["reaction"] = explode("|", $caidatdelay)[4];
    $dl["comment"] = explode("|", $caidatdelay)[2];
    $dl["share"] = explode("|", $caidatdelay)[3];
    $dl["reactioncmt"] = explode("|", $caidatdelay)[5];
    $dl["group"] = explode("|", $caidatdelay)[7];
    $dl["fanpage"] = explode("|", $caidatdelay)[6];
    $dl["nvnghi"] = explode("|", $caidatdelay)[8];
    $dl["nghi"] = explode("|", $caidatdelay)[9];
    $acc_tds = HJABSCASCBBHCJBACSBHASHCBjnsjcnsjnc($logo);
    $tk = $acc_tds["TK"];
    $mk = $acc_tds["MK"];
    $lg = BHSACASADVQQB($tk, $mk);
    $tongxu = 0;
    $user_tds = '';
    $tokentds = '';
    while (true) {
        $profile_tds = BHJHABVDSJVLKAAQQBajscsc();
        if (strpos($profile_tds, "xu") and strpos($profile_tds, "user") and strpos($profile_tds, "tokentds")) {
            $profile_tds = json_decode($profile_tds, true);
            $tongxu = $profile_tds["xu"];
            $user_tds = $profile_tds["user"];
            $tokentds = $profile_tds["tokentds"];
            break;
        }
        sleep(5);
    }
    system("clear");
    echo $logo . "\n";
    $khoToken = array();
    $khoToken = ASCADaa1221DAAQQBc($logo);
    $demcki = count($khoToken);
    @system("clear");
    echo $logo . "\n";
    echo $daucau2 . "Tool Auto TDS Đa Cookie Pro5\n";
    echo $daucau2 . "Bản quyền DragonX\n";
    echo $thanhngang;
    echo $daucau2 . "Tài khoản: " . $trang . $user_tds . "\n";
    echo $daucau2 . "Số xu: " . $trang . $tongxu . "\n";
    echo $daucau2 . "Tổng Cookie Pro5 Đã Thêm: " . $trang . $demcki . "\n";
    echo $thanhngang;
    $list_nv = JABSCHBASHCBBHAHSCBHCJBACSBHASHCBc();
    echo $thanhngang;
    echo $daucau2 . "Đổi Cookie sau ______ nhiệm vụ\r";
    echo $daucau2 . "Đổi Cookie sau _" . $trang;
    $doiacc = trim(fgets(STDIN));
    echo $daucau2 . "Nhập Cookie\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . "Nhập lại Cookie Pro5 khi die\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . "Die hết Cookie Pro5 mới nhập\n";
    echo $daucau2 . "Chọn: " . $vang;
    $nhapckdie = trim(fgets(STDIN));
    echo $daucau2 . "Ẩn id Facebook ".$vang."(".$trang."y/n".$vang.")".$trang.": " . $vang;
    $anid = trim(fgets(STDIN));
    $dem_het_nv = 0;
    $dem = 0;
    $dem2 = 0;
    $dem3 = 0;
    while (true) {
        if (count($khoToken) == 0) {
            check_connect();
            $khoToken = ASCADaa1221DAAQQBc($logo);
        }
        for ($acc = 0; $acc < count($khoToken); $acc++) {
            $cookie = $khoToken[$acc];
            check_connect();
            if (strpos($cookie, "i_user=")) {
                $profile = ASCASCQWW3R3Wc($cookie);
            } else {
                $profile = ASCASCQWW3R3Wjsajncnjs($cookie);
            }
            $namefb = $profile["NAME"];
            $idfb = $profile["ID"];
            if ($idfb == "die" and $namefb == '') {
                echo "Coookie Die \n";
                array_splice($khoToken, $acc, 1);
                break;
            }
            check_connect();
            $tokenfb = '';
            if (strpos($cookie, "i_user=") == false) {
                $tokenfb = HBNDNNJSDNVNJSABH($cookie);
            }
            if ($idfb == '') {
                echo "Coookie Die \n";
                array_splice($khoToken, $acc, 1);
                break;
            }
            check_connect();
            $out = 0;
            $demlog = 0;
            while (true) {
                $d = ASCJHBASCHDJKAAQQB($idfb);
                if ($d == 1) {
                    $idfb1 = $idfb;
                    if ($anid == "y" or $anid == "Y") {
                        $idfb1 = "##########" . substr($idfb1, 10);
                    }
                    $out = 0;
                    echo "\r                            \r";
                    echo $vang . "\033[1;37m---------------------------------------------------\n";
                    echo $luc . "Đang Chạy ID:\x1b[1;37m " . $idfb1 . " " . $luc . "Tên FB:\x1b[1;37m " . $namefb . "\n";
                    echo $vang . "\033[1;37m---------------------------------------------------\n";
                    break;
                } else {
                    echo "\r Chưa thêm " . $idfb . " vào cấu hình tds.\r";
                    sleep(5);
                    $demlog++;
                    if ($demlog == 3) {
                        $lg = BHSACASADVQQB($tk, $mk);
                        $demlog = 0;
                    }
                }
            }
            while ($d == 1) {
                if ($out == 1) {
                    break;
                }
                while (true) {
                    $loai = strtolower($list_nv[array_rand($list_nv, 1)]);
                    check_connect();
                    if (strpos($cookie, "i_user=")) {
                        if ($loai != "reactioncmt" and $loai != "comment") {
                            break;
                        }
                    } else {
                        break;
                    }
                }
                $getnv = HBBHSCHBDSHBJNJVQQB($loai);
                if (strpos($getnv, "id") and strpos($getnv, "link") and strpos($getnv, "type") and strpos($getnv, "coin") and strpos($getnv, "data")) {
                    $info = json_decode($getnv, true);
                    $xujob = $info["coin"];
                    $tong = count($info["data"]);
                    for ($i = 0; $i < $tong; $i++) {
                        if ($out == 1) {
                            break;
                        }
                        $id = $info["data"][$i]["id"];
                        $link = $info["data"][$i]["link"];
                        $type = $info["data"][$i]["type"];
                        echo "\r  " . $vang . $id . "  " . $type . "  \r";
                        check_connect();
                        if ($id != '') {
                            if ($loai == "follow") {
                                $kq = JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id, "follow", null, null);
                            } elseif ($loai == "fanpage") {
                                $kq = JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id, "page", null, null);
                            } elseif ($loai == "like" or $loai == "reaction" or $loai == "likegiare" or $loai == "likesieure") {
                                if ($loai == "likegiare") {
                                    $type = "likegiare";
                                }
                                if ($loai == "likesieure") {
                                    $type = "likesieure";
                                }
                                if ($loai == "reaction") {
                                    $kq = JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id, "camxuc", $type, null);
                                } else {
                                    $kq = JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id, "camxuc", "like", null);
                                }
                            } elseif ($loai == "reactioncmt") {
                                $kq = HBJHJABJDKVDNNKNB($id, $idfb, $type, $cookie);
                            } elseif ($loai == "comment") {
                                $type = "comment";
                                $msg = $info["data"][$i]["msg"];
                                $kq = HBNASCASAWLKMDMKVABH($tokenfb, $id, $cookie, $msg);
                            } elseif ($loai == "share") {
                                $type = "share";
                                $kq = JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id, "share", null, null);
                                if ($kq == 2) {
                                    $out = 1;
                                }
                            } elseif ($loai == "group") {
                                $kq = JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id, "group", null, null);
                            }
                            if ($loai == "reaction" or $loai == "reactioncmt") {
                                $cc = BHASBCAHBSBHWAAQQB($type, $loai, $id);
                            } else {
                                $cc = BHASBCAHBSBHWAAQQB($type, $type, $id);
                            }
                            if ($cc != 2) {
                                $ccc = file_get_contents("https://traodoisub.com/api/coin/?type=" . $type . "&id=" . $id . "&access_token=" . $tokentds);
                                if (strpos($ccc, "success")) {
                                    $cc = 2;
                                }
                            }
                            if ($cc == 2) {
                                $dem++;
                                if ($dem % 15 == 0) {
                                    check_connect();
                                    while (true) {
                                        $profile_tds = BHJHABVDSJVLKAAQQBajscsc();
                                        if (strpos($profile_tds, "xu") and strpos($profile_tds, "user") and strpos($profile_tds, "tokentds")) {
                                            $profile_tds = json_decode($profile_tds, true);
                                            $tongxu = $profile_tds["xu"];
                                            $user_tds = $profile_tds["user"];
                                            $tokentds = $profile_tds["tokentds"];
                                            break;
                                        }
                                        sleep(5);
                                    }
                                } else {
                                    $tongxu = $tongxu + $xujob;
                                }
                                if ($dem % 20 == 0) {
                                    check_connect();
                                    $lg = BHSACASADVQQB($tk, $mk);
                                    if (strpos($cookie, "i_user=")) {
                                        $profile = ASCASCQWW3R3Wc($cookie);
                                    } else {
                                        $profile = ASCASCQWW3R3Wjsajncnjs($cookie);
                                    }
                                    $namefb2 = $profile["NAME"];
                                    $idfb2 = $profile["ID"];
                                    if ($idfb2 == '' and $namefb2 == '') {
                                        $break = 1;
                                        echo $do . " Cookie {$namefb} {$idfb} Die \n";
                                        array_splice($khoToken, $acc, 1);
                                        $out = 1;
                                    }
                                }
                                $type2 = strtoupper(substr($type . "                       ", 0, 8));
                                $xujob2 = strtoupper(substr($xujob . "                       ", 0, 4));
                                if (strpos($id, "_")) {
                                    $id = explode("_", $id)[1];
                                }
                                $id = substr($id . "                       ", 0, 17);
                                $dem_het_nv = 0;
                                echo "\r" . $do . "[" . $vang . $dem . $do . "] " . $xnhac . date("H:i:s") . $xduong . " | " . $vang . $type2 . $xduong . " | " . $trang . $id . $xduong . " | " . $luc . "+" . $xujob2 . $xduong . " | " . $vang . $tongxu . "\n\r";
                                check_connect();
                                if ($dem % $doiacc == 0) {
                                    $out = 1;
                                    break;
                                }
                                if ($dem % $dl["nvnghi"] == 0) {
                                    ASCASASAAQQBc($dl["nghi"]);
                                } else {
                                    ASCASASAAQQBc($dl[$loai]);
                                }
                                $dem2 = 0;
                                $dem3 = 0;
                            } else {
                                $dem3++;
                                if ($dem3 % 5 == 0) {
                                    $dem3 = 0;
                                    break;
                                }
                                $dem2++;
                                if ($dem2 % 20 == 0) {
                                    check_connect();
                                    $lg = BHSACASADVQQB($tk, $mk);
                                    if (strpos($cookie, "i_user=")) {
                                        $profile = ASCASCQWW3R3Wc($cookie);
                                    } else {
                                        $profile = ASCASCQWW3R3Wjsajncnjs($cookie);
                                    }
                                    $namefb2 = $profile["NAME"];
                                    $idfb2 = $profile["ID"];
                                    if ($idfb2 == '' and $namefb2 == '') {
                                        $break = 1;
                                        echo $do . " Cookie {$namefb} {$idfb} Die \n";
                                        array_splice($khoToken, $acc, 1);
                                        $out = 1;
                                    }
                                }
                            }
                        }
                    }
                } else {
                    echo "\r " . $do . $loai . " hết nhiệm vụ \r";
                    $dem_het_nv++;
                    if ($dem_het_nv > 15) {
                        check_connect();
                        $lg = BHSACASADVQQB($tk, $mk);
                        $dem_het_nv = 0;
                        sleep(20);
                        if (count($khoToken) > 1) {
                            $out = 1;
                            break;
                        }
                    }
                }
            }
        }
    }
}
function ASCASCQWW3R3Wc($cookie)
{
    $idfb = '';
    $namefb = '';
    if (strpos($cookie, "i_user=")) {
        $idfb = explode(";", explode("i_user=", $cookie)[1])[0];
        $namefb = JNKKAJJCAKJSJNAKSNVKJSBDKVJBK($cookie);
    }
    if ($idfb and $namefb != '') {
        return array("NAME" => $namefb, "ID" => $idfb);
    }
    return array("NAME" => '', "ID" => '');
}
function JNKKAJJCAKJSJNAKSNVKJSBDKVJBK($cookie)
{
    $head = array("Host: www.facebook.com", "upgrade-insecure-requests: 1", "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "dnt: 1", "x-requested-with: mark.via.gp", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document", "accept-encoding: gzip, deflate", "accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7");
    $url = "https://www.facebook.com/me";
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_SSL_VERIFYHOST => false, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 60, CURLOPT_CONNECTTIMEOUT => 60, CURLOPT_COOKIE => $cookie, CURLOPT_HTTPHEADER => $head, CURLOPT_ENCODING => '', CURLOPT_FOLLOWLOCATION => true));
    $access = curl_exec($ch);
    $name = explode("<", explode("<title>", $access)[1])[0];
    return $name;
}
function ASCADaa1221DAAQQBc($logo)
{
    $luc = "\x1b[1;92m";
    $do = "\x1b[1;31m";
    $vang = "\x1b[1;93m";
    $trang = "\x1b[1;97m";
    $dragonx = "\033[97m~\033[97m[\033[91m+\033[97m] \033[97m➪ " . $luc;
    $thanhngang = "\x1b[1;37m---------------------------------------------------\n";
    $daucau2 = "\033[97m~\033[97m[\033[91m+\033[97m] \033[97m➪ " . $luc;
    $khoToken = array();
    while (true) {
        if (file_exists("File_cookie_FB_Pro5.txt")) {
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . "Chạy Cookie Facebook Pro5 Cũ\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . "Thêm Cookie Facebook Pro5 Để Chạy\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "3" . $vang . "] " . $luc . "Xóa Cookie Pro5 Cũ Nhập Lại\n";
            echo $daucau2 . "Nhập số: {$vang}";
            $choice = trim(fgets(STDIN));
            if ($choice == "3") {
                unlink("File_cookie_FB_Pro5.txt");
                $khoToken = array();
            } else {
                if ($choice == "2") {
                    $khoToken = json_decode(fread(fopen("File_cookie_FB_Pro5.txt", "r"), filesize("File_cookie_FB_Pro5.txt")), true);
                } else {
                    break;
                }
            }
        }
        if (!file_exists("File_cookie_FB_Pro5.txt") or $choice == "2") {
            echo $daucau2 . "Nhập Cookie Facebook Muốn Dừng Ấn" . $trang . " Enter \n";
            unlink("File_cookie_FB_Pro5.txt");
            for ($a = 1; $a < 999999; $a++) {
                echo $dragonx . "Nhập Cookie Tài Khoản Chứa Page Thứ " . $trang . $a . " : {$vang}";
                $cookie = trim(fgets(STDIN));
                if (strlen($cookie) < 5) {
                    break;
                }
                $get_id_page = GET_PAGE_PROFILE($cookie);
                if (!isset($get_id_page)) {
                    print_r($dragonx . $do . "Không Thể Tìm Thấy Page !\n");
                    $content = $cookie;
                    array_push($khoToken, $content);
                }
                foreach ($get_id_page as $item) {
                    $uid_page = $item["profile"]["id"];
                    $name_page = $item["profile"]["name"];
                    echo $dragonx . "Bạn Có Muốn Chạy Page " . $trang . $name_page . $luc . " Không? (y/n) : " . $vang;
                    $chonpage = trim(fgets(STDIN));
                    if ($chonpage == '') {
                        echo $thanhngang;
                        break;
                    }
                    if ($chonpage == "y" || $chonpage == "Y") {
                        $content = $cookie . "i_user=" . $uid_page;
                        array_push($khoToken, $content);
                    }
                    if (count($get_id_page) == 0) {
                        echo $thanhngang;
                        break;
                    }
                }
            }
        }
        $js = json_encode($khoToken);
        $k = fopen("File_cookie_FB_Pro5.txt", "a+");
        fwrite($k, $js);
        fclose($k);
        $demcki = count($khoToken);
        break;
    }
    $khoToken = json_decode(fread(fopen("File_cookie_FB_Pro5.txt", "r"), filesize("File_cookie_FB_Pro5.txt")), true);
    return $khoToken;
}
function GET_PAGE_PROFILE($cookie)
{
    $url_1 = "https://mbasic.facebook.com/";
    $tsm = array("authority:mbasic.facebook.com", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "accept-language:vi,en;q=0.9,vi-VN;q=0.8,fr-FR;q=0.7,fr;q=0.6,en-US;q=0.5", "cache-control:max-age=0", "cookie:" . $cookie, "origin:https://www.facebook.com", "referer:https://www.facebook.com", "sec-ch-ua:\"Google Chrome\";v=\"107\", \"Chromium\";v=\"107\", \"Not=A?Brand\";v=\"24\"", "sec-ch-ua-mobile:?0", "sec-ch-ua-platform:\"Windows\"", "sec-fetch-dest:document", "sec-fetch-mode:navigate", "sec-fetch-site:none", "sec-fetch-user:?1", "upgrade-insecure-requests:1", "user-agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36");
    $mr = curl_init();
    curl_setopt_array($mr, array(CURLOPT_PORT => "443", CURLOPT_URL => "{$url_1}", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_TIMEOUT => 30, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $tsm));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $_SESSION["fb_dtsg"] = explode("\"", explode("<input type=\"hidden\" name=\"fb_dtsg\" value=\"", $mr2)[1])[0];
    $_SESSION["jazoest"] = explode("\"", explode("<input type=\"hidden\" name=\"jazoest\" value=\"", $mr2)[1])[0];
    $url_2 = "https://www.facebook.com/api/graphql/";
    $data = array("fb_dtsg" => $_SESSION["fb_dtsg"], "jazoest" => $_SESSION["jazoest"], "variables" => "{\"showUpdatedLaunchpointRedesign\":true,\"useAdminedPagesForActingAccount\":false,\"useNewPagesYouManage\":true}", "doc_id" => "5300338636681652");
    $mr = curl_init();
    curl_setopt_array($mr, array(CURLOPT_PORT => "443", CURLOPT_URL => "{$url_2}", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_TIMEOUT => 30, CURLOPT_CUSTOMREQUEST => "POST", CURLOPT_POSTFIELDS => $data, CURLOPT_HTTPHEADER => $tsm));
    $mr3 = curl_exec($mr);
    $js = json_decode($mr3, true);
    $get_id_page = $js["data"]["viewer"]["actor"]["profile_switcher_eligible_profiles"]["nodes"];
    curl_close($mr);
    return $get_id_page;
}
function JABSCHBASHCBBHAHSCBHCJBACSBHASHCBc()
{
    $list_nv = array();
    $luc = "\x1b[1;92m";
    $do = "\x1b[1;31m";
    $vang = "\x1b[1;93m";
    $trang = "\x1b[1;97m";
    $daucau2 = "\033[97m~\033[97m[\033[91m+\033[97m] \033[97m➪ " . $luc;
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . "Chọn nhiệm vụ Like\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . "Chọn nhiệm vụ Like Rẻ\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "3" . $vang . "] " . $luc . "Chọn nhiệm vụ Like Siêu Rẻ\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "4" . $vang . "] " . $luc . "Chọn nhiệm vụ Follow\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "5" . $vang . "] " . $luc . "Chọn nhiệm vụ Comment \n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "6" . $vang . "] " . $luc . "Chọn nhiệm vụ Share\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "7" . $vang . "] " . $luc . "Chọn nhiệm vụ Cảm Xúc\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "8" . $vang . "] " . $luc . "Chọn nhiệm vụ Cảm Xúc Comment \n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "9" . $vang . "] " . $luc . "Chọn nhiệm vụ Like Fanpage\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "10" . $vang . "] " . $luc . "Chọn nhiệm vụ Tham Gia Nhóm\n";
    echo $daucau2 . "Nhập số chọn nhiệm vụ (" . $trang . "VD: 1+2+3" . $luc . ")\n";
    echo $daucau2 . "Nhập số: " . $vang;
    $chonsonv = "_+" . trim(fgets(STDIN)) . "+_";
    if (strpos($chonsonv, "+1+")) {
        array_push($list_nv, "like");
    }
    if (strpos($chonsonv, "+2+")) {
        array_push($list_nv, "likegiare");
    }
    if (strpos($chonsonv, "+3+")) {
        array_push($list_nv, "likesieure");
    }
    if (strpos($chonsonv, "+4+")) {
        array_push($list_nv, "follow");
    }
    if (strpos($chonsonv, "+5+")) {
        array_push($list_nv, "comment");
    }
    if (strpos($chonsonv, "+6+")) {
        array_push($list_nv, "share");
    }
    if (strpos($chonsonv, "+7+")) {
        array_push($list_nv, "reaction");
    }
    if (strpos($chonsonv, "+8+")) {
        array_push($list_nv, "reactioncmt");
    }
    if (strpos($chonsonv, "+9+")) {
        array_push($list_nv, "fanpage");
    }
    if (strpos($chonsonv, "+10+")) {
        array_push($list_nv, "group");
    }
    return $list_nv;
}
function JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id_tt, $loai, $type, $text_share)
{
    $loai = strtolower($loai);
    $type = strtoupper($type);
    $id_page = explode(";", explode("i_user=", $cookie)[1])[0];
    $url = "https://www.facebook.com/" . $id_tt;
    $head = array("Host: www.facebook.com", "upgrade-insecure-requests: 1", "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "dnt: 1", "x-requested-with: mark.via.gp", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document", "accept-encoding: gzip, deflate", "accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_SSL_VERIFYHOST => false, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 60, CURLOPT_CONNECTTIMEOUT => 60, CURLOPT_COOKIE => $cookie, CURLOPT_HTTPHEADER => $head, CURLOPT_ENCODING => '', CURLOPT_FOLLOWLOCATION => true));
    $access = curl_exec($ch);
    $lsd = explode("\"", explode("[\"LSD\",[],{\"token\":\"", $access)[1])[0];
    $rev = explode(",", explode("{\"server_revision\":", $access)[1])[0];
    $hsi = explode("\"", explode("\"hsi\":\"", $access)[1])[0];
    $comet_req = explode("&", explode("__comet_req=", $access)[1])[0];
    $fb = explode("\"", explode("[\"DTSGInitialData\",[],{\"token\":\"", $access)[1])[0];
    $jazoest = explode("\"", explode("jazoest=", $access)[1])[0];
    $spin_r = explode(",", explode("\"__spin_r\":", $access)[1])[0];
    $spin_t = explode(",", explode("\"__spin_t\":", $access)[1])[0];
    $hs = explode("\"", explode("\"haste_session\":\"", $access)[1])[0];
    $id_account = explode("\"", explode("\"AD_ACCOUNT_ID\":\"", $access)[1])[0];
    $appid = explode("\"", explode("\"APP_ID\":\"", $access)[1])[0];
    $feedback_id = explode("\"", explode("\"feedback\":{\"id\":\"", $access)[1])[0];
    $tracking = explode("\"", explode("\"encrypted_tracking\":\"", $access)[1])[0];
    if ($loai == "camxuc") {
        if ($type == "like" or $type == "LIKE") {
            $id = "1635855486666999";
        } else {
            if ($type == "love" or $type == "LOVE") {
                $id = "1678524932434102";
            } else {
                if ($type == "care" or $type == "CARE") {
                    $id = "613557422527858";
                } else {
                    if ($type == "wow" or $type == "WOW") {
                        $id = "478547315650144";
                    } else {
                        if ($type == "haha" or $type == "HAHA") {
                            $id = "115940658764963";
                        } else {
                            if ($type == "sad" or $type == "SAD") {
                                $id = "908563459236466";
                            } else {
                                if ($type == "angry" or $type == "ANGRY") {
                                    $id = "444813342392137";
                                }
                            }
                        }
                    }
                }
            }
        }
        $data = http_build_query(array("av" => $id_page, "__user" => $id_page, "__a" => "1", "__dyn" => "7AzHxqU5a5Q1ryUqxenFw9uu2i5U4e0ykdwSwAyUco2qwJxS1NwJwpUe8hw6vwb-q7oc81xoswaq2210wEwgolzUO0-E4a3aUS2G5Usw9m1YwBgK7o884y0Mo4G4Ufo5m1mzXxG1Pxi4UaEW2G1jxS6FobrwKxm5oe85nxmu3W0GpovUy2a0-pobpEbUGdwb6223908O3216AzUjwTwNwLwFg662S", "__csr" => "gmgR7hdrnR8zkHInSqkzEZlnaWiH9FjltWiCFpaleV4hkBH8ShC-Kip2Xl9eFHGGK-5b8dKWCV44HlpqyoWHKil3V8oDzWJp9VrAjXxeidCCKfxK2vUb98C4FF8vwoo4euqdzU8oO14yoaohxC3-2-awg8fo2YDF385e0zo662m2W3y1Hg723-48hxy2C4Uuwi813U6u0SU0jzw0L8w11e10w1hi00EfU0MK06rE0LN00AHw2Ftw1ku01mdw1CC09zw4gw3Ko1dUaE", "__req" => "f", "__hs" => $hs, "dpr" => "2", "__ccg" => "GOOD", "__rev" => $rev, "__s" => "zyhcqc:buwta2:7i84gg", "__hsi" => $hsi, "__comet_req" => $comet_req, "fb_dtsg" => $fb, "jazoest" => $jazoest, "lsd" => $lsd, "__aaid" => $id_account, "__spin_r" => $spin_r, "__spin_b" => "trunk", "__spin_t" => $spin_t, "fb_api_caller_class" => "RelayModern", "fb_api_req_friendly_name" => "CometUFIFeedbackReactMutation", "variables" => "{\"input\":{\"attribution_id_v2\":\"CometSinglePostRoot.react,comet.post.single,via_cold_start,1667375488208,722017,,\",\"feedback_id\":\"" . $feedback_id . "\",\"feedback_reaction_id\":\"" . $id . "\",\"feedback_source\":\"OBJECT\",\"is_tracking_encrypted\":true,\"tracking\":[\"" . $tracking . "\"],\"session_id\":\"bf514774-8fef-4921-89f8-9a4919ef22e7\",\"actor_id\":\"" . $id_page . "\",\"client_mutation_id\":\"1\"},\"useDefaultActor\":false,\"scale\":2}", "server_timestamps" => true, "doc_id" => "5703418209680126"));
    } else {
        if ($loai == "follow") {
            $data = http_build_query(array("av" => $id_page, "__user" => $id_page, "fb_dtsg" => $fb, "jazoest" => $jazoest, "lsd" => $lsd, "fb_api_caller_class" => "RelayModern", "fb_api_req_friendly_name" => "CometUserFollowMutation", "variables" => "{\"input\":{\"attribution_id_v2\":\"ProfileCometTimelineListViewRoot.react,comet.profile.timeline.list,via_cold_start,1667356956520,868746,190055527696468,\",\"subscribe_location\":\"PROFILE\",\"subscribee_id\":\"" . $id_tt . "\",\"actor_id\":\"" . $id_page . "\",\"client_mutation_id\":\"1\"},\"scale\":2}", "server_timestamps" => true, "doc_id" => "5032256523527306"));
        } else {
            if ($loai == "share") {
                $get = JHBAJHBCHJABSJHCBJASHBCJAHJSNCSSCSACSBV($url, $cookie);
                if (strpos($get, "groups") !== false) {
                    $data = http_build_query(array("av" => $id_page, "__user" => $id_page, "__a" => "1", "__dyn" => "7AzHxqU5a5Q1ryUqxenFw9uu2i5U4e0ykdwSwAyU8EW0CEbotwsobo6u3y4o1DU2_CxS320om782Cwwwg8a8465o-cwfG12wOKdwGxu782lwv89kbxS2218wc61axe3S1lwlE-UqwsUkxe2GewGwkUtxGm2SUbElxm3y1lUlDw-waCm7-8wywfCm2Sq2-azo2NwwwOg2cwMwhF8-4UdUcobUak1xwJw", "__csr" => "g8Ind5IgZijlcHtL9leCGdnVaHSIB4tq9jhiaqF2ejlQWFu9WFnGmhd5Hjy49yrJvGa-imbFHy9WGKVEOEy8AzqVAdx6mrGbypVGxF7zqDK8FfDye5UCaDy-498lQ5UfU9U8ogwHwvoy4E9Ekwh8CEf8jg6i6KEgDwYKq260P8a823whEaU6i3Xwkonwt8txS2u3qq4E3Mwqo760jm01f3w9t03lE02EJw6Zw1z2060o1380qHw2no888K04WU05mG06Y80Dq0D80WC0rO8w", "__req" => "n", "__hs" => $hs, "dpr" => "2", "__ccg" => "GOOD", "__rev" => $rev, "__s" => "93kf5g:ssztt9:lx2u1p", "__hsi" => $hsi, "__comet_req" => "15", "fb_dtsg" => $fb, "jazoest" => $jazoest, "lsd" => $lsd, "__aaid" => $id_account, "__spin_r" => $spin_r, "__spin_b" => "trunk", "__spin_t" => $spin_t, "fb_api_caller_class" => "RelayModern", "fb_api_req_friendly_name" => "useCometFeedToFeedReshare_FeedToFeedMutation", "variables" => "{\"input\":{\"attachments\":{\"link\":{\"share_scrape_data\":\"{\\\"share_type\\\":37,\\\"share_params\\\":[" . $id_tt . "]}\"}},\"audiences\":{\"undirected\":{\"privacy\":{\"allow\":[],\"base_state\":\"EVERYONE\",\"deny\":[],\"tag_expansion_state\":\"UNSPECIFIED\"}}},\"message\":{\"ranges\":[],\"text\":\"" . $text_share . "\"},\"is_tracking_encrypted\":true,\"navigation_data\":{\"attribution_id_v2\":\"CometGroupPermalinkRoot.react,comet.group.permalink,via_cold_start,1667534608867,546309,2361831622,\"},\"source\":\"www\",\"tracking\":[\"" . $tracking . "\"],\"actor_id\":\"" . $id_page . "\",\"client_mutation_id\":\"1\"},\"renderLocation\":\"homepage_stream\",\"scale\":2,\"privacySelectorRenderLocation\":\"COMET_STREAM\",\"useDefaultActor\":false,\"displayCommentsContextEnableComment\":null,\"feedLocation\":\"NEWSFEED\",\"displayCommentsContextIsAdPreview\":null,\"displayCommentsContextIsAggregatedShare\":null,\"displayCommentsContextIsStorySet\":null,\"displayCommentsFeedbackContext\":null,\"feedbackSource\":1,\"focusCommentID\":null,\"UFI2CommentsProvider_commentsKey\":\"CometModernHomeFeedQuery\"}", "server_timestamps" => true, "doc_id" => "5606822466034221", "fb_api_analytics_tags" => "[\"qpl_active_flow_ids=431626709\"]"));
                }
                if (strpos($get, "watch") !== false) {
                    $data = http_build_query(array("av" => $id_page, "__user" => $id_page, "__a" => "1", "__dyn" => "7AzHxqU5a5Q1ryUqxenFw9uu2i5U4e0ykdwSwAyU8EW0CEbotwsobo6u3y4o1DU2_CxS320om782Cwwwg8a8465o-cwfG12wOKdwGxu782lwv89kbxS2218wc61axe3S1lwlE-UqwsUkxe2GewGwkUtxGm2SUbElxm3y1lUlDw-waCm7-8wywfCm2Sq2-azo2NwwwOg2cwMwhF8-4UdUcobUak1xwJw", "__csr" => "g8Ind5IgZijlcHtL9leCGdnVaHSIB4tq9jhiaqF2ejlQWFu9WFnGmhd5Hjy49yrJvGa-imbFHy9WGKVEOEy8AzqVAdx6mrGbypVGxF7zqDK8FfDye5UCaDy-498lQ5UfU9U8ogwHwvoy4E9Ekwh8CEf8jg6i6KEgDwYKq260P8a823whEaU6i3Xwkonwt8txS2u3qq4E3Mwqo760jm01f3w9t03lE02EJw6Zw1z2060o1380qHw2no888K04WU05mG06Y80Dq0D80WC0rO8w", "__req" => "n", "__hs" => $hs, "dpr" => "2", "__ccg" => "GOOD", "__rev" => $rev, "__s" => "93kf5g:ssztt9:lx2u1p", "__hsi" => $hsi, "__comet_req" => "15", "fb_dtsg" => $fb, "jazoest" => $jazoest, "lsd" => $lsd, "__aaid" => $id_account, "__spin_r" => $spin_r, "__spin_b" => "trunk", "__spin_t" => $spin_t, "fb_api_caller_class" => "RelayModern", "fb_api_req_friendly_name" => "useCometFeedToFeedReshare_FeedToFeedMutation", "variables" => "{\"input\":{\"attachments\":{\"link\":{\"share_scrape_data\":\"{\\\"share_type\\\":11,\\\"share_params\\\":[" . $id_tt . "]}\"}},\"audiences\":{\"undirected\":{\"privacy\":{\"allow\":[],\"base_state\":\"EVERYONE\",\"deny\":[],\"tag_expansion_state\":\"UNSPECIFIED\"}}},\"message\":{\"ranges\":[],\"text\":\"" . $text_share . "\"},\"is_tracking_encrypted\":true,\"navigation_data\":{\"attribution_id_v2\":\"CometVideoHomeNewPermalinkRoot.react,comet.watch.injection,via_cold_start,1667466315284,308969,2392950137,\"},\"source\":\"www\",\"tracking\":[],\"actor_id\":\"" . $id_page . "\",\"client_mutation_id\":\"1\"},\"renderLocation\":\"homepage_stream\",\"scale\":2,\"privacySelectorRenderLocation\":\"COMET_STREAM\",\"useDefaultActor\":false,\"displayCommentsContextEnableComment\":null,\"feedLocation\":\"NEWSFEED\",\"displayCommentsContextIsAdPreview\":null,\"displayCommentsContextIsAggregatedShare\":null,\"displayCommentsContextIsStorySet\":null,\"displayCommentsFeedbackContext\":null,\"feedbackSource\":1,\"focusCommentID\":null,\"UFI2CommentsProvider_commentsKey\":\"CometModernHomeFeedQuery\"}", "server_timestamps" => true, "doc_id" => "5664417773604510", "fb_api_analytics_tags" => "[\"qpl_active_flow_ids=30605361\"]"));
                } else {
                    $data = http_build_query(array("av" => $id_page, "__user" => $id_page, "__a" => "1", "__dyn" => "7AzHxqU5a5Q1ryUqxenFw9uu2i5U4e0ykdwSwAyU8EW0CEbotwsobo6u3y4o1DU2_CxS320om782Cwwwg8a8465o-cwfG12wOKdwGxu782lwv89kbxS2218wc61axe3S1lwlE-UqwsUkxe2GewGwkUtxGm2SUbElxm3y1lUlDw-waCm7-8wywfCm2Sq2-azo2NwwwOg2cwMwhF8-4UdUcobUak1xwJw", "__csr" => "g8Ind5IgZijlcHtL9leCGdnVaHSIB4tq9jhiaqF2ejlQWFu9WFnGmhd5Hjy49yrJvGa-imbFHy9WGKVEOEy8AzqVAdx6mrGbypVGxF7zqDK8FfDye5UCaDy-498lQ5UfU9U8ogwHwvoy4E9Ekwh8CEf8jg6i6KEgDwYKq260P8a823whEaU6i3Xwkonwt8txS2u3qq4E3Mwqo760jm01f3w9t03lE02EJw6Zw1z2060o1380qHw2no888K04WU05mG06Y80Dq0D80WC0rO8w", "__req" => "n", "__hs" => $hs, "dpr" => "2", "__ccg" => "GOOD", "__rev" => $rev, "__s" => "93kf5g:ssztt9:lx2u1p", "__hsi" => $hsi, "__comet_req" => "15", "fb_dtsg" => $fb, "jazoest" => $jazoest, "lsd" => $lsd, "__aaid" => $id_account, "__spin_r" => $spin_r, "__spin_b" => "trunk", "__spin_t" => $spin_t, "fb_api_caller_class" => "RelayModern", "fb_api_req_friendly_name" => "useCometFeedToFeedReshare_FeedToFeedMutation", "variables" => "{\"input\":{\"attachments\":{\"link\":{\"share_scrape_data\":\"{\\\"share_type\\\":22,\\\"share_params\\\":[" . $id_tt . "]}\"}},\"audiences\":{\"undirected\":{\"privacy\":{\"allow\":[],\"base_state\":\"EVERYONE\",\"deny\":[],\"tag_expansion_state\":\"UNSPECIFIED\"}}},\"message\":{\"ranges\":[],\"text\":\"" . $text_share . "\"},\"is_tracking_encrypted\":true,\"navigation_data\":{\"attribution_id_v2\":\"CometSinglePostRoot.react,comet.post.single,via_cold_start,1667386703105,213821,,\"},\"source\":\"www\",\"tracking\":[\"" . $tracking . "\"],\"actor_id\":\"" . $id_page . "\",\"client_mutation_id\":\"1\"},\"renderLocation\":\"homepage_stream\",\"scale\":2,\"privacySelectorRenderLocation\":\"COMET_STREAM\",\"useDefaultActor\":false,\"displayCommentsContextEnableComment\":null,\"feedLocation\":\"NEWSFEED\",\"displayCommentsContextIsAdPreview\":null,\"displayCommentsContextIsAggregatedShare\":null,\"displayCommentsContextIsStorySet\":null,\"displayCommentsFeedbackContext\":null,\"feedbackSource\":1,\"focusCommentID\":null,\"UFI2CommentsProvider_commentsKey\":\"CometModernHomeFeedQuery\"}", "server_timestamps" => true, "doc_id" => "5750340061725090"));
                }
            } else {
                if ($loai == "page") {
                    $data = http_build_query(array("av" => $id_page, "__user" => $id_page, "__a" => "1", "__dyn" => "7AzHxqU5a5Q1ryUqxenFw9uu2i5U4e0ykdwSwAyU8EW0CEbotwsobo6u3y4o1DU2_CxS320om782Cwwwg8a8465o-cwfG12wOKdwGxu782lwv89kbxS2218wc61axe3S1lwlE-UqwsUkxe2GewGwkUtxGm2SUbElxm3y1lUlDw-waCm7-8wywfCm2Sq2-azo2NwwwOg2cwMwhF8-4UdUcobUak1xwJw", "__csr" => "g8Ind5IgZijlcHtL9leCGdnVaHSIB4tq9jhiaqF2ejlQWFu9WFnGmhd5Hjy49yrJvGa-imbFHy9WGKVEOEy8AzqVAdx6mrGbypVGxF7zqDK8FfDye5UCaDy-498lQ5UfU9U8ogwHwvoy4E9Ekwh8CEf8jg6i6KEgDwYKq260P8a823whEaU6i3Xwkonwt8txS2u3qq4E3Mwqo760jm01f3w9t03lE02EJw6Zw1z2060o1380qHw2no888K04WU05mG06Y80Dq0D80WC0rO8w", "__req" => "n", "__hs" => $hs, "dpr" => "2", "__ccg" => "GOOD", "__rev" => $rev, "__s" => "93kf5g:ssztt9:lx2u1p", "__hsi" => $hsi, "__comet_req" => "15", "fb_dtsg" => $fb, "jazoest" => $jazoest, "lsd" => $lsd, "__aaid" => $id_account, "__spin_r" => $spin_r, "__spin_b" => "trunk", "__spin_t" => $spin_t, "fb_api_caller_class" => "RelayModern", "fb_api_req_friendly_name" => "CometPageLikeCommitMutation", "variables" => "{\"input\":{\"attribution_id_v2\":\"CometSinglePageHomeRoot.react,comet.page,via_cold_start,1667362285678,769501,250100865708545,\",\"is_tracking_encrypted\":true,\"page_id\":\"" . $id_tt . "\",\"source\":\"unknown\",\"tracking\":[],\"actor_id\":\"" . $id_page . "\",\"client_mutation_id\":\"1\"},\"isAdminView\":false}", "server_timestamps" => true, "doc_id" => "5491200487600992"));
                } else {
                    if ($loai == "group") {
                        $data = http_build_query(array("av" => $id_page, "__user" => $id_page, "__a" => "1", "__dyn" => "7AzHxqU5a5Q1ryUqxenFw9uu2i5U4e0ykdwSwAyU8EW0CEbotwsobo6u3y4o1DU2_CxS320om782Cwwwg8a8465o-cwfG12wOKdwGxu782lwv89kbxS2218wc61axe3S1lwlE-UqwsUkxe2GewGwkUtxGm2SUbElxm3y1lUlDw-waCm7-8wywfCm2Sq2-azo2NwwwOg2cwMwhF8-4UdUcobUak1xwJw", "__csr" => "g8Ind5IgZijlcHtL9leCGdnVaHSIB4tq9jhiaqF2ejlQWFu9WFnGmhd5Hjy49yrJvGa-imbFHy9WGKVEOEy8AzqVAdx6mrGbypVGxF7zqDK8FfDye5UCaDy-498lQ5UfU9U8ogwHwvoy4E9Ekwh8CEf8jg6i6KEgDwYKq260P8a823whEaU6i3Xwkonwt8txS2u3qq4E3Mwqo760jm01f3w9t03lE02EJw6Zw1z2060o1380qHw2no888K04WU05mG06Y80Dq0D80WC0rO8w", "__req" => "n", "__hs" => $hs, "dpr" => "2", "__ccg" => "GOOD", "__rev" => $rev, "__s" => "93kf5g:ssztt9:lx2u1p", "__hsi" => $hsi, "__comet_req" => "15", "fb_dtsg" => $fb, "jazoest" => $jazoest, "lsd" => $lsd, "__aaid" => $id_account, "__spin_r" => $spin_r, "__spin_b" => "trunk", "__spin_t" => $spin_t, "fb_api_caller_class" => "RelayModern", "fb_api_req_friendly_name" => "GroupCometJoinForumMutation", "variables" => "{\"feedType\":\"DISCUSSION\",\"groupID\":\"" . $id_tt . "\",\"imageMediaType\":\"image/x-auto\",\"input\":{\"action_source\":\"GROUP_MALL\",\"attribution_id_v2\":\"CometGroupDiscussionRoot.react,comet.group,via_cold_start,1667361563012,796792,2361831622,\",\"group_id\":\"" . $id_tt . "\",\"group_share_tracking_params\":{\"app_id\":\"" . $appid . "\",\"exp_id\":\"null\",\"is_from_share\":true},\"actor_id\":\"" . $id_page . "\",\"client_mutation_id\":\"1\"},\"inviteShortLinkKey\":null,\"isChainingRecommendationUnit\":false,\"isEntityMenu\":true,\"scale\":2,\"source\":\"GROUP_MALL\",\"renderLocation\":\"group_mall\",\"__relay_internal__pv__GlobalPanelEnabledrelayprovider\":false,\"__relay_internal__pv__GroupsCometEntityMenuEmbeddedrelayprovider\":true}", "server_timestamps" => true, "doc_id" => "5419229451459171", "fb_api_analytics_tags" => "[\"qpl_active_flow_ids=431626709\"]"));
                    }
                }
            }
        }
    }
    $head = array("Host: www.facebook.com", "content-length: " . strlen($data), "x-fb-lsd: " . $lsd, "x-fb-friendly-name: CometUFIFeedbackReactMutation", "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36", "content-type: application/x-www-form-urlencoded", "accept: */*", "origin: https://www.facebook.com", "x-requested-with: mark.via.gp", "sec-fetch-site: same-origin", "sec-fetch-mode: cors", "sec-fetch-dest: empty", "referer: https://www.facebook.com/", "accept-encoding: gzip, deflate", "accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7");
    curl_setopt_array($ch, array(CURLOPT_URL => "https://www.facebook.com/api/graphql/", CURLOPT_CUSTOMREQUEST => "POST", CURLOPT_POSTFIELDS => $data, CURLOPT_RETURNTRANSFER => true, CURLOPT_HTTPHEADER => $head));
    $access = curl_exec($ch);
    return $access;
}
function JHBAJHBCHJABSJHCBJASHBCJAHJSNCSSCSACSBV($url, $cookie)
{
    $head = array("Host: www.facebook.com", "upgrade-insecure-requests: 1", "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "dnt: 1", "x-requested-with: mark.via.gp", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document", "accept-encoding: gzip, deflate", "accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_SSL_VERIFYHOST => true, CURLOPT_SSL_VERIFYPEER => true, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HEADER => true, CURLOPT_CONNECTTIMEOUT => 60, CURLOPT_TIMEOUT => 60, CURLOPT_COOKIE => $cookie, CURLOPT_HTTPHEADER => $head));
    if (strpos(curl_exec($ch), "datr") !== false) {
        return "DIE";
    } else {
        if (strpos(curl_exec($ch), "Datr") !== false) {
            return "DIE";
        } else {
            $h = explode("\n", curl_exec($ch));
            $a = $h[1];
            if (strpos($a, "location") !== false) {
                $b = $h[1];
                $url = explode("location: ", $b)[1];
            }
            $a = $h[2];
            if (strpos($a, "location") !== false) {
                $b = $h[2];
                $url = explode("location: ", $b)[1];
            }
            $a = $h[3];
            if (strpos($a, "location") !== false) {
                $b = $h[3];
                $url = explode("location: ", $b)[1];
            }
            $a = $h[4];
            if (strpos($a, "location") !== false) {
                $b = $h[4];
                $url = explode("location: ", $b)[1];
            }
            $a = $h[5];
            if (strpos($a, "location") !== false) {
                $b = $h[5];
                $url = explode("location: ", $b)[1];
            }
            $a = $h[6];
            if (strpos($a, "location") !== false) {
                $b = $h[6];
                $url = explode("location: ", $b)[1];
            }
            $a = $h[7];
            if (strpos($a, "location") !== false) {
                $b = $h[7];
                $url = explode("location: ", $b)[1];
            }
            $a = $h[8];
            if (strpos($a, "location") !== false) {
                $b = $h[8];
                $url = explode("location: ", $b)[1];
            }
            $a = $h[9];
            if (strpos($a, "location") !== false) {
                $b = $h[9];
                $url = explode("location: ", $b)[1];
            }
            $a = $h[10];
            if (strpos($a, "location") !== false) {
                $b = $h[10];
                $url = explode("location: ", $b)[1];
            }
        }
    }
    return $url;
}
function ASCASASAAQQBc($delay)
{
    for ($i = $delay; $i > 1; $i--) {
        echo "\r \x1b[1;9" . rand(1, 9) . "m Vui Lòng Đợi Sau " . $i . " Giây     \r";
        sleep(1);
    }
    echo "\r\x1b[1;9" . rand(1, 9) . "m Tool Auto TDS Pro5 An Orin       \r";
}
function ASCASCQWW3R3Wjsajncnjs($cookie)
{
    $useragent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36";
    $ch = curl_init();
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: m.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => "https://mbasic.facebook.com/profile.php", CURLOPT_TIMEOUT => 60, CURLOPT_RETURNTRANSFER => 1, CURLOPT_CONNECTTIMEOUT => 60, CURLOPT_USERAGENT => $useragent, CURLOPT_COOKIE => $cookie, CURLOPT_SSL_VERIFYPEER => TRUE, CURLOPT_HTTPHEADER => $head));
    $access = curl_exec($ch);
    if (strpos($access, "/profile.php?lst=")) {
        $name = explode("</title>", explode("xhtml\"><head><title>", $access)[1])[0];
        $id = explode("%", explode("/profile.php?lst=", $access)[1])[0];
        return array("NAME" => $name, "ID" => $id);
    } else {
        return array("NAME" => '', "ID" => '');
    }
}
function BHJHABVDSJVLKAAQQBajscsc()
{
    $url = "https://traodoisub.com/view/setting/load.php";
    $head = array("Host: traodoisub.com", "accept: application/json, text/javascript, */*; q=0.01", "x-requested-with: XMLHttpRequest", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36", "sec-fetch-site: same-origin", "sec-fetch-mode: cors", "sec-fetch-dest: empty", "referer: https://traodoisub.com/view/setting/");
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_FOLLOWLOCATION => TRUE, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_HTTPGET => true, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_COOKIEFILE => "TDS.txt", CURLOPT_HTTPHEADER => $head, CURLOPT_ENCODING => TRUE));
    $data = curl_exec($ch);
    curl_close($ch);
    $json = $data;
    return $json;
}
function HJABSCASCBBHCJBACSBHASHCBjnsjcnsjnc($logo)
{
    $do = "\x1b[1;91m";
    $den = "\x1b[1;33m";
    $tim = "\x1b[1;34m";
    $luc = "\x1b[1;92m";
    $trang = "\x1b[1;97m";
    $vang = "\x1b[1;93m";
    $hong = "\x1b[1;95m";
    $xnhac = "\x1b[1;36m";
    $xduong = "\x1b[1;96m";
    $daucau2 = "\033[97m~\033[97m[\033[91m+\033[97m] \033[97m➪ " . $luc;
    $khoTK_TDS = array();
    $TK = array(0);
    $MK = array(0);
    while (true) {
        system("clear");
        echo $logo . "\n";
        if (file_exists("File_TK_MK_TDS.txt")) {
            $khoTK_TDS = json_decode(fread(fopen("File_TK_MK_TDS.txt", "r"), filesize("File_TK_MK_TDS.txt")), true);
            if (count($khoTK_TDS) < 2) {
                unlink("File_TK_MK_TDS.txt");
            }
        }
        if (file_exists("File_TK_MK_TDS.txt")) {
            $khoTK_TDS = json_decode(fread(fopen("File_TK_MK_TDS.txt", "r"), filesize("File_TK_MK_TDS.txt")), true);
            system("clear");
            echo $logo . "\n";
            $demCC = 0;
            $demSOACC = 0;
            while (true) {
                $tk_ = $khoTK_TDS[$demCC];
                if (strlen($tk_) < 3) {
                    break;
                }
                $demCC++;
                $mk_ = $khoTK_TDS[$demCC];
                $demCC++;
                echo $xnhac."Vui Lòng Chờ...\r";
                $cc = BHSACASADVQQB($tk_, $mk_);
                if ($cc == 1) {
                    array_push($TK, $tk_);
                    array_push($MK, $mk_);
                    sleep(3);
                    $user_tds = '';
                    $tongxu = 0;
                    while (true) {
                        $profile_tds = BHJHABVDSJVLKAAQQBajscsc();
                        if (strpos($profile_tds, "xu") and strpos($profile_tds, "user") and strpos($profile_tds, "tokentds")) {
                            $profile_tds = json_decode($profile_tds, true);
                            $tongxu = $profile_tds["xu"];
                            $user_tds = $profile_tds["user"];
                            $tokentds = $profile_tds["tokentds"];
                            break;
                        } 
                        sleep(5);
                    }
                    $demSOACC++;
                    echo $daucau2 . "Nhập " . $vang . "[" . $trang . $demSOACC . $vang . "] " . $luc . "Tài Khoản: " . $vang . $user_tds . $luc . " Số dư: " . $vang . $tongxu . "\n";
                    
                } else {
                    echo $daucau2.$do."Đăng Nhập Thất Bại ".$tk_."\n";
                }
            }
            //echo $daucau2 . "Tài Khoản Số " . $vang . "[" . $trang . $demSOACC . $vang . "] " . $luc . "Name: " . $trang . $user_tds . $luc . " Số dư: " . $vang . $tongxu . "\n";
            echo $vang . "\033[1;37m---------------------------------------------------\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "X" . $vang . "] " . $luc . "Để xóa những acc đã nhập\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "T" . $vang . "] " . $luc . "Để thêm tài khoản khác\n";
            echo $daucau2 . "Hoặc nhập số tài khoản ở trên để chạy acc bạn muốn\n";
            echo $daucau2 . "Mời Bạn Chọn: {$vang}";
            $choice = trim(fgets(STDIN));
            if (strtoupper($choice) == "X") {
                unlink("File_TK_MK_TDS.txt");
            } elseif (strtoupper($choice) == "T") {
                $khoTK_TDS = json_decode(fread(fopen("File_TK_MK_TDS.txt", "r"), filesize("File_TK_MK_TDS.txt")), true);
            } else {
                return array("TK" => $TK[$choice], "MK" => $MK[$choice]);
            }
        }
        if (!file_exists("File_TK_MK_TDS.txt") or strtoupper($choice) == "T") {
            echo $daucau2 . "Nhập ACC TDS Muốn Dừng Ấn" . $trang . " Enter \n";
            unlink("File_TK_MK_TDS.txt");
            for ($a = 1; $a < 999999; $a++) {
                echo $daucau2 . "Nhập ACC thứ" . $trang . " {$a} \n" . $vang;
                echo $daucau2 . "Nhập Tài Khoản TDS: " . $vang;
                $nhaptk = (string) trim(fgets(STDIN));
                if (strlen($nhaptk) < 5) {
                    break;
                }
                echo $daucau2 . "Nhập Mật Khẩu TDS: " . $vang;
                $nhapmk = (string) trim(fgets(STDIN));
                array_push($khoTK_TDS, $nhaptk);
                array_push($khoTK_TDS, $nhapmk);
            }
            $js = json_encode($khoTK_TDS);
            $k = fopen("File_TK_MK_TDS.txt", "a+");
            fwrite($k, $js);
            fclose($k);
            $demtk = count($khoTK_TDS);
            if ($demtk < 2) {
                unlink("File_TK_MK_TDS.txt");
            }
        }
    }
    $khoTK_TDS = json_decode(fread(fopen("File_TK_MK_TDS.txt", "r"), filesize("File_TK_MK_TDS.txt")), true);
}
function check_connect()
{
/*
    $knod = 0;
    $connect = "false";
    while ($connect == "false") {
        $knod++;
        $aa = file_get_contents("https://www.google.com/");
        if ($aa != '') {
            $connect = "true";
        }
        if ($knod == 3) {
            $knod++;
            echo "\r";
            echo "\r                                         \r";
            echo "\x1b[1;31m kết nối của bạn tạm thời không ổn địn \r";
        }
    }*/
}
function logox()
{
    $do = "\x1b[1;91m";
    $den = "\x1b[1;33m";
    $tim = "\x1b[1;34m";
    $luc = "\x1b[1;92m";
    $trang = "\x1b[1;97m";
    $vang = "\x1b[1;93m";
    $hong = "\x1b[1;95m";
    $xnhac = "\x1b[1;36m";
    $xduong = "\x1b[1;96m";
    return "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL TDS PRO5 ĐA LUỒNG
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool403
\033[1;31m────────────────────────────────────────────────────────────";
}