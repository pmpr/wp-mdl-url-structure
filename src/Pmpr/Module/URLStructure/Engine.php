<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             656c9bddf1134             |
    |_______________________________________|
*/
 namespace Pmpr\Module\URLStructure; use WP_Post; use WP_Term; class Engine extends Container { private function okgymwqyacwayqce() : string { return (string) $this->weysguygiseoukqw(Setting::okygsiiusyaymuke, self::gmmygyiecgmggaam); } public function keyqcqiyiowceuuc(string $useksmwkuswkwcqg) : bool { $sciomagaqmgggsiu = $this->ikswooimyuycoeiw(true, [self::aisguagukaewucii => self::uouymeyqasaeckso]); return in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu); } public function ikswooimyuycoeiw(bool $cskqaekycgacowwg = false, array $ywmkwiwkosakssii = []) : array { $sciomagaqmgggsiu = []; if (!(!$cskqaekycgacowwg || self::yyoaeaaaquyigiim === $this->okgymwqyacwayqce())) { goto qgegkeomwscwwiuw; } $sciomagaqmgggsiu = $this->kmuweyayaqoeqiyw()->oycoyoggyswwygye(Setting::yguukwesekwkiwws, $ywmkwiwkosakssii); qgegkeomwscwwiuw: return $sciomagaqmgggsiu; } public function esikumuskomeaiqq(bool $cskqaekycgacowwg = false) { $kesssewsiegssiya = null; if (!(!$cskqaekycgacowwg || self::gmmygyiecgmggaam === $this->okgymwqyacwayqce())) { goto qmiwsequckckoaei; } $kesssewsiegssiya = $this->weysguygiseoukqw(Setting::iksimwyqakouyyoe); qmiwsequckckoaei: return $kesssewsiegssiya; } public function euyyuaecekwekuag() : string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->euyyuaecekwekuag(); } public function eeekyqskuiwamoyc() { $mksyucucyswaukig = false; if (!($soyimggocqaeswge = $this->euyyuaecekwekuag())) { goto qmeoaqmsuseueqiy; } switch ($this->weysguygiseoukqw(Setting::okygsiiusyaymuke, self::gmmygyiecgmggaam)) { case self::gmmygyiecgmggaam: if (!($sgcwcgagkwsskssc = $this->esikumuskomeaiqq())) { goto ickcmqoiosquugwe; } $mksyucucyswaukig = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->woimamkkeyoyauoa(self::ouywiegeiyuaaawo, $soyimggocqaeswge, $sgcwcgagkwsskssc); ickcmqoiosquugwe: goto goeoymmqqqeeoime; case self::yyoaeaaaquyigiim: goto goeoymmqqqeeoime; } eiawsoasmscmqswa: goeoymmqqqeeoime: qmeoaqmsuseueqiy: return $mksyucucyswaukig; } public function giycagwmuawumcou() : bool { return !empty($this->eeekyqskuiwamoyc()); } public function cssikuqamakyikki(string $iwywmkygwewiamwm, $mksyucucyswaukig = null) : string { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mksyucucyswaukig) { goto ygkcacsyyckescqs; } $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); ygkcacsyyckescqs: switch ($this->weysguygiseoukqw(Setting::okygsiiusyaymuke, self::gmmygyiecgmggaam)) { case self::gmmygyiecgmggaam: if (!($sgcwcgagkwsskssc = $this->esikumuskomeaiqq())) { goto kooskuwkuayiuose; } if ($mksyucucyswaukig instanceof WP_Term) { goto eyiamcekkgkiawqy; } if (!$mksyucucyswaukig instanceof WP_Post) { goto mqccmesakuemceqi; } $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($mksyucucyswaukig, $sgcwcgagkwsskssc, [self::yewiqemgmmucemey => true]); if (!$iwewcwusemqaiggk) { goto igymseewwyiocoug; } $iwywmkygwewiamwm = str_replace("\72\57\57", "\x3a\57\x2f{$this->caokeucsksukesyo()->kckogqkiycqeumoa()->aqcogscycyycgkuq($iwewcwusemqaiggk)}\x2e", $iwywmkygwewiamwm); igymseewwyiocoug: mqccmesakuemceqi: goto twkmiuomimomscew; eyiamcekkgkiawqy: $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if (!($sgcwcgagkwsskssc === $aoskwucuugeuaeus->yyoeeseewqmmyaee($mksyucucyswaukig))) { goto sukskmcwsoysiuqu; } $aaokuekaimigoyue = $aoskwucuugeuaeus->aqcogscycyycgkuq($mksyucucyswaukig, $sgcwcgagkwsskssc); $iwywmkygwewiamwm = str_replace("\57{$sgcwcgagkwsskssc}\x2f", "\x2f", $iwywmkygwewiamwm); $iwywmkygwewiamwm = str_replace("\x2f{$aaokuekaimigoyue}", '', $iwywmkygwewiamwm); $iwywmkygwewiamwm = trailingslashit(str_replace("\x3a\x2f\x2f", "\72\57\x2f{$aaokuekaimigoyue}\56", $iwywmkygwewiamwm)); sukskmcwsoysiuqu: twkmiuomimomscew: kooskuwkuayiuose: goto cuoqqgaygogsmmic; case self::yyoaeaaaquyigiim: if (!$mksyucucyswaukig instanceof WP_Post) { goto qwcegcuowwgiccos; } qwcegcuowwgiccos: goto cuoqqgaygogsmmic; } cgewcsueoyaeikgm: cuoqqgaygogsmmic: return $iwywmkygwewiamwm; } public function eikmwwusgumqyika($mksyucucyswaukig = null, string $aqykuigiuwmmcieu = self::cwsguekoagqkaesm) { $qqakqoekigkcmyek = false; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mksyucucyswaukig) { goto qcessicwuikwqsis; } $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); qcessicwuikwqsis: switch ($this->weysguygiseoukqw(Setting::okygsiiusyaymuke, self::gmmygyiecgmggaam)) { case self::gmmygyiecgmggaam: if (!($sgcwcgagkwsskssc = $this->esikumuskomeaiqq())) { goto gygawoqywkukmqee; } if ($mksyucucyswaukig instanceof WP_Term) { goto oouoqimaaqcmccay; } if (!$mksyucucyswaukig instanceof WP_Post) { goto ycakugokkqkuqyiu; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $iwewcwusemqaiggk = $seumokooiykcomco->kckogqkiycqeumoa($mksyucucyswaukig, $sgcwcgagkwsskssc, [self::yewiqemgmmucemey => true]); $qqakqoekigkcmyek = !empty($iwewcwusemqaiggk); if (!($qqakqoekigkcmyek && $aqykuigiuwmmcieu === self::ouywiegeiyuaaawo)) { goto siqagquguiemuoku; } $qqakqoekigkcmyek = $aoskwucuugeuaeus->aqcogscycyycgkuq($iwewcwusemqaiggk); siqagquguiemuoku: ycakugokkqkuqyiu: goto sycygoiaiqqageym; oouoqimaaqcmccay: $qqakqoekigkcmyek = $sgcwcgagkwsskssc === $aoskwucuugeuaeus->yyoeeseewqmmyaee($mksyucucyswaukig); if (!($qqakqoekigkcmyek && $aqykuigiuwmmcieu === self::ouywiegeiyuaaawo)) { goto coywmiyqgsweuiic; } $qqakqoekigkcmyek = $aoskwucuugeuaeus->aqcogscycyycgkuq($mksyucucyswaukig); coywmiyqgsweuiic: sycygoiaiqqageym: gygawoqywkukmqee: goto yssscwioiyygssec; case self::yyoaeaaaquyigiim: if (!$mksyucucyswaukig instanceof WP_Post) { goto kciouyuaqkyqomam; } kciouyuaqkyqomam: goto yssscwioiyygssec; } ieumumsgyguceusy: yssscwioiyygssec: return $qqakqoekigkcmyek; } }