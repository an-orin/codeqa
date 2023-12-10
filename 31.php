error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
//anorin
$luc = "\033[0;37m";
$do="\033[1;91m";
$vang="\033[1;93m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;32m";
$luc = "\033[1;92m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$ngay = date("d");
$thang = date("m");
$nam = date("Y");
$daucau = "\n\033[1;31m [\033[1;37m✅\033[1;31m] \033[1;37m";
$daucau1 = "\n\033[1;31m [\033[1;37m✅\033[1;31m]\033[1;37m => \033[1;32m";
$dodai = strlen($keyfree);
if($dodai == 21){
	$khoangtrang = " ";
	}
if($dodai == 20){
	$khoangtrang = "  ";
	}
if($dodai == 19){
	$khoangtrang = "   ";
	}
if($dodai == 18){
	$khoangtrang = "    ";
	}
if($dodai == 17){
	$khoangtrang = "     ";
	}
if($dodai == 16){
	$khoangtrang = "      ";
	}
if($dodai == 15){
	$khoangtrang = "       ";
	}
if($dodai == 14){
	$khoangtrang = "        ";
	}
if($dodai == 13){
	$khoangtrang = "         ";
	}
if($dodai == 12){
	$khoangtrang = "          ";
	}
if($dodai == 0){
	$khoangtrang = "                      ";
	}
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$thanh_xau= $do."[".$luc."●".$do."] ".$trang."=> ";
$thanh_dep= $do."[".$luc."●".$do."] ".$trang."=> ";
$An_Orin= $do."[".$luc."●".$do."] ".$trang."=> ";
$thanh_xau= $trang."".$luc."[".$luc."●".$luc."] ".$trang."➩ ";
$thanh_dep= $trang."".$luc."[".$luc."✓".$luc."] ";
$thanh_dac_biet= $trang."➩ ";
//thilyquan
$green = "\033[0;37m";
$white = "\033[0;33m";
$pink="\e[1;35m";
$maufulldo= "\e[1;47;31m";
$ngblack="\033[40m";
$do1="\033[1;91m";
$trang1="\033[1;97m";
$res="\033[0m";
$red="\033[0;31m";
$white= "\033[0;37m";
$redb="\033[1;31m";
$green="\033[0;32m";
$yellow="\033[1;33m";
$cam="\033[0;33m";
$test="\033[1;33m";
$greenb="\033[1;32m";
$blue="\033[0;34m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$cyan= "\e[1;36m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$baotri = $do." (Bảo trì)";
$thanh_xau= $do."[".$luc."ꗾ\033[1;31m] \033[1;37m=> ";
$thanh_dep= $do."[".$luc."ꗾ\033[1;31m] \033[1;37m=> ";
$khoangcach="\n";
//qtv5

$today = date("d/m/Y");
$end="\033[0m";
$black="\033[0;30m";
$blackb="\033[1;30m";
$white="\033[0;37m";
$whiteb="\033[1;37m";
$red="\033[1;31m";
$redb="\033[1;31m";
$green="\033[0;32m";
$greenb="\033[1;32m";
$yellow="\033[0;33m";
$yellowb="\033[1;33m";
$blue="\033[0;34m";
$blueb="\033[1;34m";
$purple="\033[0;35m";
$purpleb="\033[1;35m";
$lightblue="\033[0;36m";
$lightblueb="\033[1;36m";
$res="\033[0m";
$BBlack="\033[1;30m" ; 
$BRed="\033[1;31m" ;
$Bmg="\033[1;32m" ;
$BYellow="\033[1;33m" ;
$BBlue="\033[1;34m" ;
$BPurple="\033[1;35m" ;
$BCyan="\033[1;36m" ;
$BWhite="\033[1;37m" ;
$Blue="\033[0;34m";
$lmg="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$mtool="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$red="\033[1;31m";
$white= "\033[1;37m";
$whiteb= "\033[1;37m";
$pmtol="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$cam="\033[1;33m";
$test="\033[1;33m";
$greenb="\033[1;32m";
$blue="\033[1;34m";
$lam="\033[1;34m";
$tim="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$cyan= "\e[1;36m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$vang="\033[1;93m";
$do="\033[1;91m";
$BBlack="\033[1;30m";      
$BRed="\033[1;31m";
$BGreen="\033[1;32m";
$BYellow="\033[1;33m";
$BBlue="\033[1;34m";
$BPurple="\033[1;35m";
$BCyan="\033[1;36m";
$BWhite="\033[1;37m";
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
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
sleep(3);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mCảm Ơn Bạn Đã Thoát Tool \n";
exit;