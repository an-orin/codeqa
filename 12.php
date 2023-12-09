<?php
error_reporting(0);
date_default_timezone_set('Asia/Ho_Chi_Minh');
$do="\033[1;91m";
$den="\033[1;33m";
$tim="\033[1;34m";
$luc="\033[1;92m";
$trang="\033[1;97m";
$vang = "\033[1;93m";
$hong = "\033[1;95m";
$xnhac = "\033[1;36m";
$xduong = "\033[1;96m";
$daucau = $do."[".$trang ."=.=".$do."] ".$trang."=> \033[1;32m";
$thanhngan = "\033[1;37m---------------------------------------------------\n";
$useragent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36";
$user_agent_ttc = user_agent_ttc();

$logo = logo_dragonx();

$ngdich = 'vi';
/*
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
    $len = strlen($logo);
    for ($x = 0; $x < $len; $x++) {
        echo $logo[$x];
        usleep(1200);
    }
} else { 
    @system('cls'); 
    echo $logo;
}
echo $daucau . "Chọn ngôn ngữ (Select language).\n";
echo $daucau .  $do . "[" . $vang . "1" . $do . "]" . $luc . " Không (No)\n";
echo $daucau .  $do . "[" . $vang . "2" . $do . "]" . $luc . " Có (Yes)\n";
echo $daucau .  "Nhập số (Enter number): " . $vang;
$num = trim(fgets(STDIN));

if ($num == 2) {
    $list_nn = dragonx_listnn();
    echo $thanhngan;
    for ($i = 0; $i < count($list_nn); $i++) {
        $m = $list_nn[$i]['m'];
        $n = $list_nn[$i]['n'];
        echo $daucau .  $do . "[" . $trang . ($i + 1) . $do . "]" . $vang .  $n . "\n";
    }
    echo $thanhngan;
    echo $daucau . "Chọn ngôn ngữ (Select language): " . $vang;
    $nndichthanh = trim(fgets(STDIN));


    $ngdich = $list_nn[$nndichthanh - 1]['m'];
    $ndich = $list_nn[$nndichthanh - 1]['n'];

    @system('clear');
    echo $logo;
    sleep(1);
    echo $daucau . dragonx_dichnn("Bạn vừa chọn ngôn ngữ " . $ndich, $ngdich) . "\n";
    echo $thanhngan;
    sleep(3);

    //    $vanban = dragonx_dichnn("", $ngdich);
}*/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
    $len = strlen($logo);
    for ($x = 0; $x < $len; $x++) {
        echo $logo[$x];
        usleep(1200);
    }
} else { 
    @system('cls'); 
    echo $logo;
}






while (true) {
    while (true) {
        if (file_exists("Access_token_Tuongtaccheo.txt")) {
            echo $daucau . dragonx_dichnn("Nhập", $ngdich) . $vang . " [" . $trang . "1" . $vang . "] " . $luc . dragonx_dichnn("Sử dụng tài khoản Tuongtaccheo đã nhập trước đó", $ngdich) . "\n";
            echo $daucau . dragonx_dichnn("Nhập", $ngdich) . $vang . " [" . $trang . "2" . $vang . "] " . $luc . dragonx_dichnn("Xóa tài khoản cũ, nhập tài khoản khác", $ngdich) . "\n";
            echo $daucau . dragonx_dichnn("Nhập số : ", $ngdich) . $vang;
            $num = trim(fgets(STDIN));
            if ($num == 2) {
                unlink("Access_token_Tuongtaccheo.txt");
            } else {
                break;
            }
        } else {
            echo $daucau . dragonx_dichnn("Nhập Access_token TTC: ", $ngdich) .  $vang;
            $TTC_Access_token = trim(fgets(STDIN));
            file_put_contents("Access_token_Tuongtaccheo.txt", $TTC_Access_token);
            break;
        }
    }

    $TTC_Access_token = file_get_contents("Access_token_Tuongtaccheo.txt");

    echo $thanhngan;
    $login = dragonx_Loginttc($TTC_Access_token, $user_agent_ttc);
    $sou = json_decode($login, true);
    if ($sou['status'] == 'success') {
        $username = $sou['data']['user'];
        $xu = $sou['data']['sodu'];
        echo $daucau . dragonx_dichnn("Đăng nhập thành công ", $ngdich) . $vang .  $username . "\n";
        sleep(2);
        break;
    } else {
        echo $daucau . $do . dragonx_dichnn("Đăng nhập thất bại ", $ngdich) . $vang . " "  . "\n";
        unlink("Access_token_Tuongtaccheo.txt");
    }
}





while (true) {

    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
    $len = strlen($logo);
    for ($x = 0; $x < $len; $x++) {
        echo $logo[$x];
        usleep(1200);
    }
} else { 
    @system('cls'); 
    echo $logo;
}
    

    if (file_exists("delay_Tuongtaccheo.txt")) {
        if (strlen(file_get_contents("delay_Tuongtaccheo.txt")) < 5) {
            unlink("delay_Tuongtaccheo.txt");
            continue;
        }


        $caidatdelay = fread(fopen("delay_Tuongtaccheo.txt", "r"), filesize("delay_Tuongtaccheo.txt"));
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


        echo $daucau . dragonx_dichnn("Thời gian tạm dừng giữa các nhiệm vụ", $ngdich) . " \n" . $vang;;
        echo $daucau . "Like: " . $trang . $delaylike . $luc . "s\n";
        echo $daucau . "Follow: " . $trang . $delayfollow . $luc . "s\n";
        echo $daucau . "Comment: " . $trang . $delaycomment . $luc . "s\n";
        echo $daucau . "Share: " . $trang . $delayshare . $luc . "s\n";
        echo $daucau . dragonx_dichnn("Cảm Xúc: ", $ngdich) . $trang . $delaycamxuc . $luc . "s\n";
        echo $daucau . dragonx_dichnn("Cảm xúc Comment: ", $ngdich) . $trang . $delaycamxuccmt . $luc . "s\n";
        echo $daucau . "Fanpage: " . $trang . $delaypage . $luc . "s\n";
        echo $daucau . "Group: " . $trang . $delaygr . $luc . "s\n";
        echo $thanhngan;
        echo $daucau . dragonx_dichnn("Nghỉ sau _", $ngdich) . $trang . $nvnghi . $luc . dragonx_dichnn("_ nhiệm vụ", $ngdich) . "\n";
        echo $daucau . dragonx_dichnn("Thời gian nghỉ: ", $ngdich) . $trang . $delaynghi . $luc . "s\n";
        echo $thanhngan;
        echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "1" . $vang . "] " . $luc . dragonx_dichnn("Sử dụng delay này", $ngdich) . " \n";
        echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "2" . $vang . "] " . $luc . dragonx_dichnn("Nhập delay mới", $ngdich) . " \n";
        echo $daucau . dragonx_dichnn("Nhập số", $ngdich) . $trang . " ===>: " . $vang;
        $chon_tk = trim(fgets(STDIN));
        if ($chon_tk == "2") {
            unlink("delay_Tuongtaccheo.txt");
        } else if ($chon_tk == "1") {
            break;
        } else {
            echo $do . dragonx_dichnn(" Lựa chọn không xác định ", $ngdich) . " !!!\n";

            continue;
        }
    }
    if (!file_exists("delay_Tuongtaccheo.txt")) {

        echo $daucau . dragonx_dichnn("Thời gian tạm dừng giữa các nhiệm vụ", $ngdich) . " \n" . $vang;;
        echo $daucau . dragonx_dichnn("Nhập delay like: ", $ngdich) .  $vang;
        $delaylike = trim(fgets(STDIN));
        echo $daucau . dragonx_dichnn("Nhập delay follow: ", $ngdich) . " "  . $vang;
        $delayfollow = trim(fgets(STDIN));
        echo $daucau . dragonx_dichnn("Nhập delay comment: ", $ngdich) . " "  . $vang;
        $delaycomment = trim(fgets(STDIN));
        echo $daucau . dragonx_dichnn("Nhập delay share: ", $ngdich) . " "  . $vang;
        $delayshare = trim(fgets(STDIN));
        echo $daucau . dragonx_dichnn("Nhập delay cảm xúc: ", $ngdich) . " "  . $vang;
        $delaycamxuc = trim(fgets(STDIN));
        echo $daucau . dragonx_dichnn("Nhập delay cảm xúc CMT: ", $ngdich) . " "  . $vang;
        $delaycamxuccmt = trim(fgets(STDIN));
        echo $daucau . dragonx_dichnn("Nhập delay Fanpage: ", $ngdich) . " "  . $vang;
        $delaypage = trim(fgets(STDIN));
        echo $daucau . dragonx_dichnn("Nhập delay tham gia nhóm: ", $ngdich) . " "  . $vang;
        $delaygr = trim(fgets(STDIN));

        echo $daucau . dragonx_dichnn("Tạm nghỉ sau ______ nhiệm vụ", $ngdich) . "  \r";
        echo $daucau . dragonx_dichnn("Tạm nghỉ sau _", $ngdich) . $vang;
        $nvnghi = trim(fgets(STDIN));

        echo $daucau . dragonx_dichnn("Thời gian nghỉ ______ giây", $ngdich) . "   \r";
        echo $daucau . dragonx_dichnn("Thời gian nghỉ _", $ngdich) . $vang;
        $delaynghi = trim(fgets(STDIN));


        $nhapdelay = $delaylike . "|" . $delayfollow . "|" . $delaycomment . "|" . $delayshare . "|" . $delaycamxuc . "|" . $delaycamxuccmt . "|" . $delaypage . "|" . $delaygr . "|" . $nvnghi . "|" . $delaynghi;

        fwrite(fopen("delay_Tuongtaccheo.txt", "w+"), $nhapdelay);

        break;
    }
}


$caidatdelay = $caidatdelay = fread(fopen("delay_Tuongtaccheo.txt", "r"), filesize("delay_Tuongtaccheo.txt"));

$dl['follow'] = explode("|", $caidatdelay)[1];
$dl['like'] = explode("|", $caidatdelay)[0];
$dl['likesieure'] = explode("|", $caidatdelay)[0];
$dl['likegiare'] = explode("|", $caidatdelay)[0];
$dl['reaction'] = explode("|", $caidatdelay)[4];
$dl['comment'] = explode("|", $caidatdelay)[2];
$dl['share'] = explode("|", $caidatdelay)[3];
$dl['reactioncmt'] = explode("|", $caidatdelay)[5];
$dl['group'] = explode("|", $caidatdelay)[7];
$dl['fanpage'] = explode("|", $caidatdelay)[6];
$dl['nvnghi'] = explode("|", $caidatdelay)[8];
$dl['nghi'] = explode("|", $caidatdelay)[9];



if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
    $len = strlen($logo);
    for ($x = 0; $x < $len; $x++) {
        echo $logo[$x];
        usleep(1200);
    }
} else { 
    @system('cls'); 
    echo $logo;
}


$khoCK = dragonx_khock($daucau, $ngdich, $vang, $trang, $luc);



$TTC_Access_token = file_get_contents("Access_token_Tuongtaccheo.txt");

// $login = dragonx_Loginttc($TTC_Access_token, $user_agent_ttc);
// $sou = json_decode($source, true);
// if ($sou['status'] == 'success') {
//$xu = $sou['data']['sodu'];
$user_tds = $username; //$sou['data']['user'];
$tokentds = $TTC_Access_token;
//}


if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
    $len = strlen($logo);
    for ($x = 0; $x < $len; $x++) {
        echo $logo[$x];
        usleep(1200);
    }
} else { 
    @system('cls'); 
    echo $logo;
}

echo $daucau . dragonx_dichnn("Tài khoản: ", $ngdich) . $trang . $user_tds . "\n";
echo $daucau . dragonx_dichnn("Tổng Xu Hiện Tại: ", $ngdich) . $trang . $xu . "\n";
echo $thanhngan;

echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "1" . $vang . "] " . $luc . dragonx_dichnn("Chọn nhiệm vụ Like", $ngdich) . "\n";
echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "2" . $vang . "] " . $luc . dragonx_dichnn("Chọn nhiệm vụ Follow", $ngdich) . "\n";
echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "3" . $vang . "] " . $luc . dragonx_dichnn("Chọn nhiệm vụ Comment", $ngdich) . "\n";
echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "4" . $vang . "] " . $luc . dragonx_dichnn("Chọn nhiệm vụ Share", $ngdich) . "\n";
echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "5" . $vang . "] " . $luc . dragonx_dichnn("Chọn nhiệm vụ Cảm Xúc", $ngdich) . "\n";
echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "6" . $vang . "] " . $luc . dragonx_dichnn("Chọn nhiệm vụ Cảm Xúc Comment", $ngdich) . "\n";
echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "7" . $vang . "] " . $luc . dragonx_dichnn("Chọn nhiệm vụ Like Fanpage", $ngdich) . "\n";
echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "8" . $vang . "] " . $luc . dragonx_dichnn("Chọn nhiệm vụ Tham Gia Nhóm", $ngdich) . "\n";
echo $daucau . dragonx_dichnn("Nhập số chọn nhiệm vụ (", $ngdich) . $trang .  dragonx_dichnn("ví dụ", $ngdich) . ": 1+2+3" . $luc . ")\n";
echo $daucau . dragonx_dichnn("Nhập số: ", $ngdich) . $vang;
$chonsonv = "_+" . trim(fgets(STDIN)) . "+_";
$list_nv = [];
if (strpos($chonsonv, "+1+")) {
    array_push($list_nv, 'like');
}
if (strpos($chonsonv, "+2+")) {
    array_push($list_nv, 'follow');
}
if (strpos($chonsonv, "+3+")) {
    array_push($list_nv, 'comment');
}
if (strpos($chonsonv, "+4+")) {
    array_push($list_nv, 'share');
}
if (strpos($chonsonv, "+5+")) {
    array_push($list_nv, 'reaction');
}
if (strpos($chonsonv, "+6+")) {
    array_push($list_nv, 'reactioncmt');
}
if (strpos($chonsonv, "+7+")) {
    array_push($list_nv, 'fanpage');
}
if (strpos($chonsonv, "+8+")) {
    array_push($list_nv, 'group');
}




echo $thanhngan;
echo $daucau . dragonx_dichnn("Đổi Cookie sau ______ nhiệm vụ", $ngdich) . "\r";
echo $daucau . dragonx_dichnn("Đổi Cookie sau _", $ngdich) . $trang;
$doiacc = trim(fgets(STDIN));



echo $daucau . dragonx_dichnn("Ẩn id Facebook ".$do."[".$vang."y/n".$do."]".$trang.":", $ngdich) . " " .  $vang;
$anid = trim(fgets(STDIN));


