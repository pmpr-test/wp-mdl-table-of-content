<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4bfd4bf7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\TableOfContent\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\TableOfContent\Generator; use Pmpr\Module\TableOfContent\Setting; use Pmpr\Module\TableOfContent\TableOfContent; trait RenderTrait { public function eeisgyksyecuceue(array $ywmkwiwkosakssii = []) : array { $qookweymeqawmcwo = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qescuiwgsyuikume => __('Table of Content', PR__MDL__TABLE_OF_CONTENT), 'hide_title' => __('Close', PR__MDL__TABLE_OF_CONTENT), 'show_title' => __('Show', PR__MDL__TABLE_OF_CONTENT), Constants::ayscagukkeoucmoe => true]); $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $qookweymeqawmcwo = $this->sscegwueamckwmcy(TableOfContent::qmkskkcukqigsimq . 'render_parameters', $qookweymeqawmcwo, $post); if ($eaekkwggowaaogiu = Generator::symcgieuakksimmu()) { $qookweymeqawmcwo['headings'] = $eaekkwggowaaogiu->uioymssscymciyca($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($post, false), $ywmkwiwkosakssii); } return $qookweymeqawmcwo; } public function uiqcwsowwswommka() : bool { $cuakwceieagskoaa = false; if ($post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu()) { $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $sqeykgyoooqysmca = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post); $cuakwceieagskoaa = in_array($sqeykgyoooqysmca, $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::miemwgakuokqyoqo, []), true) && !in_array($post, $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qgiwmgmeaagqwgkw, []), true); } return $this->ocksiywmkyaqseou(TableOfContent::qmkskkcukqigsimq . 'allow_render', $cuakwceieagskoaa, $post); } }
