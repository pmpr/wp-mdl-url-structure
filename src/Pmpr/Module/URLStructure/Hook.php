<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67915362704a6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\URLStructure; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\URLStructure\Traits\EngineTrait; class Hook extends Container { use EngineTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\151\x6e\x69\x74"], 999)->qcsmikeggeemccuu("\x74\145\x6d\160\154\141\x74\145\x5f\162\145\144\151\162\145\143\164", [$this, "\x63\145\x69\165\x73\151\x63\163\141\167\x77\x61\141\141\x6d\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x75\x72\x6c\137\x74\157\x5f\x70\157\163\164\x69\144", [$this, "\x71\153\145\x67\143\167\x65\143\151\163\x73\x69\x6b\x6d\155\143"])->cecaguuoecmccuse("\141\144\155\151\x6e\137\x75\x72\154", [$this, "\155\141\145\x6d\155\x67\x71\x73\x75\x71\x6d\147\x65\153\x71\165"], 10, 2)->cecaguuoecmccuse("\x74\145\x72\155\137\154\x69\156\x6b", [$this, "\141\x6b\171\x75\143\x65\155\x79\165\x65\x61\165\x6b\147\143\141"], 10, 3)->cecaguuoecmccuse("\160\x6f\x73\x74\137\x6c\x69\x6e\153", [$this, "\147\155\155\x77\x65\x6f\x77\x77\x6f\x67\163\171\x69\x67\163\x6b"], 10, 2)->cecaguuoecmccuse("\x70\x6f\163\164\x5f\x74\171\160\x65\x5f\x6c\x69\156\x6b", [$this, "\147\x6d\155\167\145\x6f\x77\167\x6f\x67\163\x79\x69\x67\x73\153"], 10, 2)->cecaguuoecmccuse("\x71\165\145\162\171", [$this, "\163\x6b\153\141\145\155\141\x79\x67\x75\x75\165\x69\x79\x65\x75"], 10, 2)->cecaguuoecmccuse("\x77\x70\137\x75\156\151\x71\x75\145\137\160\x6f\x73\164\x5f\x73\154\165\x67", [$this, "\x69\x77\x61\151\x61\x77\x61\x6f\x73\145\171\167\151\167\171\x79"], 10, 6); $this->aqaqisyssqeomwom(URLStructure::uisisakqmumqggsg . "\x67\145\x74\137\160\x6f\x73\164\x5f\165\156\143\x68\x61\x6e\x67\x65\x64\137\x6c\x69\156\153", [$this, "\143\x69\x79\147\151\x6f\x65\x77\145\x73\141\141\147\167\141\x69"], 10, 2); } public function init() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $qkqgcaykemoiecma->update("\162\x65\167\x72\151\164\145\137\x72\x75\154\x65\x73", ''); $qkqgcaykemoiecma->gawcqwcqgwgucgya("\162\145\167\x72\x69\x74\x65\x5f\162\165\154\x65\163", ''); } $ukiksmygmcycwwas = $this->uykissogmuaaocsg()->esikumuskomeaiqq(true); if ($ukiksmygmcycwwas) { $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); $ismaaiimuciiagmk = $this->weysguygiseoukqw(Setting::yccsyuisimaakqss, []); foreach ($ismaaiimuciiagmk as $useksmwkuswkwcqg => $eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie === Constants::ON) { $cqcqsgykasiqwowi->ycewygugskisecuo($ukiksmygmcycwwas, $useksmwkuswkwcqg); } } } } public function qkegcwecissikmmc($eeamcawaiqocomwy) { switch ($this->weysguygiseoukqw(Setting::okygsiiusyaymuke, Constants::gmmygyiecgmggaam)) { case Constants::gmmygyiecgmggaam: $ymkqyawksmqcgsei = explode("\x2e", $eeamcawaiqocomwy); $cgmsicimocaeggqg = ''; if (count($ymkqyawksmqcgsei) > 2) { $wiqcmmekkwsqmwus = explode("\72\57\x2f", $ymkqyawksmqcgsei[0]); unset($ymkqyawksmqcgsei[0]); if (count($wiqcmmekkwsqmwus) === 2) { $cgmsicimocaeggqg = $wiqcmmekkwsqmwus[0] . "\72\57\x2f"; } } $eeamcawaiqocomwy = $cgmsicimocaeggqg . implode("\56", $ymkqyawksmqcgsei); break; case Constants::yyoaeaaaquyigiim: break; } return $eeamcawaiqocomwy; } public function iwaiawaoseywiwyy($aaokuekaimigoyue, $gcqseksiskwueksc, $qisccquumwewokoy, $useksmwkuswkwcqg, $yugqsecigucogiei, $oseueaowekmmocoq) { global $wpdb; if ($aaokuekaimigoyue !== $oseueaowekmmocoq) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aoeusogyssuaoasg = $eqwoegegiamegqsm->prepare("\x53\105\x4c\x45\103\124\x20\x49\x44\40\x46\122\117\x4d\40{$wpdb->posts}\x20\x57\110\x45\x52\x45\x20\160\157\x73\x74\137\x6e\141\155\145\40\75\x20\x25\163\40\x41\x4e\104\40\160\157\x73\164\137\164\x79\x70\145\40\75\40\45\163\x20\x41\116\104\x20\x49\x44\40\x21\x3d\40\45\x64", $oseueaowekmmocoq, $useksmwkuswkwcqg, $gcqseksiskwueksc); if ($post = $eqwoegegiamegqsm->qaumqeeagueuqkcg($aoeusogyssuaoasg)) { $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($ukiksmygmcycwwas = $goqqimcssiyagkwy->esikumuskomeaiqq(true)) { $kgowwogqiyoysmeq = $seumokooiykcomco->kckogqkiycqeumoa($gcqseksiskwueksc, $ukiksmygmcycwwas); if ($kgowwogqiyoysmeq) { $cowkygcmkoqyccua = false; if ($mukqwaumaqimoqoo = $seumokooiykcomco->kckogqkiycqeumoa($post, $ukiksmygmcycwwas)) { if ($aoskwucuugeuaeus->iooowgsqoyqseyuu($mukqwaumaqimoqoo) != $aoskwucuugeuaeus->iooowgsqoyqseyuu($kgowwogqiyoysmeq)) { $cowkygcmkoqyccua = true; } } if ($cowkygcmkoqyccua) { $aaokuekaimigoyue = $oseueaowekmmocoq; } } } } } return $aaokuekaimigoyue; } public function ciygioewesaagwai($migiiksoiymissge, $post) { if ($this->uykissogmuaaocsg()->eikmwwusgumqyika($post)) { $this->ggmgmqswqkgecosg("\160\157\x73\x74\137\154\x69\156\x6b", [$this, "\147\x6d\x6d\167\145\x6f\x77\167\157\x67\163\171\151\x67\x73\153"])->ggmgmqswqkgecosg("\x70\157\163\x74\x5f\164\171\160\x65\x5f\154\x69\156\x6b", [$this, "\147\155\x6d\x77\x65\157\x77\x77\157\x67\x73\x79\x69\x67\x73\153"]); $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($post); $this->cecaguuoecmccuse("\160\157\x73\164\x5f\x6c\151\156\153", [$this, "\x67\155\x6d\x77\145\157\x77\167\x6f\x67\163\x79\x69\x67\x73\153"], 10, 2)->cecaguuoecmccuse("\x70\157\x73\164\x5f\164\x79\x70\145\x5f\154\151\156\x6b", [$this, "\147\155\x6d\167\145\157\167\x77\x6f\147\x73\x79\x69\147\163\153"], 10, 2); } return $migiiksoiymissge; } public function skkaemayguuuiyeu($gqgemcmoicmgaqie) { global $wp_query, $wpdb; $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if ($aaokuekaimigoyue = $owaoeyikmqaeegma->get("\160\141\147\x65\x6e\x61\155\145", $wp_query)) { if ($owaoeyikmqaeegma->uumoasaecaigsyys($wp_query, Constants::uouymeyqasaeckso, Constants::oguseymmyyoyaako)) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kccakwkaqugygwmq()) { $soyimggocqaeswge = $goqqimcssiyagkwy->euyyuaecekwekuag(); $kesssewsiegssiya = $goqqimcssiyagkwy->esikumuskomeaiqq(); if ($soyimggocqaeswge && $kesssewsiegssiya) { $aaokuekaimigoyue = rawurlencode(urldecode($aaokuekaimigoyue)); $aaokuekaimigoyue = str_replace("\x25\x32\106", "\57", $aaokuekaimigoyue); $aaokuekaimigoyue = str_replace("\x25\x32\60", "\40", $aaokuekaimigoyue); $ymkqyawksmqcgsei = explode("\57", trim($aaokuekaimigoyue, "\x2f")); $ymkqyawksmqcgsei = array_map("\x73\141\x6e\x69\x74\x69\172\x65\x5f\x74\x69\164\x6c\145\137\x66\157\x72\x5f\161\165\x65\x72\x79", $ymkqyawksmqcgsei); $kmakqcsaaqgyakom = sprintf("\x53\x45\114\105\x43\124\40\111\104\x2c\x20\160\157\x73\x74\137\x6e\141\x6d\x65\x2c\x20\x70\x6f\x73\164\137\160\x61\162\145\x6e\164\x2c\40\x70\x6f\163\x74\137\x74\x79\x70\x65\x20\106\x52\x4f\115\40{$wpdb->posts}\x20\127\110\x45\122\x45\40\160\x6f\x73\164\x5f\156\141\x6d\145\x20\x49\x4e\x20\x28\x27\x25\163\47\x29\40\x41\x4e\x44\x20\x70\x6f\x73\164\137\x74\x79\160\x65\x20\111\116\x20\x28\x27\45\163\47\51", implode("\47\x2c\47", esc_sql($ymkqyawksmqcgsei)), implode("\47\x2c\x27", [Constants::oguseymmyyoyaako, Constants::cqycgsyykemiygou])); $sgyaeosgamaymkeo = trim(preg_replace("\57\x5c\163\53\x2f", "\40", $gqgemcmoicmgaqie)); if ($sgyaeosgamaymkeo == $kmakqcsaaqgyakom) { $eagqsqeocaokmsim = sprintf("\114\x45\106\x54\x20\112\x4f\x49\116\40\45\163\x20\146\146\164\162\x20\117\116\40\x28\x25\x73\x2e\111\104\x20\75\40\x66\x66\164\x72\x2e\x6f\x62\152\x65\143\164\137\151\x64\x20\117\x52\40\x25\x73\x2e\160\x6f\x73\x74\x5f\160\141\162\145\156\164\40\x3d\x20\x66\x66\164\162\x2e\x6f\x62\152\145\x63\164\x5f\151\144\51\40", $wpdb->term_relationships, $wpdb->posts, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("\x4c\105\x46\x54\x20\112\117\111\x4e\40\x25\x73\x20\x66\x66\164\164\40\x4f\x4e\40\x28\x66\x66\x74\162\x2e\164\x65\x72\155\x5f\164\x61\170\x6f\x6e\x6f\155\171\x5f\x69\144\40\x3d\40\x66\x66\x74\x74\x2e\x74\145\x72\155\137\x74\x61\x78\x6f\156\157\155\171\x5f\x69\x64\x29\x20", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("\114\105\106\x54\x20\x4a\117\x49\x4e\x20\45\163\x20\x66\x66\164\40\117\116\40\x28\x66\x66\164\x74\x2e\x74\x65\162\155\x5f\151\x64\40\x3d\x20\146\x66\164\x2e\164\145\x72\x6d\137\151\144\51\40", $wpdb->terms); $gqgemcmoicmgaqie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc("\106\122\117\115\x20{$wpdb->posts}\40\127\x48\105\x52\105", "\106\122\117\115\x20{$wpdb->posts}\40{$eagqsqeocaokmsim}\40\x57\x48\105\x52\105", $kmakqcsaaqgyakom) . sprintf("\x20\101\116\x44\40\50\x66\146\164\56\x73\154\165\x67\40\75\x20\47\45\x73\47\x29", $soyimggocqaeswge); } } } } } return $gqgemcmoicmgaqie; } public function ceiusicsawwaaamq() { $gwqgmkqcgwwmweom = false; $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $kqokeucouewkcomm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (!$goqqimcssiyagkwy->giycagwmuawumcou()) { $ukiksmygmcycwwas = $goqqimcssiyagkwy->esikumuskomeaiqq(true); $owmscuqeqmwoucuk = $goqqimcssiyagkwy->ikswooimyuycoeiw(true); if ($mumyimcwkaemyyue->kccakwkaqugygwmq()) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($ukiksmygmcycwwas) { $post = $seumokooiykcomco->get(); if ($aaokuekaimigoyue = $goqqimcssiyagkwy->eikmwwusgumqyika($post, Constants::ouywiegeiyuaaawo)) { $csaswyemmmmusmug = $seumokooiykcomco->ycqquoiyyuesegsy($post); if (false === strpos($kqokeucouewkcomm, "\x3a\x2f\57{$aaokuekaimigoyue}\56") && $kqokeucouewkcomm !== $csaswyemmmmusmug) { $gwqgmkqcgwwmweom = $csaswyemmmmusmug; } } } else { if ($owmscuqeqmwoucuk && $mumyimcwkaemyyue->cukiusasccucgwqc($owmscuqeqmwoucuk)) { } } } else { if ($ukiksmygmcycwwas && ($mumyimcwkaemyyue->qmssqeyayicowkgy($ukiksmygmcycwwas) || Constants::ocsomysosuqaimuc === $ukiksmygmcycwwas && $mumyimcwkaemyyue->ocwoeosukggumggw() || Constants::qgciomgukmcwscqw === $ukiksmygmcycwwas && $mumyimcwkaemyyue->sgayqmgoigoseaoo())) { $gwqgmkqcgwwmweom = $goqqimcssiyagkwy->cssikuqamakyikki($kqokeucouewkcomm); } else { if ($goqqimcssiyagkwy->euyyuaecekwekuag()) { $gwqgmkqcgwwmweom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } } } } if ($gwqgmkqcgwwmweom) { exit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($gwqgmkqcgwwmweom, 301)); } } public function maemmgqsuqmgekqu($eeamcawaiqocomwy, $mkomwsiykqigmqca) { if ("\x61\x64\x6d\151\x6e\x2d\141\x6a\141\170\56\160\x68\x70" === $mkomwsiykqigmqca) { if ($this->uykissogmuaaocsg()->giycagwmuawumcou()) { $eeamcawaiqocomwy = str_replace("\x3a\x2f\x2f", "\x3a\x2f\57{$this->uykissogmuaaocsg()->euyyuaecekwekuag()}\56", $eeamcawaiqocomwy); } } return $eeamcawaiqocomwy; } public function gmmweowwogsyigsk($iwywmkygwewiamwm, $post) : string { return $this->uykissogmuaaocsg()->cssikuqamakyikki($iwywmkygwewiamwm, $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($post)); } public function akyucemyueaukgca($iwywmkygwewiamwm, $ucicuwcaawugkseg) : string { return $this->uykissogmuaaocsg()->cssikuqamakyikki($iwywmkygwewiamwm, $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($ucicuwcaawugkseg)); } }
