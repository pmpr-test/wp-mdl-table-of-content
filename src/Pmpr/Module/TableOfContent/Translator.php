<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a58b7979             |
    |_______________________________________|
*/
 namespace Pmpr\Module\TableOfContent; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Translator extends Container { const meawmmkyieiykykg = TableOfContent::qmkskkcukqigsimq . 'allow_translate'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea']); } public function yeyiguyegmmyusea() { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $auueamgyauagmwuc = $this->esciskwmewkgwaik(); if ($seumokooiykcomco->uqwgsuysegkweago($auueamgyauagmwuc)) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi(); $kcqgsouywoiekwak = $this->gmiiaymeiwkykcym($ewgwqamkygiqaawc); $wkaqekwwgqsqwcoi = $kcqgsouywoiekwak ? IconInterface::sucyqiucaqowyomk : IconInterface::kiqsyooieeusaemw; $cmwygeyygwqaemaq = $kcqgsouywoiekwak ? __('Translated', PR__MDL__TABLE_OF_CONTENT) : __('Not Translated', PR__MDL__TABLE_OF_CONTENT); $qoiwmokisgikggia = $kcqgsouywoiekwak ? Constants::ckcawaoawwioqecq : Constants::wyaqwomqwwaoiwas; $uuyucgkyusckoaeq->scyscgskcwukckyy(TableOfContent::qmkskkcukqigsimq . 'meta_box')->gswweykyogmsyawy(__('Table of Content', PR__MDL__TABLE_OF_CONTENT))->pknsqyeeymygoqqu($auueamgyauagmwuc)->mkksewyosgeumwsa($uuyucgkyusckoaeq->yqgagqgesqyuyuqq('translation_status')->oguessuismosauuu($swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ['class' => "icon-sm icon-{$qoiwmokisgikggia}"]), $swqimwqeweekeusq->ciuuiyckmsygceis($cmwygeyygwqaemaq, ['class' => 'ml-2 lh-05'])], ['class' => 'd-flex justify-content-center']))->wywmmeyauqkeskeq($this->cqkwygekwisakywo($ewgwqamkygiqaawc)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::meawmmkyieiykykg)->gswweykyogmsyawy(__('Allow Translate Anchors', PR__MDL__TABLE_OF_CONTENT)))->register(); } } public function cqkwygekwisakywo(string $ewgwqamkygiqaawc) : bool { $umuecysoywoumgwo = false; if ($ewgwqamkygiqaawc) { $yuumukkaswwoywya = ''; foreach ($this->weysguygiseoukqw(Setting::skqaqgkgaueeyosa, []) as $iuimqckcgwwkgygo) { $yuumukkaswwoywya .= "h{$iuimqckcgwwkgygo},"; } $yuumukkaswwoywya = rtrim($yuumukkaswwoywya, ','); $umuecysoywoumgwo = $this->caokeucsksukesyo()->gkksucgseqqemesc()->has(stripslashes($ewgwqamkygiqaawc), $yuumukkaswwoywya); } return $umuecysoywoumgwo; } }
