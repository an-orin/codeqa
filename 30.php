<?php
error_reporting(0);
session_start();
$xnhac = "\033[1;96m"; 
$den = "\033[1;90m";
$luc = "\033[1;92m"; 
$vang = "\033[1;93m"; 
$xduong = "\033[1;94m"; 
$hong = "\033[1;95m"; 
$trang = "\033[1;97m"; 
$do = "\033[1;91m"; 
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$daucau = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL GET MÃ 2FA
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
@system("clear");
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
// Yêu cầu người dùng nhập mã 2FA
echo $daucau.$luc."Nhập Mã 2FA: $vang";
$t23 = trim(fgets(STDIN));
// Xóa khoảng trắng ở đầu và cuối chuỗi
$t2 = preg_replace('/\s+/', '', $t23);

// Tạo URL để gửi yêu cầu lấy token
$url = "http://2fa.live/tok/$t2";
// Khởi tạo một session curl
$thiet = curl_init();
// Cấu hình các tùy chọn cho session curl

curl_setopt_array($thiet, array(
    CURLOPT_URL => "$url", // URL của yêu cầu
    CURLOPT_ENCODING => " ", // Chỉ định phương thức nén dữ liệu
    CURLOPT_RETURNTRANSFER => true, // Cho phép lấy dữ liệu trả về
    CURLOPT_SSL_VERIFYPEER => false, // Tắt kiểm tra chứng chỉ SSL
    CURLOPT_CUSTOMREQUEST => "GET", // Phương thức yêu cầu
    //CURLOPT_POSTFIELDS => $data, // Dữ liệu yêu cầu POST
    CURLOPT_HTTPHEADER => array( // Các header yêu cầu
        "Host:2fa.live",
        "sec-fetch-dest: document",
        "sec-fetch-site: none",
        "Connection:keep-alive",
        "X-Requested-With:XMLHttpRequest",
        "User-Agent: Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36",
        "Referer:http://2fa.live/",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "Accept-Encoding:gzip, deflate, br",
        "Accept-Language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
        "cache-control:max-age=0",
    ),
));


// Thực thi yêu cầu và lấy dữ liệu trả về
/////while (true){
$dz = curl_exec($thiet);
// Đóng session curl
curl_close($thiet);
// Chuyển đổi định dạng JSON sang mảng kết hợp
$layma = json_decode($dz,true);
// Lấy token từ mảng kết hợp
$tt = $layma["token"];
// Hiển thị mã 2FA được lấy về
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;92mMã 2FA của bạn là: \033[1;33m$tt \n";
sleep(1);