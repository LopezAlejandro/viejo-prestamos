<?php
$pdf = Yii::createComponent('application.extensions.mpdf.mpdf');

$html='
<link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/pdf.css" />

<table id="yw0" class="detail-view2">
<tr class="principal">
<td colspan="2" align="center"><b>DATOS DEL USUARIO</b></td>
<tr>
<tr class="odd"><td> <b>Nombre y Apellido</b> </td><td> '.$model->nombre.'</td></tr>
<tr class="even"><td> <b>Tipo Documento</b> </td><td> '.$model->claseDocumento->descripcion_documento.'</td></tr>
<tr class="odd"><td> <b>N&uacute;mero Documento</b> </td><td> '.$model->documento.'</td></tr>
</table>
';
$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$mpdf->SetFooter(' {DATE j/m/Y}|Página {PAGENO}|Biblioteca FADU - UBA');
$mpdf->SetWatermarkText("Biblioteca FADU - UBA");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->WriteHTML($html);
$mpdf->Output('Ficha-Usuario-'.$model->nombre.'.pdf','D');
exit;
?>
