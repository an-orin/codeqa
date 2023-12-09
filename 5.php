<?php
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
$trang = "\033[1;37m";
/***[ Config ]***/
$gioi_han_job = 2;
/***[ USERAGENT ]***/
$useragent = "Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36";
/***[ Đánh Dấu Bản Quyền ]***/
$dp_tool = $do."[" . $trang . "=.=" . $do . "] ".$trang."=> ";
$ndp = $do."[" . $trang . "=.=" . $do . "] ";
$thanh_thang_mau_trang = "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    $_SESSION['load'] = 1500;
    $_SESSION['delay'] = 2000;
} else {
    $_SESSION['load'] = 0;
    $_SESSION['delay'] = 1000;
}
/***[ Banner ]***/
date_default_timezone_set('Asia/Ho_Chi_Minh');
error_reporting(0);
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$whiteb="\033[1;37m";
$red="\033[0;31m";
$redb="\033[1;31m";
/***[ Đánh Dấu Bản Quyền ]***/
$thanh_thang_mau_trang = "\033[1;31m────────────────────────────────────────────────────────────\n";
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
        $_SESSION['load'] = 2000;
        $_SESSION['delay'] = 150000;
} else {
        $_SESSION['load'] = 0;
        $_SESSION['delay'] = 100000;
}
if(!$_SESSION['version']) {
        $_SESSION['version'] = "3.9";
}
/***[ Config ]***/
$job = 8;
/***[ Banner ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL TRAO ĐỔI SUB YOUTUBE
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
 @system('clear');
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
$khoTDS =[];
while(true){
@system("clear");
echo $banner;
   if (file_exists('taikhoantdsv8.txt'))
    {
        echo $dp_tool.$luc."Nhập Số ".$do."[".$vang."1".$do."]".$luc." Để Chạy Tài Khoản TDS Đã Lưu \n";
        echo $dp_tool.$luc."Nhập Số ".$do."[".$vang."2".$do."]".$luc." Để Chạy Tài Khoản TDS Mới\n";
        echo $thanh_thang_mau_trang;
        echo $dp_tool.$luc."Vui Lòng Nhập Lựa Chọn$trang: \033[1;33m";
        $cookietds = trim(fgets(STDIN));
        if ($cookietds == "2" )
        {
            unlink('taikhoantdsv8.txt');
        }else{}
    }else{
        echo $dp_tool.$luc."Nhập Tài Khoản TĐS$trang: $vang";
        $tktds = trim(fgets(STDIN));
        echo $dp_tool.$luc."Nhập Mật Khẩu TĐS$trang: $vang";
        $mktds = trim(fgets(STDIN));
        array_push($khoTDS,$tktds);
        array_push($khoTDS,$mktds);
        $js=json_encode($khoTDS);
        $k = fopen("taikhoantdsv8.txt","a+");
        fwrite($k, $js);
        fclose($k);
        }
        if (file_exists('taikhoantdsv8.txt')){
        $khoTDS = json_decode(fread(fopen("taikhoantdsv8.txt","r"),filesize("taikhoantdsv8.txt")),true);
        $username = $khoTDS[0];
        $password = $khoTDS[1];
        }
    $data = 'username='.$username.'&password='.$password;
    $mr = curl_init();
    curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($mr, CURLOPT_COOKIEJAR, 'file.txt');
    curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
    curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
    $mr2 = curl_exec($mr); 
    curl_close($mr); 
    $dn = explode('success":', $mr2)[1];
    $dn = explode('}', $dn)[0];
    if($dn == 'true'){
    echo $xnhac."Đăng Nhập Thành Công\n";
    sleep(0.1);
    break;
    }else{
    echo $do."Sai Tài Khoản Hoặc Mật Khẩu \n";
    sleep(0.1);
    unlink('taikhoantdsv8.txt');
    }
}
while(true){
    echo $thanh_thang_mau_trang;

    $khoTT = [];
    if (file_exists('idyoutube.txt'))
    {
        echo $dp_tool.$luc."Nhập Số ".$do."[".$vang."1".$do."]".$luc." Để Chạy ID YouTube Đã Lưu \n";
        echo $dp_tool.$luc."Nhập Số ".$do."[".$vang."2".$do."]".$luc." Để Chạy ID YouTube Mới\n";
        echo $dp_tool.$luc."Vui Lòng Nhập Lựa Chọn$trang: \033[1;33m";
        $cookietds = trim(fgets(STDIN));
        if ($cookietds == "2" )
        {
            unlink('idyoutube.txt');
        }else{}
    }else{
            echo $dp_tool.$luc."Vào Web TDS Sao Chép ID YouTube Đang Cấu Hình \n";
            echo $dp_tool.$luc."Nhập ID Youtube Cấu Hình TDS$trang: $vang";
        $idyt = trim(fgets(STDIN));
        array_push($khoTT,$idyt);
        $js=json_encode($khoTT);
        $k = fopen("idyoutube.txt","a+");
        fwrite($k, $js);
        fclose($k);
        }
        if (file_exists('idyoutube.txt'))
    {
        $khoTT = json_decode(fread(fopen("idyoutube.txt","r"),filesize("idyoutube.txt")),true);
        $idyoutube = $khoTT[0];
    }

    // cấu hình
    $header = array( 
        "Host:traodoisub.com",
        "content-type:application/x-www-form-urlencoded; charset=UTF-8",
        "x-requested-with:XMLHttpRequest",
        "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
        "origin:https://traodoisub.com",
        "referer:https://traodoisub.com/view/chyoutube/",
        );
        $data = 'iddat='.$idyoutube;
        $mr = curl_init();
        curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/scr/youtube_datnick.php');
        curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
        curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
        curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
        curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
        $mr2 = curl_exec($mr); 
        curl_close($mr);
        if($mr2 == '1'){
        echo $xnhac."Cấu Hình Thành Công \n";
        break;
        }else{
            echo $do."Cấu Hình Thất Bại";
            sleep(2);
        }

}

// lấy xu
$header = array( 
    "Host:traodoisub.com",
    "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
    "referer:https://traodoisub.com/view/setting/",
    );
    $mr = curl_init();
    curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/view/setting/load.php');
    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($mr, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
    curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
    curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
    $mr2 = curl_exec($mr); 
    curl_close($mr);
    $xu = explode('xu":"', $mr2)[1];
    $xu = explode('"', $xu)[0];
    
    $user = explode('user":"', $mr2)[1];
    $user = explode('"', $user)[0];
system('clear');
echo $banner;
echo $dp_tool.$luc."Tên Tài Khoản: \033[1;93m$user\n";
echo $dp_tool.$luc."Xu Hiện Tại: \033[1;93m$xu \n";
while(true){
    
    echo $thanh_thang_mau_trang;
    echo $dp_tool.$luc."Nhập Số ".$do."[".$vang."1".$do."]".$luc." Để Chạy Nhiệm Vụ Subscribe\n";
    echo $dp_tool.$luc."Nhập Số ".$do."[".$vang."2".$do."]".$luc." Để Chạy Nhiệm Vụ Comment \033[1;31m[\033[1;33mComming Soon\033[1;31m]\n";
    echo $thanh_thang_mau_trang;
    echo $dp_tool.$luc."Vui Lòng Nhập Chế Độ$trang: $vang";
    $nhiemvu = trim(fgets(STDIN));
    echo $dp_tool.$luc."Nhập Delay \033[1;31m(\033[1;33mTrên 15s\033[1;31m)$trang: $vang";
    $delay = trim(fgets(STDIN));
    if($delay < 15)
		{exit($dp_tool."\033[1;91mÍt Nhất 15 Giây\n");}
$tool = "\033[1;92mTraoDoiSub Youtube";
    echo $thanh_thang_mau_trang;


$spam = 0;
while(true){

    if($spam == 1){
        break;
    }

    if($nhiemvu == 1){

        

        // lấy id follow
        $header = array( 
        "Host:traodoisub.com",
        "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
        "referer:https://traodoisub.com/ex/youtube_follow/",
        );
        $mr = curl_init();
        curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/ex/youtube_follow/load.php');
        curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($mr, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
        curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
        curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
        $mr2 = curl_exec($mr); 
            curl_close($mr); 

            $id = explode('id":"', $mr2)[2];
            $id = explode('"', $id)[0];
            
            $aidi = substr($id,22);
            
            $link = explode('link":"', $mr2)[1];
            $link = explode('"', $link)[0];

            $type = explode('type":"', $mr2)[1];
            $type = explode('"', $type)[0];
            
            $link2 = substr($link,27);
            $link = "https://youtube.com/".$link2;

            if($id == ''){
                $demhetnv++;
                if($demhetnv == 5){
                    $demhetnv = 0;
                    $spam = 1;
                    break;
                }
            }else{
                $demhetnv = 0;
            $dem++;
            
           $kl = "\033[1;31m[\033[1;33m".$dem."\033[1;31m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;33mSubscribe\033[1;31m | \033[1;37m".$link2." \n";
 for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(1000);}
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
                @system('xdg-open '.$link);
            } else {
                @system('cmd /c start '.$link);
            }
            delay ($delay);
            // làm job
            $header = array( 
                "Host:traodoisub.com",
                "content-type:application/x-www-form-urlencoded; charset=UTF-8",
                "x-requested-with:XMLHttpRequest",
                "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
                "origin:https://traodoisub.com",
                "referer:https://traodoisub.com/ex/youtube_follow/",
                );
                $data = 'id='.$id.'&type='.$type.'';
                $mr = curl_init();
                curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/ex/youtube_follow/cache.php');
                curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
                curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
                curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
                curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
                $mr2 = curl_exec($mr); 
                curl_close($mr);
            
                
                 // nhận tiền
                $header = array( 
                    "Host:traodoisub.com",
                    "content-type:application/x-www-form-urlencoded; charset=UTF-8",
                    "x-requested-with:XMLHttpRequest",
                    "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
                    "origin:https://traodoisub.com",
                    "referer:https://traodoisub.com/ex/youtube_follow/",
                    );
                    $data = 'key=0257272C744254';
                    $mr = curl_init();
                    curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/ex/youtube_follow/nhantien.php');
                    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
                    curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
                    curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
                    curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
                    $mr2 = curl_exec($mr); 
                    curl_close($mr);
                    $json = json_decode($mr2, true);
                    $ok = explode('code": "', $mr2)[1];
                    $ok = explode('"', $ok)[0];
                    
                    $xu = explode('xu": ', $mr2)[1];
                    $xu = explode(',', $xu)[0];
                    
                    $nt = explode('ng', $mr2)[1];
                    $nt  = explode('"', $nt)[0];

            if($ok == "success"){
                
                echo "\033[1;36m Nhận Thành Công ".$nt."\033[1;31m |\033[1;33m $xu \n";
   }else{
            }

        }
        

        }elseif($nhiemvu == 2){



        // lấy id cmt
        $header = array( 
            "Host:traodoisub.com",
            "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
            "referer:https://traodoisub.com/ex/youtube_comment/",
            );
            $mr = curl_init();
            curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/ex/youtube_comment/load.php');
            curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($mr, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
            curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
            curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
            $mr2 = curl_exec($mr); 
            curl_close($mr);
            $json = json_decode($mr2, true);
            
            $id = explode('id":"', $mr2)[2];
            $id = explode('"', $id)[0];
            
            $aidi = substr($id,22);
            
            $link = explode('link":"', $mr2)[1];
            $link = explode('"', $link)[0];
            
            $type = explode('type":"', $mr2)[1];
            $type = explode('"', $type)[0];
            
            $msg = explode('msg":"', $mr2)[1];
            $msg = explode('"', $msg)[0];
            
            $msg1 = $json["data"][0]["msg"];
            
            $link2 = substr($link,27);
            
            $link = "https://youtube.com/".$link2;


            if($id == ''){
                $demhetnv++;
                if($demhetnv == 5){
                    $demhetnv = 0;
                    $spam = 1;
                    break;
                }
            }else{
                $demhetnv = 0;
                $dem++;
                $kl = "\033[1;31m[\033[1;33m".$dem."\033[1;31m] \033[1;31m● \033[1;32m\033[1;36m".date("H:i:s")."\033[1;32m \033[1;31m● \033[1;".rand(31,37)."m"."Comment \033[1;".rand(31,37)."m"."➩ \033[1;37mhttps://youtube.com/".$link2." \033[1;91m| \033[1;97mNội Dung: ".$msg1."\n";
                for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
                if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	
                    @system('xdg-open '.$link);
                } else {
                    @system('cmd /c start '.$link);
                }
                delay ($delay);
                // làm job
                $header = array( 
                    "Host:traodoisub.com",
                    "content-type:application/x-www-form-urlencoded; charset=UTF-8",
                    "x-requested-with:XMLHttpRequest",
                    "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
                    "origin:https://traodoisub.com",
                    "referer:https://traodoisub.com/ex/youtube_comment/",
                    );
                    $data = 'id='.$id.'&type='.$type.'';
                    $mr = curl_init();
                    curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/ex/youtube_comment/cache.php');
                    curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
                    curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
                    curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
                    curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
                    $mr2 = curl_exec($mr); 
                    curl_close($mr);
                
                    
                     // nhận tiền
                    $header = array( 
                        "Host:traodoisub.com",
                        "content-type:application/x-www-form-urlencoded; charset=UTF-8",
                        "x-requested-with:XMLHttpRequest",
                        "user-agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.1.4638.113 Mobile Safari/537.36",
                        "origin:https://traodoisub.com",
                        "referer:https://traodoisub.com/ex/youtube_comment/",
                        );
                        $data = 'id='.$id.'&type='.$type.'';
                        $mr = curl_init();
                        curl_setopt($mr, CURLOPT_URL, 'https://traodoisub.com/ex/youtube_comment/nhantien.php');
                        curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
                        curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
                        curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
                        curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
                        curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
                        $mr2 = curl_exec($mr); 
                        curl_close($mr);
                        $json = json_decode($mr2, true);
                $ok = explode('code": "', $mr2)[1];
                $ok = explode('"', $ok)[0];
                
                $xu = explode('xu": ', $mr2)[1];
                $xu = explode(',', $xu)[0];
                
                $nt = explode('ng', $mr2)[1];
                $nt  = explode('"', $nt)[0];
                if($ok == "success"){
                    echo "\e[1;32mSuccess\033[1;34m\033[1;".rand(31,37)."m =>\033[1;91m \033[1;33m Nhận Thành Công".$nt."\033[1;37m |\033[1;33m $xu\n";
                }else{
                }
           }
        }
    }
}
function delay ($delay){
	for($tt = $delay ;$tt>= 1;$tt--){
echo "\r\033[1;34m● \033[1;33mV\033[1;32mu\033[1;31mi \033[1;36mL\033[1;37mò\033[1;35mn\033[1;34mg \033[1;33mĐ\033[1;32mợ\033[1;31mi \033[1;36m<\033[1;37m~\033[1;35m> \033[1;34mV\033[1;33mŨ\033[1;32mX\033[1;31mU\033[1;36mÂ\033[1;37mN \033[1;35mA\033[1;34mN \033[1;35m< \033[1;34m< \033[1;33m< \033[1;32m| \033[1;31m$tt \033[1;36m| "; usleep(150000);
echo "\r\033[1;32m● \033[1;31mV\033[1;36mu\033[1;37mi \033[1;35mL\033[1;34mò\033[1;33mn\033[1;32mg \033[1;31mĐ\033[1;36mợ\033[1;37mi \033[1;35m<\033[1;34m~\033[1;33m> \033[1;32mV\033[1;31mŨ\033[1;36mX\033[1;37mU\033[1;35mÂ\033[1;34mN \033[1;33mA\033[1;32mN \033[1;33m< \033[1;32m< \033[1;31m< \033[1;36m| \033[1;37m$tt \033[1;35m| "; usleep(150000);
echo "\r\033[1;36m● \033[1;37mV\033[1;35mu\033[1;34mi \033[1;33mL\033[1;32mò\033[1;31mn\033[1;36mg \033[1;37mĐ\033[1;35mợ\033[1;34mi \033[1;33m<\033[1;32m~\033[1;31m> \033[1;36mV\033[1;37mŨ\033[1;35mX\033[1;34mU\033[1;33mÂ\033[1;32mN \033[1;31mA\033[1;36mN \033[1;31m< \033[1;36m< \033[1;37m< \033[1;35m| \033[1;34m$tt \033[1;33m| "; usleep(150000);
echo "\r\033[1;35m● \033[1;34mV\033[1;33mu\033[1;32mi \033[1;31mL\033[1;36mò\033[1;37mn\033[1;35mg \033[1;34mĐ\033[1;33mợ\033[1;32mi \033[1;31m<\033[1;36m~\033[1;37m> \033[1;35mV\033[1;34mŨ\033[1;33mX\033[1;32mU\033[1;31mÂ\033[1;36mN \033[1;37mA\033[1;35mN \033[1;37m< \033[1;35m< \033[1;34m< \033[1;33m| \033[1;32m$tt \033[1;31m| "; usleep(150000);
echo "\r\033[1;33m● \033[1;32mV\033[1;31mu\033[1;36mi \033[1;37mL\033[1;35mò\033[1;34mn\033[1;33mg \033[1;32mĐ\033[1;31mợ\033[1;36mi \033[1;37m<\033[1;35m~\033[1;34m> \033[1;33mV\033[1;32mŨ\033[1;31mX\033[1;36mU\033[1;37mÂ\033[1;35mN \033[1;34mA\033[1;33mN \033[1;34m< \033[1;33m< \033[1;32m< \033[1;31m| \033[1;36m$tt \033[1;37m| "; usleep(150000);
echo "\r\033[1;31m● \033[1;36mV\033[1;37mu\033[1;35mi \033[1;34mL\033[1;33mò\033[1;32mn\033[1;31mg \033[1;36mĐ\033[1;37mợ\033[1;35mi \033[1;34m<\033[1;33m~\033[1;32m> \033[1;31mV\033[1;36mŨ\033[1;37mX\033[1;35mU\033[1;34mÂ\033[1;33mN \033[1;32mA\033[1;31mN \033[1;32m< \033[1;31m< \033[1;36m< \033[1;37m| \033[1;35m$tt \033[1;34m| "; usleep(150000);
echo "\r\033[1;36m● \033[1;37mV\033[1;34mu\033[1;33mi \033[1;32mL\033[1;31mò\033[1;36mn\033[1;37mg \033[1;35mĐ\033[1;34mợ\033[1;33mi \033[1;32m<\033[1;31m~\033[1;36m> \033[1;37mV\033[1;35mŨ\033[1;34mX\033[1;33mU\033[1;32mÂ\033[1;31mN \033[1;36mA\033[1;37mN \033[1;36m< \033[1;37m< \033[1;35m< \033[1;34m| \033[1;33m$tt \033[1;32m| "; usleep(150000);
}
echo "\r\e[1;95m   ⚡AN ORIN ⚡                       \r";
}
function tdsyoutube($banner, $dp_tool, $thanh_thang_mau_trang){
    for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
    echo "\n";
}