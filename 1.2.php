<?php
error_reporting(0);
$xnhac = "\033[1;96m";
$luc = "\033[1;92m";
$hong = "\033[1;95m";
$do = "\033[1;31m";
$vang = "\033[1;93m";
$trang = "\033[1;97m";
$thanhngang = "\033[1;97m ══════════════════════════════════════════════════════════════\n";
$logo = "
\033[1;34m         █████╗  ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
        \033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
        \033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
        \033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
        \033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
        \033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;33mTOOL TTC YOUTUBE \033[1;37m(\033[1;33mAuto Đa Luồng\033[1;37m)
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;36mFB: \033[1;31manorintool
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool403
\033[1;31m────────────────────────────────────────────────────────────\n";
$kov = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> " . $luc;
$useragent  = "Mozilla/5.0 (Linux; Android 11; SM-A217F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36";
$_SESSION['useragent'] = $useragent;
@system('clear');
echo $logo;
while (true) {
    if (file_exists("logttc_token.txt")) {
        $infoaccount = file_get_contents("logttc_token.txt");
        $user = explode(';', explode('username:', $infoaccount)[1])[0];
        echo $kov . "Nhập " . $vang . "[" . $trang . "1" . $vang . "]" . $luc . " Để Giữ Lại Tài Khoản " . $vang . $user . "\n";
        echo $kov . "Nhập " . $vang . "[" . $trang . "2" . $vang . "]" . $luc . " Để Đăng Nhập Tài Khoản Mới\n";
        echo $kov . "Nhập Số " . $vang . ":" . $trang . " ";
        $chon_tk = trim(fgets(STDIN));
        if ($chon_tk == "2") {
            unlink("logttc_token.txt");
            continue;
        } elseif ($chon_tk == "1"){
            $bb = file_get_contents("logttc_token.txt");
            $_SESSION['access_toekn'] = explode(';', explode('Access_Token:', $bb)[1])[0];
        }
    }
    if (!file_exists("logttc_token.txt")) {
        echo $kov . "Nhập Access_Token_TTC " . $vang . ":" . $trang . " ";
        $_SESSION['access_toekn'] = trim(fgets(STDIN));
    }
    $token = $_SESSION['access_toekn'];
    $login = logintoken_jksbkjcbksbabksakdeieevb($token);
    if ($login["status"] == "success") {
        unlink("logttc_token.txt");
        $xu = $login["data"]["sodu"];
        $_SESSION['user'] = $login["data"]["user"];
        $js = fopen($_SESSION['user'] . "_TTC.txt", "w+");
        file_put_contents($_SESSION['user'] . "_TTC.txt", file_get_contents("ttc.txt"));
        unlink("ttc.txt");
        $arr = array("username" => $_SESSION['user'], "Access_Token" => $token);
        $my = fopen("logttc_token.txt", "w+");
        fwrite($my, "username:".$_SESSION['user'].";Access_Token:".$token.";");
        echo $kov . "Access_Token Chính Xác\n";
        sleep(2);
        break;
    } else {
        unlink("logttc_token.txt");
        unlink("ttc.txt");
        echo $kov . $do . "Access_Token Không Chính Xác\n";
        continue;
    }
}
$khockytb = [];
$khoauthorytb = [];
$khochannel = [];

while (true) {
    system("clear");
    echo $logo . "\n";

    if (file_exists("File_cookie_YTB.txt")) {
        echo $kov . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . " Chạy Cookie Youtube Cũ\n";
        echo $kov . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . " Thêm Cookie Youtube Để Chạy\n";
        echo $kov . "Nhập " . $vang . "[" . $trang . "3" . $vang . "] " . $luc . " Xóa Cookie Youtube Cũ Nhập Lại\n";
        echo  $kov . "Nhập số: $vang ";
        $choice = trim(fgets(STDIN));
        if ($choice == '3') {
            unlink("File_cookie_YTB.txt");
            unlink("File_Authorization_YTB.txt");
            unlink("File_Channel_YTB.txt");
        } else if ($choice == '2') {
            $khockytb = json_decode(fread(fopen("File_cookie_YTB.txt", "r"), filesize("File_cookie_YTB.txt")), true);
            $khoauthorytb = json_decode(fread(fopen("File_Authorization_YTB.txt", "r"), filesize("File_Authorization_YTB.txt")), true);
            $khochannel = json_decode(fread(fopen("File_Channel_YTB.txt", "r"), filesize("File_Channel_YTB.txt")), true);
        } else {
            
            $khockytb = json_decode(fread(fopen("File_cookie_YTB.txt", "r"), filesize("File_cookie_YTB.txt")), true);
            $khoauthorytb = json_decode(fread(fopen("File_Authorization_YTB.txt", "r"), filesize("File_Authorization_YTB.txt")), true);
            $khochannel = json_decode(fread(fopen("File_Channel_YTB.txt", "r"), filesize("File_Channel_YTB.txt")), true);
            break;
        }
    }

    if (!file_exists("File_cookie_YTB.txt") || $choice == 2) {
        system("clear");
        echo $logo . "\n";
        echo $kov . "Nhập Cookie Youtube Muốn Dừng Ấn" . $trang . " Enter \n";
        for ($a = 1; $a < 999999; $a++) {
            echo $kov . "Nhập Cookie thứ" . $trang . " $a: " . $vang;
            $nhapck = (string)trim(fgets(STDIN));
            if (strlen($nhapck) < 5) {
                break;
            }

            echo $kov . "Nhập Authorization thứ" . $trang . " $a: " . $vang;
            $nhapau = (string)trim(fgets(STDIN));

            echo $kov . "Nhập Channel thứ" . $trang . " $a: " . $vang;
            $nhapch = (string)trim(fgets(STDIN));

            array_push($khockytb, $nhapck);
            array_push($khoauthorytb, $nhapau);
            array_push($khochannel, $nhapch);
        }
        $js = json_encode($khockytb);
        $k = fopen("File_cookie_YTB.txt", "a+");
        fwrite($k, $js);
        fclose($k);

        $js = json_encode($khoauthorytb);
        $k = fopen("File_Authorization_YTB.txt", "a+");
        fwrite($k, $js);
        fclose($k);

        $js = json_encode($khochannel);
        $k = fopen("File_Channel_YTB.txt", "a+");
        fwrite($k, $js);
        fclose($k);

        break;
    }
}



@system('clear');
echo $logo;

echo $kov . "Tài Khoản " . $vang . ": " . $xnhac . $_SESSION['user'] . "\n";
echo $kov . "Xu Hiện Tại " . $vang . ": " . $vang . $xu . $luc . " Xu\n";
echo $vang . "------------------------------------------------------\n";
echo $kov . "Nhập Số " . $vang . "[" . $trang . "1" . $vang . "]" . $luc . " Làm Nhiệm Vụ Subscribe\n";
echo $kov . "Nhập Số " . $vang . "[" . $trang . "2" . $vang . "]" . $luc . " Làm Nhiệm Vụ Comment\n";
echo $kov . "Có thể nhập (1+2) để chạy nhiều\n";
echo $kov . "Nhập Số " . $vang . ":" . $trang . " ";
$tool = " " . trim(fgets(STDIN));

echo $kov . "Đổi acc sao bao nhiêu nhiệm vụ" . $vang . ":" . $trang . " ";
$doi = trim(fgets(STDIN));

if (strpos($tool, "1")) {
    echo $kov . "Nhập Delay Subscribe" . $vang . ":" . $trang . " ";
    $delaysub = trim(fgets(STDIN));
}

if (strpos($tool, "2")) {
    echo $kov . "Nhập Delay Comment" . $vang . ":" . $trang . " ";
    $delaycmt = trim(fgets(STDIN));
}

$so1 = 0;
$so2 = 0;

while (true) {
    if (count($khockytb) == 0) {
        while (true) {
            if (file_exists("File_cookie_YTB.txt")) {
                echo $kov . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . " Chạy Cookie Youtube Cũ\n";
                echo $kov . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . " Thêm Cookie Youtube Để Chạy\n";
                echo $kov . "Nhập " . $vang . "[" . $trang . "3" . $vang . "] " . $luc . " Xóa Cookie Youtube Cũ Nhập Lại\n";
                echo  $kov . "Nhập số: $vang ";
                $choice = trim(fgets(STDIN));
                if ($choice == '3') {
                    unlink("File_cookie_YTB.txt");
                    unlink("File_Authorization_YTB.txt");
                    unlink("File_Channel_YTB.txt");
                } else if ($choice == '2') {
                    $khockytb = json_decode(fread(fopen("File_cookie_YTB.txt", "r"), filesize("File_cookie_YTB.txt")), true);
                    $khoauthorytb = json_decode(fread(fopen("File_Authorization_YTB.txt", "r"), filesize("File_Authorization_YTB.txt")), true);
                    $khochannel = json_decode(fread(fopen("File_Channel_YTB.txt", "r"), filesize("File_Channel_YTB.txt")), true);
                } else {
                    $khockytb = json_decode(fread(fopen("File_cookie_YTB.txt", "r"), filesize("File_cookie_YTB.txt")), true);
                    $khoauthorytb = json_decode(fread(fopen("File_Authorization_YTB.txt", "r"), filesize("File_Authorization_YTB.txt")), true);
                    $khochannel = json_decode(fread(fopen("File_Channel_YTB.txt", "r"), filesize("File_Channel_YTB.txt")), true);
                    break;
                }
            }
            if (!file_exists("File_cookie_YTB.txt") || $choice == 2) {

                echo $kov . "Nhập Cookie Youtube Muốn Dừng Ấn" . $trang . " Enter \n";
                for ($a = 1; $a < 999999; $a++) {
                    echo $kov . "Nhập Cookie thứ" . $trang . " $a: " . $vang;
                    $nhapck = (string)trim(fgets(STDIN));
                    if (strlen($nhapck) < 5) {
                        break;
                    }

                    echo $kov . "Nhập Authorization thứ" . $trang . " $a: " . $vang;
                    $nhapau = (string)trim(fgets(STDIN));

                    echo $kov . "Nhập Channel thứ" . $trang . " $a: " . $vang;
                    $nhapch = (string)trim(fgets(STDIN));

                    array_push($khockytb, $nhapck);
                    array_push($khoauthorytb, $nhapau);
                    array_push($khochannel, $nhapch);
                }
                $js = json_encode($khockytb);
                $k = fopen("File_cookie_YTB.txt", "a+");
                fwrite($k, $js);
                fclose($k);

                $js = json_encode($khoauthorytb);
                $k = fopen("File_Authorization_YTB.txt", "a+");
                fwrite($k, $js);
                fclose($k);

                $js = json_encode($khochannel);
                $k = fopen("File_Channel_YTB.txt", "a+");
                fwrite($k, $js);
                fclose($k);

                break;
            }
        }
    }
    for ($xz = 0; $xz < count($khockytb); $xz++) {
        $cookie = trim($khockytb[$xz]);
        $Authorization = trim($khoauthorytb[$xz]);
        $channel = trim($khochannel[$xz]);
        $get_ytb = file_get_contents("https://www.youtube.com/channel/" . $channel);
        $name = explode('"', explode($channel . '", "name": "', $get_ytb)[1])[0];

        $cauhinh = cauhinh_jksbkjcbksbabksakdeieevb($channel);
        if ($cauhinh == "1") {
        $so1 = 0;
        $so2 = 0;
            echo $vang . "------------------------------------------------------\n";
            echo $kov . "Đang Chạy Youtube " . $vang . ": " . $trang . $name . "\n";
            echo $kov . "Channel Youtube " . $vang . ": " . $trang . $channel . "\n";
            echo $vang . "------------------------------------------------------\n";
        } else {
            echo $do . "Bạn Chưa Thêm Youtube " . $trang . $_SESSION["name_ytb"] . $vang . " : " . $trang . $channel . $do . " Vào TTC\n";
            array_splice($khockytb, $xz, 1);
            array_splice($khoauthorytb, $xz, 1);
            array_splice($khochannel, $xz, 1);
            continue;
        }
        $spam = 0;
        while (true) {
            if ($spam == 1) {
                break;
            }
            if (strpos($tool, "1") and $so1 == 0) {
                $sub = get_nv_jksbkjcbksbabksakdeieevb("https://tuongtaccheo.com/youtube/kiemtien/subcheo/getpost.php");
                if (count($sub) == 0) {
                    echo $do . "Tạm Thời Hết Nhiệm Vụ Subscribe\r";
                    $so1 = 1;
                    $so2 = 0;
                    $spam = 1;
                    break;
                } else {
                    echo $kov . "Đã Tìm Thấy " . $trang . count($sub) . $luc . " Nhiệm Vụ Subscribe\r";
                }
                for ($ad = 0; $ad < count($sub); $ad++) {
                    $id = $sub[$ad]["idpost"];
                    $link = $sub[$ad]["link"];
                    $sub_ytb = sub_jksbkjcbksbabksakdeieevb($link, $cookie, $Authorization);
                    if ($sub_ytb == "1" or $sub_ytb == true) {
                        $rd = rand(1, 7);
                        $rd2 = rand(5, 7);
                        $dem++;
                        $kl = "" . $do . "[" . $vang . $dem . $do . "]" . $trang . " | " . $xnhac . date("H:i") . $trang . " | " . $luc . "\033[1;3" . $rd . "mSUBSCRIBE" . $trang . " | " . $link . "\n";
                        for ($i = 0; $i < strlen($kl); $i++) {
                            echo $kl[$i];
                            usleep(1500);
                        }
                    } else if ($sub_ytb == "0" or $sub_ytb == false) {
                        echo $do . "Không Thể Subscribe YouTuBe " . $trang . $link . "\n";
                    }
                    delay_jksbkjcbksbabksakdeieevb($delaysub);
                    $list = $list . $id . ",";
                    if ($dem % 10 == 0) {
                        $list = substr($list, 0, (strlen($list) - 1));
                        $nhan = nhantien_jksbkjcbksbabksakdeieevb($list, "https://tuongtaccheo.com/youtube/kiemtien/subcheo/nhantien.php");
                        if ($nhan["mess"]) {
                            $xujob = $nhan["sodu"];
                            $xu = $xu + $xujob;
                            $kl = "" . $luc . " Đã làm " . $vang . ($xujob / 1300) . $luc . " Nhiệm Vụ " . $trang . "| " . $luc . "+" . $xujob . " Xu" . $trang . " | " . $luc . "Tổng " . $vang . $xu . " Xu\n";
                            for ($i = 0; $i < strlen($kl); $i++) {
                                echo $kl[$i];
                                usleep(500);
                            }
                        } else if ($nhan["error"]) {
                            echo $do . $nhan["error"] . "\n";
                        } else if ($nhan["error2"]) {
                            echo $do . $nhan["error2"] . "\n";
                            $spam = 1;
                            break;
                        }
                        $list = '';
                    }
                    if ($dem % $doi == 0) {
                        $spam = 1;
                        break;
                    }
                }
            }
            if (strpos($tool, "2") and $so2 == 0) {
                $cmt = get_nv_jksbkjcbksbabksakdeieevb("https://tuongtaccheo.com/youtube/kiemtien/cmtcheo/getpost.php");
                if (count($cmt) == 0) {
                    echo $do . "Tạm Thời Hết Nhiệm Vụ Comment\r";
                    $so2 = 1;
                    $so1 = 0;
                    $spam = 1;
                    break;
                } else {
                    echo $kov . "Đã Tìm Thấy " . $trang . count($cmt) . $luc . " Nhiệm Vụ Comment\r";
                }
                for ($ad = 0; $ad < count($cmt); $ad++) {
                    $id = $cmt[$ad]["idpost"];
                    $url_video = $cmt[$ad]["link"];
                    $array_nd = json_decode($cmt[$ad]["nd"], true);
                    $msg = $array_nd[0];
                    
                    //echo $url_video."\n";echo $msg."\n";
                    
                    $check_cmt = cmt_jksbkjcbksbabksakdeieevb($cookie, $Authorization, $url_video, $msg);
                    if ($check_cmt == "200") {
                        $rd = rand(1, 7);
                        $rd2 = rand(5, 7);
                        $dem++;
                        $nhan = nhantien_jksbkjcbksbabksakdeieevb($id, "https://tuongtaccheo.com/youtube/kiemtien/cmtcheo/nhantien.php");
                        if ($nhan["mess"]) {
                            echo $do . "[" . $vang . $dem . $do . "]\n";
                            echo $kov . "Link: " . $trang . $url_video . "\n";
                            echo $kov . "Nội Dung: " . $xnhac . $msg . "\n";
                            echo $kov . $vang . $nhan["mess"] . "\n";
                        } else if ($nhan["error"]) {
                            echo $do . $nhan["error"] . "\n";
                        } else if ($nhan["error2"]) {
                            echo $do . $nhan["error2"] . "\n";
                            $spam = 1;
                            break;
                        }
                    } else if ($check_cmt == "400") {
                        echo $do . "Cookie Die \n";
                        array_splice($khockytb, $xz, 1);
                        array_splice($khoauthorytb, $xz, 1);
                        array_splice($khochannel, $xz, 1);
                        $spam = 1;
                        break;
                    }
                    delay_jksbkjcbksbabksakdeieevb($delaycmt);
                    if ($dem % $doi == 0) {
                        $spam = 1;
                        break;
                    }
                }
            } else {
            }
        }
    }
}
function cmt_jksbkjcbksbabksakdeieevb($cookie, $Authorization, $url_video, $msg)
{
$head_g = ["user-agent:Mozilla/5.0 (Linux; Android 9; RMX1811) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Mobile Safari/537.36", "cookie: " . $cookie];
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL => "https://m.youtube.com",
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTPHEADER => $head_g,
CURLOPT_ENCODING => true
));
$dlg = curl_exec($ch);
$authuser = explode('"', explode('authuser\u003d', $dlg) [1]) [0];
$url = "https://m.youtube.com/youtubei/v1/comment/create_comment?key=AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8&prettyPrint=false";
$head = array(
"Host: m.youtube.com",
"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.79 Mobile Safari/537.36",
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url_video);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$access = curl_exec($ch);
$get_ytb = file_get_contents($url_video);
$token = explode('",', explode('"continuationCommand":{"token":"', $get_ytb)[1])[0];
$context = explode('}}', explode('"INNERTUBE_CONTEXT":', $access) [1]) [0];
$visitorData = explode('",', explode('"visitorData":"', $context)[1])[0];
$data_get = '
{
  "context": '.$context.'},
    "adSignalsInfo": {
      "params": [
        {
          "key": "dt",
          "value": "1665215123721"
        },
        {
          "key": "flash",
          "value": "0"
        },
        {
          "key": "frm",
          "value": "0"
        },
        {
          "key": "u_tz",
          "value": "420"
        },
        {
          "key": "u_his",
          "value": "1"
        },
        {
          "key": "u_h",
          "value": "959"
        },
        {
          "key": "u_w",
          "value": "432"
        },
        {
          "key": "u_ah",
          "value": "959"
        },
        {
          "key": "u_aw",
          "value": "432"
        },
        {
          "key": "u_cd",
          "value": "24"
        },
        {
          "key": "bc",
          "value": "31"
        },
        {
          "key": "bih",
          "value": "781"
        },
        {
          "key": "biw",
          "value": "432"
        },
        {
          "key": "brdim",
          "value": "0,0,0,0,432,0,432,781,432,781"
        },
        {
          "key": "vis",
          "value": "1"
        },
        {
          "key": "wgl",
          "value": "true"
        },
        {
          "key": "ca_type",
          "value": "image"
        }
      ]
    }
  },
  "continuation": "'.$token.'"
}';
$head_get = array(
"Host: m.youtube.com",
"x-origin: https://m.youtube.com",
"authorization: ".$Authorization,
"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.79 Mobile Safari/537.36",
"content-type: application/json",
"x-youtube-client-name: 2",
"x-youtube-client-version: 2.20221005.09.00",
"x-goog-authuser: ".$authuser,
"x-goog-visitor-id: ".$visitorData,
"accept: */*",
"origin: https://m.youtube.com",
"x-requested-with: mark.via.gp",
"sec-fetch-site: same-origin",
"sec-fetch-mode: same-origin",
"sec-fetch-dest: empty",
"referer: ".$url_video,
"accept-encoding: gzip, deflate",
"accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7" 
);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, "https://m.youtube.com/youtubei/v1/next?key=AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8&prettyPrint=false");
curl_setopt($ch, CURLOPT_HTTPHEADER, $head_get);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_get);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
$check_get = curl_exec($ch);
$createCommentParams = explode('"', explode('"createCommentParams":"', $check_get)[1])[0];
$data = '{
  "context": '.$context.'},
    "adSignalsInfo": {
      "params": [
        {
          "key": "dt",
          "value": "1665122736780"
        },
        {
          "key": "flash",
          "value": "0"
        },
        {
          "key": "frm",
          "value": "0"
        },
        {
          "key": "u_tz",
          "value": "420"
        },
        {
          "key": "u_his",
          "value": "1"
        },
        {
          "key": "u_h",
          "value": "1033"
        },
        {
          "key": "u_w",
          "value": "465"
        },
        {
          "key": "u_ah",
          "value": "1033"
        },
        {
          "key": "u_aw",
          "value": "465"
        },
        {
          "key": "u_cd",
          "value": "24"
        },
        {
          "key": "bc",
          "value": "31"
        },
        {
          "key": "bih",
          "value": "851"
        },
        {
          "key": "biw",
          "value": "465"
        },
        {
          "key": "brdim",
          "value": "0,0,0,0,465,0,465,851,465,851"
        },
        {
          "key": "vis",
          "value": "1"
        },
        {
          "key": "wgl",
          "value": "true"
        },
        {
          "key": "ca_type",
          "value": "image"
        }
      ],
    }
  },
  "createCommentParams": "'.$createCommentParams.'",
  "commentText": "'.$msg.'"
}
';
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => $data,
CURLOPT_COOKIE => $cookie,
CURLOPT_HTTPHEADER => $head_get,
CURLOPT_ENCODING => true
));
$success = json_decode(curl_exec($ch),true);
if($success["error"]["code"]=="400"){
    return "400";
} else {
    return "200";
}
}

