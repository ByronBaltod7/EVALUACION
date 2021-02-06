<?php
/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
// get the HTML
ob_start();
$msg = "contenido de la informacion del alumno y dsic"; //variable donde se almacenara la informacion a reportar
?>
<page backtop="35mm" backbottom="15mm" backleft="7mm" backright="10mm">
    <br>
    <table border="0">
        <tr>
            <td style="width: 220mm;">
                <p style="font-family: times; font-size: 34px;">
                    <b>El Rector de la Universidad Nacional de Trujillo</b>
                </p>
            </td>
            <td rowspan="2">
                <div style="width: 30mm; height: 40mm; margin-top: -6mm; border: 1px solid #000;">
                </div>
            </td>
        </tr>
        <tr>
            <td style="font-family: Times; padding: 5px;">
                <br>
                <pre style="font-size: 20px; font-family: times;">       
        Por cuanto: EL CONSEJO UNIVERSITARIO DE ESTA UNIVERSIDAD, en la fecha, confiere el 
<strong>grado acad&eacute;mico</strong> de:
                </pre>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-family: Times; font-size:42px; padding: 2px;">
                <p style="text-align: center; margin-top: -13px; ">
                    <b>BACHILLER EN EDUCACI&Oacute;N</b>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-family: Times; text-align: justify;">
                <p style="font-size: 40px; font-family: times;">a : <b>VICTORIA ELIZABETH SALDA&Ntilde;A ROJAS</b></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-family: Times;">
                <p style="font-size: 20px; font-family: times;">Quien ha cumplido con los requisitos exigidos por las disposiciones legales vigentes,<br>
                    Por tanto: por <b><i>Art. 26</i></b>, expido el presente DIPLOMA para que se le reconosca como tal y se le otorgue los goces y privilegios que le
                    confieren las Leyes de la Rep&uacute;blica.</p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-family: Times;">
                <p style="font-size: 18px; font-family: times; text-align: right;">
                    Dado y firmado en Trujillo, el 20 de marzo del 2015
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <br>
                <table border="0" >
                    <tr style="width: 260mm;">
                        <td style="font-family: Times; width: 33%;">
                            <p style="font-size: 12px; font-family: times; text-align: center;">
                                PROFESOR SECRETARIO GENERARL
                            </p>
                        </td>
                        <td style="font-family: Times; width: 34%;">
                            <p style="font-size: 12px; font-family: times; text-align: center;">
                                RECTOR
                            </p>
                        </td>
                        <td style="font-family: Times; width: 33%;">
                            <p style="font-size: 12px; font-family: times; text-align: center;">
                                DECANO DE LA FACULTAD DE<br>EDUCACION Y CC. DE LA COMUNICACION
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</page>

<page backtop="25mm" backbottom="15mm" backleft="10mm" backright="10mm" >
    <br>
    <table>
        <tr>
            <td style="width: 220mm;"></td>
            <td style="width: 40mm; text-align: center;">
        <qrcode value="<?php echo $msg; ?>" ec="H" style="width: 40mm;"></qrcode>
        <span> C&oacute;digo Autogenerado para Verficar validez del Documento </span>
        </td>
        </tr>
    </table>
    <br>
</page>
<?php
$content = ob_get_clean();

// convert to PDF
require_once(dirname(__FILE__) . '/../html2pdf.class.php');
try {
    $html2pdf = new HTML2PDF('L', 'A4', 'es');
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output('grados.pdf');
} catch (HTML2PDF_exception $e) {
    echo $e;
    exit;
}
