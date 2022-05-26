<?php
require_once 'public/vendor/autoload.php';

ob_start();
include 'template.php';
$content = ob_get_clean();

$encryption = crypt("cetak", "heCTast");
$file = $encryption.'.pdf';

$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => [170, 290],
    'orientation' => 'L'
]);
$mpdf->WriteHTML($content);
$mpdf->Output($file, 'I');
exit;

?>