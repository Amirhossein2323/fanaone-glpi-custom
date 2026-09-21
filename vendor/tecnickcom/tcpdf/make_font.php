<?php

// لود کردن کتابخانه TCPDF

require_once('tcpdf.php');

// نام فایل فونت شما که در پوشه fonts کپی کردید

$fontname = TCPDF_FONTS::addTTFfont('./fonts/Vazir.ttf', 'TrueTypeUnicode', '', 32);

if ($fontname) {

    echo "SUCCESS! Font created: " . $fontname . "\n";

    echo "Now you can use \$pdf->SetFont('" . $fontname . "', '', 10);";

} else {

    echo "ERROR: Font creation failed.\n";

}

?>
