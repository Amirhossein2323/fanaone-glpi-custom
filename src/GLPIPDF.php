<?php
/**
 * @since 0.85
 */
class GLPIPDF extends TCPDF {
   private $total_count;
   private static $default_config = [
      'orientation'        => 'P',
      'unit'               => 'mm',
      'mode'               => 'UTF-8',
      'format'             => 'A4',
      'font_size'          => 8,
      'font'               => 'helvetica',
      'margin_left'        => 10,
      'margin_right'       => 10,
      'margin_top'         => 35,
      'margin_bottom'      => 10,
      'margin_header'      => 7,
      'margin_footer'      => 7,
   ];
   private array $config = [];

   public function __construct(array $config = [], int $count = null, string $title = null) {
      $config += self::$default_config;
      $this->config = $config;
      parent::__construct(
         $config['orientation'],
         $config['unit'],
         $config['format'],
         true,
         $config['mode']
      );
      if ($count !== null) {
         $this->setTotalCount($count);
      }
      if ($title !== null) {
         $title = $this->convertAllDatesInText($title);
         $this->SetTitle($title);
      }
      $this->SetCreator('FanaOne Service Desk');
      $this->SetAuthor('FanaOne');
      $this->setRTL(true);
      $this->SetFont('vazir', '', 8, '', false);
      $this->setHeaderFont(['vazir', 'B', 10]);
      $this->setFooterFont(['vazir', 'B', 10]);
      $this->SetMargins($config['margin_left'], $config['margin_top'], $config['margin_right']);
      $this->SetHeaderMargin($config['margin_header']);
      $this->SetFooterMargin($config['margin_footer']);
      $this->SetAutoPageBreak(true, $config['margin_bottom']);
      $this->AddPage();
   }

   public function SetTitle($title, $isUTF8 = true) {
      $title = $this->convertAllDatesInText($title);
      parent::SetTitle($title, $isUTF8);
   }

   public function Cell($w, $h = 0, $txt = '', $border = 0, $ln = 0, $align = '', $fill = false, $link = '', $stretch = 0, $ignore_min_height = false, $calign = 'T', $valign = 'M') {
      $txt = $this->convertAllDatesInText($txt);
      
      if ($align == '') {
         $align = 'C';
      }
      
      if ($valign == 'T') {
         $valign = 'M';
      }

      parent::Cell($w, $h, $txt, $border, $ln, $align, $fill, $link, $stretch, $ignore_min_height, $calign, $valign);
   }

   public function MultiCell($w, $h, $txt, $border = 0, $align = 'J', $fill = false, $ln = 1, $x = '', $y = '', $reseth = true, $stretch = 0, $ishtml = false, $autopadding = true, $maxh = 0, $valign = 'T', $fitcell = false) {
      $txt = $this->convertAllDatesInText($txt);
      
      
      if ($align == '' || $align == 'J') {
         $align = 'C';
      }
      
      if ($valign == 'T') {
         $valign = 'M';
      }

      parent::MultiCell($w, $h, $txt, $border, $align, $fill, $ln, $x, $y, $reseth, $stretch, $ishtml, $autopadding, $maxh, $valign, $fitcell);
   }

   public function Write($h, $txt, $link = '', $fill = false, $align = '', $ln = false, $stretch = 0, $firstline = false, $firstblock = false, $maxh = 0, $wadj = 0, $margin = '') {
      $txt = $this->convertAllDatesInText($txt);
      parent::Write($h, $txt, $link, $fill, $align, $ln, $stretch, $firstline, $firstblock, $maxh, $wadj, $margin);
   }

   public function convertAllDatesInText($text) {
      if (empty($text)) return $text;

      
      $pattern = '/(\d{4}-\d{2}-\d{2})(?:\s+(\d{2}:\d{2}))?/';

      return preg_replace_callback($pattern, function($matches) {
         $dateStr = $matches[1]; 
         
         list($gy, $gm, $gd) = explode('-', $dateStr);
         $jalaliDate = $this->gregorianToJalaliStr($gy, $gm, $gd);

         $result = $jalaliDate;
         
         
         if (isset($matches[2]) && !empty($matches[2])) {
            $timeStr = $matches[2];
            $persianNums = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
            $englishNums = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
            $jalaliTime = str_replace($englishNums, $persianNums, $timeStr);
            $result .= "\n" . $jalaliTime;
         }

         return $result;
      }, $text);
   }


   public function gregorianToJalaliStr($gy, $gm, $gd) {
      
      $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
      
      $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);

      $gy = (int)$gy - 1600;
      $gm = (int)$gm - 1;
      $gd = (int)$gd - 1;

     
      $g_day_no = 365 * $gy + floor(($gy + 3) / 4) - floor(($gy + 99) / 100) + floor(($gy + 399) / 400);

      for ($i = 0; $i < $gm; ++$i)
         $g_day_no += $g_days_in_month[$i];
      