function nhantien_jksbkjcbksbabksakdeieevb($id, $url)
{
    $data = "id=" . $id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/youtube/kiemtien/subcheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'] . "_TTC.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    return json_decode($data, true);
}
function delay_jksbkjcbksbabksakdeieevb($delay)
{
    for ($x = $delay; $x--; $x) {
        echo "                                           \r";
        echo "\r\033[1;9".rand(1,9)."m TTC YTB Auto Chờ\033[1;9".rand(1,9)."m ".$x."        \r";
        sleep(1);
    }
    echo "\r  \033[1;9".rand(1,9)."m  Bản Quyền Vựa Buff      \r";
}
function sub_jksbkjcbksbabksakdeieevb($link, $cookie, $authorization)
{
    $data = file_get_contents($link);
    $link = "http://m.youtube.com/channel/" . explode('"', explode('http://www.youtube.com/channel/', $data)[1])[0];
    $data = sub_yt_jksbkjcbksbabksakdeieevb($link, $cookie, $authorization);
    return $data;
}
function get_nv_jksbkjcbksbabksakdeieevb($url)
{
    $head = array(
        "Host: tuongtaccheo.com",
        "accept: application/json, text/javascript, */*; q=0.01",
        "user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/106.0.5249.79 Mobile Safari/537.36",
        "x-requested-with: XMLHttpRequest",
        "referer: https://tuongtaccheo.com/",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'] . "_TTC.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $access = curl_exec($ch);
    return json_decode($access, true);
}
function cauhinh_jksbkjcbksbabksakdeieevb($channel)
{
    $data = "iddat[]=" . $channel . "&loai=youtube";
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "accept: */*",
        "origin: https://tuongtaccheo.com",
        "x-requested-with: XMLHttpRequest",
        "user-agent: " . $_SESSION['useragent'],
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "referer: https://tuongtaccheo.com/cauhinh/index.php"
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://tuongtaccheo.com/cauhinh/datnick.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'] . "_TTC.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $access = curl_exec($ch);
    return $access;
}
function logintoken_jksbkjcbksbabksakdeieevb($token)
{
    $data = 'access_token=' . $token;
    $head[] = 'Content-type: application/x-www-form-urlencoded';
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://tuongtaccheo.com/logintoken.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_COOKIEJAR => "ttc.txt",
        CURLOPT_COOKIEFILE => "ttc.txt",
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_ENCODING => TRUE
    ));
    $login = json_decode(curl_exec($ch), true);
    return $login;
}
function sub_yt_jksbkjcbksbabksakdeieevb($url, $cookie, $authorization)
{
    $url = str_replace("www", "m", $url);
    $url = str_replace("https://youtube", "https://m.youtube", $url);
    $url = str_replace("http:", "https:", $url);
    $head_g = ["user-agent:Mozilla/5.0 (Linux; Android 9; RMX1811) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Mobile Safari/537.36", "cookie: " . $cookie];
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://m.youtube.com",
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head_g,
        CURLOPT_ENCODING => true
    ));
    $dlg = curl_exec($ch);
    $authuser = explode('"', explode('authuser\u003d', $dlg)[1])[0];
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head_g,
        CURLOPT_ENCODING => true
    ));
    $tim_id  = curl_exec($ch);
    $id_cn = explode('"', explode('channelId" content="', $tim_id)[1])[0];
    if ($id_cn == false) {
        $id_cn = explode('"', explode('"channelId":"', $tim_id)[1])[0];
    }
    $_SESSION["channel"] = $id_cn;
    $link = 'https://m.youtube.com/channel/' . $id_cn;
    if ($id_cn != false) {
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $link,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head_g,
            CURLOPT_ENCODING => true
        ));
        $dlg = curl_exec($ch);
        $context = explode('}},', explode('"INNERTUBE_CONTEXT":', $dlg)[1])[0];
        $pageid = explode('"', explode('"DELEGATED_SESSION_ID":"', $dlg)[1])[0];
        $url = 'https://m.youtube.com/youtubei/v1/subscription/subscribe?key=AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8&prettyPrint=false';
        if ($pageid != false) {
            $head_p = ["origin:https://m.youtube.com", "authorization:$authorization", "x-goog-authuser:$authuser", "content-type:application/json", "x-goog-pageid:$pageid", "accept:*/*", "cookie: " . $cookie];
        } else {
            $head_p = ["origin:https://m.youtube.com", "authorization:$authorization", "x-goog-authuser:$authuser", "content-type:application/json", "accept:*/*", "cookie: " . $cookie];
        }
        $data = '{
    "context": ' . $context . '},
    "adSignalsInfo": {
        "params": [
        {
          "key": "dt",
          "value": "1659697776258"
        },
        {
          "key": "flash",
          "value": "0"
        },
        {
          "key": "frm",
          "value": "0"
        },
        {
          "key": "u_tz",
          "value": "420"
        },
        {
          "key": "u_his",
          "value": "5"
        },
        {
          "key": "u_h",
          "value": "895"
        },
        {
          "key": "u_w",
          "value": "424"
        },
        {
          "key": "u_ah",
          "value": "895"
        },
        {
          "key": "u_aw",
          "value": "424"
        },
        {
          "key": "u_cd",
          "value": "24"
        },
        {
          "key": "bc",
          "value": "31"
        },
        {
          "key": "bih",
          "value": "759"
        },
        {
          "key": "biw",
          "value": "424"
        },
        {
          "key": "brdim",
          "value": "0,0,0,0,424,0,424,759,424,759"
        },
        {
          "key": "vis",
          "value": "1"
        },
        {
          "key": "wgl",
          "value": "true"
        },
        {
          "key": "ca_type",
          "value": "image"
        }
      ]
    }
  },
  "channelIds": [
    "' . $id_cn . '"
  ],
  "params": "EgIIAhgA"
}';
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $head_p,
            CURLOPT_ENCODING => true
        ));
        $BA = curl_exec($ch);
        $kq = json_decode($BA, true);
        if (strpos(json_encode($kq, true), "\u0110\u00e3 \u0111\u0103ng k\u00fd k\u00eanh") == true) {
            return "1";
        } else {
            return "0";
        }
        return true;
    } else {
        return false;
    }
}