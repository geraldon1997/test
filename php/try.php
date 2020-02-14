<?php
require 'vendor/autoload.php';

// This will output the barcode as HTML output to display in the browser
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
echo "<div style='margin:0 auto; display:grid; grid-template-columns:20% 20% 20% 20% 20%;'>";
for ($i=0; $i < 50; $i++) {
    echo $generator->getBarcode(rand('0123456789', '9999999999'), $generator::TYPE_CODE_128).'<br>';
}
echo "</div>";
