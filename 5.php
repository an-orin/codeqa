error_reporting(0);
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $xnhac = "\033[1;96m";
    $luc = "\033[1;92m";
    $xduong = "\033[1;94m";
    $hong = "\033[1;95m";
    $do = "\033[1;31m";
    $vang = "\033[1;93m";
    $trang = "\033[1;97m";

$logo = "

\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL TRAO ĐỔI SUB PRO5
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool403
\033[1;31m────────────────────────────────────────────────────────────";
    $daucau2 = $do."[" . $trang . "=.=" . $do . "] \033[1;37m=> " . $luc;
    $tool = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";
    $kov = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";

    $thanhngang = "\033[1;97m ══════════════════════════════════════════════════════════════\n";

    $caidatdelay = VDSVSDVSDAAQQB($logo);

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

    $acc_tds = HJABSCASCBBHCJBACSBHASHCB($logo);

    $tk = $acc_tds['TK'];
    $mk = $acc_tds['MK'];
    $lg = BHSACASADVQQB($tk, $mk);
    $profile_tds = BHJHABVDSJVLKAAQQB();
    $tongxu = $profile_tds['xu'];
    $user_tds = $profile_tds['user'];
    $tokentds = $profile_tds['tokentds'];

    system("clear");
    echo $logo . "\n";
    $khoToken = [];
    $khoToken =  ASCADaa1221DAAQQBc($logo);
    $demcki = count($khoToken);
    @system('clear');
    echo $logo . "\n";
    echo $daucau2 . "Tài khoản: " . $trang . $user_tds . "\n";
    echo $daucau2 . "Số xu: " . $trang . $tongxu . "\n";
    echo"\033[1;31m────────────────────────────────────────────────────────────\n";
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
    echo $daucau2 . "Ẩn id Facebook (y/n): " . $vang;
    $anid = trim(fgets(STDIN));


    $dem_het_nv = 0;
    $dem  = 0;
    $dem2 = 0;
    while (true) {
        if (count($khoToken) == 0) {
            kiem_tra_ketnoi_kov_cs();
            $khoToken =  ASCADaa1221DAAQQBc($logo);
        }
        for ($acc = 0; $acc < count($khoToken); $acc++) {
            $cookie = $khoToken[$acc];
            kiem_tra_ketnoi_kov_cs();
            $profile = ASCASCQWW3R3Wc($cookie);
            if ($profile == 'die') {
                echo "Coookie Die \n";
                array_splice($khoToken, $acc, 1);
                break;
            }
            $namefb = $profile['name'];
            $idfb = $profile['id'];
            kiem_tra_ketnoi_kov_cs();
            //$tokenfb = HBNDNNJSDNVNJSABH($cookie);
            if ($idfb == '') {
                echo "Coookie Die \n";
                array_splice($khoToken, $acc, 1);
                break;
            }
            kiem_tra_ketnoi_kov_cs();
            $d = ASCJHBASCHDJKAAQQB($idfb);
            if ($d == 1) {
                $idfb1 = $idfb;
                if ($anid == 'y' or $anid == 'Y') {
                    $idfb1 = "##########" . substr($idfb1, 10);
                }
                $out = 0;
                echo "\r                            \r";
                echo $vang . "----------------------------------------------------------\n";
                echo $luc . "Đang Chạy ID:\033[1;37m " . $idfb1 . " " . $luc . "Tên FB:\033[1;37m " . $namefb . "\n";
                echo $vang . "----------------------------------------------------------\n";
            } else {
                echo "\r Chưa thêm " . $idfb . " vào cấu hình tds.\r";
            }
            while ($d == 1) {
                if ($out == 1) {
                    break;
                }
                $loai = strtolower($list_nv[array_rand($list_nv, 1)]);
                kiem_tra_ketnoi_kov_cs();
                $getnv =  HBBHSCHBDSHBJNJVQQB($loai);
                if (strpos($getnv, 'id')) {
                    $info = json_decode($getnv, true);
                    //print_r($info);
                    $xujob = $info['coin'];
                    $tong = count($info['data']);
                    for ($i = 0; $i < $tong; $i++) {
                        if ($out == 1) {
                            break;
                        }
                        $id = $info['data'][$i]['id'];
                        $link = $info['data'][$i]['link'];
                        $type = $info['data'][$i]['type'];
                        echo "\r  " . $vang . $id . '  ' . $type . "  \r";
                        kiem_tra_ketnoi_kov_cs();
                        if ($loai == 'follow') {
                            $kq = JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id, "follow", null, null);
                        } elseif ($loai == 'fanpage') {
                            $kq = JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id, "page", null, null);
                        } elseif ($loai == 'like' or $loai == 'reaction' or $loai == 'likegiare' or $loai == 'likesieure') {

                            if ($loai == "likegiare") {
                                $type = 'likegiare';
                            }
                            if ($loai == "likesieure") {
                                $type = 'likesieure';
                            }
                            if ($loai == "reaction") {
                                $kq = JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id, "camxuc", $type, null);
                            } else {
                                $kq = JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id, "camxuc", "like", null);
                            }
                        } elseif ($loai == 'reactioncmt') {
                            //$kq =  HBJHJABJDKVDNNKNB($id, $idfb, $type, $cookie);
                        } elseif ($loai == 'comment') {
                            $type = 'comment';
                            $msg = $info['data'][$i]['msg'];
                            //$kq =  HBNASCASAWLKMDMKVABH($tokenfb, $id, $cookie, $msg);
                        } elseif ($loai == 'share') {
                            $type = 'share';
                            $kq =  JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id, "share", null, null);
                            if ($kq == 2) {
                                $out = 1;
                            }
                        } elseif ($loai == 'group') {
                            $kq = JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id, "group", null, null);
                        }

                        if ($loai == 'reaction' or $loai == 'reactioncmt') {
                            $cc = BHASBCAHBSBHWAAQQB($type, $loai, $id);
                        } else {
                            $cc = BHASBCAHBSBHWAAQQB($type, $type, $id);
                        }
                        if ($cc != 2) {
                            $ccc = file_get_contents('https://traodoisub.com/api/coin/?type=' . $type . '&id=' . $id . '&access_token=' . $tokentds);
                            if (strpos($ccc, 'success')) {
                                $cc = 2;
                            }
                        }
                        if ($cc == 2) {
                            $dem++;
                            if ($dem % 15 == 0) {
                                kiem_tra_ketnoi_kov_cs();
                                $profile_tds = BHJHABVDSJVLKAAQQB();
                                $tongxu = $profile_tds['xu'];
                                $user_tds = $profile_tds['user'];
                                $tokentds = $profile_tds['tokentds'];
                            } else {
                                $tongxu = $tongxu + $xujob;
                            }
                            if ($dem % 20 == 0) {
                                kiem_tra_ketnoi_kov_cs();
                                $lg = BHSACASADVQQB($tk, $mk);
                                $profile = ASCASCQWW3R3Wc($cookie);
                                $namefb2 = $profile['name'];
                                $idfb2 = $profile['id'];
                                if ($idfb2 == '') {
                                    $break = 1;
                                    echo $do . " Cookie $namefb Pro5 $idfb Die \n";
                                    array_splice($khoToken, $acc, 1);
                                    $out = 1;
                                }
                            }
                            $type2 = strtoupper(substr($type . "                       ", 0, 8));
                            $xujob2 = strtoupper(substr($xujob . "                       ", 0, 4));
                            if (strpos($id, '_')) {
                                $id = explode('_', $id)[1];
                            }
                            $id = substr($id . "                       ", 0, 17);
                            $dem_het_nv = 0;
                            echo "\r" . $do . "[" . $vang . $dem . $do . "] " . $xnhac . date("H:i:s") . $xduong . " | " . $vang . $type2 . $xduong . " | " . $trang . $id . $xduong . " | " . $luc . "+" . $xujob2 . $xduong . " | " . $vang . $tongxu . "\n\r";
                            kiem_tra_ketnoi_kov_cs();
                            if ($dem % $doiacc == 0) {
                                $out = 1;
                                break;
                            }
                            if ($dem % $dl['nvnghi'] == 0) {
                                ASCASASAAQQBc($dl['nghi']);
                            } else {
                                ASCASASAAQQBc($dl[$loai]);
                            }
                            $dem2 = 0;
                        } else {
                            $dem2++;
                            if ($dem2 % 20 == 0) {
                                kiem_tra_ketnoi_kov_cs();
                                $lg = BHSACASADVQQB($tk, $mk);
                                $profile = ASCASCQWW3R3Wc($cookie);
                                $namefb2 = $profile['name'];
                                $idfb2 = $profile['id'];
                                if ($profile == 'die') {
                                    $break = 1;
                                    echo $do . " Cookie $namefb Pro5 $idfb Die \n";
                                    array_splice($khoToken, $acc, 1);
                                    $out = 1;
                                }
                            }
                        }
                    }
                } else {
                    echo "\r " . $do . $loai . " hết nhiệm vụ \r";
                    $dem_het_nv++;
                    if ($dem_het_nv > 15) {
                        kiem_tra_ketnoi_kov_cs();
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


function VDSVSDVSDAAQQB($logo)
{
    $thanhngang = "\033[1;97m ══════════════════════════════════════════════════════════════\n";
    while (true) {
        $luc = "\033[1;92m";
        $do = "\033[1;31m";
        $vang = "\033[1;93m";
        $trang = "\033[1;97m";

        $daucau2 = $do."[" . $trang . "=.=" . $do . "] \033[1;37m=> " . $luc;
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
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
            echo $daucau2 . "Nghỉ sau _" . $trang . $nvnghi . $luc . "_ nhiệm vụ\n";
            echo $daucau2 . "Thời gian nghỉ: " . $trang . $delaynghi . $luc . "s\n";
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . "Để sử dụng delay này \n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . "Nhập delay mới \n";
            echo $daucau2 . "Nhập " . $trang . "===>: $vang";
            $chon_tk = trim(fgets(STDIN));
            if ($chon_tk == "2") {
                unlink("caidatdelaytds.txt");
            } else if ($chon_tk == "1") {
                break;
            } else {
                echo $do . " Lựa chọn không xác định !!!\n";

                continue;
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
function    BHJHABVDSJVLKAAQQB()
{
    $url = "https://traodoisub.com/view/setting/load.php";
    $head = array(
        "Host: traodoisub.com",
        "accept: application/json, text/javascript, */*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: cors",
        "sec-fetch-dest: empty",
        "referer: https://traodoisub.com/view/setting/"
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
    return $json;
}



function BHSACASADVQQB($username, $password)
{
    $dem = 0;
    while (true) {
        if (@fsockopen('www.google.com', 80)) {
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


function kiem_tra_ketnoi_kov_cs(){
    $dem_ketnoi = 0;
    while (true) {
        if (@fsockopen('www.google.com', 80)) {
            break;
        } else {
            if($dem_ketnoi == 0){
                echo "\r\e[1;91m  Vui lòng bật kết nối mạng \r";
            }else{
                sleep(3);
            }
            $dem_ketnoi++;
        }
    }
}
function BHASBCAHBSBHWAAQQB($tp, $loai, $id)
{
    $clmm = 0;
    while (true) {
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
function ASCJHBASCHDJKAAQQB($idfb)
{
    $data = "iddat=" . $idfb;
    //ketnoimangV1();
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
    //ketnoimangV1();
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
    //ketnoimangV1();
    $a = curl_exec($ch);
    curl_close($ch);
    return $a;
}
function HBBHSCHBDSHBJNJVQQB($loai)
{
    $head = array(
        "Host: traodoisub.com",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
        "accept: */*",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: cors",
        "sec-fetch-dest: empty",
        "referer: https://traodoisub.com/ex/" . $loai . ""
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
function HJABSCASCBBHCJBACSBHASHCB($logo)
{	
    $luc = "\033[1;92m";
    $do = "\033[1;31m";
    $vang = "\033[1;93m";
    $trang = "\033[1;97m";
    $daucau2 = $do."[" . $trang . "=.=" . $do . "] \033[1;37m=> " . $luc;
    $khoTK_TDS = [];
    $TK = [0,];
    $MK = [0,];
    while (true) {
        system("clear");
        echo $logo . "\n";
        if (file_exists("File_TK_MK_TDS.txt")) {
            $khoTK_TDS = json_decode(fread(fopen("File_TK_MK_TDS.txt", "r"), filesize("File_TK_MK_TDS.txt")), true);
            if (count($khoTK_TDS) < 2) {
                unlink('File_TK_MK_TDS.txt');
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
                $cc = BHSACASADVQQB($tk_, $mk_);
                if ($cc == 1) {
                    array_push($TK, $tk_);
                    array_push($MK, $mk_);
                    sleep(3);
                    $profile_tds = BHJHABVDSJVLKAAQQB();
                    $tongxu = $profile_tds['xu'];
                    $user_tds = $profile_tds['user'];
                    $demSOACC++;
                    
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mSố Tài Khoản Đã Đăng Nhập Vào: \033[1;33m$demSOACC \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mTài khoản: \033[1;37m$user_tds \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mSố dư: \033[1;33m$tongxu \n";
                }
            }
            echo"\033[1;31m────────────────────────────────────────────────────────────\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "X" . $vang . "] " . $luc . "Để xóa những acc đã nhập\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "T" . $vang . "] " . $luc . "Để thêm tài khoản khác\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . "Để Vào Nhập Cookie\n";
            echo $daucau2 . "Hoặc nhập số tài khoản ở trên để chạy acc bạn muốn\n";
            echo  $daucau2 . "Mời Bạn Chọn: $vang ";
            $choice = trim(fgets(STDIN));
            if (strtoupper($choice) == 'X') {
                unlink("File_TK_MK_TDS.txt");
            } elseif (strtoupper($choice) == 'T') {
                $khoTK_TDS = json_decode(fread(fopen("File_TK_MK_TDS.txt", "r"), filesize("File_TK_MK_TDS.txt")), true);
            } else {
                return array('TK' => $TK[$choice], 'MK' => $MK[$choice]);
            }
        }
        if (!file_exists("File_TK_MK_TDS.txt") or strtoupper($choice) == 'T') {
            echo $daucau2 . "Nhập ACC TDS Muốn Dừng Ấn" . $trang . " Enter \n";
            unlink("File_TK_MK_TDS.txt");
            for ($a = 1; $a < 999999; $a++) {
                echo $daucau2 . "Nhập ACC thứ" . $trang . " $a \n" . $vang;
                echo $daucau2 . "Nhập Tài Khoản TDS: " . $vang;
                $nhaptk = (string)trim(fgets(STDIN));
                if (strlen($nhaptk) < 5) {
                    break;
                }
                echo $daucau2 . "Nhập Mật Khẩu TDS: " . $vang;
                $nhapmk = (string)trim(fgets(STDIN));
                array_push($khoTK_TDS, $nhaptk);

                array_push($khoTK_TDS, $nhapmk);
            }
            $js = json_encode($khoTK_TDS);
            $k = fopen("File_TK_MK_TDS.txt", "a+");
            fwrite($k, $js);
            fclose($k);
            $demtk = count($khoTK_TDS);
            if ($demtk < 2) {
                unlink('File_TK_MK_TDS.txt');
            }
        }
    }
    $khoTK_TDS = json_decode(fread(fopen("File_TK_MK_TDS.txt", "r"), filesize("File_TK_MK_TDS.txt")), true);
}

////func pro5

function ASCASCQWW3R3Wc($cookie)
{
  $idfb = '';
  $namefb = '';
  if (strpos($cookie, "i_user=")) {
    $idfb = explode(";", explode("i_user=", $cookie)[1])[0];
    $namefb = JNKKAJJCAKJSJNAKSNVKJSBDKVJBK($cookie);
  }
  if ($idfb and $namefb != '') {
    return array('name' => $namefb, 'id' => $idfb);
  }
  return 'die';
}
function JNKKAJJCAKJSJNAKSNVKJSBDKVJBK($cookie)
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




function ASCADaa1221DAAQQBc($logo)
{
    $luc = "\033[1;92m";
    $do = "\033[1;31m";
    $vang = "\033[1;93m";
    $trang = "\033[1;97m";

    $daucau2 = $do."[" . $trang . "=.=" . $do . "] \033[1;37m=> " . $luc;
    $khoToken = [];
    while (true) {
        if (file_exists("File_cookie_FB_Pro5.txt")) {
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . " Chạy Cookie Facebook Pro5 Cũ\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . " Thêm Cookie Facebook Pro5 Để Chạy\n";
            echo $daucau2 . "Nhập " . $vang . "[" . $trang . "3" . $vang . "] " . $luc . " Xóa Cookie Pro5 Cũ Nhập Lại\n";
            echo  $daucau2 . "Nhập số: $vang ";
            $choice = trim(fgets(STDIN));
            if ($choice == '3') {
                unlink("File_cookie_FB_Pro5.txt");
                $khoToken = [];
            } else if ($choice == '2') {
                $khoToken = json_decode(fread(fopen("File_cookie_FB_Pro5.txt", "r"), filesize("File_cookie_FB_Pro5.txt")), true);
            } else {
                break;
            }
        }

        if (!file_exists("File_cookie_FB_Pro5.txt") or $choice == '2') {
            echo $daucau2 . "Nhập Cookie Facebook Pro5 Muốn Dừng Ấn" . $trang . " Enter \n";
            unlink("File_cookie_FB_Pro5.txt");
            for ($a = 1; $a < 999999; $a++) {
                echo $daucau2 . "Nhập Cookie Pro5 thứ" . $trang . " $a: " . $vang;
                $nhapck = (string)trim(fgets(STDIN));
                if (strlen($nhapck) < 5) {
                    break;
                }
                array_push($khoToken, $nhapck);
            }
            $js = json_encode($khoToken);
            $k = fopen("File_cookie_FB_Pro5.txt", "a+");
            fwrite($k, $js);
            fclose($k);
            $demcki = count($khoToken);
            break;
        }
    }

    $khoToken = json_decode(fread(fopen("File_cookie_FB_Pro5.txt", "r"), filesize("File_cookie_FB_Pro5.txt")), true);
    return $khoToken;
}



function JABSCHBASHCBBHAHSCBHCJBACSBHASHCBc()
{
    $list_nv = [];
    $luc = "\033[1;92m";
    $do = "\033[1;31m";
    $vang = "\033[1;93m";
    $trang = "\033[1;97m";
    $daucau2 = $do."[" . $trang . "=.=" . $do . "] \033[1;37m=> " . $luc;

    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "1" . $vang . "] " . $luc . "Chọn nhiệm vụ Like\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "2" . $vang . "] " . $luc . "Chọn nhiệm vụ Like Rẻ\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "3" . $vang . "] " . $luc . "Chọn nhiệm vụ Like Siêu Rẻ\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "4" . $vang . "] " . $luc . "Chọn nhiệm vụ Follow\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "5" . $vang . "] " . $luc . "Chọn nhiệm vụ Comment ".$do."(Bảo trì)\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "6" . $vang . "] " . $luc . "Chọn nhiệm vụ Share\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "7" . $vang . "] " . $luc . "Chọn nhiệm vụ Cảm Xúc\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "8" . $vang . "] " . $luc . "Chọn nhiệm vụ Cảm Xúc Comment ".$do."(Bảo trì)\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "9" . $vang . "] " . $luc . "Chọn nhiệm vụ Like Fanpage\n";
    echo $daucau2 . "Nhập " . $vang . "[" . $trang . "10" . $vang . "] " . $luc . "Chọn nhiệm vụ Tham Gia Nhóm\n";
    echo $daucau2 . "Nhập số chọn nhiệm vụ (" . $trang . "VD: 1+2+3" . $luc . ")\n";
    echo $daucau2 . "Nhập số: " . $vang;
    $chonsonv = "_+" . trim(fgets(STDIN)) . "+_";
    if (strpos($chonsonv, "+1+")) {
        array_push($list_nv, 'like');
    }
    if (strpos($chonsonv, "+2+")) {
        array_push($list_nv, 'likegiare');
    }
    if (strpos($chonsonv, "+3+")) {
        array_push($list_nv, 'likesieure');
    }
    if (strpos($chonsonv, "+4+")) {
        array_push($list_nv, 'follow');
    }
    if (strpos($chonsonv, "+5+")) {
        array_push($list_nv, 'comment');
    }
    if (strpos($chonsonv, "+6+")) {
        array_push($list_nv, 'share');
    }
    if (strpos($chonsonv, "+7+")) {
        array_push($list_nv, 'reaction');
    }
    if (strpos($chonsonv, "+8+")) {
        array_push($list_nv, 'reactioncmt');
    }
    if (strpos($chonsonv, "+9+")) {
        array_push($list_nv, 'fanpage');
    }
    if (strpos($chonsonv, "+10+")) {
        array_push($list_nv, 'group');
    }
    return $list_nv;
}








function JHBAJHBCHJABSJHCBJASHBCJAHNCSSCSACSBV($cookie, $id_tt, $loai, $type, $text_share){
    $loai = strtolower($loai);
    $type = strtoupper($type);
  $id_page = explode(";", explode("i_user=", $cookie)[1])[0];
  $url = "https://www.facebook.com/".$id_tt;
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
  
  if($loai == "camxuc"){
  if($type == "like" or $type == "LIKE"){
    $id = "1635855486666999";
  } else if($type == "love" or $type == "LOVE"){
    $id = "1678524932434102";
  } else if($type == "care" or $type == "CARE"){
    $id = "613557422527858";
  } else if($type == "wow" or $type == "WOW"){
    $id = "478547315650144";
  } else if($type == "haha" or $type == "HAHA"){
    $id = "115940658764963";
  } else if($type == "sad" or $type == "SAD"){
    $id = "908563459236466";
  } else if($type == "angry" or $type == "ANGRY"){
    $id = "444813342392137";
  }
  $data = http_build_query(array(
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
  'variables' => '{"input":{"attribution_id_v2":"CometSinglePostRoot.react,comet.post.single,via_cold_start,1667375488208,722017,,","feedback_id":"'.$feedback_id.'","feedback_reaction_id":"'.$id.'","feedback_source":"OBJECT","is_tracking_encrypted":true,"tracking":["'.$tracking.'"],"session_id":"bf514774-8fef-4921-89f8-9a4919ef22e7","actor_id":"'.$id_page.'","client_mutation_id":"1"},"useDefaultActor":false,"scale":2}',
  "server_timestamps" => true,
  "doc_id" => "5703418209680126",
  ));
  } else if($loai == "follow"){
  $data = http_build_query(array(
  "av" => $id_page,
  "__user" => $id_page,
  "fb_dtsg" => $fb,
  "jazoest" => $jazoest,
  "lsd" => $lsd,
  "fb_api_caller_class" => "RelayModern",
  "fb_api_req_friendly_name" => "CometUserFollowMutation",
  'variables' => '{"input":{"attribution_id_v2":"ProfileCometTimelineListViewRoot.react,comet.profile.timeline.list,via_cold_start,1667356956520,868746,190055527696468,","subscribe_location":"PROFILE","subscribee_id":"'.$id_tt.'","actor_id":"'.$id_page.'","client_mutation_id":"1"},"scale":2}',
  "server_timestamps" => true,
  "doc_id" => "5032256523527306",
  
  ));
  } else if($loai == "share"){
  $get = JHBAJHBCHJABSJHCBJASHBCJAHJSNCSSCSACSBV($url, $cookie);
  if (strpos ($get, 'groups') !== false){
  $data = http_build_query(array(
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
  'variables' => '{"input":{"attachments":{"link":{"share_scrape_data":"{\"share_type\":37,\"share_params\":['.$id_tt.']}"}},"audiences":{"undirected":{"privacy":{"allow":[],"base_state":"EVERYONE","deny":[],"tag_expansion_state":"UNSPECIFIED"}}},"message":{"ranges":[],"text":"'.$text_share.'"},"is_tracking_encrypted":true,"navigation_data":{"attribution_id_v2":"CometGroupPermalinkRoot.react,comet.group.permalink,via_cold_start,1667534608867,546309,2361831622,"},"source":"www","tracking":["'.$tracking.'"],"actor_id":"'.$id_page.'","client_mutation_id":"1"},"renderLocation":"homepage_stream","scale":2,"privacySelectorRenderLocation":"COMET_STREAM","useDefaultActor":false,"displayCommentsContextEnableComment":null,"feedLocation":"NEWSFEED","displayCommentsContextIsAdPreview":null,"displayCommentsContextIsAggregatedShare":null,"displayCommentsContextIsStorySet":null,"displayCommentsFeedbackContext":null,"feedbackSource":1,"focusCommentID":null,"UFI2CommentsProvider_commentsKey":"CometModernHomeFeedQuery"}',
  "server_timestamps" => true,
  "doc_id" => "5606822466034221",
  'fb_api_analytics_tags' => '["qpl_active_flow_ids=431626709"]',
  ));
  }
  
  if (strpos ($get, 'watch') !== false){
  $data = http_build_query(array(
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
  'variables' => '{"input":{"attachments":{"link":{"share_scrape_data":"{\"share_type\":11,\"share_params\":['.$id_tt.']}"}},"audiences":{"undirected":{"privacy":{"allow":[],"base_state":"EVERYONE","deny":[],"tag_expansion_state":"UNSPECIFIED"}}},"message":{"ranges":[],"text":"'.$text_share.'"},"is_tracking_encrypted":true,"navigation_data":{"attribution_id_v2":"CometVideoHomeNewPermalinkRoot.react,comet.watch.injection,via_cold_start,1667466315284,308969,2392950137,"},"source":"www","tracking":[],"actor_id":"'.$id_page.'","client_mutation_id":"1"},"renderLocation":"homepage_stream","scale":2,"privacySelectorRenderLocation":"COMET_STREAM","useDefaultActor":false,"displayCommentsContextEnableComment":null,"feedLocation":"NEWSFEED","displayCommentsContextIsAdPreview":null,"displayCommentsContextIsAggregatedShare":null,"displayCommentsContextIsStorySet":null,"displayCommentsFeedbackContext":null,"feedbackSource":1,"focusCommentID":null,"UFI2CommentsProvider_commentsKey":"CometModernHomeFeedQuery"}',
  "server_timestamps" => true,
  "doc_id" => "5664417773604510",
  'fb_api_analytics_tags' => '["qpl_active_flow_ids=30605361"]',
  ));
  } else {
  $data = http_build_query(array(
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
  'variables' => '{"input":{"attachments":{"link":{"share_scrape_data":"{\"share_type\":22,\"share_params\":['.$id_tt.']}"}},"audiences":{"undirected":{"privacy":{"allow":[],"base_state":"EVERYONE","deny":[],"tag_expansion_state":"UNSPECIFIED"}}},"message":{"ranges":[],"text":"'.$text_share.'"},"is_tracking_encrypted":true,"navigation_data":{"attribution_id_v2":"CometSinglePostRoot.react,comet.post.single,via_cold_start,1667386703105,213821,,"},"source":"www","tracking":["'.$tracking.'"],"actor_id":"'.$id_page.'","client_mutation_id":"1"},"renderLocation":"homepage_stream","scale":2,"privacySelectorRenderLocation":"COMET_STREAM","useDefaultActor":false,"displayCommentsContextEnableComment":null,"feedLocation":"NEWSFEED","displayCommentsContextIsAdPreview":null,"displayCommentsContextIsAggregatedShare":null,"displayCommentsContextIsStorySet":null,"displayCommentsFeedbackContext":null,"feedbackSource":1,"focusCommentID":null,"UFI2CommentsProvider_commentsKey":"CometModernHomeFeedQuery"}',
  "server_timestamps" => true,
  "doc_id" => "5750340061725090",
  ));
  }
  } else if($loai == "page"){
  $data = http_build_query(array(
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
  'variables' => '{"input":{"attribution_id_v2":"CometSinglePageHomeRoot.react,comet.page,via_cold_start,1667362285678,769501,250100865708545,","is_tracking_encrypted":true,"page_id":"'.$id_tt.'","source":"unknown","tracking":[],"actor_id":"'.$id_page.'","client_mutation_id":"1"},"isAdminView":false}',
  "server_timestamps" => true,
  "doc_id" => "5491200487600992",
  ));
  } else if($loai == "group"){
    $data = http_build_query(array(
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
  'variables' => '{"feedType":"DISCUSSION","groupID":"'.$id_tt.'","imageMediaType":"image/x-auto","input":{"action_source":"GROUP_MALL","attribution_id_v2":"CometGroupDiscussionRoot.react,comet.group,via_cold_start,1667361563012,796792,2361831622,","group_id":"'.$id_tt.'","group_share_tracking_params":{"app_id":"'.$appid.'","exp_id":"null","is_from_share":true},"actor_id":"'.$id_page.'","client_mutation_id":"1"},"inviteShortLinkKey":null,"isChainingRecommendationUnit":false,"isEntityMenu":true,"scale":2,"source":"GROUP_MALL","renderLocation":"group_mall","__relay_internal__pv__GlobalPanelEnabledrelayprovider":false,"__relay_internal__pv__GroupsCometEntityMenuEmbeddedrelayprovider":true}',
  "server_timestamps" => true,
  "doc_id" => "5419229451459171",
  'fb_api_analytics_tags' => '["qpl_active_flow_ids=431626709"]',
  ));
  }
  $head = array(
  "Host: www.facebook.com",
  "content-length: ".strlen($data),
  "x-fb-lsd: ".$lsd,
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
  curl_setopt_array($ch, array(
  CURLOPT_URL => "https://www.facebook.com/api/graphql/",
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => $head,
  ));
  $access = curl_exec($ch); 
  return $access;
  }
  function JHBAJHBCHJABSJHCBJASHBCJAHJSNCSSCSACSBV($url, $cookie){
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


  function ASCASASAAQQBc($delay)
  {
      for ($i = $delay; $i > 1; $i--) {
          echo "\r \033[1;9" . rand(1, 9) . "m Vui Lòng Đợi Sau " . $i . " Giây     \r";
          sleep(1);
      }
      echo "\r\033[1;9" . rand(1, 9) . "m Tool Auto TDS Pro5 Andevtool       \r";
  }
  


