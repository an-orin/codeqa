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
$cyan= "\e[1;36m";
/***[ Đánh Dấu Bản Quyền ]***/
$thanh_xau = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$thanh_dep = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$bannercon = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$thanh = $trang."=> ";
$vinh = $trang."\033[1;37m= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL Đào Mail + Check Live + Check Valid Facebook
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
/***[ Clear + Thông Số Admin ]***/
home:
while (true) {
@system('clear');
echo $banner;
echo $thanh_dep.$luc."Nhập ".$do."[".$trang."1".$do."]".$luc." Tool Get Full Mail Random\n";
echo $thanh_dep.$luc."Nhập ".$do."[".$trang."2".$do."]".$luc." Tool Check Live All Mail$do (Coza + REDIFF)\n";
echo $thanh_dep.$luc."Nhập ".$do."[".$trang."3".$do."]".$luc." Tool Check Liên Kết Facebook All Mail\n";
echo $thanh_dep.$luc."Nhập ".$do."[".$trang."4".$do."]".$luc." Đào Mail 1 Dạng Đuôi$vang (VD: yahoo)\n";
echo $thanh_dep.$luc."Nhập ".$do."[".$trang."5".$do."]".$luc." Đào Mail Coza + Rediff\n";
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
echo $thanh_dep.$luc."Nhập: $vang";
$tool = trim(fgets(STDIN));
for($i=0; $i<=32; $i++){
echo $trang."= ";
usleep(5000);
}echo "\n";
if($tool == "1"){
	echo $thanh_dep.$luc."Mail Get Lưu Tại: $vang";
	$file = trim(fgets(STDIN));
	echo $thanh_dep.$luc."Get Bao Nhiêu Mail Thì Dừng: $vang";
	$dung = trim(fgets(STDIN));
	while (true) {
	$getmail1 = randommail("35", "vi");
	for($xz=0;$xz<count($getmail1);$xz++){
	$mail = $getmail1[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file,"a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail2 = randommail("35", "es_MX");
	for($xz=0;$xz<count($getmail2);$xz++){
	$dem++;
	$mail = $getmail2[$xz];
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file,"a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail3 = randommail("35", "uk");
	for($xz=0;$xz<count($getmail3);$xz++){
	$dem++;
	$mail = $getmail3[$xz];
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file,"a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail4 = randommail("35", "es");
	for($xz=0;$xz<count($getmail4);$xz++){
	$mail = $getmail4[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file,"a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail5 = randommail("35", "tr");
	for($xz=0;$xz<count($getmail5);$xz++){
	$mail = $getmail5[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file,"a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail6 = randommail("35", "en_ZA");
	for($xz=0;$xz<count($getmail6);$xz++){
	$mail = $getmail6[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail7 = randommail("35", "sv");
	for($xz=0;$xz<count($getmail7);$xz++){
	$mail = $getmail7[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail8 = randommail("35", "en_US");
	for($xz=0;$xz<count($getmail8);$xz++){
	$mail = $getmail8[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail9 = randommail("35", "sk");
	for($xz=0;$xz<count($getmail9);$xz++){
	$mail = $getmail9[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail10 = randommail("35", "ru");
	for($xz=0;$xz<count($getmail10);$xz++){
	$mail = $getmail10[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail11 = randommail("35", "en_IE");
	for($xz=0;$xz<count($getmail11);$xz++){
	$mail = $getmail11[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail12 = randommail("35", "ro");
	for($xz=0;$xz<count($getmail12);$xz++){
	$mail = $getmail12[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail13 = randommail("35", "en_GB");
	for($xz=0;$xz<count($getmail13);$xz++){
	$mail = $getmail13[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail14 = randommail("35", "pt_PT");
	for($xz=0;$xz<count($getmail14);$xz++){
	$mail = $getmail14[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail15 = randommail("35", "en_CA");
	for($xz=0;$xz<count($getmail15);$xz++){
	$mail = $getmail15[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail16 = randommail("35", "pt_BR");
	for($xz=0;$xz<count($getmail16);$xz++){
	$mail = $getmail16[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail17 = randommail("35", "pl");
	for($xz=0;$xz<count($getmail17);$xz++){
	$mail = $getmail17[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail18 = randommail("35", "nl_BE");
	for($xz=0;$xz<count($getmail18);$xz++){
	$mail = $getmail18[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail19 = randommail("35", "en_AU");
	for($xz=0;$xz<count($getmail19);$xz++){
	$mail = $getmail19[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail20 = randommail("35", "nl");
	for($xz=0;$xz<count($getmail20);$xz++){
	$mail = $getmail20[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail21 = randommail("35", "en");
	for($xz=0;$xz<count($getmail21);$xz++){
	$mail = $getmail21[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail22 = randommail("35", "el");
	for($xz=0;$xz<count($getmail22);$xz++){
	$mail = $getmail22[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail23 = randommail("35", "nb_NO");
	for($xz=0;$xz<count($getmail23);$xz++){
	$mail = $getmail23[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail24 = randommail("35", "de_CH");
	for($xz=0;$xz<count($getmail24);$xz++){
	$mail = $getmail24[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail25 = randommail("35", "lv");
	for($xz=0;$xz<count($getmail25);$xz++){
	$mail = $getmail25[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail26 = randommail("35", "de_AT");
	for($xz=0;$xz<count($getmail26);$xz++){
	$mail = $getmail26[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail27 = randommail("35", "ko");
	for($xz=0;$xz<count($getmail27);$xz++){
	$mail = $getmail27[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
	
	$getmail28 = randommail("35", "de");
	for($xz=0;$xz<count($getmail28);$xz++){
	$mail = $getmail28[$xz];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file, "a");
	fwrite($k, $mail.PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}


}
} else if($tool == "2"){
	for($i=0; $i<=32; $i++){echo $trang."= ";usleep(5000);}echo "\n";
		$kholive=[];
		echo $thanh_dep.$luc."Nhập Tên File Chứa Mail: $vang";
		$file = trim(fgets(STDIN));
		$khomail = explode(PHP_EOL, file_get_contents($file));
		echo $thanh_dep.$luc."Mail Die Lưu Tại: $vang";
		$filelive = trim(fgets(STDIN));
		for($i=0; $i<=32; $i++){echo $trang."= ";usleep(5000);}echo "\n";
		foreach ($khomail as $mail) {
			$duoi = explode("@", $mail)[1];
			if($duoi == "gmail.com"){
				$checkgmail = json_decode(file_get_contents("https://shopninjakey.site/api/checkmail/gmail.php?mail=".$mail), true);
				if($checkgmail["status"] == "error"){
					echo $thanh.$do."Đã Có Tk Gmail ".$vang.$mail."\n";
				} else {
					echo $thanh_dep.$luc."Chưa Có Tk Gmail ".$vang.$mail."\n";
					$k = fopen($filelive,"a");
					fwrite($k, $mail.PHP_EOL);
					fclose($k);
				}
			}
			if($duoi == "hotmail.com"){
				$checkhotmail = json_decode(file_get_contents("https://shopninjakey.site/api/checkmail/hotmail.php?mail=".$mail), true);
				if($checkhotmail["status"] == "success"){
					echo $thanh_dep.$luc."Chưa Có Tk Hotmail ".$vang.$mail."\n";
					$k = fopen($filelive,"a");
					fwrite($k, $mail.PHP_EOL);
					fclose($k);
				} else {
					echo $thanh.$do."Đã Có Tk Hotmail ".$vang.$mail."\n";
				}
			}
			if($duoi == "yahoo.com"){
				$nuamail = explode("@", $mail)[0];
				$checkyahoo =  json_decode(file_get_contents("https://shopninjakey.site/api/checkmail/yahoo.php?mail=".$nuamail), true);
				if($checkyahoo["status"] == "error"){
					echo $thanh.$do."Đã Có Tk Yahoo ".$vang.$mail."\n";
				} else {
					echo $thanh_dep.$luc."Chưa Có Tk Yahoo ".$vang.$mail."\n";
					$k = fopen($filelive,"a");
					fwrite($k, $mail.PHP_EOL);
					fclose($k);
				}
			}
			if($duoi == "webmail.co.za"){
				$checkcoza =  json_decode(file_get_contents("https://shopninjakey.site/api/checkmail/coza.php?mail=".$mail), true);
				if($checkcoza["status"] == "error"){
					echo $thanh.$do."Đã Có Tk Coza ".$vang.$mail."\n";
				} else {
					echo $thanh_dep.$luc."Chưa Có Tk Coza ".$vang.$mail."\n";
					$k = fopen($filelive,"a");
					fwrite($k, $mail.PHP_EOL);
					fclose($k);
				}
			}
			if($duoi == "rediffmail.com"){
				$checkrediff =  json_decode(file_get_contents("https://shopninjakey.site/api/checkmail/rediffmail.php?mail=".$mail), true);
				if($checkrediff["status"] == "error"){
					echo $thanh.$do."Đã Có Tk Rediff Mail ".$vang.$mail."\n";
				} else {
					echo $thanh_dep.$luc."Chưa Có Rediff Mail ".$vang.$mail."\n";
					$k = fopen($filelive,"a");
					fwrite($k, $mail.PHP_EOL);
					fclose($k);
				}
			}
		}
echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
$home = trim(fgets(STDIN));
if($home == "y" or $home == "Y"){
	continue;
} else {
	exit;
}
} else if($tool == "3"){
	echo $thanh_dep.$luc."Nhập Tên File Chứa Mail: $vang";
	$file = trim(fgets(STDIN));
	$khomail = explode(PHP_EOL, file_get_contents($file)); 
	echo $thanh_dep.$luc."Mail Liên Kết Lưu Tại: $vang";
	$filelk = trim(fgets(STDIN));
	foreach ($khomail as $mail) {
		unlink("ckfb.txt");
		$a = getck();
		$response = getdata();
		$lsd = explode('"', explode('name="lsd" value="', $response)[1])[0];
		$jazoest = explode('"', explode('name="jazoest" value="', $response)[1])[0];
		$checklk = check($mail,$lsd,$jazoest);
		if (strpos($checklk, 'Lỗi') !== false) {
			echo $thanh.$do."Email ".$vang.$mail.$do." Lỗi\n";
		}
		if (strpos($checklk, 'Đặt lại mật khẩu của bạn') !== false) {
			$check_code = getcode($mail);
			$code = explode('<', explode('class="_2pin _2pia _6w7o"><div><strong>', $check_code)[1])[0];
			if($code == "Nhập mã gồm 8 chữ số"){
				echo $thanh_dep.$luc."Mail ".$vang.$mail.$luc." Đã Liên Kết Facebook".$trang." | 8 Code\n";
				fwrite(fopen($filelk, "a+"), "$mail | CODE 8\n");
			} else if($code == "Nhập mã gồm 6 chữ số"){
				echo $thanh_dep.$luc."Mail ".$vang.$mail.$luc." Đã Liên Kết Facebook".$trang." | 6 Code\n";
				fwrite(fopen($filelk, "a+"), "$mail | CODE 6\n");
			} else {
				echo $code."\n";
				echo $thanh.$do."Email ".$vang.$mail.$do." Lỗi\n";
			}
		} else {
			echo $thanh.$do."Mail ".$vang.$mail.$do." Chưa Liên Kết\n";
		}
	}
echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
$home = trim(fgets(STDIN));
if($home == "y" or $home == "Y"){
	continue;
} else {
	exit;
}
} else if($tool == "4"){
	echo $thanh_dep.$luc."Nhập Loại Đuôi Mail$vang (VD: hotmail):$vang ";
	$_SESSION["loaimail"] = trim(fgets(STDIN));
	echo $thanh_dep.$luc."Mail Get Lưu Tại: $vang";
	$file = trim(fgets(STDIN));
	echo $thanh_dep.$luc."Get Bao Nhiêu Mail Thì Dừng: $vang";
	$dung = trim(fgets(STDIN));
	while (true) {
	$getmail1 = randommail("35", "id_ID");
	for($xz=0;$xz<count($getmail1);$xz++){
	$mail = $getmail1[$xz];
	$duoi = explode("@", $mail)[1];
	if($duoi == $_SESSION["loaimail"].".com"){
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file,"a");
	fwrite($k, $mail."\n".PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
}
	$getmail2 = randommail("35", "en");
	for($xz=0;$xz<count($getmail2);$xz++){
	$mail = $getmail2[$xz];
	$duoi = explode("@", $mail)[1];
	if($duoi == $_SESSION["loaimail"].".com"){
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$mail."\n";
	$k = fopen($file,"a");
	fwrite($k, $mail."\n".PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
}
}
} else if($tool == "5"){
	echo $thanh.$do."Nên Fake Ip Indonesia & US Để Ra Được Mail Cổ\n";
	echo $thanh_dep.$luc."Mail Get Lưu Tại: $vang";
	$file = trim(fgets(STDIN));
	echo $thanh_dep.$luc."Get Bao Nhiêu Mail Thì Dừng: $vang";
	$dung = trim(fgets(STDIN));
	while (true) {
	$getmail1 = randommail("35", "id_ID");
	for($xz=0;$xz<count($getmail1);$xz++){
	$mail = $getmail1[$xz];
	$duoi = explode("@", $mail)[0];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$duoi."@webmail.co.za\n";
	$k = fopen($file,"a");
	fwrite($k, $duoi."@webmail.co.za".PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}	
	$getmail2 = randommail("35", "en");
	for($xz=0;$xz<count($getmail2);$xz++){
	$mail = $getmail2[$xz];
	$duoi = explode("@", $mail)[0];
	$dem++;
	echo $trang."~".$do."[".$trang.$dem.$do."] ".$trang."➩ ".$vang.$duoi."@rediffmail.com\n";
	$k = fopen($file,"a");
	fwrite($k, $duoi."@rediffmail.com".PHP_EOL);
	fclose($k);
	if($dem % $dung == 0){
		unset($dem);
		
		echo $thanh_dep.$luc."Bạn Có Muốn Về Menu? (y/n): $vang";
		$home = trim(fgets(STDIN));
		if($home == "y" or $home == "Y"){
			goto home;
		} else {
			exit;
		}
	}
	}
}
}


























}
function randommail($sl,$type){
$header = array( 
"Host:randommer.io",
"content-type:application/x-www-form-urlencoded; charset=UTF-8",
"x-requested-with:XMLHttpRequest",
"user-agent:$useragent",
"origin:https://randommer.io"
);
$data = 'number='.$sl.'&culture='.$type.'&X-Requested-With=XMLHttpRequest';
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://randommer.io/random-email-address');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_COOKIEFILE, 'file.txt');
curl_setopt($mr, CURLOPT_POSTFIELDS, $data);
curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$access = curl_exec($mr);
curl_close($mr);
return json_decode($access,true);
}
function getck(){
$url = "https://mbasic.facebook.com/";
$head = array(
"Host: mbasic.facebook.com",
"upgrade-insecure-requests: 1",
"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/104.0.5112.97 Mobile Safari/537.36",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"dnt: 1",
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_COOKIEJAR, "ckfb.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "ckfb.txt");
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$access = curl_exec($ch); 
return $access;
}
function getdata(){
$url = "https://mbasic.facebook.com/login/identify/?ctx=recover&search_attempts=0&alternate_search=0&toggle_search_mode=1";
$head = array(
'authority:mbasic.facebook.com',
'sec-ch-ua:" Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"',
'sec-ch-ua-mobile:?0',
'sec-ch-ua-platform:"Windows"',
'upgrade-insecure-requests:1',
'user-agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36',
'accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'sec-fetch-site:none',
'sec-fetch-mode:navigate',
'sec-fetch-user:?1',
'sec-fetch-dest:document',
'accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_COOKIEFILE, "ckfb.txt");
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$h = curl_exec($ch); curl_close($ch);
return $h;
}
function check($mail,$lsd,$jazoest){
$url = "https://mbasic.facebook.com/login/identify/?ctx=recover&c=%2Flogin%2F&search_attempts=1&alternate_search=1&show_friend_search_filtered_list=0&birth_month_search=0&city_search=0";
$data = "lsd=".$lsd."&jazoest=".$jazoest."&email=".$mail."&did_submit=T%C3%ACm+ki%E1%BA%BFm";
$head = array(
"Host: mbasic.facebook.com",
"cache-control: max-age=0",
"upgrade-insecure-requests: 1",
"origin: https://mbasic.facebook.com",
"content-type: application/x-www-form-urlencoded",
"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/104.0.5112.97 Mobile Safari/537.36",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"x-requested-with: mark.via.gp",
"sec-fetch-site: same-origin",
"sec-fetch-mode: navigate",
"sec-fetch-user: ?1",
"sec-fetch-dest: document",
"referer: https://mbasic.facebook.com/login/identify/?ctx=recover&search_attempts=0&alternate_search=0&toggle_search_mode=1",
"accept-encoding: gzip, deflate",
"accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7",
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_COOKIEFILE, "ckfb.txt");
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "ckfbcode.txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$access = curl_exec($ch); curl_close($ch);
return $access;
}
function getcode($mail){
$head = array(
'authority: m.facebook.com',
'cache-control: max-age=0',
'upgrade-insecure-requests: 1',
'user-agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'sec-fetch-site: same-origin',
'sec-fetch-mode: navigate',
'sec-fetch-user: ?1',
'sec-fetch-dest: document',
'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="99", "Google Chrome";v="99"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'referer: https://m.facebook.com/recover/initiate/?c=%2Flogin%2F&fl=initiate_view&ctx=msite_initiate_view',
'accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://m.facebook.com/recover/code/?em%5B0%5D=".$mail."&rm=send_email&c=%2Flogin%2F&hash=AUZazPQa8aS2XXY-nBM&_rdr");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_COOKIEFILE, "ckfbcode.txt");
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$h = curl_exec($ch); curl_close($ch);
return $h;
}