$dem_het_nv = 0;
$dem  = 0;
$dem2 = 0;
$dem3 = 0;
while (true) {
    if (count($khoCK) == 0) {
        dragonx_connect();
        $khoCK = dragonx_khock($daucau, $ngdich, $vang, $trang, $luc);
    }

    for ($acc = 0; $acc < count($khoCK); $acc++) {
        $dem_check_acc = 1;
        $spam = 0;
        $cookie = $khoCK[$acc];
        dragonx_connect();
        if (strpos($cookie, "i_user=")) {
            dragonx_connect();
            $profile = dragonx_profile2($cookie);
            $loai_ck = "Fanpage Profile";
        } else {
            dragonx_connect();
            $loai_ck = "Profile";
            $profile = dragonx_profile($cookie);
        }

        $namefb = $profile['NAME'];
        $idfb = $profile['ID'];


        if ($idfb == '' and $namefb == '') {
            echo "Coookie Die \n";
            array_splice($khoCK, $acc, 1);
            break;
        }
        dragonx_connect();
        // $tokenfb = '';
        // if (strpos($cookie, "i_user=") == false) {
        //     $tokenfb = get_token_fb($cookie);
        // }

        $out = 0;
        $demlog = 0;
        while (true) {
            $d = dragonx_datnick($idfb, $user_agent_ttc);
            if ($d == 1) {
                $idfb1 = $idfb;
                if ($anid == 'y' or $anid == 'Y') {
                    $idfb1 = "##########" . substr($idfb1, 10);
                }
                $out = 0;
                echo "\r                            \r";
                echo $thanhngan;
                echo $daucau . dragonx_dichnn("Loại Cookie ", $ngdich) .  $vang . $loai_ck . "\n";
                echo $luc . "ID: " . $trang . $idfb1 .  $luc . " " . "Name: " . $trang . $namefb . "\n";
                echo $thanhngan;
                break;
            } else {
                echo "\r ID " . $idfb . " " . dragonx_dichnn("chưa cấu hình Tuongtaccheo.", $ngdich) . "\r";
                sleep(5);
                $demlog++;
                if ($demlog == 3) {
                    $login = dragonx_Loginttc($TTC_Access_token, $user_agent_ttc);
                    $sou = json_decode($login, true);
                    sleep(1);
                    if ($sou['status'] == 'success') {
                        $tongxu = $sou['data']['sodu'];
                        $user_tds = $profile_tds['user'];
                        $tokentds = $profile_tds['tokentds'];
                    }
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
                if ($loai != 'like' and $loai != 'likegiare' and $loai != 'likesieure' and $loai != 'follow' and $loai != 'comment' and $loai != 'share' and $loai != 'reaction' and $loai != 'reactioncmt'  and $loai != 'fanpage'  and $loai != 'group') {
                } else {
                    //dragonx_connect();
                    // if (strpos($cookie, "i_user=")) {
                    //     if ($loai != 'reactioncmt' and $loai != 'comment') {
                    //         //break;
                    //     }
                    // } else {
                    //     break;
                    // }
                    echo "\r " . $loai . "\r";
                    break;
                }
            }

            $con_nv_like = 0;
            $_nv_like_loi = 0;
            if ($loai == 'like') {
                for ($i = 0; $i < 5; $i++) {
                    dragonx_connect();
                    $listpage = dragonx_listpage($user_agent_ttc);
                    if ($listlike == '') {
                        $dem_ccc = 0;
                        //echo $trang .  $do . "Internet Không Ổn Định\r";
                        while ($listlike == '') {
                            $dem_ccc++;
                            dragonx_connect();
                            sleep(3);
                            $listlike = dragonx_listpage($user_agent_ttc);
                            if ($dem_ccc > 3) {
                                $listlike = [];
                                break;
                            }
                        }
                    }
                    if (count($listlike) > 0) {
                        break;
                    }
                }
                if (count($listlike) == 0) {
                    $rd = rand(1, 7);
                    echo "\033[1;9" . $rd . "m Đang tạm thời hết nhiệm vụ like       \r";
                } else {
                    $con_nv_like = 1;
                    if (isset($listlike['error'])) {
                        echo "Đi làm 10 nhiệm vụ like page và theo dõi rồi quay lại làm tiếp like post      \r";
                        $chon1 = 'n';
                        break;
                    }
                    for ($chon_id_nv = 0; $chon_id_nv < count($listlike); $chon_id_nv++) {
                        $idlike = $listlike[$chon_id_nv]["idpost"];
                        $id = $idlike;
                        if ($idlike != '') {
                            echo "\r   " . $id .  $loai . "   \r";
                            dragonx_connect();
                            $kq = dragonx_kq($cookie, $id, "camxuc", "like", '');
                            //var_dump( $g);
                            if ($dem % 25 == 0 and $dem > 1) {
                                $xu = dragonx_xu();
                            }
                            $nhanlike = dragonx_nhanlike($idlike, $user_agent_ttc);

                            $s = $nhanlike[("mess")];
                            if (strpos($s, 'Thành công') !== false) {
                                $_nv_like_loi = 0;
                                $xu = $xu + 400;
                                $xujob = 400;
                                $dem++;


                                $tongxu = $xu;

                                $type2 = strtoupper(substr($loai . "                       ", 0, 8));
                                $xujob2 = strtoupper(substr($xujob . "                       ", 0, 4));
                                if (strpos($id, '_')) {
                                    $id = explode('_', $id)[1];
                                }
                                $id = substr($id . "                       ", 0, 17);
                                echo "\r" . $do . "[" . $vang . $dem . $do . "] " . $xnhac . date("H:i:s") . $xduong . " | " . $vang . $type2 . $xduong . " | " . $trang . $id . $xduong . " | " . $luc . "+" . $xujob2 . $xduong . " | " . $vang . $tongxu . "\n\r";

                                if ($dem % $doiacc == 0) {
                                    if (count($khoCK) > 1) {
                                        $spam = 1;
                                        break;
                                    }
                                } else {
                                    if($doiacc / 2 > 20){
                                        $dem_check_acc++;
                                    }
                                    if ($dem_check_acc % 20 == 0) {
                                        dragonx_connect();
                                        if (strpos($cookie, "i_user=")) {
                                            dragonx_connect();
                                            $profile = dragonx_profile2($cookie);
                                            $loai_ck = "Fanpage Profile";
                                        } else {
                                            dragonx_connect();
                                            $loai_ck = "Profile";
                                            $profile = dragonx_profile($cookie);
                                        }

                                        $namefb = $profile['NAME'];
                                        $idfb = $profile['ID'];


                                        if ($idfb == '' and $namefb == '') {
                                            echo "Coookie Die \n";
                                            array_splice($khoCK, $acc, 1);
                                            $spam = 1;
                                            break;
                                        }
                                    }
                                }
                                if ($dem % $dl['nvnghi'] == 0 and $dem > 3) {
                                    dragonx_delay($dl['nghi'], $ngdich);
                                } else {
                                    dragonx_delay($dl[$loai], $ngdich);
                                }
                            } else {
                                $_nv_like_loi++;
                                if ($_nv_like_loi > 3) {
                                    break;
                                }
                            }
                        }
                    }
                    if ($spam == 1) {
                        break;
                    }
                }
                sleep(5);
            }

            $con_nv_follow = 0;
            $_nv_follow_loi = 0;
            if ($loai == 'follow') {
                for ($i = 0; $i < 5; $i++) {
                    dragonx_connect();
                    $listsub = dragonx_listnv1('sub', $user_agent_ttc);
                    if ($listsub == '') {
                        $dem_ccc = 0;
                        //echo $trang .  $do . "Internet Không Ổn Định\r";
                        while ($listsub == '') {
                            $dem_ccc++;
                            dragonx_connect();
                            sleep(3);
                            $listsub = dragonx_listnv1('sub', $user_agent_ttc);
                            if ($dem_ccc > 3) {
                                $listsub = [];
                                break;
                            }
                        }
                    }
                    if (count($listsub) > 0) {
                        break;
                    }
                }
                if (count($listsub) == 0) {
                    $rd = rand(1, 7);
                    echo "\033[1;9" . $rd . "m Đang tạm thời hết nhiệm vụ Follow       \r";
                } else {
                    $con_nv_follow = 1;
                    for ($chon_id_nv = 0; $chon_id_nv < count($listsub); $chon_id_nv++) {
                        $idsub = $listsub[$chon_id_nv]["idpost"];
                        $id = $idsub;
                        if ($idsub != '') {
                            echo "\r   " . $id .  $loai . "   \r";
                            dragonx_connect();
                            $kq = dragonx_kq($cookie, $id, "follow", '', '');
                            //var_dump( $g);
                            if ($dem % 25 == 0 and $dem > 1) {
                                $xu = dragonx_xu();
                            }
                            $nhansub = dragonx_lumxu('sub', $idsub, $user_agent_ttc);

                            $s = $nhansub[("mess")];
                            if (strpos($s, 'Thành công') !== false) {
                                $_nv_follow_loi = 0;
                                $xu = $xu + 600;
                                $xujob = 600;
                                $dem++;


                                $tongxu = $xu;

                                $type2 = strtoupper(substr($loai . "                       ", 0, 8));
                                $xujob2 = strtoupper(substr($xujob . "                       ", 0, 4));
                                if (strpos($id, '_')) {
                                    $id = explode('_', $id)[1];
                                }
                                $id = substr($id . "                       ", 0, 17);
                                echo "\r" . $do . "[" . $vang . $dem . $do . "] " . $xnhac . date("H:i:s") . $xduong . " | " . $vang . $type2 . $xduong . " | " . $trang . $id . $xduong . " | " . $luc . "+" . $xujob2 . $xduong . " | " . $vang . $tongxu . "\n\r";

                                if ($dem % $doiacc == 0) {
                                    if (count($khoCK) > 1) {
                                        $spam = 1;
                                        break;
                                    }
                                } else {
                                    if($doiacc / 2 > 20){
                                        $dem_check_acc++;
                                    }
                                    if ($dem_check_acc % 20 == 0) {
                                        dragonx_connect();
                                        if (strpos($cookie, "i_user=")) {
                                            dragonx_connect();
                                            $profile = dragonx_profile2($cookie);
                                            $loai_ck = "Fanpage Profile";
                                        } else {
                                            dragonx_connect();
                                            $loai_ck = "Profile";
                                            $profile = dragonx_profile($cookie);
                                        }

                                        $namefb = $profile['NAME'];
                                        $idfb = $profile['ID'];


                                        if ($idfb == '' and $namefb == '') {
                                            echo "Coookie Die \n";
                                            array_splice($khoCK, $acc, 1);
                                            $spam = 1;
                                            break;
                                        }
                                    }
                                }
                                if ($dem % $dl['nvnghi'] == 0 and $dem > 3) {
                                    dragonx_delay($dl['nghi'], $ngdich);
                                } else {
                                    dragonx_delay($dl[$loai], $ngdich);
                                }
                            } else {
                                $_nv_follow_loi++;
                                if ($_nv_follow_loi > 3) {
                                    break;
                                }
                            }
                        }
                    }
                    if ($spam == 1) {
                        break;
                    }
                }
                sleep(5);
            }

            $con_nv_comment = 0;
            $_nv_comment_loi = 0;
            if ($loai == 'comment') {
                for ($i = 0; $i < 5; $i++) {
                    dragonx_connect();
                    $listcmt = dragonx_listnv1('cmt', $user_agent_ttc);
                    if ($listcmt == '') {
                        $dem_ccc = 0;
                        //echo $trang .  $do . "Internet Không Ổn Định\r";
                        while ($listcmt == '') {
                            $dem_ccc++;
                            dragonx_connect();
                            sleep(3);
                            $listcmt = dragonx_listnv1('cmt', $user_agent_ttc);
                            if ($dem_ccc > 3) {
                                $listcmt = [];
                                break;
                            }
                        }
                    }
                    if (count($listcmt) > 0) {
                        break;
                    }
                }
                if (count($listcmt) == 0) {
                    $rd = rand(1, 7);
                    echo "\033[1;9" . $rd . "m Đang tạm thời hết nhiệm vụ Comment       \r";
                } else {
                    $con_nv_comment = 1;
                    for ($chon_id_nv = 0; $chon_id_nv < count($listcmt); $chon_id_nv++) {
                        $idcmt = $listcmt[$chon_id_nv]["idpost"];
                        $ms = json_decode($listcmt[$chon_id_nv]["nd"]);
                        $msg = $ms[0];
                        $id = $idcmt;



                        if ($idcmt != '') {
                            echo "\r   " . $id .  $loai . "   \r";
                            dragonx_connect();
                            dragonx_unknown1($cookie, $id, $msg);
                            //var_dump( $g);

                            if ($dem % 25 == 0 and $dem > 1) {
                                $xu = dragonx_xu();
                            }
                            $nhancmt = dragonx_lumxu('cmt', $idcmt, $user_agent_ttc);
                            $s = $nhancmt[("mess")];
                            if (strpos($s, 'Thành công') !== false) {
                                $_nv_comment_loi = 0;
                                $xu = $xu + 600;
                                $xujob = 600;
                                $dem++;


                                $tongxu = $xu;

                                $type2 = strtoupper(substr($loai . "                       ", 0, 8));
                                $xujob2 = strtoupper(substr($xujob . "                       ", 0, 4));
                                if (strpos($id, '_')) {
                                    $id = explode('_', $id)[1];
                                }
                                $id = substr($id . "                       ", 0, 17);
                                echo "\r" . $do . "[" . $vang . $dem . $do . "] " . $xnhac . date("H:i:s") . $xduong . " | " . $vang . $type2 . $xduong . " | " . $trang . $id . $xduong . " | " . $luc . "+" . $xujob2 . $xduong . " | " . $vang . $tongxu . "\n\r";

                                if ($dem % $doiacc == 0) {
                                    if (count($khoCK) > 1) {
                                        $spam = 1;
                                        break;
                                    }
                                } else {
                                    if($doiacc / 2 > 20){
                                        $dem_check_acc++;
                                    }
                                    if ($dem_check_acc % 20 == 0) {
                                        dragonx_connect();
                                        if (strpos($cookie, "i_user=")) {
                                            dragonx_connect();
                                            $profile = dragonx_profile2($cookie);
                                            $loai_ck = "Fanpage Profile";
                                        } else {
                                            dragonx_connect();
                                            $loai_ck = "Profile";
                                            $profile = dragonx_profile($cookie);
                                        }

                                        $namefb = $profile['NAME'];
                                        $idfb = $profile['ID'];


                                        if ($idfb == '' and $namefb == '') {
                                            echo "Coookie Die \n";
                                            array_splice($khoCK, $acc, 1);
                                            $spam = 1;
                                            break;
                                        }
                                    }
                                }
                                if ($dem % $dl['nvnghi'] == 0 and $dem > 3) {
                                    dragonx_delay($dl['nghi'], $ngdich);
                                } else {
                                    dragonx_delay($dl[$loai], $ngdich);
                                }
                            } else {
                                $_nv_comment_loi++;
                                if ($_nv_comment_loi > 3) {
                                    break;
                                }
                            }
                        }
                    }
                    if ($spam == 1) {
                        break;
                    }
                }
                sleep(5);
            }

            $con_nv_share = 0;
            $_nv_share_loi = 0;
            if ($loai == 'share') {
                for ($i = 0; $i < 5; $i++) {
                    dragonx_connect();
                    $listshare = dragonx_listnv1('share', $user_agent_ttc);
                    if ($listlike == '') {
                        $dem_ccc = 0;
                        //echo $trang .  $do . "Internet Không Ổn Định\r";
                        while ($listshare == '') {
                            $dem_ccc++;
                            dragonx_connect();
                            sleep(3);
                            $listshare = dragonx_listnv1('share', $user_agent_ttc);
                            if ($dem_ccc > 3) {
                                $listshare = [];
                                break;
                            }
                        }
                    }
                    if (count($listshare) > 0) {
                        break;
                    }
                }
                if (count($listshare) == 0) {
                    $rd = rand(1, 7);
                    echo "\033[1;9" . $rd . "m Đang tạm thời hết nhiệm vụ Share       \r";
                } else {
                    $con_nv_share = 1;
                    for ($chon_id_nv = 0; $chon_id_nv < count($listshare); $chon_id_nv++) {
                        $id  = $listshare[$chon_id_nv]["idpost"];

                        if ($id != '') {
                            echo "\r   " . $id .  $loai . "   \r";
                            dragonx_connect();
                            $kq =  dragonx_kq($cookie, $id, "share", '', '');
                            //var_dump( $g);
                            if ($dem % 25 == 0 and $dem > 1) {
                                $xu = dragonx_xu();
                            }
                            $nhanshare = dragonx_lumxu('share', $id, $user_agent_ttc);
                            $s = $nhanshare[("mess")];

                            if (strpos($s, 'Thành công') !== false) {
                                $_nv_share_loi = 0;
                                $xu = $xu + 600;
                                $xujob = 600;
                                $dem++;


                                $tongxu = $xu;

                                $type2 = strtoupper(substr($loai . "                       ", 0, 8));
                                $xujob2 = strtoupper(substr($xujob . "                       ", 0, 4));
                                if (strpos($id, '_')) {
                                    $id = explode('_', $id)[1];
                                }
                                $id = substr($id . "                       ", 0, 17);
                                echo "\r" . $do . "[" . $vang . $dem . $do . "] " . $xnhac . date("H:i:s") . $xduong . " | " . $vang . $type2 . $xduong . " | " . $trang . $id . $xduong . " | " . $luc . "+" . $xujob2 . $xduong . " | " . $vang . $tongxu . "\n\r";

                                if ($dem % $doiacc == 0) {
                                    if (count($khoCK) > 1) {
                                        $spam = 1;
                                        break;
                                    }
                                } else {
                                    if($doiacc / 2 > 20){
                                        $dem_check_acc++;
                                    }
                                    if ($dem_check_acc % 20 == 0) {
                                        dragonx_connect();
                                        if (strpos($cookie, "i_user=")) {
                                            dragonx_connect();
                                            $profile = dragonx_profile2($cookie);
                                            $loai_ck = "Fanpage Profile";
                                        } else {
                                            dragonx_connect();
                                            $loai_ck = "Profile";
                                            $profile = dragonx_profile($cookie);
                                        }

                                        $namefb = $profile['NAME'];
                                        $idfb = $profile['ID'];


                                        if ($idfb == '' and $namefb == '') {
                                            echo "Coookie Die \n";
                                            array_splice($khoCK, $acc, 1);
                                            $spam = 1;
                                            break;
                                        }
                                    }
                                }
                                if ($dem % $dl['nvnghi'] == 0 and $dem > 3) {
                                    dragonx_delay($dl['nghi'], $ngdich);
                                } else {
                                    dragonx_delay($dl[$loai], $ngdich);
                                }
                            } else {
                                $_nv_share_loi++;
                                if ($_nv_share_loi > 3) {
                                    break;
                                }
                            }
                        }
                    }
                    if ($spam == 1) {
                        break;
                    }
                }
                sleep(5);
            }

            $con_nv_reaction = 0;
            $_nv_reaction_loi = 0;
            if ($loai == 'reaction') {
                for ($i = 0; $i < 5; $i++) {
                    dragonx_connect();
                    $listcx = dragonx_listnv1('camxuc', $user_agent_ttc);
                    if ($listlike == '') {
                        $dem_ccc = 0;
                        //echo $trang .  $do . "Internet Không Ổn Định\r";
                        while ($listcx == '') {
                            $dem_ccc++;
                            dragonx_connect();
                            sleep(3);
                            $listcx = dragonx_listnv1('camxuc', $user_agent_ttc);
                            if ($dem_ccc > 3) {
                                $listcx = [];
                                break;
                            }
                        }
                    }
                    if (count($listcx) > 0) {
                        break;
                    }
                }
                if (count($listcx) == 0) {
                    $rd = rand(1, 7);
                    echo "\033[1;9" . $rd . "m Đang tạm thời hết nhiệm vụ Cảm xúc       \r";
                } else {
                    $con_nv_reaction = 1;
                    for ($chon_id_nv = 0; $chon_id_nv < count($listcx); $chon_id_nv++) {
                        $idcx = $listcx[$chon_id_nv]["idpost"];
                        $type = $listcx[$chon_id_nv]["loaicx"];
                        $id = $idcx;
                        if ($idcx != '') {
                            echo "\r   " . $id .  $type . "   \r";
                            dragonx_connect();
                            $kq = dragonx_kq($cookie, $id, "camxuc", $type, '');
                            //var_dump( $g);
                            if ($dem % 25 == 0 and $dem > 1) {
                                $xu = dragonx_xu();
                            }
                            $nhancx = dragonx_nhancx($type, $idcx, $user_agent_ttc);
                            $s = $nhancx[("mess")];
                            if (strpos($s, 'Thành công') !== false) {
                                $_nv_reaction_loi = 0;
                                $xu = $xu + 400;
                                $xujob = 400;
                                $dem++;


                                $tongxu = $xu;

                                $type2 = strtoupper(substr($type . "                       ", 0, 8));
                                $xujob2 = strtoupper(substr($xujob . "                       ", 0, 4));
                                if (strpos($id, '_')) {
                                    $id = explode('_', $id)[1];
                                }
                                $id = substr($id . "                       ", 0, 17);
                                echo "\r" . $do . "[" . $vang . $dem . $do . "] " . $xnhac . date("H:i:s") . $xduong . " | " . $vang . $type2 . $xduong . " | " . $trang . $id . $xduong . " | " . $luc . "+" . $xujob2 . $xduong . " | " . $vang . $tongxu . "\n\r";

                                if ($dem % $doiacc == 0) {
                                    if (count($khoCK) > 1) {
                                        $spam = 1;
                                        break;
                                    }
                                } else {
                                    if($doiacc / 2 > 20){
                                        $dem_check_acc++;
                                    }
                                    if ($dem_check_acc % 20 == 0) {
                                        dragonx_connect();
                                        if (strpos($cookie, "i_user=")) {
                                            dragonx_connect();
                                            $profile = dragonx_profile2($cookie);
                                            $loai_ck = "Fanpage Profile";
                                        } else {
                                            dragonx_connect();
                                            $loai_ck = "Profile";
                                            $profile = dragonx_profile($cookie);
                                        }

                                        $namefb = $profile['NAME'];
                                        $idfb = $profile['ID'];


                                        if ($idfb == '' and $namefb == '') {
                                            echo "Coookie Die \n";
                                            array_splice($khoCK, $acc, 1);
                                            $spam = 1;
                                            break;
                                        }
                                    }
                                }
                                if ($dem % $dl['nvnghi'] == 0 and $dem > 3) {
                                    dragonx_delay($dl['nghi'], $ngdich);
                                } else {
                                    dragonx_delay($dl[$loai], $ngdich);
                                }
                            } else {
                                $_nv_reaction_loi++;
                                if ($_nv_reaction_loi > 3) {
                                    break;
                                }
                            }
                        }
                    }
                    if ($spam == 1) {
                        break;
                    }
                }
                sleep(5);
            }

            $con_nv_reactioncmt = 0;
            $_nv_reactioncmt_loi = 0;
            if ($loai == 'reactioncmt') {
                for ($i = 0; $i < 5; $i++) {
                    dragonx_connect();
                    $listcxcmt = getnvcxdragonx_unknown1($user_agent_ttc);
                    if ($listlike == '') {
                        $dem_ccc = 0;
                        //echo $trang .  $do . "Internet Không Ổn Định\r";
                        while ($listcxcmt == '') {
                            $dem_ccc++;
                            dragonx_connect();
                            sleep(3);
                            $listcxcmt = getnvcxdragonx_unknown1($user_agent_ttc);
                            if ($dem_ccc > 3) {
                                $listcxcmt = [];
                                break;
                            }
                        }
                    }
                    if (count($listcxcmt) > 0) {
                        break;
                    }
                }
                if (count($listcxcmt) == 0) {
                    $rd = rand(1, 7);
                    echo "\033[1;9" . $rd . "m Đang tạm thời hết nhiệm vụ Cảm xúc CMT       \r";
                } else {
                    $con_nv_reactioncmt = 1;
                    for ($chon_id_nv = 0; $chon_id_nv < count($listcxcmt); $chon_id_nv++) {
                        $idcxcmt = $listcxcmt[$chon_id_nv]["idpost"];
                        $type = $listcxcmt[$chon_id_nv]["loaicx"];

                        $id = $idcxcmt;
                        if ($idcxcmt != '') {
                            echo "\r   " . $id .  $type . " CMT   \r";
                            dragonx_connect();
                            $kq =  reac_dragonx_unknown1($id, $idfb, $type, $cookie);
                            //var_dump( $g);
                            if ($dem % 25 == 0 and $dem > 1) {
                                $xu = dragonx_xu();
                            }

                            $nhanlcmt = traluonglikedragonx_unknown1($type, $idcxcmt, $user_agent_ttc);
                            $s = $nhanlcmt[("mess")];
                            if (strpos($s, 'Thành công') !== false) {
                                $_nv_reactioncmt_loi = 0;
                                $xu = $xu + 600;
                                $xujob = 600;
                                $dem++;


                                $tongxu = $xu;

                                $type2 = strtoupper(substr($type . "                       ", 0, 8));
                                $xujob2 = strtoupper(substr($xujob . "                       ", 0, 4));
                                if (strpos($id, '_')) {
                                    $id = explode('_', $id)[1];
                                }
                                $id = substr($id . "                       ", 0, 17);
                                echo "\r" . $do . "[" . $vang . $dem . $do . "] " . $xnhac . date("H:i:s") . $xduong . " | " . $vang . $type2 . $xduong . " | " . $trang . $id . $xduong . " | " . $luc . "+" . $xujob2 . $xduong . " | " . $vang . $tongxu . "\n\r";

                                if ($dem % $doiacc == 0) {
                                    if (count($khoCK) > 1) {
                                        $spam = 1;
                                        break;
                                    }
                                } else {
                                    if($doiacc / 2 > 20){
                                        $dem_check_acc++;
                                    }
                                    if ($dem_check_acc % 20 == 0) {
                                        dragonx_connect();
                                        if (strpos($cookie, "i_user=")) {
                                            dragonx_connect();
                                            $profile = dragonx_profile2($cookie);
                                            $loai_ck = "Fanpage Profile";
                                        } else {
                                            dragonx_connect();
                                            $loai_ck = "Profile";
                                            $profile = dragonx_profile($cookie);
                                        }

                                        $namefb = $profile['NAME'];
                                        $idfb = $profile['ID'];


                                        if ($idfb == '' and $namefb == '') {
                                            echo "Coookie Die \n";
                                            array_splice($khoCK, $acc, 1);
                                            $spam = 1;
                                            break;
                                        }
                                    }
                                }
                                if ($dem % $dl['nvnghi'] == 0 and $dem > 3) {
                                    dragonx_delay($dl['nghi'], $ngdich);
                                } else {
                                    dragonx_delay($dl[$loai], $ngdich);
                                }
                            } else {
                                $_nv_reactioncmt_loi++;
                                if ($_nv_reactioncmt_loi > 3) {
                                    break;
                                }
                            }
                        }
                    }
                    if ($spam == 1) {
                        break;
                    }
                }
                sleep(5);
            }

            $con_nv_fanpage = 0;
            $_nv_fanpage_loi = 0;
            if ($loai == 'fanpage') {
                for ($i = 0; $i < 5; $i++) {
                    dragonx_connect();
                    $listpage = dragonx_listnv1('likepage', $user_agent_ttc);
                    if ($listpage == '') {
                        $dem_ccc = 0;
                        //echo $trang .  $do . "Internet Không Ổn Định\r";
                        while ($listpage == '') {
                            $dem_ccc++;
                            dragonx_connect();
                            sleep(3);
                            $listpage = dragonx_listnv1('likepage', $user_agent_ttc);
                            if ($dem_ccc > 3) {
                                $listpage = [];
                                break;
                            }
                        }
                    }
                    if (count($listpage) > 0) {
                        break;
                    }
                }
                if (count($listpage) == 0) {
                    $rd = rand(1, 7);
                    echo "\033[1;9" . $rd . "m Đang tạm thời hết nhiệm vụ fanpage       \r";
                } else {
                    $con_nv_fanpage = 1;
                    for ($chon_id_nv = 0; $chon_id_nv < count($listpage); $chon_id_nv++) {
                        $idpage = $listpage[$chon_id_nv]["idpost"];
                        $id = $idpage;
                        if ($idpage != '') {
                            echo "\r   " . $id .  $loai . "   \r";
                            dragonx_connect();
                            $kq = dragonx_kq($cookie, $id, "page", '', '');
                            //var_dump( $g);
                            if ($dem % 25 == 0 and $dem > 1) {
                                $xu = dragonx_xu();
                            }
                            $nhanpage = dragonx_lumxu('likepage', $idpage, $user_agent_ttc);

                            $s = $nhanpage[("mess")];
                            if (strpos($s, 'Thành công') !== false) {
                                $_nv_fanpage_loi = 0;
                                $xu = $xu + 600;
                                $xujob = 600;
                                $dem++;


                                $tongxu = $xu;

                                $type2 = strtoupper(substr($loai . "                       ", 0, 8));
                                $xujob2 = strtoupper(substr($xujob . "                       ", 0, 4));
                                if (strpos($id, '_')) {
                                    $id = explode('_', $id)[1];
                                }
                                $id = substr($id . "                       ", 0, 17);
                                echo "\r" . $do . "[" . $vang . $dem . $do . "] " . $xnhac . date("H:i:s") . $xduong . " | " . $vang . $type2 . $xduong . " | " . $trang . $id . $xduong . " | " . $luc . "+" . $xujob2 . $xduong . " | " . $vang . $tongxu . "\n\r";

                                if ($dem % $doiacc == 0) {
                                    if (count($khoCK) > 1) {
                                        $spam = 1;
                                        break;
                                    }
                                } else {
                                    if($doiacc / 2 > 20){
                                        $dem_check_acc++;
                                    }
                                    if ($dem_check_acc % 20 == 0) {
                                        dragonx_connect();
                                        if (strpos($cookie, "i_user=")) {
                                            dragonx_connect();
                                            $profile = dragonx_profile2($cookie);
                                            $loai_ck = "Fanpage Profile";
                                        } else {
                                            dragonx_connect();
                                            $loai_ck = "Profile";
                                            $profile = dragonx_profile($cookie);
                                        }

                                        $namefb = $profile['NAME'];
                                        $idfb = $profile['ID'];


                                        if ($idfb == '' and $namefb == '') {
                                            echo "Coookie Die \n";
                                            array_splice($khoCK, $acc, 1);
                                            $spam = 1;
                                            break;
                                        }
                                    }
                                }
                                if ($dem % $dl['nvnghi'] == 0 and $dem > 3) {
                                    dragonx_delay($dl['nghi'], $ngdich);
                                } else {
                                    dragonx_delay($dl[$loai], $ngdich);
                                }
                            } else {
                                $_nv_fanpage_loi++;
                                if ($_nv_fanpage_loi > 3) {
                                    break;
                                }
                            }
                        }
                    }
                    if ($spam == 1) {
                        break;
                    }
                }
                sleep(5);
            }

            $con_nv_group = 0;
            $_nv_group_loi = 0;
            if ($loai == 'group') {
                for ($i = 0; $i < 5; $i++) {
                    dragonx_connect();
                    $listgroup = dragonx_listnv1('thamgianhom', $user_agent_ttc);
                    if ($listgroup == '') {
                        $dem_ccc = 0;
                        //echo $trang .  $do . "Internet Không Ổn Định\r";
                        while ($listgroup == '') {
                            $dem_ccc++;
                            dragonx_connect();
                            sleep(3);
                            $listgroup = dragonx_listnv1('thamgianhom', $user_agent_ttc);
                            if ($dem_ccc > 3) {
                                $listgroup = [];
                                break;
                            }
                        }
                    }
                    if (count($listgroup) > 0) {
                        break;
                    }
                }
                if (count($listgroup) == 0) {
                    $rd = rand(1, 7);
                    echo "\033[1;9" . $rd . "m Đang tạm thời hết nhiệm vụ Group       \r";
                } else {
                    $con_nv_group = 1;
                    for ($chon_id_nv = 0; $chon_id_nv < count($listgroup); $chon_id_nv++) {
                        $idgroup = $listgroup[$chon_id_nv]["idpost"];
                        $id = $idgroup;
                        if ($idgroup != '') {
                            echo "\r   " . $id .  $loai . "   \r";
                            dragonx_connect();
                            $kq = dragonx_kq($cookie, $id, "group", '', '');
                            //var_dump( $g);
                            if ($dem % 25 == 0 and $dem > 1) {
                                $xu = dragonx_xu();
                            }
                            $nhanpage = dragonx_lumxu('thamgianhom', $idgroup, $user_agent_ttc);

                            $s = $nhanpage[("mess")];
                            if (strpos($s, 'Thành công') !== false) {
                                $_nv_group_loi = 0;
                                $xu = $xu + 1200;
                                $xujob = 1200;
                                $dem++;


                                $tongxu = $xu;

                                $type2 = strtoupper(substr($loai . "                       ", 0, 8));
                                $xujob2 = strtoupper(substr($xujob . "                       ", 0, 4));
                                if (strpos($id, '_')) {
                                    $id = explode('_', $id)[1];
                                }
                                $id = substr($id . "                       ", 0, 17);
                                echo "\r" . $do . "[" . $vang . $dem . $do . "] " . $xnhac . date("H:i:s") . $xduong . " | " . $vang . $type2 . $xduong . " | " . $trang . $id . $xduong . " | " . $luc . "+" . $xujob2 . $xduong . " | " . $vang . $tongxu . "\n\r";

                                if ($dem % $doiacc == 0) {
                                    if (count($khoCK) > 1) {
                                        $spam = 1;
                                        break;
                                    }
                                } else {
                                    if($doiacc / 2 > 20){
                                        $dem_check_acc++;
                                    }
                                    if ($dem_check_acc % 20 == 0) {
                                        dragonx_connect();
                                        if (strpos($cookie, "i_user=")) {
                                            dragonx_connect();
                                            $profile = dragonx_profile2($cookie);
                                            $loai_ck = "Fanpage Profile";
                                        } else {
                                            dragonx_connect();
                                            $loai_ck = "Profile";
                                            $profile = dragonx_profile($cookie);
                                        }

                                        $namefb = $profile['NAME'];
                                        $idfb = $profile['ID'];


                                        if ($idfb == '' and $namefb == '') {
                                            echo "Coookie Die \n";
                                            array_splice($khoCK, $acc, 1);
                                            $spam = 1;
                                            break;
                                        }
                                    }
                                }
                                if ($dem % $dl['nvnghi'] == 0 and $dem > 3) {
                                    dragonx_delay($dl['nghi'], $ngdich);
                                } else {
                                    dragonx_delay($dl[$loai], $ngdich);
                                }
                            } else {
                                $_nv_group_loi++;
                                if ($_nv_group_loi > 3) {
                                    break;
                                }
                            }
                        }
                    }
                    if ($spam == 1) {
                        break;
                    }
                }
                sleep(5);
            }

            if (($con_nv_like + $con_nv_follow + $con_nv_comment + $con_nv_share + $con_nv_reaction + $con_nv_reactioncmt + $con_nv_fanpage + $con_nv_group) == 0) {
                for ($delay_hetnv = 50; $delay_hetnv > 0; $delay_hetnv--) {
                    echo "\r \033[1;9" . rand(1, 9) . "m Hết nhiệm vụ - chờ sau \033[1;9" . rand(1, 9) . "m $delay_hetnv    \r";
                }
                sleep(1);
            }
        }
    }
}
/*
function dragonx_delay($delay, $ngdich)
{
    $text1 = dragonx_dichnn('Vui Lòng Đợi Sau', $ngdich);
    $text2 = dragonx_dichnn('Giây', $ngdich);
    for ($i = $delay; $i > 1; $i--) {
        echo "\r \033[1;9" . rand(1, 9) . "m " . $text1 . " " . $i . " " . $text2 . "    \r";
        sleep(1);
    }
    echo "\r\033[1;9" . rand(1, 9) . "m " . dragonx_dichnn("Known As DragonX", $ngdich) . "       \r";
    dragonx_connect();
}*/
function dragonx_delay($delay, $ngdich)
{
    for ($i = $delay; $i >= 0; $i--) {
        echo " \033[1;93m[\033[1;97mDRAGONX\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mx.x.x.x.x\033[1;93m]       \r";
        usleep(166666);
        echo " \033[1;93m[\033[1;97mDRAGONX\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.x.x.x.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mDRAGONX\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.x.x.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mDRAGONX\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.X.x.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mDRAGONX\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.X.X.x\033[1;93m]       \r";
       usleep(166666);
       echo " \033[1;93m[\033[1;97mDRAGONX\033[1;93m] [\033[1;97m" . $i . "\033[1;93m] [\033[1;97mX.X.X.X.X\033[1;93m]       \r";
       usleep(166666);
    }
    //echo "\r\033[1;9" . rand(1, 9) . "m " . "Tool Bản Quyền Known As DragonX" . "       \r";
//    kiemtramang_dragonx();
}


function dragonx_unknown1($cookie, $id, $msg)
{
    $useragent = "TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzg5LjAuNDM4OS45MCBTYWZhcmkvNTM3LjM2";
    $headfb =  array(
        "Host:mbasic.facebook.com",
        "user-agent: TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzg5LjAuNDM4OS45MCBTYWZhcmkvNTM3LjM2",
        "cookie: " . $cookie
    );
    $mr = curl_init();
    curl_setopt($mr, CURLOPT_URL, 'https://mbasic.facebook.com/' . $id);
    curl_setopt($mr, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($mr, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($mr, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($mr, CURLOPT_HTTPHEADER, $headfb);
    $mr1 = curl_exec($mr);
    $cmt = explode('"', explode('/mbasic/comment/advanced/?', $mr1)[1])[0];
    curl_setopt($mr, CURLOPT_URL, 'https://mbasic.facebook.com/mbasic/comment/advanced/?' . htmlspecialchars_decode($cmt));
    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $cmt2 = explode('"', explode('/_mupload_/ufi/mbasic/advanced/?', $mr2)[1])[0];
    $fb_dtsg = explode('"', explode('fb_dtsg" value="', $mr2)[1])[0];
    $jazoest = explode('"', explode('jazoest" value="', $mr2)[1])[0];
    $data = '------WebKitFormBoundaryUnONBuHeWQfRq0uX
    Content-Disposition: form-data; name="fb_dtsg"
    
    ' . $fb_dtsg . '
    ------WebKitFormBoundaryUnONBuHeWQfRq0uX
    Content-Disposition: form-data; name="jazoest"
    
    ' . $jazoest . '
    ------WebKitFormBoundaryUnONBuHeWQfRq0uX
    Content-Disposition: form-data; name="comment_text"
    
    ' . $msg . '
    ------WebKitFormBoundaryUnONBuHeWQfRq0uX
    Content-Disposition: form-data; name="photo"; filename=""
    Content-Type: application/octet-stream
    
    
    ------WebKitFormBoundaryUnONBuHeWQfRq0uX
    Content-Disposition: form-data; name="post"
    
    Bình luận
    ------WebKitFormBoundaryUnONBuHeWQfRq0uX--
    ';
    $upload = [];
    $upload[] = "Host:upload.facebook.com";
    $upload[] = "content-type:multipart/form-data; boundary=----WebKitFormBoundaryUnONBuHeWQfRq0uX";
    $upload[] = "user-agent:$useragent";
    $upload[] = "cookie:$cookie";
    $mr = curl_init();
    curl_setopt($mr, CURLOPT_URL, 'https://mbasic.facebook.com/_mupload_/ufi/mbasic/advanced/?' . htmlspecialchars_decode($cmt2));
    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
    curl_setopt($mr, CURLOPT_HTTPHEADER, $upload);
    $mr2 = curl_exec($mr);
    curl_close($mr);
    return array($mr1, $mr2);
}




function traluonglikedragonx_unknown1($type, $id, $user_agent_ttc)
{
    $url  = "https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/nhantien.php";
    $data = 'id=' . $id . '&loaicx=' . $type;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: " . $user_agent_ttc,
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_COOKIEFILE => "ttc.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}


function dragonx_connect()
{
    $dem_ketnoi = 0;
    while (true) {
        $connected = @fsockopen("www.google.com", 80);
        if ($connected) {
            fclose($connected);
            break;
        } else {
            $connected = @fsockopen("www.google.com", 80);
            if ($connected) {
                fclose($connected);
                break;
            }
            if ($dem_ketnoi == 0) {
                echo "\r\e[1;91m  Vui lòng bật kết nối mạng \r";
            } else {
                sleep(3);
            }
            $dem_ketnoi++;
        }
    }
}





function dragonx_xu()
{
    $url = "https://tuongtaccheo.com/home.php";
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_COOKIEFILE => "ttc.txt"
    ));
    $data = curl_exec($curl);
    curl_close($curl);
    preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
    $xu = $sd["1"];
    return $xu;
}



function getnvcxdragonx_unknown1($useragent)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/getpost.php');
    $head[] = 'Host: tuongtaccheo.com';
    $head[] = 'accept: application/json, text/javascript, *' . '/' . '*; q=0.01';
    $head[] = 'x-requested-with: XMLHttpRequest';
    $head[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36';
    $head[] = 'referer: https://tuongtaccheo.com/kiemtien/camxuccheobinhluan';
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_ENCODING, TRUE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
    $data = curl_exec($ch);
    curl_close($ch);
    return json_decode($data, true);
}



function dragonx_listnv1($loai, $useragent)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/' . $loai . 'cheo/getpost.php');
    $head[] = 'Host: tuongtaccheo.com';
    $head[] = 'accept: application/json, text/javascript, *' . '/' . '*; q=0.01';
    $head[] = 'x-requested-with: XMLHttpRequest';
    $head[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36';
    $head[] = 'referer: https://tuongtaccheo.com/kiemtien/' . $loai . 'cheo';
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_ENCODING, TRUE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
    $data = curl_exec($ch);
    curl_close($ch);
    return json_decode($data, true);
}


function dragonx_listpage($useragent)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/getpost.php');
    $head[] = 'Host: tuongtaccheo.com';
    $head[] = 'accept: application/json, text/javascript, *' . '/' . '*; q=0.01';
    $head[] = 'x-requested-with: XMLHttpRequest';
    $head[] = 'referer: https://tuongtaccheo.com/kiemtien/';
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_ENCODING, TRUE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
    $data = curl_exec($ch);
    curl_close($ch);
    return json_decode($data, true);
}

function dragonx_nhancx($type, $id, $user_agent_ttc)
{
    $url  = "https://tuongtaccheo.com/kiemtien/camxuccheo/nhantien.php";
    $data = 'id=' . $id . '&loaicx=' . $type;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: " . $user_agent_ttc,
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/camxuccheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_COOKIEFILE => "ttc.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}


function dragonx_lumxu($loai, $id, $user_agent_ttc)
{
    $url  = "https://tuongtaccheo.com/kiemtien/$loai" . "cheo/nhantien.php";
    $data = ('id=') . $id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: " . $user_agent_ttc,
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/$loai" . "cheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "ttc.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}




function dragonx_nhanlike($id, $user_agent_ttc)
{
    $ch = curl_init();
    $data = ('id=') . $id;
    curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/nhantien.php');
    $head[] = 'Host: tuongtaccheo.com';
    $head[] = 'content-length: ' . strlen($data);
    $head[] = 'x-requested-with: XMLHttpRequest';
    $head[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
    $head[] = 'origin: https://tuongtaccheo.com';
    $head[] = 'referer: https://tuongtaccheo.com/kiemtien/';
    $head[] = 'cookie: TawkConnectionTime=0';
    curl_setopt($ch, CURLOPT_USERAGENT, $user_agent_ttc);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_ENCODING, TRUE);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
    $data = curl_exec($ch);
    //echo "\n\n" . $data . "\n\n";
    $xu = json_decode($data, true);
    curl_close($ch);
    return $xu;
}


function dragonx_datnick($idfb, $user_agent_ttc)
{
    $url = 'https://tuongtaccheo.com/cauhinh/datnick.php';
    $header = array(
        "Host: tuongtaccheo.com",
        "accept: */*",
        "x-requested-with: XMLHttpRequest",
        "user-agent: " . $user_agent_ttc,
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: cors",
        "sec-fetch-dest: empty",
        "referer: https://tuongtaccheo.com/cauhinh/",
    );
    $data = 'iddat%5B%5D=' . $idfb . "&loai=fb";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_PORT, "443");
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_ENCODING, "");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $h = curl_exec($ch);
    curl_close($ch);
    return $h;
}




function dragonx_Loginttc($TTC_Access_token, $user_agent_ttc)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/logintoken.php');
    curl_setopt($ch, CURLOPT_COOKIEJAR, "ttc.txt");
    curl_setopt($ch, CURLOPT_USERAGENT, $user_agent_ttc);
    $login = array('access_token' => $TTC_Access_token);
    curl_setopt($ch, CURLOPT_POST, count($login));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
    $source = curl_exec($ch);
    curl_close($ch);
    return $source;
}






function dragonx_khock($daucau, $ngdich, $vang, $trang, $luc)
{

    $khoCK = [];
    while (true) {
        if (file_exists("file_cookie_fb_traodoisub.txt")) {
            echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "1" . $vang . "] " . $luc . dragonx_dichnn("Chạy Cookie Facebook Cũ", $ngdich) . "\n";
            echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "2" . $vang . "] " . $luc . dragonx_dichnn("Thêm Cookie Facebook Để Chạy", $ngdich) . "\n";
            echo $daucau . dragonx_dichnn("Nhập ", $ngdich) . $vang . "[" . $trang . "3" . $vang . "] " . $luc . dragonx_dichnn("Xóa Cookie Cũ Nhập Lại", $ngdich) . "\n";
            echo $daucau . dragonx_dichnn("Nhập số: ", $ngdich) .  $vang;
            $choice = trim(fgets(STDIN));
            if ($choice == '3') {
                unlink("file_cookie_fb_traodoisub.txt");
                $khoCK = [];
            } else if ($choice == '2') {
                $khoCK = json_decode(fread(fopen("file_cookie_fb_traodoisub.txt", "r"), filesize("file_cookie_fb_traodoisub.txt")), true);
            } else {
                break;
            }
        }

        if (!file_exists("file_cookie_fb_traodoisub.txt") or $choice == '2') {
            
            echo $daucau . dragonx_dichnn("Nhập Cookie Hoặc Cookie Fanpage Profile (Pro5) Facebook Muốn Dừng Ấn", $ngdich) . $trang . " Enter \n";
            unlink("file_cookie_fb_traodoisub.txt");
            for ($a = 1; $a < 999999; $a++) {
                echo $daucau . dragonx_dichnn("Nhập Cookie thứ", $ngdich) . $trang . " $a: " . $vang;
                $nhapck = (string) trim(fgets(STDIN));
                if (strlen($nhapck) < 5) {
                    break;
                }
                array_push($khoCK, $nhapck);
            }
            $js = json_encode($khoCK);
            $k = fopen("file_cookie_fb_traodoisub.txt", "a+");
            fwrite($k, $js);
            fclose($k);
            $demcki = count($khoCK);
            break;
        }
    }

    $khoCK = json_decode(fread(fopen("file_cookie_fb_traodoisub.txt", "r"), filesize("file_cookie_fb_traodoisub.txt")), true);

    return $khoCK;
}




function user_agent_ttc()
{
    $rand = rand(1, 2);
    if ($rand == 1) {
        $khous = json_decode(file_get_contents('https://run.mocky.io/v3/e409ac66-fa34-48eb-8663-f7b04b26350f'), true);
    } else {
        $khous = json_decode(file_get_contents('https://run.mocky.io/v3/e409ac66-fa34-48eb-8663-f7b04b26350f'), true);
    }
    $user_agent = base64_decode($khous[array_rand($khous, 1)]);
    if (strpos($user_agent, "[ip:")) {
        $user_agent = explode('[ip:', $user_agent)[0];
        $user_agent = $user_agent . '[ip:' . rand(1, 300) . '.' . rand(1, 300) . '.' . rand(1, 300) . '.' . rand(1, 300) . ']';
    }
    return $user_agent;
}



function dragonx_dichnn($text, $nn_dich)
{

    $nn_goc = 'vi';

    if ($nn_dich == $nn_goc) return $text;
    $text = urlencode($text);
    $useragent = user_agent_ttc();
    $url = 'https://translate.google.com.vn/m?sl=' . $nn_goc . '&tl=' . $nn_dich . '&hl=' . $nn_dich . '&q=' . $text;
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER =>
        array(
            "Host:translate.google.com.vn",
            'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
            'accept-encoding: gzip, deflate, br',
            'accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
            'cache-control: max-age=0',
            'user-agent:' . $useragent,
            'referer: ' . $url
        ),
        CURLOPT_ENCODING => TRUE,
    ));
    $ch = curl_exec($ch);
    if ($ch == '' || strpos($ch, 'result-container">') == false) {
        return $text;
    }
    //echo $ch;
    $kq = html_entity_decode(explode('</div>', explode('result-container">', $ch)[1])[0]);
    return $kq;
    //return json_decode($ch, true);
}


