<?php
$viendo="\033[101m"; $vienluc="\033[102m"; $vienvang="\033[103m"; $vienxduong="\033[104m"; $vienhong="\033[105m"; $vienxnhac="\033[106m"; $vientrang="\033[107m"; $maufullxduong= "\e[1;47;34m"; $maufulldo= "\e[1;47;31m"; $maufullluc= "\e[1;47;32m"; $maufullxnhac= "\e[1;47;36m"; $maufullden= "\e[1;47;30m"; $maufullvang= "\e[1;47;33m"; $maufullhong= "\e[1;47;33m"; $denthui="\033[0;30m"; $res="\033[0m"; $do="\033[0;31m"; $grean="\033[1;32m"; $mit="\033[0;32m"; $vang="\033[0;33m"; $mti="\033[0;33m"; $test="\033[1;33m"; $tim="\033[1;36m"; $lam="\033[1;34m"; $tmi="\033[1;34m"; $hong="\033[1;35m"; $imt="\033[1;35m"; $blue="\033[1;36m"; $trang="\033[1;37m"; $mem="https://lamtricker.xyz/tool/regclone.php"; $ress="\033[0;32m"; $res="\033[0;33m"; $green="\033[0;37m"; $yellow="\033[0;33m"; $white= "\033[0;33m"; $xnhac= "\033[1;96m"; $den="\033[1;90m"; $do="\033[1;91m"; $luc="\033[1;92m"; $vang="\033[1;93m"; $xduong="\033[1;94m"; $hong="\033[1;95m"; $trang="\033[1;97m"; $banner="\r\n"; $ngay=date("d/m"); $day=date("d/m"); $BBlack="\033[1;30m"; $BRed="\033[1;31m"; $BGreen="\033[1;32m"; $BYellow="\033[1;33m"; $BBlue="\033[1;34m"; $BPurple="\033[1;35m"; $BCyan="\033[1;36m"; $BWhite="\033[1;37m"; $Blue="\033[0;34m"; $res="\033[0m"; $red="\033[1;31m"; $xanh="\033[1;32m"; $cyan="\033[1;36m"; $yellow="\033[1;33m"; $turquoise="\033[1;34m"; $maugi="\033[1;35m"; $white= "\033[1;37m";
$do="\033[0m";
$xnhac="\033[1;32m";
$cyan="\033[1;31m";
$res="\033[1;33m";
$green="\033[1;34m";
$red="\033[1;35m";
$end="\033[0m";
$black="\033[0;30m";
$blackb="\033[1;30m";
$white="\033[0;37m";
$whiteb="\033[1;37m";
$red="\033[0;31m";
$redb="\033[1;31m";
$green="\033[0;32m";
$greenb="\033[1;32m";
$yellow="\033[0;33m";
$yellowb="\033[1;33m";
$syan="\033[1;36m";
$blue="\033[0;34m";
$blueb="\033[1;34m";
$purple="\033[0;35m";
$purpleb="\033[1;35m";
$lightblue="\033[0;36m";
$lightblue="\033[1;35m";
$lightblueb="\033[1;36m";
$input = array($d2="\033[1;36m",$tmd3="\033[1;37m",$tmd4="\033[1;37m",$tmd5="\033[0;31m",$tmd6="\033[1;31m",$tmd7="\033[0;32m",$tmd8="\033[1;32m",$tmd9="\033[0;33m",$tmd10="\033[1;33m",$tmd11="\033[0;34m",$tmd12="\033[1;34m",$tmd13="\033[0;35m",$tmd14="\033[1;35m",$tmd15="\033[0;36m",$tmd16="\033[1;36m");
$rand_keys = array_rand($input, 10);
$input = array($tmd1="\033[1;46m",$tmd2="\033[1;36m",$tmd3="\033[1;37m",$tmd4="\033[1;37m",$tmd5="\033[0;31m",$tmd6="\033[1;31m",$tmd7="\033[0;32m",$tmd8="\033[1;32m",$tmd9="\033[0;33m",$tmd10="\033[1;33m",$tmd11="\033[0;34m",$tmd12="\033[1;34m",$tmd13="\033[0;35m",$tmd14="\033[1;35m",$tmd15="\033[0;36m",$tmd16="\033[1;36m");
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
$Ngay=`date "+%d/%m/%Y"`;
$Gio=`date "+%H:%M"`;
$res="\033[0m";
$hong="\033[1;35m";
$trang="\033[1;37m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\e[1;93m";
$xduong="\e[1;94m";
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$res="\033[0m";
$red="\033[1;31m";
$BGreen="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$lightSkyllue="\033[1;35m";
$maufullanhac= "\033[1;47;1;34m";
$lightSkyBlue="\033[1;35m";
$maufullznhac= "\033[1;47;1;34m";
$time = date('H:i:s');
$admin = file_get_contents('https://pastebin.com/raw/wcUYibRf');
$v3 = file_get_contents('https://pastebin.com/raw/wcUYibRf');
system('clear');
// LÊ MẠNH KIÊN 
@system('clear');
echo"
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL ĐẾM LẦN YÊU
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
echo"\033[1;96m Sẽ Có Bản V3.5 Cho Anh Em Xài Mình Sẽ Cố Gắng Sớm Nhất Có Thể Nha\n";
 echo " \033[1;37mHóng V3.5: \033[1;36m$v3\n";
 echo "\033[1;97m\033[1;40mAn Orin\n";
echo " \033[1;31m Nhập Tên Bạn:$yellow ";
$ba =trim(fgets(STDIN));
echo " \033[1;93m Nhập Tên Người Bạn Muốn:\033[1;31m ";
$bae =trim(fgets(STDIN));
echo " \033[1;96mNhập Ngày Tháng Năm Sinh Của Bạn:\033[1;97m ";
$nsb =trim(fgets(STDIN));
echo " \033[1;96mNhập Ngày Tháng Năm Sinh Của Người Ấy:\033[1;97m ";
$nsna =trim(fgets(STDIN));
//while ($a <="10"){
// sleep(1);
// system('clear');
//echo"\033[1;92mBắt Đầu \033[1;36mSau \033[1;32m$a \033[1;94mNữa Vui Lòng Chờ\n";
//$a++;
//}
system('clear');
while ($e <="50000"){
 sleep(0.1);
//echo "\033[1;91m[\033[1;102;90m$ba Yêu \033[1;36m$bae \033[1;31m$e \033[1;94mLần \033[0;1;91m] \033[1;96m \n";
//system('clear');
echo"\033[1;33m                ❤ $ba \033[1;32mYêu \033[1;36m$bae \033[1;32m$e \033[1;94mLần ❤\n";
//echo"\033[1;93m❤ $ba Yêu \033[1;30m$bae \033[1;46m$e \033[1;32mLần ❤\n";
 $e++;
}
@system('clear');

error_reporting(0);
$listnv = [];
echo $greenb."Đang Kiểm Tra Sever Tình Yêu".$greenb."
╔═════════════════════╗
║".$yellowb." █".$whiteb." █ █ █ █ █ █ █ █ █ ".$greenb."║  10% Vui 
╚═════════════════════╝";
usleep(1000000);
@system('clear');
echo $whiteb."Đang Kiểm Tra Sever Tình Yêu".$greenb."
╔═════════════════════╗
║".$yellowb." █ █".$whiteb." █ █ █ █ █ █ █ █ ".$greenb."║  20% Vui Lòng
╚═════════════════════╝";
usleep(1000000);
@system('clear');
echo $blueb."Đang Kiểm Tra Sever Tìn Yêu".$greenb."
╔═════════════════════╗
║".$yellowb." █ █ █".$whiteb." █ █ █ █ █ █ █ ".$greenb."║  30% Vui Lòng Chờ
╚═════════════════════╝";
usleep(1000000);
@system('clear');
echo $yellowb."Đang Kiểm Tra Sever Tình Yêu".$greenb."
╔═════════════════════╗
║".$yellowb." █ █ █ █".$whiteb." █ █ █ █ █ █ ".$greenb."║  40% Vui Lòng Chờ Xíu 
╚═════════════════════╝";
usleep(1000000);
@system('clear');
echo $lightblueb."Đang Kiểm Tra Sever Tình Yêu".$greenb."
╔═════════════════════╗
║".$yellowb." █ █ █ █ █".$whiteb." █ █ █ █ █ ".$greenb."║  50% Vui Lòng Chờ Xíu Nha
╚═════════════════════╝";
usleep(1000000);
@system('clear');
echo $bluelight."Đang Kiểm Tra Sever Tình Yêu".$greenb."
╔═════════════════════╗
║".$yellowb." █ █ █ █ █ █".$whiteb." █ █ █ █ ".$greenb."║  60% Vui Lòng Chờ Đừng 
╚═════════════════════╝";
usleep(1000000);
@system('clear');
echo $redb."Đang Kiểm Tra Sever Tình Yêu".$greenb."
╔═════════════════════╗
║".$yellowb." █ █ █ █ █ █ █".$whiteb." █ █ █ ".$greenb."║  70% Vui Lòng Chờ Đừng Vội
╚═════════════════════╝";
usleep(1000000);
@system('clear');
echo $purpleb."Đang Kiểm Tra Sever Tình Yêu".$greenb."
╔═════════════════════╗
║".$yellowb." █ █ █ █ █ █ █ █".$whiteb." █ █ ".$greenb."║  80% Vui Lòng Chờ Sắp 
╚═════════════════════╝";
usleep(1000000);
@system('clear');
echo $greenb."Đang Kiểm Tra Sever Tình Yêu".$greenb."
╔═════════════════════╗
║".$yellowb." █ █ █ █ █ █ █ █ █".$whiteb." █ ".$greenb."║  90% Vui Lòng Chờ Sắp Đến
╚═════════════════════╝";
usleep(1000000);
@system('clear');
echo $redb."Đang Kiểm Tra Sever".$greenb."
╔═════════════════════╗
║".$yellowb." █ █ █ █ █ █ █ █ █ █".$greenb." ║  100% Đến Rồi Nè
".$greenb."╚═════════════════════╝";
usleep(2000000);
@system('clear');
echo $syan."CHÚC ANH EM VUI VẺ !!!
╔═════════════════════╗
║".$yellowb." █ █ █ █ █ █ █ █ █ █$end ".$syan."║".$greenb."   KẾT QUẢ ĐÃ SẴN SÀNG 
".$syan."╚═════════════════════╝\n\n";
usleep(2000000);/*
echo "\033[1;97m
          💔 Nhưng Em Lại Không Yêu Anh 💔 \n";*/
system('clear');
echo "\033[1;97m\033[1;40m$admin\n";
echo"\033[1;33m •╔═════════════════════════☩══♛══☩═════════════════════════╗•\n";
        echo ("\033[1;39m         Hiện Tại Là $time \033[1;35mRồi Dậy Đi Mày\n");
         echo "\033[1;94m         Này \033[1;36m$bae \033[1;33mTao Rất Yêu Mày Đấy\033[1;37m\n";
echo "\033[1;97m\033[1;40m$admin\n";
echo  ("\033[1;33m•╚═════════════════════════☩══✦══☩═════════════════════════╝•\033[1;37m");
while ($a <="10"){
sleep(1);
echo"\033[1;92m 
        Bắt Đầu \033[1;36mVào Việc Chính Sau \033[1;32m$a giây \033[1;94mNữa Vui Lòng Chờ\n";
$a++;
}
system('clear');
echo"
\033[1;31m────────╠███████───███████╠─────────────
\033[1;31m───────╠█████████─╠█████████────────────
\033[1;31m───────█████████████████████╠───────────
\033[1;31m──────╠██████████████████████───────────
\033[1;31m──────███████████████████████───────────
\033[1;31m──────███████████████████████╠──────────
\033[1;31m──────███████████████████████╠──────────
\033[1;31m──────███████████████████████───────────
\033[1;31m──────╠██████████████████████───────────
\033[1;31m──────╠█████████████████████╠───────────
\033[1;31m───────█████████████████████────────────
\033[1;31m───────╠███████████████████╠────────────
\033[1;31m────────╠███████████──╠██\033[1;93m██─────────────
\033[1;31m─────────██████████─────\033[1;93m╠█╠─────────────
\033[1;31m─────────╠████████──██\033[1;93m█─────────────────
\033[1;31m──────────╠███████─╠██\033[1;93m███───────────────
─\033[1;31m────╠╠────╠██████─╠██\033[1;93m█████─────────────
──█████╠──\033[1;31m──╠█████╠─╠\033[1;93m███████╠───────────
─╠███████╠█╠─╠█\033[1;31m████╠──\033[1;93m████████╠─────────
╠███████████╠──██\033[1;31m███─\033[1;93m──╠████████╠───────
╠█████████████──╠█\033[1;31m█╠─────╠████████╠─────
\033[1;93m─██████████████───────────█████████╠────
\033[1;93m──╠█████████████╠───────╠███████████╠───
\033[1;93m───╠█████████████████████████████████╠──
\033[1;93m────╠█████████████████████████████████──
\033[1;93m─────╠█████████████████████████████████─
\033[1;93m───────████████████████████████████████╠
\033[1;93m────────╠███████████████████████████████
\033[1;93m─────────╠██████████████████████████████
\033[1;93m───────────█████████████████████████████
\033[1;93m────────────╠██████████████████████████─
\033[1;93m───────────────────────────────╠██████──
\033[1;93m─────────────────────────────────███╠───
\033[1;93m─────────────────────────────────╠█╠────
\n";
echo"\033[1;92mYêu \033[1;36m$bae \033[1;32m Nhiều Lắm\033[1;94m Tặng $bae Đó 💟\n";
echo"\033[1;33m Thông Tin Của Bạn Là \n";
echo"\033[1;32mName \033[1;97m: \033[1;96m$ba\n";
echo"\033[1;32mNgày Tháng Năm\033[1;97m: \033[1;96m$nsb\n";
echo"\033[1;97m --------------------------------------------\n";
echo"\033[1;33m Thông Tin Của Người Ấy Là \n";
echo"\033[1;32mName \033[1;97m: \033[1;96m$bae\n";
echo"\033[1;32mNgày Tháng Năm\033[1;97m: \033[1;96m$nsna\n";
echo"\033[1;97m --------------------------------------------\n";
while ($p <="10"){
sleep(1);
echo"\033[1;92m 
        Bắt Đầu \033[1;36mPhân Tích Sau\033[1;32m$p giây \033[1;94mNữa\n";
$p++;
}
system('clear');
while ($z <="100"){
 sleep(0.3);
//echo "\033[1;91m[\033[1;102;90m$ba Yêu \033[1;36m$bae \033[1;31m$e \033[1;94mLần \033[0;1;91m] \033[1;96m \n";
//system('clear');
echo"\033[1;33m Đang Tiến Hành Phân Tích Năm Sinh \033[1;32m$e \033[1;94m℅\n";
//echo"\033[1;93m❤ $ba Yêu \033[1;30m$bae \033[1;46m$e \033[1;32mLần ❤\n";
 $z++;
}
system('clear');
echo "                        \033[1;33m[\033[1;35m Kết Quả \033[1;33m]\n";
echo"\033[1;32m Ngày Tháng Năm Sinh Của \033[1;97mBạn Và \033[1;97m$bae Hợp Nhau Nhưng Sẽ Có Đôi Lúc Cãi Vã Giận Dỗi Nhau Nếu Nhường Nhịn Nhau Sẽ Lâu Dài Bền Chặt Hơn\n";
echo"\033[1;96m Chúc\033[1;97m Bạn Và\033[1;97m $bae Hạnh Phúc Bên Nhau Nhé\n";
system('xdg-open https://zalo.me/0777374145');
?>