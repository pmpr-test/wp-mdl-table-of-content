<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3f622eb1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\TableOfContent; use DateTime; use Pmpr\Common\Foundation\API\Translate\Translate; use Pmpr\Common\Foundation\Interfaces\Constants; class Generator extends Container { const eggmsegugikoumgg = TableOfContent::qmkskkcukqigsimq . 'next_translation_try'; public function eycawuocyiikycoe() { return $this->weysguygiseoukqw(Setting::skqaqgkgaueeyosa, []); } public function wmemoiyeycwgyaee() { return $this->weysguygiseoukqw(Setting::ugsawkoagcgismmc, 1); } public function ygcwyiyqoioacksa($ewgwqamkygiqaawc) : array { $meyiiwcswqmuggyg = []; if ($ewgwqamkygiqaawc) { if (preg_match_all('/(<h([2-6]{1})[^>]*>)(.*)<\\/h\\2>/msuU', $ewgwqamkygiqaawc, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { $xwwgygqkqwuaqwsa = $this->eycawuocyiikycoe(); if (5 !== count($xwwgygqkqwuaqwsa)) { $usewmcecmksoaaoy = []; for ($ciyackuwsqkoqese = 0, $magakwkyyugoyiue = count($meyiiwcswqmuggyg); $ciyackuwsqkoqese < $magakwkyyugoyiue; $ciyackuwsqkoqese++) { if (in_array($meyiiwcswqmuggyg[$ciyackuwsqkoqese][2], $xwwgygqkqwuaqwsa, true)) { $usewmcecmksoaaoy[] = $meyiiwcswqmuggyg[$ciyackuwsqkoqese]; } } $meyiiwcswqmuggyg = $usewmcecmksoaaoy; } $usewmcecmksoaaoy = []; for ($ciyackuwsqkoqese = 0, $magakwkyyugoyiue = count($meyiiwcswqmuggyg); $ciyackuwsqkoqese < $magakwkyyugoyiue; $ciyackuwsqkoqese++) { if (trim(strip_tags($meyiiwcswqmuggyg[$ciyackuwsqkoqese][0]))) { $usewmcecmksoaaoy[] = $meyiiwcswqmuggyg[$ciyackuwsqkoqese]; } } if (count($meyiiwcswqmuggyg) !== count($usewmcecmksoaaoy)) { $meyiiwcswqmuggyg = $usewmcecmksoaaoy; } } } return $meyiiwcswqmuggyg; } public function yasiwmiysyuokqki($meqocwsecsywiiqs, bool $mcmaiqckgiuqayau = false) { $ksaameoqigiaoigg = false; if ($meqocwsecsywiiqs) { $ksaameoqigiaoigg = trim(strip_tags($meqocwsecsywiiqs)); $ksaameoqigiaoigg = remove_accents($ksaameoqigiaoigg); $ksaameoqigiaoigg = str_replace(array("\r", "\n", "\n\r", "\r\n", '&amp;'), array(' ', ' ', ' ', ' ', ''), $ksaameoqigiaoigg); if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->qeegmakycwwycmcm($ksaameoqigiaoigg)) { if ($mcmaiqckgiuqayau) { $kcqgsouywoiekwak = $this->ymkuuqeicqgkwaqw($ksaameoqigiaoigg); if ($kcqgsouywoiekwak !== $ksaameoqigiaoigg) { $ksaameoqigiaoigg = $kcqgsouywoiekwak; } else { $ksaameoqigiaoigg = ''; } } else { $ksaameoqigiaoigg = ''; } } if ($ksaameoqigiaoigg) { $ksaameoqigiaoigg = preg_replace('/[^a-zA-Z0-9 \\-_]*/', '', $ksaameoqigiaoigg); if (is_string($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = rtrim($ksaameoqigiaoigg); $ksaameoqigiaoigg = str_replace(['  ', ' '], '_', $ksaameoqigiaoigg); $ksaameoqigiaoigg = rtrim($ksaameoqigiaoigg, '-_'); $ksaameoqigiaoigg = strtolower($ksaameoqigiaoigg); $ksaameoqigiaoigg = str_replace(['_', '--'], '-', $ksaameoqigiaoigg); } } } return $ksaameoqigiaoigg; } public function ymkuuqeicqgkwaqw($cmwygeyygwqaemaq) { return Translate::symcgieuakksimmu()->translate($cmwygeyygwqaemaq, 'en', 'fa'); } public function goeuwocuuigcicgu($post, bool $cwwowqyuwccuykom = false) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (in_array($seumokooiykcomco->gueasuouwqysmomu($post), $this->esciskwmewkgwaik(), true)) { $aokagokqyuysuksm = $seumokooiykcomco->iooowgsqoyqseyuu($post); $semuyuaomycumuss = true; if (!$cwwowqyuwccuykom) { $gkkcwyoekkkuemwm = $seumokooiykcomco->igawqaomowicuayw(self::eggmsegugikoumgg, $aokagokqyuysuksm, true); if ($gkkcwyoekkkuemwm instanceof DateTime) { $keaccasqgkaqawwm = new DateTime('today'); $asuaciiookaciacq = $keaccasqgkaqawwm->diff($gkkcwyoekkkuemwm); $semuyuaomycumuss = $asuaciiookaciacq->d <= 0; } } if ($semuyuaomycumuss && !$this->qakiyayqiysiqqeo($post)) { $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw(self::eggmsegugikoumgg, new DateTime('tomorrow'), $aokagokqyuysuksm); } } return $post; } public function qakiyayqiysiqqeo(&$post) : bool { $ecukkacusqswqoem = false; if ($ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($post, Constants::egkuckyqcaygmymg)) { $ewgwqamkygiqaawc = stripslashes($ewgwqamkygiqaawc); $miuewyumoowsegya = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Translator::meawmmkyieiykykg) === Constants::ON; if (!$this->gmiiaymeiwkykcym($ewgwqamkygiqaawc, $miuewyumoowsegya)) { $ksiyqouuaoymsycg = []; $moyaaaascoeowegu = []; $this->eqqgsimcmcmskccs($ksiyqouuaoymsycg, $moyaaaascoeowegu, $ewgwqamkygiqaawc, $ecukkacusqswqoem, $miuewyumoowsegya); $ewgwqamkygiqaawc = $this->mugwuiaqwqwwgscm($ksiyqouuaoymsycg, $moyaaaascoeowegu, $ewgwqamkygiqaawc); $post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($post, [Constants::egkuckyqcaygmymg => $ewgwqamkygiqaawc]); } } return $ecukkacusqswqoem; } public function uioymssscymciyca($ewgwqamkygiqaawc, array $ywmkwiwkosakssii = []) : string { $ggauoeuaesiymgee = ['li_attrs' => ['class' => 'cms-toc-list-item'], 'link_attrs' => ['class' => 'cms-toc-link'], 'ul_attrs' => ['class' => 'cms-toc-list'], 'span_attrs' => [], 'add_number' => true]; $ggauoeuaesiymgee = $this->ocksiywmkyaqseou('toc_extracted_items_args', $ggauoeuaesiymgee, $ywmkwiwkosakssii, $ewgwqamkygiqaawc); $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); $nsmgceoqaqogqmuw = ''; $meyiiwcswqmuggyg = $this->ygcwyiyqoioacksa($ewgwqamkygiqaawc); if (count($meyiiwcswqmuggyg) >= $this->wmemoiyeycwgyaee()) { $gemkcygmuiegaeka = $this->weysguygiseoukqw(Setting::igcuqkcuaqkusggc, false); foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $igqsaukqcqscimok = $uammqaqiwgcmeska[0]; if (is_string($igqsaukqcqscimok) && !$gemkcygmuiegaeka) { $nsmgceoqaqogqmuw .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq('li', $ywmkwiwkosakssii['li_attrs'], $this->qmgcisuuikgmqcsu($uammqaqiwgcmeska, $ywmkwiwkosakssii['link_attrs'], $ywmkwiwkosakssii['span_attrs'])); } } if ($gemkcygmuiegaeka) { $nsmgceoqaqogqmuw = $this->okwmkqcuoakucmyu($meyiiwcswqmuggyg, $ywmkwiwkosakssii); } } return $nsmgceoqaqogqmuw; } public function okwmkqcuoakucmyu($meyiiwcswqmuggyg, array $ywmkwiwkosakssii = []) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iyuskgqygaeqsewm = $swqimwqeweekeusq->qgsekwygcgawekeq('ul', $ywmkwiwkosakssii['ul_attrs'], false); $soagokkgcagacgac = $swqimwqeweekeusq->qgsekwygcgawekeq('li', $ywmkwiwkosakssii['li_attrs'], false); $nsmgceoqaqogqmuw = ''; $kwiicckswgyuqegs = 100; $cmokcaggeciqumig = null; for ($ciyackuwsqkoqese = 0, $magakwkyyugoyiue = count($meyiiwcswqmuggyg); $ciyackuwsqkoqese < $magakwkyyugoyiue; $ciyackuwsqkoqese++) { if ($kwiicckswgyuqegs > $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]) { $kwiicckswgyuqegs = (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]; } } $cmokcaggeciqumig = $kwiicckswgyuqegs; $lsaysqoscaosaeaq = 1; for ($ciyackuwsqkoqese = 0, $magakwkyyugoyiue = count($meyiiwcswqmuggyg); $ciyackuwsqkoqese < $magakwkyyugoyiue; $ciyackuwsqkoqese++) { if ($kwiicckswgyuqegs === (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]) { $nsmgceoqaqogqmuw .= $soagokkgcagacgac; } if ($kwiicckswgyuqegs !== (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]) { for ($kwiicckswgyuqegs; $kwiicckswgyuqegs < (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]; $kwiicckswgyuqegs++) { $nsmgceoqaqogqmuw .= $iyuskgqygaeqsewm . $soagokkgcagacgac; } } $wyeeccuykyqyqyuq = $meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]; if (in_array($wyeeccuykyqyqyuq, $this->eycawuocyiikycoe(), true)) { $wgwkqsiagsyskcgk = $ywmkwiwkosakssii['add_number'] && $wyeeccuykyqyqyuq === '2'; $nsmgceoqaqogqmuw .= $this->qmgcisuuikgmqcsu($meyiiwcswqmuggyg[$ciyackuwsqkoqese], $ywmkwiwkosakssii['link_attrs'], $ywmkwiwkosakssii['span_attrs'], $wgwkqsiagsyskcgk, $lsaysqoscaosaeaq); if ($wgwkqsiagsyskcgk) { $lsaysqoscaosaeaq++; } } if ($ciyackuwsqkoqese !== count($meyiiwcswqmuggyg) - 1) { if ($kwiicckswgyuqegs > (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese + 1][2]) { for ($kwiicckswgyuqegs; $kwiicckswgyuqegs > (int) $meyiiwcswqmuggyg[$ciyackuwsqkoqese + 1][2]; $kwiicckswgyuqegs--) { $nsmgceoqaqogqmuw .= '</li></ul>'; } } if ($kwiicckswgyuqegs == (int) @$meyiiwcswqmuggyg[$ciyackuwsqkoqese + 1][2]) { $nsmgceoqaqogqmuw .= '</li>'; } } else { for ($kwiicckswgyuqegs; $kwiicckswgyuqegs >= $cmokcaggeciqumig; $kwiicckswgyuqegs--) { $nsmgceoqaqogqmuw .= '</li>'; if ($kwiicckswgyuqegs != $cmokcaggeciqumig) { $nsmgceoqaqogqmuw .= '</ul>'; } } } } return $nsmgceoqaqogqmuw; } public function qmgcisuuikgmqcsu($igqsaukqcqscimok, $agcckwqauosguaqs = [], $aqqkqgisgmqegkuu = [], bool $wgwkqsiagsyskcgk = false, $eusockqasqqmoess = '') : string { $akesyikoueogakwq = $this->caokeucsksukesyo()->gkksucgseqqemesc()->waecsyqmwascmqoa($igqsaukqcqscimok[0], "h{$igqsaukqcqscimok[2]}", 'id'); $meqocwsecsywiiqs = $igqsaukqcqscimok[3]; if ($meqocwsecsywiiqs) { $kqywgoqsmuswammk = 'span'; $wwgucssaecqekuek = $aqqkqgisgmqegkuu; if ($akesyikoueogakwq) { $wwgucssaecqekuek = $agcckwqauosguaqs; $kqywgoqsmuswammk = 'a'; $wwgucssaecqekuek['href'] = "#{$akesyikoueogakwq}"; } if ($wgwkqsiagsyskcgk) { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($eusockqasqqmoess) . '. ' . $meqocwsecsywiiqs; } $akesyikoueogakwq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek, $meqocwsecsywiiqs); } return $akesyikoueogakwq; } public function mugwuiaqwqwwgscm($ksiyqouuaoymsycg = false, $moyaaaascoeowegu = false, string $ewgwqamkygiqaawc = '') : string { if (is_array($ksiyqouuaoymsycg) && $ksiyqouuaoymsycg && is_array($moyaaaascoeowegu) && $moyaaaascoeowegu && $ewgwqamkygiqaawc) { if (function_exists('mb_strpos')) { foreach ($ksiyqouuaoymsycg as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($moyaaaascoeowegu[$uusmaiomayssaecw])) { $ewgwqamkygiqaawc = mb_substr($ewgwqamkygiqaawc, 0, mb_strpos($ewgwqamkygiqaawc, $eqgoocgaqwqcimie)) . $moyaaaascoeowegu[$uusmaiomayssaecw] . mb_substr($ewgwqamkygiqaawc, mb_strpos($ewgwqamkygiqaawc, $eqgoocgaqwqcimie) + mb_strlen($eqgoocgaqwqcimie)); } } } else { foreach ($ksiyqouuaoymsycg as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (isset($moyaaaascoeowegu[$uusmaiomayssaecw])) { $ewgwqamkygiqaawc = substr_replace($ewgwqamkygiqaawc, $moyaaaascoeowegu[$uusmaiomayssaecw], strpos($ewgwqamkygiqaawc, $eqgoocgaqwqcimie), strlen($eqgoocgaqwqcimie)); } } } } return $ewgwqamkygiqaawc; } public function eqqgsimcmcmskccs(&$ksiyqouuaoymsycg, &$moyaaaascoeowegu, $ewgwqamkygiqaawc, bool &$icimsyceeegakcaw = true, bool $mcmaiqckgiuqayau = false) { $ogwecsececckqomu = 4; $ksiyqouuaoymsycg = $moyaaaascoeowegu = []; $meyiiwcswqmuggyg = $this->ygcwyiyqoioacksa($ewgwqamkygiqaawc); if (count($meyiiwcswqmuggyg) >= $this->wmemoiyeycwgyaee()) { $icimsyceeegakcaw = true; $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); for ($ciyackuwsqkoqese = 0, $magakwkyyugoyiue = count($meyiiwcswqmuggyg); $ciyackuwsqkoqese < $magakwkyyugoyiue; $ciyackuwsqkoqese++) { $iuimqckcgwwkgygo = $meyiiwcswqmuggyg[$ciyackuwsqkoqese][0]; $kqywgoqsmuswammk = "h{$meyiiwcswqmuggyg[$ciyackuwsqkoqese][2]}"; $meqocwsecsywiiqs = $meyiiwcswqmuggyg[$ciyackuwsqkoqese][3]; if ($meqocwsecsywiiqs && is_string($meqocwsecsywiiqs)) { $iakkeikwceeomgyq = $iuimqckcgwwkgygo; $iuimqckcgwwkgygo = stripcslashes($iuimqckcgwwkgygo); $aokagokqyuysuksm = $smuykqsageuocuos->waecsyqmwascmqoa($iuimqckcgwwkgygo, $kqywgoqsmuswammk, Constants::gouqcwikiiygyasc); $kcqgsouywoiekwak = Constants::ioyokcgwaowoqskk; if (strlen($aokagokqyuysuksm) <= $ogwecsececckqomu) { if ($akesyikoueogakwq = $this->yasiwmiysyuokqki($meqocwsecsywiiqs, $mcmaiqckgiuqayau)) { $kcqgsouywoiekwak = Constants::wiquocqckkqkmayo; } } else { $akesyikoueogakwq = $aokagokqyuysuksm; } if (!$akesyikoueogakwq) { $akesyikoueogakwq = $yyauwyaeewsickwk->uniqid($ogwecsececckqomu); $icimsyceeegakcaw = false; } if (isset($moyaaaascoeowegu[$akesyikoueogakwq])) { $akesyikoueogakwq = $akesyikoueogakwq . '-' . $yyauwyaeewsickwk->uniqid($ogwecsececckqomu); } $ksiyqouuaoymsycg[$akesyikoueogakwq] = $iakkeikwceeomgyq; $moyaaaascoeowegu[$akesyikoueogakwq] = $smuykqsageuocuos->igmaewykumgwoaoy($iuimqckcgwwkgygo, [$kqywgoqsmuswammk => [Constants::gouqcwikiiygyasc => $akesyikoueogakwq, 'data-translate' => $kcqgsouywoiekwak]]); } } } } }
