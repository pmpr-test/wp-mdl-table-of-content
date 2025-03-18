<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4bfd4bf7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\TableOfContent; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { public function esciskwmewkgwaik() : array { return Setting::symcgieuakksimmu()->esciskwmewkgwaik(); } public function gmiiaymeiwkykcym(string $ewgwqamkygiqaawc, bool $boeioycsyqgqmoeu = true) : bool { $yuumukkaswwoywya = ''; foreach ($this->weysguygiseoukqw(Setting::skqaqgkgaueeyosa, []) as $iuimqckcgwwkgygo) { if ($boeioycsyqgqmoeu) { $yuumukkaswwoywya .= "h{$iuimqckcgwwkgygo}:not([data-translate]), h{$iuimqckcgwwkgygo}[data-translate='no'],"; } else { $yuumukkaswwoywya .= "h{$iuimqckcgwwkgygo}:not([id]),"; } } $yuumukkaswwoywya = rtrim($yuumukkaswwoywya, ','); return !$this->caokeucsksukesyo()->gkksucgseqqemesc()->has(stripslashes($ewgwqamkygiqaawc), $yuumukkaswwoywya); } }
