<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8c4c11cb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\URLStructure; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Term; class Engine extends Container { private function okgymwqyacwayqce() : string { return (string) $this->weysguygiseoukqw(Setting::okygsiiusyaymuke, Constants::gmmygyiecgmggaam); } public function keyqcqiyiowceuuc(string $useksmwkuswkwcqg) : bool { $sciomagaqmgggsiu = $this->ikswooimyuycoeiw(true, [Constants::aisguagukaewucii => Constants::uouymeyqasaeckso]); return in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu); } public function ikswooimyuycoeiw(bool $cskqaekycgacowwg = false, array $ywmkwiwkosakssii = []) : array { $sciomagaqmgggsiu = []; if (!(!$cskqaekycgacowwg || Constants::yyoaeaaaquyigiim === $this->okgymwqyacwayqce())) { goto qiaqsassksqiuyae; } $sciomagaqmgggsiu = $this->kmuweyayaqoeqiyw()->oycoyoggyswwygye(Setting::yguukwesekwkiwws, $ywmkwiwkosakssii); qiaqsassksqiuyae: return $sciomagaqmgggsiu; } public function esikumuskomeaiqq(bool $cskqaekycgacowwg = false) { $kesssewsiegssiya = null; if (!(!$cskqaekycgacowwg || Constants::gmmygyiecgmggaam === $this->okgymwqyacwayqce())) { goto qogqewiwmwiwskgm; } $kesssewsiegssiya = $this->weysguygiseoukqw(Setting::iksimwyqakouyyoe); qogqewiwmwiwskgm: return $kesssewsiegssiya; } public function euyyuaecekwekuag() : string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->euyyuaecekwekuag(); } public function eeekyqskuiwamoyc() { $mksyucucyswaukig = false; if (!($soyimggocqaeswge = $this->euyyuaecekwekuag())) { goto asmecuqiyyswueqe; } switch ($this->weysguygiseoukqw(Setting::okygsiiusyaymuke, Constants::gmmygyiecgmggaam)) { case Constants::gmmygyiecgmggaam: if (!($sgcwcgagkwsskssc = $this->esikumuskomeaiqq())) { goto myoicgcuugciueis; } $mksyucucyswaukig = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->woimamkkeyoyauoa(Constants::ouywiegeiyuaaawo, $soyimggocqaeswge, $sgcwcgagkwsskssc); myoicgcuugciueis: goto qgoiooayqmqqsiok; case Constants::yyoaeaaaquyigiim: goto qgoiooayqmqqsiok; } qwigomakwmyiwkgo: qgoiooayqmqqsiok: asmecuqiyyswueqe: return $mksyucucyswaukig; } public function giycagwmuawumcou() : bool { return !empty($this->eeekyqskuiwamoyc()); } public function cssikuqamakyikki(string $iwywmkygwewiamwm, $mksyucucyswaukig = null) : string { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mksyucucyswaukig) { goto csscmcacoikwsecs; } $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); csscmcacoikwsecs: switch ($this->weysguygiseoukqw(Setting::okygsiiusyaymuke, Constants::gmmygyiecgmggaam)) { case Constants::gmmygyiecgmggaam: if (!($sgcwcgagkwsskssc = $this->esikumuskomeaiqq())) { goto kiqogmwcgcamwiig; } if ($mksyucucyswaukig instanceof WP_Term) { goto kwagwqyusyiyoaqs; } if (!$mksyucucyswaukig instanceof WP_Post) { goto eqkauqciwewmgeoi; } $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($mksyucucyswaukig, $sgcwcgagkwsskssc, [Constants::yewiqemgmmucemey => true]); if (!$iwewcwusemqaiggk) { goto sciwggaeogcoesiu; } $iwywmkygwewiamwm = str_replace("\x3a\x2f\x2f", "\x3a\57\x2f{$this->caokeucsksukesyo()->kckogqkiycqeumoa()->aqcogscycyycgkuq($iwewcwusemqaiggk)}\x2e", $iwywmkygwewiamwm); sciwggaeogcoesiu: eqkauqciwewmgeoi: goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if (!($sgcwcgagkwsskssc === $aoskwucuugeuaeus->yyoeeseewqmmyaee($mksyucucyswaukig))) { goto mkwskuycuyguqqok; } $aaokuekaimigoyue = $aoskwucuugeuaeus->aqcogscycyycgkuq($mksyucucyswaukig, $sgcwcgagkwsskssc); $iwywmkygwewiamwm = str_replace(["\x2f{$sgcwcgagkwsskssc}\x2f", "\x2f{$aaokuekaimigoyue}"], ["\x2f", ''], $iwywmkygwewiamwm); $iwywmkygwewiamwm = trailingslashit(str_replace("\x3a\x2f\57", "\x3a\57\57{$aaokuekaimigoyue}\x2e", $iwywmkygwewiamwm)); mkwskuycuyguqqok: yowsmsiyimmimemc: kiqogmwcgcamwiig: goto cuykwgmswkskqkyi; case Constants::yyoaeaaaquyigiim: if (!$mksyucucyswaukig instanceof WP_Post) { goto iomcaiwewsawiamu; } iomcaiwewsawiamu: goto cuykwgmswkskqkyi; } kuicqywysciceggs: cuykwgmswkskqkyi: return $iwywmkygwewiamwm; } public function eikmwwusgumqyika($mksyucucyswaukig = null, string $aqykuigiuwmmcieu = Constants::cwsguekoagqkaesm) { $qqakqoekigkcmyek = false; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mksyucucyswaukig) { goto sqiciiuwmykocycc; } $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); sqiciiuwmykocycc: switch ($this->weysguygiseoukqw(Setting::okygsiiusyaymuke, Constants::gmmygyiecgmggaam)) { case Constants::gmmygyiecgmggaam: if (!($sgcwcgagkwsskssc = $this->esikumuskomeaiqq())) { goto wcesymwqykqoyuqk; } if ($mksyucucyswaukig instanceof WP_Term) { goto goacqqsgaaigyuaw; } if (!$mksyucucyswaukig instanceof WP_Post) { goto yiwiqaqmwiogawym; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $iwewcwusemqaiggk = $seumokooiykcomco->kckogqkiycqeumoa($mksyucucyswaukig, $sgcwcgagkwsskssc, [Constants::yewiqemgmmucemey => true]); $qqakqoekigkcmyek = !empty($iwewcwusemqaiggk); if (!($qqakqoekigkcmyek && $aqykuigiuwmmcieu === Constants::ouywiegeiyuaaawo)) { goto ocokwuuquaokmasc; } $qqakqoekigkcmyek = $aoskwucuugeuaeus->aqcogscycyycgkuq($iwewcwusemqaiggk); ocokwuuquaokmasc: yiwiqaqmwiogawym: goto meawswgwagoqgkye; goacqqsgaaigyuaw: $qqakqoekigkcmyek = $sgcwcgagkwsskssc === $aoskwucuugeuaeus->yyoeeseewqmmyaee($mksyucucyswaukig); if (!($qqakqoekigkcmyek && $aqykuigiuwmmcieu === Constants::ouywiegeiyuaaawo)) { goto cggowoquuiwqkyew; } $qqakqoekigkcmyek = $aoskwucuugeuaeus->aqcogscycyycgkuq($mksyucucyswaukig); cggowoquuiwqkyew: meawswgwagoqgkye: wcesymwqykqoyuqk: goto eequksumcoogyoem; case Constants::yyoaeaaaquyigiim: if (!$mksyucucyswaukig instanceof WP_Post) { goto usqgaogkqgemuima; } usqgaogkqgemuima: goto eequksumcoogyoem; } uukumskkeggaowck: eequksumcoogyoem: return $qqakqoekigkcmyek; } }
