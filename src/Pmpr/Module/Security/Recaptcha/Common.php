<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e424209868             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Security\Recaptcha; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Module\Security\Container; class Common extends Container { const mmeksogaieuuikmq = "\x69\x6e\x63\x6f\162\x72\x65\x63\x74"; const uqqesukysscwmimw = "\x45\x52\122\x4f\122\x5f\x4e\117\137\113\105\x59\123"; const iaaswmggymkykcys = "\x52\105\x43\101\x50\x54\x43\110\101\137\x41\104\104\x45\x44"; const ewiwasqsgesysueq = "\x6d\165\154\x74\151\x70\154\x65\x5f\x62\x6c\x6f\143\153\x73"; const siuiuwsyuaaeyoso = "\105\x52\x52\117\x52\x5f\127\x52\x4f\116\x47\137\x53\x45\x43\122\105\124"; const qceqiuuakwieousk = "\126\105\122\x49\x46\x49\103\101\124\111\x4f\116\137\x46\x41\x49\114\x45\104"; const uaowqiioakckyisq = "\x6d\151\163\163\151\156\x67\x2d\151\x6e\x70\165\164\55\x73\x65\143\162\145\x74"; const waykswawkyiyamkc = "\151\156\x76\141\154\151\x64\55\x69\156\x70\x75\164\x2d\x73\145\x63\x72\x65\x74"; const ouigakuqekauuiae = "\x69\x6e\143\157\x72\x72\145\x63\x74\x2d\143\x61\x70\x74\143\x68\x61\x2d\x73\157\154"; const omkowsgwgsgiwaoa = "\x52\x45\103\x41\x50\x54\103\110\101\x5f\123\x4d\101\x4c\114\137\x53\103\x4f\122\105"; const mmqiaskgsaymagmk = "\122\x45\103\x41\120\124\x43\110\101\137\116\117\x5f\122\x45\x53\120\x4f\x4e\x53\x45"; const uyioyycseoqomeoq = "\122\105\103\x41\120\124\x43\x48\x41\x5f\105\x4d\x50\x54\131\137\x52\x45\123\x50\x4f\116\123\105"; const aaskskmcwakmsogi = "\147\x2d\162\145\x63\141\160\164\143\150\141\x2d\x72\x65\163\x70\x6f\156\163\x65"; const agkkoeoygiqmweai = "\x67\x2d\162\x65\x63\141\x70\164\x63\150\x61\55\162\145\x73\160\x6f\156\x73\145\x2d\143\150\x65\x63\x6b"; public function msuoeiysquuigeio() { return $this->weysguygiseoukqw(Setting::auugqowqueaocgsu, Setting::wceagiqwmmkosoqc); } public function ayseokmqycoqaigc() : bool { return $this->weysguygiseoukqw(Setting::osoeuigkqaueacqg) && $this->weysguygiseoukqw(Setting::vagagcuyyeiqoikg) && $this->weysguygiseoukqw(Setting::mkuaccemgegcsyuq); } public function ewwueaqgyucuiega($okomeuoyuwcwaaui = null) : bool { if ($okomeuoyuwcwaaui) { goto ywqgcegomwaiuquc; } $okomeuoyuwcwaaui = DecoratorUser::ksgkoukcicwkkaum(); ywqgcegomwaiuquc: $qqkyekmackggcick = false; global $current_user; if (!($okomeuoyuwcwaaui && isset($current_user->roles[0]))) { goto wmmggowmigekyoso; } $qqkyekmackggcick = in_array($current_user->roles[0], $this->weysguygiseoukqw(Setting::iogswiaewsiiqyac, [])); wmmggowmigekyoso: return $qqkyekmackggcick; } public function wmkggougegmmywqg($ccamueccusigaaio, $okomeuoyuwcwaaui = null) : bool { if ($okomeuoyuwcwaaui) { goto soqqemyioggmoakg; } $okomeuoyuwcwaaui = DecoratorUser::ksgkoukcicwkkaum(); soqqemyioggmoakg: return !self::ewwueaqgyucuiega($okomeuoyuwcwaaui) && in_array($ccamueccusigaaio, $this->weysguygiseoukqw(Setting::qsiqukssagkcqqig, [])); } public function oymykwiocwqeicuw() : bool { $gmeoaiyogiokeeau = false; $oyaokckqkgoscygw = (array) $this->weysguygiseoukqw(Setting::geoseomocwukewek, []); if (!$oyaokckqkgoscygw) { goto acaqummmoyiemqss; } $wmgqwuwkogoacccs = ManipulateUser::meymqemgekqiawec(); $gmeoaiyogiokeeau = $wmgqwuwkogoacccs && in_array($wmgqwuwkogoacccs, $oyaokckqkgoscygw); acaqummmoyiemqss: return $gmeoaiyogiokeeau; } public function ioekaiqqsceqkiwo() : array { return Setting::symcgieuakksimmu()->ioekaiqqsceqkiwo(); } public function sagusgigmkeysock($ymacoouqwcqwwagu = self::mmeksogaieuuikmq, $koaqeegoeiaiccse = false) { $wumguikkgaigkoee = [ self::uyioyycseoqomeoq => __("\125\163\x65\162\40\162\x65\163\160\157\x6e\163\145\x20\151\163\40\155\151\163\x73\151\156\147\56", PR__MDL__SECURITY), self::uaowqiioakckyisq => __("\x53\145\143\162\x65\x74\40\113\x65\x79\x20\x69\x73\x20\155\151\163\x73\x69\156\x67\56", PR__MDL__SECURITY), self::waykswawkyiyamkc => sprintf("\x25\x73\40\x25\x73\x20\45\163\x2e", ManipulateHTML::ciuuiyckmsygceis(__("\123\145\143\x72\145\164\40\113\x65\171\40\151\x73\x20\x69\156\x76\141\x6c\x69\x64\x2e", PR__MDL__SECURITY)), ManipulateHTML::uuccukgasskgimsq("\141", ["\150\162\x65\146" => "\150\164\x74\x70\x73\72\x2f\x2f\x77\167\167\x2e\147\157\157\147\x6c\145\56\x63\157\x6d\57\x72\x65\x63\x61\160\x74\143\150\x61\57\x61\144\155\151\156\x23\x6c\x69\x73\164"], __("\103\x68\x65\143\x6b\x20\x79\157\165\x72\40\144\x6f\x6d\141\x69\x6e\40\x63\157\x6e\x66\151\147\x75\x72\141\164\x69\x6f\156\163", PR__MDL__SECURITY)), __("\141\156\x64\x20\145\x6e\164\145\162\x20\151\x74\40\x61\x67\141\151\156", PR__MDL__SECURITY)), self::ouigakuqekauuiae => __("\125\163\x65\162\40\162\x65\163\x70\157\x6e\x73\x65\40\x69\163\x20\x69\156\166\x61\x6c\151\x64", PR__MDL__SECURITY), self::mmeksogaieuuikmq => __("\131\x6f\165\x20\150\141\166\145\x20\145\156\164\x65\x72\145\144\40\141\156\40\151\x6e\x63\157\162\x72\x65\143\x74\x20\162\x65\103\x41\x50\x54\103\x48\x41\x20\166\x61\x6c\x75\145\x2e", PR__MDL__SECURITY), self::ewiwasqsgesysueq => __("\115\x6f\x72\x65\40\x74\150\141\x6e\x20\157\x6e\145\x20\162\x65\103\x41\x50\124\103\x48\x41\40\x68\x61\163\x20\142\x65\x65\x6e\x20\146\x6f\165\x6e\144\40\x69\x6e\x20\x74\150\145\40\x63\165\162\162\145\x6e\x74\x20\146\157\162\x6d\x2e\x20\x50\x6c\x65\x61\x73\x65\40\x72\x65\155\x6f\x76\x65\40\141\154\154\40\165\x6e\x6e\x65\x63\x65\163\x73\x61\x72\x79\40\162\x65\x43\x41\x50\x54\103\x48\x41\40\146\x69\145\x6c\144\163\x20\x74\157\x20\x6d\x61\153\x65\40\151\164\40\167\x6f\162\153\40\160\162\157\160\x65\162\154\x79\x2e", PR__MDL__SECURITY), self::omkowsgwgsgiwaoa => __("\x72\145\103\141\x70\164\143\150\141\x20\166\x33\40\164\x65\x73\164\x20\146\141\151\154\145\144", PR__MDL__SECURITY), ]; if (isset($wumguikkgaigkoee[$ymacoouqwcqwwagu])) { goto suswcqoyyqkkquuo; } $uamcoiueqaamsqma = $wumguikkgaigkoee["\x69\156\143\x6f\x72\162\145\x63\164"]; goto eeqesooyqagwawae; suswcqoyyqkkquuo: $uamcoiueqaamsqma = $wumguikkgaigkoee[$ymacoouqwcqwwagu]; eeqesooyqagwawae: $uamcoiueqaamsqma = __("\122\145\x63\x61\160\164\143\150\141", PR__MDL__SECURITY) . "\x3a\x20{$uamcoiueqaamsqma}"; if (!$koaqeegoeiaiccse) { goto oqugqwcyomiaaoqu; } echo $uamcoiueqaamsqma; oqugqwcyomiaaoqu: return $uamcoiueqaamsqma; } }
