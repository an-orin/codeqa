#!/bin/php
<?php
/*
----------------------------
PHP Encode V9.0.1 By Dichvucoder.vn
Support Email : dgbaopro@dichvucoder.vn
Time        : 30-08-2023 Wednesday 14:10:04
IP          : 
Andress     : ??
Country     : ??
Useragent   : DVC STATIC TOOL
Description : An Orin
----------------------------
*/
error_reporting(E_ERROR);
$version = phpversion();
if(!defined("ext_ver__"))define("ext_ver__", trim(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/version")));
if (!function_exists("__Gao188whjnandoos__")) {
  function __Gao188whjnandoos__($version) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
      if (!isset($machine)) {
        $machine = posix_uname()["machine"];
      }
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/linux/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/linux.php"));
        die();
      }else die();
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
      $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]);
      $compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r("COMPILE VS : $compile");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/windows/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/windows.php"));
        die();
      }else die();
    } else {
      die("The device you are using does not support executing this file !\n");
    }
  }
}
if (!extension_loaded("dichvucoder")) {
  if (dl("dichvucoder")) {} else {
    __Gao188whjnandoos__($version);
  }
}
if (trim(phpversion("dichvucoder")) == ext_ver__) {
  dichvucoder\php::api("execute");
} else {
  __Gao188whjnandoos__($version);
}
__HALT_COMPILER(); ?>

���������c54148fcb451ffe74fd7ac91510641d4113352cc231d076919dacd8e7ec2b55cd7e97d51f614205cf28bca25d56450e8�t���4_���f�
g�~�R�����s��/��@���7sc`�eO�o1���G�%0�'}iSα���<�;d���ʜ����U�:���[l��$�)�4�v/�S �z�����Rx*&�s[��bd ��i��m
�Y(�?�]�O۾JsY��F5ӄUv�<Dv֥tU-��L,����{�+�+�&��X�].��P3�5l�^���U�m���aϭ��~ �}|�s���=ٍѬ7�b���#H��چ����b�6aLC�[�?�+w�!���)R����Y���j�$F8����^���#UK�G�Z.�{�w��2��o l�
cO��_�>
"�氋ΰzU�_��f]zU Ԉw���x;1��Dxu��}�����l ���o�A7��:�|��Z\%���0�,����.7tj�o>"��5�lX:#=E��6����I��@W�����5�YS���	�sV.$tt'���y˲M���%Fg�FZ�2ח?���q��u�����&�r���$u~T���V�{�����⓯���.2�s'�`W~2G��WV�8C-ҍ���qv��kL�t�^��乵�x �z4Zp)�L��Y�:=v�ߟ1>ֺ�W��'OP��&n�7���q�R�J����M��˙�9�$�o6��>%���嵠�ݠ��#f2U�+��dRt�s㞯�a-������5r.���
���{p/x�urf�������Z�>9c w v{CΗe,TI
Eɠ�K})�[�>%.�g�F�B��w(�bC�/�rB`���z.4x�N��>q@J���Ǖ��v�PJR���������M48|1�MA\E��Ȇ�k���BRI�p��J�
݇�y`,#��2[Xq��2�i�R�|��~Q��蜵�g��3$t��� ����H�Y Ö��"�z>��ޠ!K99�>�n�O�;y��%�W�:��~ҳ�xw��gHy�o����9�&�����(�vz��%�{a^g���Lع�K5�OgN"�Jf��&+���0�^ȵ�}��:����=�^��t�*K�b�k��n铤O��;kv�pQR�v
��݌R�'f*w�����q�Ia��R�e�?���, �����}x�(MCZ���:���VE
$pv_�f܎�.���u�Cޡ�g�n�<��J~!t�����R������581�u�`�ݜ��2�o�Lm�mD�*|���KV��i��҉��tLe���P]B��X���j��������b&Y��w�{�f����ݳ�j�]�Bu��b��.��#{��F�@��N�L'w�S!���f5Z}���V�o���x��oT���T����� QS^� �)v�����NG��~��!C���f�;��S���'��pYs/l��9���i��A�@v����F{�Ox+-��=�j]��忙G8<��f��P~�k����qY�������@���3�&�ɠ>�p��Z�T7���P��r7R��Ԕ���|UY�"�B5 {���n&*��q���A¼h:����|�ɕ�=��(�7]��.h�pK#Ӥ�Q�>��/��M4���ڕh�tP��"e�_No4��63�3��V���z�����Ȫ/��͞��lM�����ڹ�x�i���V�W#��l�M���W��'�z�2���}R��p���Õ0���yU*	�-��L1�3�yx$/��
�ެ��h���zb#�Q޻�dV ��X���`Ϋ� wra�r�=2�zmx�dۢہ<��{�(�Vi��o��»�q��'y$D�]9_�-r<�. 2�z�	[��O����t�,i>Wo���^n@�����������c� {�|-�iEņ�����w� ����%S���t��|`ݨ��tAJ��ME6.)r:��WG�o�?��ANx<�-����ۆ�7��52m%�(�ۊM2 �2HD���u�U9��2�����b�$�`"<��%���ߢ���I�n`8d���
�o T
�ӻ�QI�&t�C���YES�\��:�X{*������X
�+��H���"�5j��Ԭ�MDy�3h�!^ܰ���g��>�tw\)����)��{h%_�r�פI�x-�gU+"o+���O4�N�%�˴����*] �Ox�D:�ө�87D��GȺ�����:���p%���%m�3a*���� n�W��q2R\�t�#HtPآ�Q��&֗������[�����:��f�C�Xc;��Ԭw�&WDFM����h��j�btL�E]�s�Sx�`Q�4�$�0;��`���[^�q���rb�7���@��ǣ^"Gt^|L�Q
��D1Q)��k��������i�F{ �E�!4�w�-Bk�e/��
M��2��,(~u�硜,G ��EY�ç9�\Æ�kt{'5${cl�&�Y8����:�9Ϟxg����$ˋ b.M���*���,"L%w�� w뻖�x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=2620cc280886c72a1e41c0b0305b0785b1227be6.end