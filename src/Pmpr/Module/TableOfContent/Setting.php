<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1693c09dc9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\TableOfContent; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Setting extends BaseClass { const aekmoagaweyqgyeo = 'list_title'; const ugsawkoagcgismmc = 'minimum_count'; const skqaqgkgaueeyosa = 'heading_levels'; const igcuqkcuaqkusggc = 'show_hierarchy'; public function wyyuauosmqoeucmg() { $this->title = __('Table of Content', PR__MDL__TABLE_OF_CONTENT); $this->igiywquyccyiaucw(Constants::ysgwugcqguggmigq, __('Table of Content Setting', PR__MDL__TABLE_OF_CONTENT)); } public function ykwqaukkycogooii() { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__('General', PR__MDL__TABLE_OF_CONTENT))->gucwmccyimoagwcm(__('General Configuration', PR__MDL__TABLE_OF_CONTENT))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__('General', PR__MDL__TABLE_OF_CONTENT))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::aekmoagaweyqgyeo)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('List Title', PR__MDL__TABLE_OF_CONTENT)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(Constants::ayscagukkeoucmoe)->gswweykyogmsyawy(__('Collapsible', PR__MDL__TABLE_OF_CONTENT))->gucwmccyimoagwcm(__('By enabling this option, the ability to open and close is added to the table of contents.', PR__MDL__TABLE_OF_CONTENT)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(Constants::miemwgakuokqyoqo)->gswweykyogmsyawy(__('Post Types', PR__MDL__TABLE_OF_CONTENT))->mkmssscwmeekwgqo()->oikgogcweiiaocka()->acauweqyyugwisqc($sciomagaqmgggsiu))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::ugsawkoagcgismmc)->gswweykyogmsyawy(__('Minimum Heading Count', PR__MDL__TABLE_OF_CONTENT))->escqqisecooswqgo(1, 10)->eyygsasuqmommkua(3))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::igcuqkcuaqkusggc)->gswweykyogmsyawy(__('Hierarchical', PR__MDL__TABLE_OF_CONTENT))->gucwmccyimoagwcm(__('By enabling this option, the content list items will be displayed in a hierarchical manner.', PR__MDL__TABLE_OF_CONTENT)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::skqaqgkgaueeyosa)->mkmssscwmeekwgqo()->oikgogcweiiaocka()->gswweykyogmsyawy(__('Heading Levels', PR__MDL__TABLE_OF_CONTENT))->acauweqyyugwisqc($this->ygcwyiyqoioacksa()))->mkksewyosgeumwsa($this->mccagaqeagiikkec(Constants::qgiwmgmeaagqwgkw)->mkmssscwmeekwgqo()->oikgogcweiiaocka()->ukqywcsoogkyoaoa()->gswweykyogmsyawy(__('Exclude Posts', PR__MDL__TABLE_OF_CONTENT))->gucwmccyimoagwcm(__('Disable in selected posts.', PR__MDL__TABLE_OF_CONTENT))))); parent::ykwqaukkycogooii(); } public function esciskwmewkgwaik() : array { return (array) $this->giiuwsmyumqwwiyq(Constants::miemwgakuokqyoqo, []); } public function ygcwyiyqoioacksa() : array { $ymcousskmscsyees = $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->ywqgcuymeiswqyqc(2, 6); foreach ($ymcousskmscsyees as $eusockqasqqmoess => $iuimqckcgwwkgygo) { $ymcousskmscsyees[$eusockqasqqmoess] = sprintf(__('Heading Level %s (h%s)', PR__MDL__TABLE_OF_CONTENT), $eusockqasqqmoess, $eusockqasqqmoess); } return $ymcousskmscsyees; } }