      if ($gm > 1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0)))
         ++$g_day_no;
      
      $g_day_no += $gd;

      
      $j_day_no = $g_day_no - 79;

      $j_np = floor($j_day_no / 12053);
      $j_day_no %= 12053;

      $jy = 979 + 33 * $j_np + 4 * floor($j_day_no / 1461);
      $j_day_no %= 1461;

      if ($j_day_no >= 366) {
         $jy += floor(($j_day_no - 1) / 365);
         $j_day_no = ($j_day_no - 1) % 365;
      }

      for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i)
         $j_day_no -= $j_days_in_month[$i];
      
      $jm = $i + 1;
      $jd = $j_day_no + 1;

      $dateStr = sprintf('%04d/%02d/%02d', $jy, $jm, $jd);

      
      $persianNums = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
      $englishNums = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
      
      return str_replace($englishNums, $persianNums, $dateStr);
   }


   public function Header() {
      $this->SetDrawColor(0, 85, 150);
      $this->SetLineWidth(0.5);
      $this->SetFont('vazir', 'B', 14);
      $logo_width = 42;
      $logo_x = $this->getPageWidth() - $this->getMargins()['right'] - $logo_width;
      // The FanaOne wordmark contains white lettering; a navy plate keeps it
      // readable on white paper and in monochrome print previews.
      $this->setRTL(false);
      $this->SetFillColor(4, 48, 82);
      $this->RoundedRect($logo_x, 6, $logo_width, 20, 2, '1111', 'F');
      $this->Image(GLPI_ROOT . '/public/pics/fanaone-logo.png', $logo_x, 1.5, $logo_width, 28, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
      $this->setRTL(true);
      
      $title = $this->convertAllDatesInText($this->title);
      $title_width = $logo_x - $this->getMargins()['left'] - 5;
      $title_rtl_x = $this->getPageWidth() - ($logo_x - 5);
      $this->SetXY($title_rtl_x, 9);
      $this->MultiCell($title_width, 14, $title, 0, 'R', 0, 0);
      $this->SetY(25);
      $this->Line(10, 35, $this->getPageWidth() - 10, 35);
      $this->SetY(40);
   }

   public function Footer() {
      $this->SetY(-$this->config['margin_bottom']);
      $timestamp = time();
      list($g_y, $g_m, $g_d) = explode('-', date('Y-m-d', $timestamp));
      $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
      $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
      $gy = $g_y - 1600;
      $gm = $g_m - 1;
      $gd = $g_d - 1;
      $g_day_no = 365 * $gy + floor(($gy + 3) / 4) - floor(($gy + 99) / 100) + floor(($gy + 399) / 400);
      for ($i = 0; $i < $gm; ++$i) $g_day_no += $g_days_in_month[$i];
      if ($gm > 1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0))) ++$g_day_no;
      $g_day_no += $gd;
      $j_day_no = $g_day_no - 79;
      $j_np = floor($j_day_no / 12053); $j_day_no %= 12053;
      $jy = 979 + 33 * $j_np + 4 * floor($j_day_no / 1461); $j_day_no %= 1461;
      if ($j_day_no >= 366) { $jy += floor(($j_day_no - 1) / 365); $j_day_no = ($j_day_no - 1) % 365; }
      for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i) $j_day_no -= $j_days_in_month[$i];
      $jm = $i + 1;
      $jd = $j_day_no + 1;
      $jalali_date = sprintf("%04d/%02d/%02d", $jy, $jm, $jd);
      
      $text = sprintf("FanaOne Service Desk - %s", $jalali_date);
      if (isset($this->total_count)) {
         $text .= " - " . sprintf(_n('%s item', '%s items', $this->total_count), $this->total_count);
      }
      $text .= sprintf(" - %s/%s", $this->getAliasNumPage(), $this->getAliasNbPages());
      $this->Cell(0, $this->config['margin_footer'], $text, 0, false, 'C', 0, '', 0, false, 'T', 'M');
   }

   public static function getFontList() {
      $list = [];
      $path = TCPDF_FONTS::_getfontpath();
      $include_fct = function ($font_path) use (&$list) {
         $name = null; $type = null;
         include $font_path;
         if ($name === null) return;
         $font = basename($font_path, '.php');
         if (((substr($font, -1) == 'b') || (substr($font, -1) == 'i')) && isset($list[substr($font, 0, -1)])) return;
         if ((substr($font, -2) == 'bi') && isset($list[substr($font, 0, -2)])) return;
         if ($type == 'cidfont0') { $list[$font] = sprintf(__('%1$s (%2$s)'), $name, $font); } else { $list[$font] = $name; }
      };
      foreach (glob($path . '/*.php') as $font_path) { $include_fct($font_path); }
      return $list;
   }

   public function setTotalCount($count) {
      $this->total_count = $count;
      return $this;
   }
}