function logo_dragonx()
{
    $do="\033[1;91m";
    $den="\033[1;33m";
    $tim="\033[1;34m";
    $luc="\033[1;92m";
    $trang="\033[1;97m";
    $vang = "\033[1;93m";
    $hong = "\033[1;95m";
    $xnhac = "\033[1;36m";
    $xduong = "\033[1;96m";
    /***[ Logo ]***/
    $logo= "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL TTC PRO5 ĐA LUỒNG
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
    return $logo;
}

function dragonx_listnn()
{
    $list = '[{"m":"ar","n":"\u1ea2 R\u1eadp"},{"m":"sq","n":"Albania"},{"m":"am","n":"Amharic"},{"m":"en","n":"Anh"},{"m":"hy","n":"Armenia"},{"m":"as","n":"Assam"},{"m":"ay","n":"Aymara"},{"m":"az","n":"Azerbaijan"},{"m":"pl","n":"Ba Lan"},{"m":"fa","n":"Ba T\u01b0"},{"m":"bm","n":"Bambara"},{"m":"xh","n":"Bantu"},{"m":"eu","n":"Basque"},{"m":"be","n":"Belarus"},{"m":"bn","n":"Bengal"},{"m":"bho","n":"Bhojpuri"},{"m":"bs","n":"Bosnia"},{"m":"pt","n":"B\u1ed3 \u0110\u00e0o Nha"},{"m":"bg","n":"Bulgaria"},{"m":"ca","n":"Catalan"},{"m":"ceb","n":"Cebuano"},{"m":"ny","n":"Chichewa"},{"m":"co","n":"Corsi"},{"m":"ht","n":"Creole (Haiti)"},{"m":"hr","n":"Croatia"},{"m":"dv","n":"Dhivehi"},{"m":"iw","n":"Do Th\u00e1i"},{"m":"doi","n":"Dogri"},{"m":"da","n":"\u0110an M\u1ea1ch"},{"m":"de","n":"\u0110\u1ee9c"},{"m":"et","n":"Estonia"},{"m":"ee","n":"Ewe"},{"m":"tl","n":"Filipino"},{"m":"fy","n":"Frisia"},{"m":"gd","n":"Gael Scotland"},{"m":"gl","n":"Galicia"},{"m":"ka","n":"George"},{"m":"gn","n":"Guarani"},{"m":"gu","n":"Gujarat"},{"m":"nl","n":"H\u00e0 Lan"},{"m":"af","n":"H\u00e0 Lan (Nam Phi)"},{"m":"ko","n":"H\u00e0n"},{"m":"ha","n":"Hausa"},{"m":"haw","n":"Hawaii"},{"m":"hi","n":"Hindi"},{"m":"hmn","n":"Hmong"},{"m":"hu","n":"Hungary"},{"m":"el","n":"Hy L\u1ea1p"},{"m":"is","n":"Iceland"},{"m":"ig","n":"Igbo"},{"m":"ilo","n":"Ilocano"},{"m":"id","n":"Indonesia"},{"m":"ga","n":"Ireland"},{"m":"jw","n":"Java"},{"m":"kn","n":"Kannada"},{"m":"kk","n":"Kazakh"},{"m":"km","n":"Khmer"},{"m":"rw","n":"Kinyarwanda"},{"m":"gom","n":"Konkani"},{"m":"kri","n":"Krio"},{"m":"ku","n":"Kurd (Kurmanji)"},{"m":"ckb","n":"Kurd (Sorani)"},{"m":"ky","n":"Kyrgyz"},{"m":"lo","n":"L\u00e0o"},{"m":"la","n":"Latinh"},{"m":"lv","n":"Latvia"},{"m":"ln","n":"Lingala"},{"m":"lt","n":"Litva"},{"m":"lg","n":"Luganda"},{"m":"lb","n":"Luxembourg"},{"m":"ms","n":"M\u00e3 Lai"},{"m":"mk","n":"Macedonia"},{"m":"mai","n":"Maithili"},{"m":"mg","n":"Malagasy"},{"m":"ml","n":"Malayalam"},{"m":"mt","n":"Malta"},{"m":"mi","n":"Maori"},{"m":"mr","n":"Marathi"},{"m":"mni-Mtei","n":"Meiteilon (Manipuri)"},{"m":"lus","n":"Mizo"},{"m":"mn","n":"M\u00f4ng C\u1ed5"},{"m":"my","n":"Myanmar"},{"m":"no","n":"Na Uy"},{"m":"ne","n":"Nepal"},{"m":"ru","n":"Nga"},{"m":"ja","n":"Nh\u1eadt"},{"m":"or","n":"Odia (Oriya)"},{"m":"om","n":"Oromo"},{"m":"ps","n":"Pashto"},{"m":"sa","n":"Ph\u1ea1n"},{"m":"fr","n":"Ph\u00e1p"},{"m":"fi","n":"Ph\u1ea7n Lan"},{"m":"pa","n":"Punjab"},{"m":"qu","n":"Quechua"},{"m":"eo","n":"Qu\u1ed1c t\u1ebf ng\u1eef"},{"m":"ro","n":"Rumani"},{"m":"sm","n":"Samoa"},{"m":"cs","n":"S\u00e9c"},{"m":"nso","n":"Sepedi"},{"m":"sr","n":"Serbia"},{"m":"st","n":"Sesotho"},{"m":"sn","n":"Shona"},{"m":"sd","n":"Sindhi"},{"m":"si","n":"Sinhala"},{"m":"sk","n":"Slovak"},{"m":"sl","n":"Slovenia"},{"m":"so","n":"Somali"},{"m":"su","n":"Sunda"},{"m":"sw","n":"Swahili"},{"m":"tg","n":"Tajik"},{"m":"ta","n":"Tamil"},{"m":"tt","n":"Tatar"},{"m":"es","n":"T\u00e2y Ban Nha"},{"m":"te","n":"Telugu"},{"m":"th","n":"Th\u00e1i"},{"m":"tr","n":"Th\u1ed5 Nh\u0129 K\u1ef3"},{"m":"sv","n":"Th\u1ee5y \u0110i\u1ec3n"},{"m":"ti","n":"Tigrinya"},{"m":"zh-CN","n":"Trung (Gi\u1ea3n th\u1ec3)"},{"m":"zh-TW","n":"Trung (Ph\u1ed3n th\u1ec3)"},{"m":"ts","n":"Tsonga"},{"m":"tk","n":"Turkmen"},{"m":"ak","n":"Twi"},{"m":"uk","n":"Ukraina"},{"m":"ur","n":"Urdu"},{"m":"ug","n":"Uyghur"},{"m":"uz","n":"Uzbek"},{"m":"vi","n":"Vi\u1ec7t"},{"m":"cy","n":"X\u1ee9 Wales"},{"m":"it","n":"\u00dd"},{"m":"yi","n":"Yiddish"},{"m":"yo","n":"Yoruba"},{"m":"zu","n":"Zulu"}]';
    return json_decode($list, true);
}




