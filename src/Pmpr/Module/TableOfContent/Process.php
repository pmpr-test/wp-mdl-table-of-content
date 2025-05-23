<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             682fc6d69f7c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\TableOfContent; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Process\Queue; class Process extends Queue { const PREFIX = 'table_of_content_'; const sqeeqaiiiawsseyo = self::PREFIX . 'heading_anchor_injection'; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= 'table_of_content'; } public function esgkququmseyaocm($gcqseksiskwueksc) : int { $ksaameoqigiaoigg = 0; if (!$this->ccyaogywgiukuiiu($gcqseksiskwueksc)) { $ksaameoqigiaoigg = $this->ekyiieacymauaume(self::sqeeqaiiiawsseyo, [$gcqseksiskwueksc]); } return $ksaameoqigiaoigg; } public function ccyaogywgiukuiiu($gcqseksiskwueksc) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::sqeeqaiiiawsseyo, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo, Constants::okeuagwgwkmiokac => $gcqseksiskwueksc]); } }
