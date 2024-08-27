<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11bc4a3c7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Security; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Security\Recaptcha\Recaptcha; use Pmpr\Module\Security\Setting\Setting; class Security extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\123\x65\143\165\162\x69\164\x79", PR__MDL__SECURITY); }, Constants::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto uqqaiagaeqgqgaiy; } Setting::symcgieuakksimmu(); uqqaiagaeqgqgaiy: Recaptcha::symcgieuakksimmu(); } }