function dragonx_profile($cookie)
{
    $useragent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36';
    $ch = curl_init();
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: m.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://mbasic.facebook.com/profile.php',
        CURLOPT_TIMEOUT => 60,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_USERAGENT => $useragent,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_SSL_VERIFYPEER => TRUE,
        CURLOPT_HTTPHEADER => $head
    ));
    $access = curl_exec($ch);
    //file_put_contents("fb.html", $access);
    if (strpos($access, '/profile.php?lst=')) {
        $name = explode('</title>', explode('xhtml"><head><title>', $access)[1])[0];
        $id = explode('%', explode('/profile.php?lst=', $access)[1])[0];
        return array("NAME" => $name, "ID" => $id);
    } else {
        return array("NAME" => "", "ID" => "");
    }
}


function dragonx_profile2($cookie)
{
    $idfb = '';
    $namefb = '';
    if (strpos($cookie, "i_user=")) {
        $idfb = explode(";", explode("i_user=", $cookie)[1])[0];
        $namefb = get_dragonx_profile2($cookie);
    }
    if ($idfb and $namefb != '') {
        return array('NAME' => $namefb, 'ID' => $idfb);
    }
    return array('NAME' => '', 'ID' => '');
}
function get_dragonx_profile2($cookie)
{
    $head = array(
        "Host: www.facebook.com",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "dnt: 1",
        "x-requested-with: mark.via.gp",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-encoding: gzip, deflate",
        "accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7",
    );
    $url = "https://www.facebook.com/me";
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => "",
        CURLOPT_FOLLOWLOCATION => true
    ));
    $access = curl_exec($ch);
    $name = explode("<", explode("<title>", $access)[1])[0];
    return $name;
}






