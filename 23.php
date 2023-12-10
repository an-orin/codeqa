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
    $thanh_xau= "\033[1;31m [\033[1;37m✅\033[1;31m]\033[1;37m => \033[1;32m";
    $thanh_dep= "\033[1;31m [\033[1;37m✅\033[1;31m]\033[1;37m => \033[1;32m";
    $thanhngang ="\n\033[1;32m ══════════════════════════════════════════════════════════════\n";
    $thanhngang1 ="\033[1;32m ══════════════════════════════════════════════════════════════\n";
    $daucau = "\n\033[1;31m [\033[1;37m✅\033[1;31m] \033[1;37m";
    $daucauc = "\033[1;31m [\033[1;37m✅\033[1;31m]\033[1;37m => \033[1;32m";
$logo = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL GIẢI MÃ
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
 @system('clear');
echo $logo;
$glob = glob('*.php'); $fileto = false;
while(!in_array($fileto,$glob)){
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mVui Lòng Nhập Tên File Cần Decode : \033[0;37m"; 
$fileto = trim(fgets(STDIN));
if(!in_array($fileto,$glob))
  echo "\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;31mFile Không Tồn Tại Trong Thư Mục Vui Lòng Kiểm Tra Và Nhập Lại \n";
}
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m \033[1;33mFile được mã hoá bằng web nào: \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m \033[1;31m[\033[1;32m1\033[1;31m] \033[1;37m TOOL.EDDI....( TRỞ VỀ DẠNG GỐC )\n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m \033[1;31m[\033[1;32m2\033[1;31m] \033[1;37m TOOL.EDDI... \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m \033[1;31m[\033[1;32m3\033[1;31m] \033[1;37m EDDI + SISTIEM \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m \033[1;31m[\033[1;32m4\033[1;31m] \033[1;37m BASE64 \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m \033[1;31m[\033[1;32m5\033[1;31m] \033[1;37m SISTIEMIT ( de file khi chế độ 2 de ra ) \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m \033[1;31m[\033[1;32m6\033[1;31m] \033[1;37m SISTIEMIT ( mặc định ) \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m \033[1;31m[\033[1;32m7\033[1;31m] \033[1;37m SIEUTHIWEB \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m \033[1;31m[\033[1;32m8\033[1;31m] \033[1;37m SIEUTHIWEB MỚI \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m \033[1;31m[\033[1;32m9\033[1;31m] \033[1;37m LƯU CODE TỪ URL \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m \033[1;32mVui Lòng Nhập Chế Độ : \033[0;37m"; 
$webdecode = trim(fgets(STDIN));
if($webdecode == 1){
echo "File cần dec : ";
$dec = trim(fgets(STDIN));
echo "Lưu tại :";
$save = trim(fgets(STDIN));
$cmd = "php -r \"echo file_get_contents('phar://$dec/tool.eddiekidiw.com');\">$save";
@system($cmd);
}
if($webdecode == 2){
$file = file_get_contents($fileto);
$nhandang = explode('";eval(',explode('="',$file)[1])[0];
$encodeone = str_replace('))^','));',$file);
$encodetwo = str_replace("'));eval(","'));fwrite(fopen('code2.php','w+'),",$encodeone);
fwrite(fopen("code1.php","w+"),$encodetwo);
system("php code1.php");
unlink("code1.php");
$fileone = file_get_contents("code2.php");
unlink("code2.php");
$incode = str_replace('*/eval(','*/ gogo:fwrite(fopen("code4.php","w+"),',$fileone);
$incodeone = str_replace("'));eval(","'));goto gogo; eval(",$encodeone);
$function = rtrim($incodeone,'?>');
fwrite(fopen("code3.php","w+"),$function.$incode.'?>');
system("php code3.php");
unlink("code3.php");
$filecode = file_get_contents("code4.php");
unlink("code4.php");
eval('$flate = '.utf8_decode('"'.$nhandang.'";'));
$codegoto = explode('"));',explode('("',$filecode)[1])[0];
fwrite(fopen("runcode.php","w+"),"<?php \n fwrite(fopen('soucer.php','w+'),$flate(".'"'.$codegoto.'"'.")); \n ?>");
system("php runcode.php");
unlink("runcode.php");
fwrite(fopen("chaytool.php","w+"),file_get_contents("soucer.php"));
$filedecode = "soucer.php";
if(strstr(file_get_contents("chaytool.php"),'eval(')){
  unlink("soucer.php");
$filedecode = substr(md5($fileto), 0 , 5).".php";
$cuoi = base64_encode(str_replace('eval(','fwrite(fopen("'.$filedecode.'","w+"),',file_get_contents("chaytool.php")));
$gzun = 'base64_decode("'.$cuoi.'"));';
fwrite(fopen("hi.php","w+"),"<?php \n".base64_decode($cuoi))."\n ?>";
$exc = explode('("',explode('():',$filecode)[1])[0];
$filwon = str_replace($exc.'("'.$codegoto.'"));',$gzun,$filecode);
$bubu = str_replace('// c',' gogo:',$filwon);
fwrite(fopen("code5.php","w+"),$function.$bubu."\n ?>");
system("php code5.php");
}
echo "\033[1;32mSUCCESS TOOL GIẢI MÃ ĐƯỢC LƯU TẠI FILE $filedecode";
}

if($webdecode == 3){
$file = file_get_contents($fileto);
$nhandang = explode('";eval(',explode('="',$file)[1])[0];
$encodeone = str_replace('))^','));',$file);
$encodetwo = str_replace("'));eval(","'));fwrite(fopen('code2.php','w+'),",$encodeone);
fwrite(fopen("code1.php","w+"),$encodetwo);
system("php code1.php");
//unlink("code1.php");
$fileone = file_get_contents("code2.php");
unlink("code2.php");
$incode = str_replace('*/eval(','*/ gogo:fwrite(fopen("code4.php","w+"),',$fileone);
$incodeone = str_replace("'));eval(","'));goto gogo; eval(",$encodeone);
$function = rtrim($incodeone,'?>');
fwrite(fopen("code3.php","w+"),$function.$incode.'?>');
system("php code3.php");
//unlink("code3.php");
$filecode = file_get_contents("code4.php");
//unlink("code4.php");
eval('$flate = '.utf8_decode('"'.$nhandang.'";'));
$codegoto = explode('"));',explode('("',$filecode)[1])[0];
fwrite(fopen("runcode.php","w+"),"<?php \n fwrite(fopen('soucer.php','w+'),$flate(".'"'.$codegoto.'"'.")); \n ?>");
system("php runcode.php");
//unlink("runcode.php");
fwrite(fopen("chaytool.php","w+"),file_get_contents("soucer.php"));
$filedecode = "soucer.php";
if(strstr(file_get_contents("chaytool.php"),'eval(')){
  //unlink("soucer.php");
$filedecode = substr(md5($fileto), 0 , 5).".php";
$cuoi = base64_encode(str_replace('$SISTEMIT_COM_ENC=','echo ',file_get_contents("chaytool.php")));
$gzun = 'base64_decode("'.$cuoi.'"));';
fwrite(fopen("hi.php","w+"),"<?php \n".base64_decode($cuoi))."\n ?>";
$exc = explode('("',explode('():',$filecode)[1])[0];
$filwon = str_replace($exc.'("'.$codegoto.'"));',$gzun,$filecode);
$bubu = str_replace('// c',' gogo:',$filwon);
fwrite(fopen("code5.php","w+"),$function.$bubu."\n ?>");
system("php code5.php");
}
echo "SUCCESS TOOL GIẢI MÃ ĐƯỢC LƯU TẠI FILE $filedecode";
}else if($webdecode == 4){
  $file = file_get_contents($fileto);
  $filedecode = substr(md5($fileto), 0 , 5).".php";
while(strstr($file,'eval(') and count(explode('eval',$file)) <= 2){
  $filen = str_replace('eval(',"fwrite(fopen('$filedecode','w+'),",$file);
eval(str_replace(['<?php','?>','<?'],'',$filen));
$file = file_get_contents($filedecode);
}
echo "SUCCESS TOOL GIẢI MÃ ĐƯỢC LƯU TẠI FILE $filedecode";
}
if($webdecode == 5){
echo $BGreen."Nhập Code SISTEMIT : $BWhite";
$code =trim(fgets(STDIN));

$SISTEMIT_COM_ENC = "".$code."";
$rand = base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWldOb2J5Z2tibUYyS1RzTkNnPT0==");
eval(base64_decode($rand));
}
if($webdecode == 6){
system('clear');
$filen = readline("$BGreen Nhập Tên File : $BWhite");
$sle = readline("$BGreen Nhập Số Lớp EnCode Dự đoán của bạn : $BWhite");
$out = readline("$BGreen Nhập File Chứa Code sau khi de : $BWhite");
$file = file_get_contents("$filen");
file_put_contents("out1.php",dran($file));

$it = 1;
$itt = 1;

for($i=1;$i<=$sle;$i++){
    $it++;
    system("php out$i.php> out$it.php");
    $fi = file_get_contents("out$it.php");
    $f = explode("\n",$fi,2);
    $f[0] = trim($f[0]);
    echo $f[0]; //old stuff
    $f[1] = trim($f[1]);
    $file = fopen("out$it.php",'w');
    fwrite($file,"<?php"."\n".$f[1]); //\n or \r\n on windows
    fclose($file); 
    file_put_contents("out$it.php",dran(file_get_contents("out$it.php")));
    echo("Edit File out$it.php\n");
    if(strpos(file_get_contents("out$i.php"),'$rand')==false){
      system("mv out$i.php $out");
      for($x=1;$x<=$sle;$x++){
        system("rm out$x.php");
      }
    }elseif (strpos(file_get_contents("out$it.php"),'$rand')==false){system("mv out$it.php $out");
      for($x=1;$x<=$sle;$x++){
        system("rm out$x.php");
      }
    }
}





function dran($file){
  $tam = str_replace('Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==','Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWldOb2J5Z2tibUYyS1RzTkNnPT0==',$file );
  return $tam;
}}
if($webdecode == 7){
system('clear');
$c = "\033[1;32mNhập Tên File Cần Decode : $BWhite";
$okten = readline($c);
echo "\033[1;37m~\033[1;31m[\033[1;32m1\033[1;31m]$BGreen SIEUTHIWEB 1.0 \n";
echo "\033[1;37m~\033[1;31m[\033[1;32m2\033[1;31m]$BGreen SIEUTHIWEB \n";
echo " \n";
 $b = "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$BGreen Vui Lòng Chọn Chế Độ DECODER : $BWhite";
$loai = readline($b);
$evalIndex = $loai;
$filePath = $okten;
while (!is_file($filePath)) $filePath = trim(fgets(STDIN));
$source = file_get_contents($filePath);
$resource = replaceEvalToEcho2($source,$evalIndex);
file_put_contents(replaceDotPHP($filePath,".tmp"),$resource);
exec("php ". replaceDotPHP($filePath,".tmp"));
echo "\033[1;35m[\033[1;32mSUCCESS\033[1;35m]$BRed ●$BGreen Decoder Thành Công Đã Lưu Tên File Là :". replaceDotPHP($filePath,".dc.php")."\n";

function replaceEvalToEcho($input){
  $output = str_replace("eval","echo",$input);
  return $output;
}
function replaceEvalToEcho2($input, $index)
{
    $input = explode("eval", $input);
    // var_dump($input);
    $evalCount = count($input) - 1;
    $output = $input[0];
    for ($i = 1; $i <= $evalCount; $i++) {
        if ($i == $index) {
            $output = $output . "file_put_contents(substr_replace(__FILE__, \".dc.php\", strrpos(__FILE__, \".tmp\")), " . substr($input[$i], strpos($input[$i],"(")+1);
        } else $output = $output . "eval" . $input[$i];
    }
    return $output;
}
function replaceDotPHP($fileName, $replaceWith) {
  return substr_replace($fileName, $replaceWith, strrpos($fileName, ".php"));
}
}
if($webdecode == 8){
$in = readline("$BGreen Nhập Tên File :");
$file = file_get_contents($in);
if(!$file){
echo $BRed."Khong Tim Thay File ";eixt();}
$out = readline("Nhập File Lưu :");
$tach = explode("eval",$file);
$moi = $tach[0]."\n"."eval".$tach[1]."echo".$tach[2];
$ghi = file_put_contents("tam.php",$moi);
system("php tam.php>$out");
unlink("tam.php");
echo $BGreen."Decode Thành Công Lưu Tại File $BYellow $out \n";
}
if($webdecode == 9){
error_reporting(0); 
$white = "\033[1;37m";
 $red = "\033[1;31m"; 
 $green="\e[1;32m"; 
 echo chay(10);
 echo $BGreen."Nhập URL : $BWhite";
$url =trim(fgets(STDIN));
echo $BGreen."Nhập File Cần Lưu : $BWhite";
$file =trim(fgets(STDIN));
 $tai = $e=(file_get_contents(''.$url.''));
file_put_contents("".$file."",$e);
echo $BGreen."Decode Thành Công Lưu Tại File $BYellow $file \n";
}
if($webdecode == 10){
echo "File cần dec : ";
$dec = trim(fgets(STDIN));
echo "Lưu tại :";
$save = trim(fgets(STDIN));
$cmd = "php -r \"echo file_get_contents('phar://$dec/enphppro.com');\">$save";
@system($cmd);
}
function chay($so){
  for($v=0;$v<= $so;$v++){
    echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);
} echo "\n";
}