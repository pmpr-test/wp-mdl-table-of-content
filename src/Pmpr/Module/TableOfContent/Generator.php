<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46f63b4c3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\TableOfContent; use DateTime; use Pmpr\Common\Foundation\API\Translate\Translate; use Pmpr\Common\Foundation\Interfaces\Constants; class Generator extends Container { const eggmsegugikoumgg = TableOfContent::qmkskkcukqigsimq . "\156\x65\170\164\137\164\x72\141\156\163\x6c\x61\164\151\x6f\156\x5f\164\162\171"; public function eycawuocyiikycoe() { return $this->weysguygiseoukqw(Setting::skqaqgkgaueeyosa, []); } public function wmemoiyeycwgyaee() { return $this->weysguygiseoukqw(Setting::ugsawkoagcgismmc, 1); } public function ygcwyiyqoioacksa($ewgwqamkygiqaawc) : array { $meyiiwcswqmuggyg = []; if ($ewgwqamkygiqaawc) { if (preg_match_all("\57\50\x3c\150\50\133\62\55\66\135\173\61\x7d\51\133\136\x3e\135\52\76\x29\x28\x2e\x2a\x29\x3c\x5c\x2f\x68\134\62\x3e\57\155\163\x75\125", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { $xwwgygqkqwuaqwsa = $this->eycawuocyiikycoe(); if (5 !== count($xwwgygqkqwuaqwsa)) { $usewmcecmksoaaoy = []; for ($ciyackuwsqkoqese = 0, $magakwkyyugoyiue = count($meyiiwcswqmuggyg); $ciyackuwsqkoqese < $magakwkyyugoyiue; $ciyackuwsqkoqese++) { if (in_array($meyiiwcswqmuggyg[$ciyackuwsqkoqese][2], $xwwgygqkqwuaqwsa, true)) { $usewmcecmksoaaoy[] = $meyiiwcswqmuggyg[$ciyackuwsqkoqese]; } } $meyiiwcswqmuggyg = $usewmcecmksoaaoy; } $usewmcecmksoaaoy = []; for ($ciyackuwsqkoqese = 0, $magakwkyyugoyiue = count($meyiiwcswqmuggyg); $ciyackuwsqkoqese < $magakwkyyugoyiue; $ciyackuwsqkoqese++) { if (trim(strip_tags($meyiiwcswqmuggyg[$ciyackuwsqkoqese][0])) != false) { $usewmcecmksoaaoy[] = $meyiiwcswqmuggyg[$ciyackuwsqkoqese]; } } if (count($meyiiwcswqmuggyg) !== count($usewmcecmksoaaoy)) { $meyiiwcswqmuggyg = $usewmcecmksoaaoy; } } } return $meyiiwcswqmuggyg; } public function yasiwmiysyuokqki($meqocwsecsywiiqs, bool $mcmaiqckgiuqayau = false) { $ksaameoqigiaoigg = false; if ($meqocwsecsywiiqs) { $ksaameoqigiaoigg = trim(strip_tags($meqocwsecsywiiqs)); $ksaameoqigiaoigg = remove_accents($ksaameoqigiaoigg); $ksaameoqigiaoigg = str_replace(array("\15", "\xa", "\12\xd", "\15\xa", "\46\x61\x6d\160\x3b"), array("\x20", "\x20", "\40", "\40", ''), $ksaameoqigiaoigg); if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->qeegmakycwwycmcm($ksaameoqigiaoigg)) { if ($mcmaiqckgiuqayau) { $kcqgsouywoiekwak = $this->ymkuuqeicqgkwaqw($ksaameoqigiaoigg); if ($kcqgsouywoiekwak !== $ksaameoqigiaoigg) { $ksaameoqigiaoigg = $kcqgsouywoiekwak; } else { $ksaameoqigiaoigg = ''; } } else { $ksaameoqigiaoigg = ''; } } if ($ksaameoqigiaoigg) { $ksaameoqigiaoigg = preg_replace("\57\x5b\136\x61\x2d\x7a\x41\x2d\132\60\x2d\x39\40\134\x2d\x5f\x5d\x2a\57", '', $ksaameoqigiaoigg); if (is_string($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = rtrim($ksaameoqigiaoigg); $ksaameoqigiaoigg = str_replace(["\x20\40", "\x20"], "\x5f", $ksaameoqigiaoigg); $ksaameoqigiaoigg = rtrim($ksaameoqigiaoigg, "\x2d\137"); $ksaameoqigiaoigg = strtolower($ksaameoqigiaoigg); $ksaameoqigiaoigg = str_replace(["\x5f", "\x2d\x2d"], "\55", $ksaameoqigiaoigg); } } } return $ksaameoqigiaoigg; } public function ymkuuqeicqgkwaqw($cmwygeyygwqaemaq) { return Translate::symcgieuakksimmu()->translate($cmwygeyygwqaemaq, "\x65\156", "\x66\x61"); } public function goeuwocuuigcicgu($post, bool $cwwowqyuwccuykom = false) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (in_array($seumokooiykcomco->gueasuouwqysmomu($post), $this->esciskwmewkgwaik(), true)) { $aokagokqyuysuksm = $seumokooiykcomco->iooowgsqoyqseyuu($post); $semuyuaomycumuss = true; if (!$cwwowqyuwccuykom) { $gkkcwyoekkkuemwm = $seumokooiykcomco->igawqaomowicuayw(self::eggmsegugikoumgg, $aokagokqyuysuksm, true); if ($gkkcwyoekkkuemwm instanceof DateTime) { $keaccasqgkaqawwm = new DateTime("\x74\x6f\x64\x61\171"); $asuaciiookaciacq = $keaccasqgkaqawwm->diff($gkkcwyoekkkuemwm); $semuyuaomycumuss = $asuaciiookaciacq->d <= 0; } } if ($semuyuaomycumuss && !$this->qakiyayqiysiqqeo($post)) { $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw(self::eggmsegugikoumgg, new DateTime("\164\157\x6d\157\162\162\x6f\167"), $aokagokqyuysuksm); } } return $post; } public function qakiyayqiysiqqeo(&$post) : bool { $ecukkacusqswqoem = false; if ($ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($post, Constants::egkuckyqcaygmymg)) { $ewgwqamkygiqaawc = stripslashes($ewgwqamkygiqaawc); $miuewyumoowsegya = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Translator::meawmmkyieiykykg) === Constants::ON; if (!$this->gmiiaymeiwkykcym($ewgwqamkygiqaawc, $miuewyumoowsegya)) { $ksiyqouuaoymsycg = []; $moyaaaascoeowegu = []; $this->eqqgsimcmcmskccs($ksiyqouuaoymsycg, $moyaaaascoeowegu, $ewgwqamkygiqaawc, $ecukkacusqswqoem, $miuewyumoowsegya); $ewgwqamkygiqaawc = $this->mugwuiaqwqwwgscm($ksiyqouuaoymsycg, $moyaaaascoeowegu, $ewgwqamkygiqaawc); $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($post, [Constants::egkuckyqcaygmymg => $ewgwqamkygiqaawc]); } } return $ecukkacusqswqoem; } public function uioymssscymciyca($ewgwqamkygiqaawc, array $ywmkwiwkosakssii = []) : string { $ggauoeuaesiymgee = ["\154\151\x5f\x61\x74\x74\x72\x73" => ["\x63\154\x61\x73\x73" => "\143\x6d\163\55\x74\x6f\x63\x2d\154\x69\x73\164\x2d\151\164\x65\155"], "\x6c\x69\x6e\x6b\137\x61\164\x74\162\163" => ["\143\x6c\x61\x73\x73" => "\143\x6d\163\55\164\x6f\143\55\x6c\x69\156\x6b"], "\x75\x6c\x5f\141\x74\164\162\x73" => ["\143\x6c\141\163\x73" => "\143\x6d\x73\55\x74\x6f\143\x2d\154\x69\163\164"], "\163\x70\x61\x6e\x5f\141\164\164\x72\163" => []]; $ggauoeuaesiymgee = $this->ocksiywmkyaqseou("\164\x6f\143\137\x65\x78\164\x72\141\x63\164\x65\x64\x5f\x69\x74\x65\155\163\137\x61\x72\x67\163", $ggauoeuaesiymgee, $ywmkwiwkosakssii, $ewgwqamkygiqaawc); $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); $nsmgceoqaqogqmuw = ''; $meyiiwcswqmuggyg = $this->ygcwyiyqoioacksa($ewgwqamkygiqaawc); if (count($meyiiwcswqmuggyg) >= $this->wmemoiyeycwgyaee()) { $gemkcygmuiegaeka = $this->weysguygiseoukqw(Setting::igcuqkcuaqkusggc, false); for ($ciyackuwsqkoqese = 0, $magakwkyyugoyiue = count($meyiiwcswqmuggyg); $ciyackuwsqkoqese < $magakwkyyugoyiue; $ciyackuwsqkoqese++) { $igqsaukqcqscimok = $meyiiwcswqmuggyg[$ciyackuwsqkoqese][0]; if (is_string($igqsaukqcqscimok) && !$gemkcygmuiegaeka) { $nsmgceoqaqogqmuw .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\154\151", $ywmkwiwkosakssii["\154\x69\137\141\164\x74\x72\163"], $this->qmgcisuuikgmqcsu($meyiiwcswqmuggyg[$ciyackuwsqkoqese], $ywmkwiwkosakssii["\x6c\151\156\x6b\137\141\164\164\x72\x73"], $ywmkwiwkosakssii["\x73\160\141\x6e\137\x61\x74\x74\162\x73"])); } } if ($gemkcygmuiegaeka) { $nsmgceoqaqogqmuw = $this->okwmkqcuoakucmyu($meyiiwcswqmuggyg, $ywmkwiwkosakssii); } } return $nsmgceoqaqogqmuw; } public function okwmkqcuoakucmyu($meyiiwcswqmuggyg, array $ywmkwiwkosakssii = []) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iyuskgqygaeqsewm = $swqimwqeweekeusq->qgsekwygcgawekeq("\x75\154", $ywmkwiwkosakssii["\x75\154\137\x61\x74\x74\162\x73"], false); $soagokkgcagacgac = $swqimwqeweekeusq->qgsekwygcgawekeq("\154\x69", $ywmkwiwkosakssii["\154\x69\137\141\x74\x74\x72\x73"], false); $nsmgceoqaqogqmuw = ''; $kwiicckswgyuqegs = 100; $cmokcaggeciqumig = null; for ($ciyackuwsqkoqese = 0, $magakwkyyugoyiue = count($meyiiwcswqmuggyg); $ciyackuwsqkoqese < $magakwkyyugoyiue; $ciyackuwsqkoqese++) { if ($kwiicckswgyuqegs > $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]) { $kwiicckswgyuqegs = (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]; } } $cmokcaggeciqumig = $kwiicckswgyuqegs; for ($ciyackuwsqkoqese = 0, $magakwkyyugoyiue = count($meyiiwcswqmuggyg); $ciyackuwsqkoqese < $magakwkyyugoyiue; $ciyackuwsqkoqese++) { if ($kwiicckswgyuqegs === (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]) { $nsmgceoqaqogqmuw .= $soagokkgcagacgac; } if ($kwiicckswgyuqegs !== (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]) { for ($kwiicckswgyuqegs; $kwiicckswgyuqegs < (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]; $kwiicckswgyuqegs++) { $nsmgceoqaqogqmuw .= $iyuskgqygaeqsewm . $soagokkgcagacgac; } } if (in_array($meyiiwcswqmuggyg[$ciyackuwsqkoqese][2], $this->eycawuocyiikycoe(), true)) { $nsmgceoqaqogqmuw .= $this->qmgcisuuikgmqcsu($meyiiwcswqmuggyg[$ciyackuwsqkoqese], $ywmkwiwkosakssii["\x6c\x69\x6e\153\x5f\x61\164\x74\162\163"], $ywmkwiwkosakssii["\163\160\141\156\137\x61\164\x74\x72\163"]); } if ($ciyackuwsqkoqese !== count($meyiiwcswqmuggyg) - 1) { if ($kwiicckswgyuqegs > (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese + 1][2]) { for ($kwiicckswgyuqegs; $kwiicckswgyuqegs > (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese + 1][2]; $kwiicckswgyuqegs--) { $nsmgceoqaqogqmuw .= "\74\57\x6c\x69\76\x3c\x2f\165\x6c\x3e"; } } if ($kwiicckswgyuqegs == (int) @$meyiiwcswqmuggyg[$ciyackuwsqkoqese + 1][2]) { $nsmgceoqaqogqmuw .= "\74\x2f\154\x69\x3e"; } } else { for ($kwiicckswgyuqegs; $kwiicckswgyuqegs >= $cmokcaggeciqumig; $kwiicckswgyuqegs--) { $nsmgceoqaqogqmuw .= "\74\57\154\151\x3e"; if ($kwiicckswgyuqegs != $cmokcaggeciqumig) { $nsmgceoqaqogqmuw .= "\74\x2f\x75\154\x3e"; } } } } return $nsmgceoqaqogqmuw; } public function qmgcisuuikgmqcsu($igqsaukqcqscimok, $agcckwqauosguaqs = [], $aqqkqgisgmqegkuu = []) : string { $akesyikoueogakwq = $this->caokeucsksukesyo()->gkksucgseqqemesc()->waecsyqmwascmqoa($igqsaukqcqscimok[0], "\x68{$igqsaukqcqscimok[2]}", "\151\x64"); $meqocwsecsywiiqs = $igqsaukqcqscimok[3]; if ($meqocwsecsywiiqs) { $kqywgoqsmuswammk = "\163\160\141\156"; $wwgucssaecqekuek = $aqqkqgisgmqegkuu; if ($akesyikoueogakwq) { $wwgucssaecqekuek = $agcckwqauosguaqs; $kqywgoqsmuswammk = "\141"; $wwgucssaecqekuek["\x68\162\145\x66"] = "\43{$akesyikoueogakwq}"; } $akesyikoueogakwq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek, $meqocwsecsywiiqs); } return $akesyikoueogakwq; } public function mugwuiaqwqwwgscm($ksiyqouuaoymsycg = false, $moyaaaascoeowegu = false, string $ewgwqamkygiqaawc = '') : string { if (is_array($ksiyqouuaoymsycg) && $ksiyqouuaoymsycg && is_array($moyaaaascoeowegu) && $moyaaaascoeowegu && $ewgwqamkygiqaawc) { if (function_exists("\x6d\142\137\x73\x74\162\160\x6f\x73")) { foreach ($ksiyqouuaoymsycg as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($moyaaaascoeowegu[$uusmaiomayssaecw])) { $ewgwqamkygiqaawc = mb_substr($ewgwqamkygiqaawc, 0, mb_strpos($ewgwqamkygiqaawc, $eqgoocgaqwqcimie)) . $moyaaaascoeowegu[$uusmaiomayssaecw] . mb_substr($ewgwqamkygiqaawc, mb_strpos($ewgwqamkygiqaawc, $eqgoocgaqwqcimie) + mb_strlen($eqgoocgaqwqcimie)); } } } else { foreach ($ksiyqouuaoymsycg as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($moyaaaascoeowegu[$uusmaiomayssaecw])) { $ewgwqamkygiqaawc = substr_replace($ewgwqamkygiqaawc, $moyaaaascoeowegu[$uusmaiomayssaecw], strpos($ewgwqamkygiqaawc, $eqgoocgaqwqcimie), strlen($eqgoocgaqwqcimie)); } } } } return $ewgwqamkygiqaawc; } public function eqqgsimcmcmskccs(&$ksiyqouuaoymsycg, &$moyaaaascoeowegu, $ewgwqamkygiqaawc, bool &$icimsyceeegakcaw = true, bool $mcmaiqckgiuqayau = false) { $ogwecsececckqomu = 4; $ksiyqouuaoymsycg = $moyaaaascoeowegu = []; $meyiiwcswqmuggyg = $this->ygcwyiyqoioacksa($ewgwqamkygiqaawc); if (count($meyiiwcswqmuggyg) >= $this->wmemoiyeycwgyaee()) { $icimsyceeegakcaw = true; $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); for ($ciyackuwsqkoqese = 0, $magakwkyyugoyiue = count($meyiiwcswqmuggyg); $ciyackuwsqkoqese < $magakwkyyugoyiue; $ciyackuwsqkoqese++) { $iuimqckcgwwkgygo = $meyiiwcswqmuggyg[$ciyackuwsqkoqese][0]; $kqywgoqsmuswammk = "\x68{$meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]}"; $meqocwsecsywiiqs = $meyiiwcswqmuggyg[$ciyackuwsqkoqese][3]; if ($meqocwsecsywiiqs && is_string($meqocwsecsywiiqs)) { $iakkeikwceeomgyq = $iuimqckcgwwkgygo; $iuimqckcgwwkgygo = stripcslashes($iuimqckcgwwkgygo); $aokagokqyuysuksm = $smuykqsageuocuos->waecsyqmwascmqoa($iuimqckcgwwkgygo, $kqywgoqsmuswammk, Constants::gouqcwikiiygyasc); $kcqgsouywoiekwak = Constants::ioyokcgwaowoqskk; if (strlen($aokagokqyuysuksm) <= $ogwecsececckqomu) { if ($akesyikoueogakwq = $this->yasiwmiysyuokqki($meqocwsecsywiiqs, $mcmaiqckgiuqayau)) { $kcqgsouywoiekwak = Constants::wiquocqckkqkmayo; } } else { $akesyikoueogakwq = $aokagokqyuysuksm; } if (!$akesyikoueogakwq) { $akesyikoueogakwq = $yyauwyaeewsickwk->uniqid($ogwecsececckqomu); $icimsyceeegakcaw = false; } if (isset($moyaaaascoeowegu[$akesyikoueogakwq])) { $akesyikoueogakwq = $akesyikoueogakwq . "\55" . $yyauwyaeewsickwk->uniqid($ogwecsececckqomu); } $ksiyqouuaoymsycg[$akesyikoueogakwq] = $iakkeikwceeomgyq; $moyaaaascoeowegu[$akesyikoueogakwq] = $smuykqsageuocuos->igmaewykumgwoaoy($iuimqckcgwwkgygo, [$kqywgoqsmuswammk => [Constants::gouqcwikiiygyasc => $akesyikoueogakwq, "\x64\141\164\141\x2d\x74\162\x61\156\163\154\141\x74\145" => $kcqgsouywoiekwak]]); } } } } }
