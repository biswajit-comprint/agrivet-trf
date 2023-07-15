<?php
    include ('./../assets/vendor/Mpdf/autoload.php');
    $mpdf = new \Mpdf\Mpdf([
    		'format' =>  [210, 297],
    		'default_font_size' => 7,
    	]);

    $mpdf->WriteHTML('Tax invoice PDF.');
    $mpdf->Output(); // add download file name Output('yourFileName.pdf', 'I');
?>