function reac_dragonx_unknown1($id, $idfb, $type, $cookie)
{
    $type = strtoupper($type);
    // 
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
    // 
    $one = explode("location: ", $data);
    $two = explode("rdr", $one[1]);
    $url = $two[0] . "rdr";
    if ($url == 'rdr') {
    } else {
        $idpost = explode('&id=', $url)[0];
        $idvictim = explode('&id=', $url)[1];
        curl_close($ch);
        if (strpos($data, "xs=deleted") == true) {
            //print "\033[1;37m→\033[1;31m Die Cookie !!!\n";
            //exit();
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
            if (strpos($cx, '<a href="/ufi/reaction/?ft_ent_identifier=')) {
                $data = explode('"', explode('<a href="/ufi/reaction/?ft_ent_identifier=', $cx)[1])[0];
                curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/ufi/reaction/?ft_ent_identifier=' . htmlspecialchars_decode($data));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_exec($ch);
                curl_close($ch);
            }
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









function dragonx_kq($cookie, $id_tt, $loai, $type, $text_share)
{
    $loai = strtolower($loai);
    $type = strtoupper($type);
    // $id_page = explode(";", explode("i_user=", $cookie)[1])[0];
    if (strpos($cookie, "i_user=")) {
        $id_page = explode(";", explode("i_user=", $cookie)[1])[0];
    } else {
        $id_page = explode(";", explode("c_user=", $cookie)[1])[0];
    }

    $url = "https://www.facebook.com/" . $id_tt;
    $head = array(
        "Host: www.facebook.com",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "dnt: 1",
        "x-requested-with: mark.via.gp",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-encoding: gzip, deflate",
        "accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => "",
        CURLOPT_FOLLOWLOCATION => true
    ));
    $access = curl_exec($ch);

    if ($access != '') {
        if (strpos($access, '["LSD",[],{"token":"')) {
            $access123 = $access;
            $lsd = explode('"', explode('["LSD",[],{"token":"', $access)[1])[0];
            $rev = explode(',', explode('{"server_revision":', $access)[1])[0];
            $hsi = explode('"', explode('"hsi":"', $access)[1])[0];
            $comet_req = explode('&', explode('__comet_req=', $access)[1])[0];
            $fb = explode('"', explode('["DTSGInitialData",[],{"token":"', $access)[1])[0];
            $jazoest = explode('"', explode('jazoest=', $access)[1])[0];
            $spin_r = explode(',', explode('"__spin_r":', $access)[1])[0];
            $spin_t = explode(',', explode('"__spin_t":', $access)[1])[0];
            $hs = explode('"', explode('"haste_session":"', $access)[1])[0];
            $id_account = explode('"', explode('"AD_ACCOUNT_ID":"', $access)[1])[0];
            $appid = explode('"', explode('"APP_ID":"', $access)[1])[0];
            $feedback_id = explode('"', explode('"feedback":{"id":"', $access)[1])[0];
            $tracking = explode('"', explode('"encrypted_tracking":"', $access)[1])[0];

            if ($loai == "camxuc") {
                if ($type == "like" or $type == "LIKE") {
                    $id = "1635855486666999";
                } else if ($type == "love" or $type == "LOVE") {
                    $id = "1678524932434102";
                } else if ($type == "care" or $type == "CARE") {
                    $id = "613557422527858";
                } else if ($type == "wow" or $type == "WOW") {
                    $id = "478547315650144";
                } else if ($type == "haha" or $type == "HAHA") {
                    $id = "115940658764963";
                } else if ($type == "sad" or $type == "SAD") {
                    $id = "908563459236466";
                } else if ($type == "angry" or $type == "ANGRY") {
                    $id = "444813342392137";
                }
                $data = http_build_query(
                    array(
                        "av" => $id_page,
                        "__user" => $id_page,
                        "__a" => "1",
                        "__dyn" => "7AzHxqU5a5Q1ryUqxenFw9uu2i5U4e0ykdwSwAyUco2qwJxS1NwJwpUe8hw6vwb-q7oc81xoswaq2210wEwgolzUO0-E4a3aUS2G5Usw9m1YwBgK7o884y0Mo4G4Ufo5m1mzXxG1Pxi4UaEW2G1jxS6FobrwKxm5oe85nxmu3W0GpovUy2a0-pobpEbUGdwb6223908O3216AzUjwTwNwLwFg662S",
                        "__csr" => "gmgR7hdrnR8zkHInSqkzEZlnaWiH9FjltWiCFpaleV4hkBH8ShC-Kip2Xl9eFHGGK-5b8dKWCV44HlpqyoWHKil3V8oDzWJp9VrAjXxeidCCKfxK2vUb98C4FF8vwoo4euqdzU8oO14yoaohxC3-2-awg8fo2YDF385e0zo662m2W3y1Hg723-48hxy2C4Uuwi813U6u0SU0jzw0L8w11e10w1hi00EfU0MK06rE0LN00AHw2Ftw1ku01mdw1CC09zw4gw3Ko1dUaE",
                        "__req" => "f",
                        "__hs" => $hs,
                        "dpr" => "2",
                        "__ccg" => "GOOD",
                        "__rev" => $rev,
                        "__s" => "zyhcqc:buwta2:7i84gg",
                        "__hsi" => $hsi,
                        "__comet_req" => $comet_req,
                        "fb_dtsg" => $fb,
                        "jazoest" => $jazoest,
                        "lsd" => $lsd,
                        "__aaid" => $id_account,
                        "__spin_r" => $spin_r,
                        "__spin_b" => "trunk",
                        "__spin_t" => $spin_t,
                        "fb_api_caller_class" => "RelayModern",
                        "fb_api_req_friendly_name" => "CometUFIFeedbackReactMutation",
                        'variables' => '{"input":{"attribution_id_v2":"CometSinglePostRoot.react,comet.post.single,via_cold_start,1667375488208,722017,,","feedback_id":"' . $feedback_id . '","feedback_reaction_id":"' . $id . '","feedback_source":"OBJECT","is_tracking_encrypted":true,"tracking":["' . $tracking . '"],"session_id":"bf514774-8fef-4921-89f8-9a4919ef22e7","actor_id":"' . $id_page . '","client_mutation_id":"1"},"useDefaultActor":false,"scale":2}',
                        "server_timestamps" => true,
                        "doc_id" => "5703418209680126",
                    )
                );
                //'variables' => '{"input":{"attribution_id_v2":"CometPhotoRoot.react,comet.mediaviewer.photo,via_cold_start,1667353359847,535368,,","feedback_id":"'.$feedback_id.'","feedback_reaction_id":"'.$id.'","feedback_source":"MEDIA_VIEWER","feedback_referrer":"/","is_tracking_encrypted":true,"tracking":[],"session_id":"a0f1b40b-cd1b-424f-8c42-1b2d5cd527e4","actor_id":"'.$id_page.'","client_mutation_id":"1"},"useDefaultActor":false,"scale":2}',

            } else if ($loai == "follow") {
                $data = http_build_query(
                    array(
                        "av" => $id_page,
                        "__user" => $id_page,
                        "fb_dtsg" => $fb,
                        "jazoest" => $jazoest,
                        "lsd" => $lsd,
                        "fb_api_caller_class" => "RelayModern",
                        "fb_api_req_friendly_name" => "CometUserFollowMutation",
                        'variables' => '{"input":{"attribution_id_v2":"ProfileCometTimelineListViewRoot.react,comet.profile.timeline.list,via_cold_start,1667356956520,868746,190055527696468,","subscribe_location":"PROFILE","subscribee_id":"' . $id_tt . '","actor_id":"' . $id_page . '","client_mutation_id":"1"},"scale":2}',
                        "server_timestamps" => true,
                        "doc_id" => "5032256523527306",

                    )
                );
            } else if ($loai == "share") {
                $get = dragonx_vuhoangpro_0($url, $cookie);
                if (strpos($get, 'groups') !== false) {
                    $data = http_build_query(
                        array(
                            "av" => $id_page,
                            "__user" => $id_page,
                            "__a" => "1",
                            "__dyn" => "7AzHxqU5a5Q1ryUqxenFw9uu2i5U4e0ykdwSwAyU8EW0CEbotwsobo6u3y4o1DU2_CxS320om782Cwwwg8a8465o-cwfG12wOKdwGxu782lwv89kbxS2218wc61axe3S1lwlE-UqwsUkxe2GewGwkUtxGm2SUbElxm3y1lUlDw-waCm7-8wywfCm2Sq2-azo2NwwwOg2cwMwhF8-4UdUcobUak1xwJw",
                            "__csr" => "g8Ind5IgZijlcHtL9leCGdnVaHSIB4tq9jhiaqF2ejlQWFu9WFnGmhd5Hjy49yrJvGa-imbFHy9WGKVEOEy8AzqVAdx6mrGbypVGxF7zqDK8FfDye5UCaDy-498lQ5UfU9U8ogwHwvoy4E9Ekwh8CEf8jg6i6KEgDwYKq260P8a823whEaU6i3Xwkonwt8txS2u3qq4E3Mwqo760jm01f3w9t03lE02EJw6Zw1z2060o1380qHw2no888K04WU05mG06Y80Dq0D80WC0rO8w",
                            "__req" => "n",
                            "__hs" => $hs,
                            "dpr" => "2",
                            "__ccg" => "GOOD",
                            "__rev" => $rev,
                            "__s" => "93kf5g:ssztt9:lx2u1p",
                            "__hsi" => $hsi,
                            "__comet_req" => "15",
                            "fb_dtsg" => $fb,
                            "jazoest" => $jazoest,
                            "lsd" => $lsd,
                            "__aaid" => $id_account,
                            "__spin_r" => $spin_r,
                            "__spin_b" => "trunk",
                            "__spin_t" => $spin_t,
                            "fb_api_caller_class" => "RelayModern",
                            "fb_api_req_friendly_name" => "useCometFeedToFeedReshare_FeedToFeedMutation",
                            'variables' => '{"input":{"attachments":{"link":{"share_scrape_data":"{\"share_type\":37,\"share_params\":[' . $id_tt . ']}"}},"audiences":{"undirected":{"privacy":{"allow":[],"base_state":"EVERYONE","deny":[],"tag_expansion_state":"UNSPECIFIED"}}},"message":{"ranges":[],"text":"' . $text_share . '"},"is_tracking_encrypted":true,"navigation_data":{"attribution_id_v2":"CometGroupPermalinkRoot.react,comet.group.permalink,via_cold_start,1667534608867,546309,2361831622,"},"source":"www","tracking":["' . $tracking . '"],"actor_id":"' . $id_page . '","client_mutation_id":"1"},"renderLocation":"homepage_stream","scale":2,"privacySelectorRenderLocation":"COMET_STREAM","useDefaultActor":false,"displayCommentsContextEnableComment":null,"feedLocation":"NEWSFEED","displayCommentsContextIsAdPreview":null,"displayCommentsContextIsAggregatedShare":null,"displayCommentsContextIsStorySet":null,"displayCommentsFeedbackContext":null,"feedbackSource":1,"focusCommentID":null,"UFI2CommentsProvider_commentsKey":"CometModernHomeFeedQuery"}',
                            "server_timestamps" => true,
                            "doc_id" => "5606822466034221",
                            'fb_api_analytics_tags' => '["qpl_active_flow_ids=431626709"]',
                        )
                    );
                }

                if (strpos($get, 'watch') !== false) {
                    $data = http_build_query(
                        array(
                            "av" => $id_page,
                            "__user" => $id_page,
                            "__a" => "1",
                            "__dyn" => "7AzHxqU5a5Q1ryUqxenFw9uu2i5U4e0ykdwSwAyU8EW0CEbotwsobo6u3y4o1DU2_CxS320om782Cwwwg8a8465o-cwfG12wOKdwGxu782lwv89kbxS2218wc61axe3S1lwlE-UqwsUkxe2GewGwkUtxGm2SUbElxm3y1lUlDw-waCm7-8wywfCm2Sq2-azo2NwwwOg2cwMwhF8-4UdUcobUak1xwJw",
                            "__csr" => "g8Ind5IgZijlcHtL9leCGdnVaHSIB4tq9jhiaqF2ejlQWFu9WFnGmhd5Hjy49yrJvGa-imbFHy9WGKVEOEy8AzqVAdx6mrGbypVGxF7zqDK8FfDye5UCaDy-498lQ5UfU9U8ogwHwvoy4E9Ekwh8CEf8jg6i6KEgDwYKq260P8a823whEaU6i3Xwkonwt8txS2u3qq4E3Mwqo760jm01f3w9t03lE02EJw6Zw1z2060o1380qHw2no888K04WU05mG06Y80Dq0D80WC0rO8w",
                            "__req" => "n",
                            "__hs" => $hs,
                            "dpr" => "2",
                            "__ccg" => "GOOD",
                            "__rev" => $rev,
                            "__s" => "93kf5g:ssztt9:lx2u1p",
                            "__hsi" => $hsi,
                            "__comet_req" => "15",
                            "fb_dtsg" => $fb,
                            "jazoest" => $jazoest,
                            "lsd" => $lsd,
                            "__aaid" => $id_account,
                            "__spin_r" => $spin_r,
                            "__spin_b" => "trunk",
                            "__spin_t" => $spin_t,
                            "fb_api_caller_class" => "RelayModern",
                            "fb_api_req_friendly_name" => "useCometFeedToFeedReshare_FeedToFeedMutation",
                            'variables' => '{"input":{"attachments":{"link":{"share_scrape_data":"{\"share_type\":11,\"share_params\":[' . $id_tt . ']}"}},"audiences":{"undirected":{"privacy":{"allow":[],"base_state":"EVERYONE","deny":[],"tag_expansion_state":"UNSPECIFIED"}}},"message":{"ranges":[],"text":"' . $text_share . '"},"is_tracking_encrypted":true,"navigation_data":{"attribution_id_v2":"CometVideoHomeNewPermalinkRoot.react,comet.watch.injection,via_cold_start,1667466315284,308969,2392950137,"},"source":"www","tracking":[],"actor_id":"' . $id_page . '","client_mutation_id":"1"},"renderLocation":"homepage_stream","scale":2,"privacySelectorRenderLocation":"COMET_STREAM","useDefaultActor":false,"displayCommentsContextEnableComment":null,"feedLocation":"NEWSFEED","displayCommentsContextIsAdPreview":null,"displayCommentsContextIsAggregatedShare":null,"displayCommentsContextIsStorySet":null,"displayCommentsFeedbackContext":null,"feedbackSource":1,"focusCommentID":null,"UFI2CommentsProvider_commentsKey":"CometModernHomeFeedQuery"}',
                            "server_timestamps" => true,
                            "doc_id" => "5664417773604510",
                            'fb_api_analytics_tags' => '["qpl_active_flow_ids=30605361"]',
                        )
                    );
                } else {
                    $data = http_build_query(
                        array(
                            "av" => $id_page,
                            "__user" => $id_page,
                            "__a" => "1",
                            "__dyn" => "7AzHxqU5a5Q1ryUqxenFw9uu2i5U4e0ykdwSwAyU8EW0CEbotwsobo6u3y4o1DU2_CxS320om782Cwwwg8a8465o-cwfG12wOKdwGxu782lwv89kbxS2218wc61axe3S1lwlE-UqwsUkxe2GewGwkUtxGm2SUbElxm3y1lUlDw-waCm7-8wywfCm2Sq2-azo2NwwwOg2cwMwhF8-4UdUcobUak1xwJw",
                            "__csr" => "g8Ind5IgZijlcHtL9leCGdnVaHSIB4tq9jhiaqF2ejlQWFu9WFnGmhd5Hjy49yrJvGa-imbFHy9WGKVEOEy8AzqVAdx6mrGbypVGxF7zqDK8FfDye5UCaDy-498lQ5UfU9U8ogwHwvoy4E9Ekwh8CEf8jg6i6KEgDwYKq260P8a823whEaU6i3Xwkonwt8txS2u3qq4E3Mwqo760jm01f3w9t03lE02EJw6Zw1z2060o1380qHw2no888K04WU05mG06Y80Dq0D80WC0rO8w",
                            "__req" => "n",
                            "__hs" => $hs,
                            "dpr" => "2",
                            "__ccg" => "GOOD",
                            "__rev" => $rev,
                            "__s" => "93kf5g:ssztt9:lx2u1p",
                            "__hsi" => $hsi,
                            "__comet_req" => "15",
                            "fb_dtsg" => $fb,
                            "jazoest" => $jazoest,
                            "lsd" => $lsd,
                            "__aaid" => $id_account,
                            "__spin_r" => $spin_r,
                            "__spin_b" => "trunk",
                            "__spin_t" => $spin_t,
                            "fb_api_caller_class" => "RelayModern",
                            "fb_api_req_friendly_name" => "useCometFeedToFeedReshare_FeedToFeedMutation",
                            'variables' => '{"input":{"attachments":{"link":{"share_scrape_data":"{\"share_type\":22,\"share_params\":[' . $id_tt . ']}"}},"audiences":{"undirected":{"privacy":{"allow":[],"base_state":"EVERYONE","deny":[],"tag_expansion_state":"UNSPECIFIED"}}},"message":{"ranges":[],"text":"' . $text_share . '"},"is_tracking_encrypted":true,"navigation_data":{"attribution_id_v2":"CometSinglePostRoot.react,comet.post.single,via_cold_start,1667386703105,213821,,"},"source":"www","tracking":["' . $tracking . '"],"actor_id":"' . $id_page . '","client_mutation_id":"1"},"renderLocation":"homepage_stream","scale":2,"privacySelectorRenderLocation":"COMET_STREAM","useDefaultActor":false,"displayCommentsContextEnableComment":null,"feedLocation":"NEWSFEED","displayCommentsContextIsAdPreview":null,"displayCommentsContextIsAggregatedShare":null,"displayCommentsContextIsStorySet":null,"displayCommentsFeedbackContext":null,"feedbackSource":1,"focusCommentID":null,"UFI2CommentsProvider_commentsKey":"CometModernHomeFeedQuery"}',
                            "server_timestamps" => true,
                            "doc_id" => "5750340061725090",
                        )
                    );
                }
            } else if ($loai == "page") {
                $data = http_build_query(
                    array(
                        "av" => $id_page,
                        "__user" => $id_page,
                        "__a" => "1",
                        "__dyn" => "7AzHxqU5a5Q1ryUqxenFw9uu2i5U4e0ykdwSwAyU8EW0CEbotwsobo6u3y4o1DU2_CxS320om782Cwwwg8a8465o-cwfG12wOKdwGxu782lwv89kbxS2218wc61axe3S1lwlE-UqwsUkxe2GewGwkUtxGm2SUbElxm3y1lUlDw-waCm7-8wywfCm2Sq2-azo2NwwwOg2cwMwhF8-4UdUcobUak1xwJw",
                        "__csr" => "g8Ind5IgZijlcHtL9leCGdnVaHSIB4tq9jhiaqF2ejlQWFu9WFnGmhd5Hjy49yrJvGa-imbFHy9WGKVEOEy8AzqVAdx6mrGbypVGxF7zqDK8FfDye5UCaDy-498lQ5UfU9U8ogwHwvoy4E9Ekwh8CEf8jg6i6KEgDwYKq260P8a823whEaU6i3Xwkonwt8txS2u3qq4E3Mwqo760jm01f3w9t03lE02EJw6Zw1z2060o1380qHw2no888K04WU05mG06Y80Dq0D80WC0rO8w",
                        "__req" => "n",
                        "__hs" => $hs,
                        "dpr" => "2",
                        "__ccg" => "GOOD",
                        "__rev" => $rev,
                        "__s" => "93kf5g:ssztt9:lx2u1p",
                        "__hsi" => $hsi,
                        "__comet_req" => "15",
                        "fb_dtsg" => $fb,
                        "jazoest" => $jazoest,
                        "lsd" => $lsd,
                        "__aaid" => $id_account,
                        "__spin_r" => $spin_r,
                        "__spin_b" => "trunk",
                        "__spin_t" => $spin_t,
                        "fb_api_caller_class" => "RelayModern",
                        "fb_api_req_friendly_name" => "CometPageLikeCommitMutation",
                        'variables' => '{"input":{"attribution_id_v2":"CometSinglePageHomeRoot.react,comet.page,via_cold_start,1667362285678,769501,250100865708545,","is_tracking_encrypted":true,"page_id":"' . $id_tt . '","source":"unknown","tracking":[],"actor_id":"' . $id_page . '","client_mutation_id":"1"},"isAdminView":false}',
                        "server_timestamps" => true,
                        "doc_id" => "5491200487600992",
                    )
                );
            } else if ($loai == "group") {
                $data = http_build_query(
                    array(
                        "av" => $id_page,
                        "__user" => $id_page,
                        "__a" => "1",
                        "__dyn" => "7AzHxqU5a5Q1ryUqxenFw9uu2i5U4e0ykdwSwAyU8EW0CEbotwsobo6u3y4o1DU2_CxS320om782Cwwwg8a8465o-cwfG12wOKdwGxu782lwv89kbxS2218wc61axe3S1lwlE-UqwsUkxe2GewGwkUtxGm2SUbElxm3y1lUlDw-waCm7-8wywfCm2Sq2-azo2NwwwOg2cwMwhF8-4UdUcobUak1xwJw",
                        "__csr" => "g8Ind5IgZijlcHtL9leCGdnVaHSIB4tq9jhiaqF2ejlQWFu9WFnGmhd5Hjy49yrJvGa-imbFHy9WGKVEOEy8AzqVAdx6mrGbypVGxF7zqDK8FfDye5UCaDy-498lQ5UfU9U8ogwHwvoy4E9Ekwh8CEf8jg6i6KEgDwYKq260P8a823whEaU6i3Xwkonwt8txS2u3qq4E3Mwqo760jm01f3w9t03lE02EJw6Zw1z2060o1380qHw2no888K04WU05mG06Y80Dq0D80WC0rO8w",
                        "__req" => "n",
                        "__hs" => $hs,
                        "dpr" => "2",
                        "__ccg" => "GOOD",
                        "__rev" => $rev,
                        "__s" => "93kf5g:ssztt9:lx2u1p",
                        "__hsi" => $hsi,
                        "__comet_req" => "15",
                        "fb_dtsg" => $fb,
                        "jazoest" => $jazoest,
                        "lsd" => $lsd,
                        "__aaid" => $id_account,
                        "__spin_r" => $spin_r,
                        "__spin_b" => "trunk",
                        "__spin_t" => $spin_t,
                        "fb_api_caller_class" => "RelayModern",
                        "fb_api_req_friendly_name" => "GroupCometJoinForumMutation",
                        'variables' => '{"feedType":"DISCUSSION","groupID":"' . $id_tt . '","imageMediaType":"image/x-auto","input":{"action_source":"GROUP_MALL","attribution_id_v2":"CometGroupDiscussionRoot.react,comet.group,via_cold_start,1667361563012,796792,2361831622,","group_id":"' . $id_tt . '","group_share_tracking_params":{"app_id":"' . $appid . '","exp_id":"null","is_from_share":true},"actor_id":"' . $id_page . '","client_mutation_id":"1"},"inviteShortLinkKey":null,"isChainingRecommendationUnit":false,"isEntityMenu":true,"scale":2,"source":"GROUP_MALL","renderLocation":"group_mall","__relay_internal__pv__GlobalPanelEnabledrelayprovider":false,"__relay_internal__pv__GroupsCometEntityMenuEmbeddedrelayprovider":true}',
                        "server_timestamps" => true,
                        "doc_id" => "5419229451459171",
                        'fb_api_analytics_tags' => '["qpl_active_flow_ids=431626709"]',
                    )
                );
            }
            $head = array(
                "Host: www.facebook.com",
                "content-length: " . strlen($data),
                "x-fb-lsd: " . $lsd,
                "x-fb-friendly-name: CometUFIFeedbackReactMutation",
                "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36",
                "content-type: application/x-www-form-urlencoded",
                "accept: */*",
                "origin: https://www.facebook.com",
                "x-requested-with: mark.via.gp",
                "sec-fetch-site: same-origin",
                "sec-fetch-mode: cors",
                "sec-fetch-dest: empty",
                "referer: https://www.facebook.com/",
                "accept-encoding: gzip, deflate",
                "accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7",
            );
            curl_setopt_array(
                $ch,
                array(
                    CURLOPT_URL => "https://www.facebook.com/api/graphql/",
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => $data,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HTTPHEADER => $head,
                )
            );
            $access = curl_exec($ch);
            return $access;
        }
    }
    return '';
}



function dragonx_vuhoangpro_0($url, $cookie)
{
    $head = array(
        "Host: www.facebook.com",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "dnt: 1",
        "x-requested-with: mark.via.gp",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-encoding: gzip, deflate",
        "accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYHOST => true,
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HEADER => true,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
    ));
    if (strpos(curl_exec($ch), 'datr') !== false) {
        return "DIE";
    } else if (strpos(curl_exec($ch), 'Datr') !== false) {
        return "DIE";
    } else {
        $h = explode("\n", curl_exec($ch));
        $a = $h[1];
        if (strpos($a, 'location') !== false) {
            $b = $h[1];
            $url = explode("location: ", $b)[1];
        }
        $a = $h[2];
        if (strpos($a, 'location') !== false) {
            $b = $h[2];
            $url = explode("location: ", $b)[1];
        }
        $a = $h[3];
        if (strpos($a, 'location') !== false) {
            $b = $h[3];
            $url = explode("location: ", $b)[1];
        }
        $a = $h[4];
        if (strpos($a, 'location') !== false) {
            $b = $h[4];
            $url = explode("location: ", $b)[1];
        }
        $a = $h[5];
        if (strpos($a, 'location') !== false) {
            $b = $h[5];
            $url = explode("location: ", $b)[1];
        }
        $a = $h[6];
        if (strpos($a, 'location') !== false) {
            $b = $h[6];
            $url = explode("location: ", $b)[1];
        }
        $a = $h[7];
        if (strpos($a, 'location') !== false) {
            $b = $h[7];
            $url = explode("location: ", $b)[1];
        }
        $a = $h[8];
        if (strpos($a, 'location') !== false) {
            $b = $h[8];
            $url = explode("location: ", $b)[1];
        }
        $a = $h[9];
        if (strpos($a, 'location') !== false) {
            $b = $h[9];
            $url = explode("location: ", $b)[1];
        }
        $a = $h[10];
        if (strpos($a, 'location') !== false) {
            $b = $h[10];
            $url = explode("location: ", $b)[1];
        }
    }
    return $url;
}
?>