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
session_start();

if(!isset($_POST['codigoAlumno'])){
    session_destroy();
    header("Location:../../../index.php");
}
$id = $_POST['codigoAlumno'];
$diploma = $_POST['diploma'];
$denominacion = $_POST['denominacion'];

$cadena_de_texto = $denominacion;
$cadena_buscada   = ' MENCIÓN :';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);

$fecha = $_POST['fecha'];
$año = substr($fecha, 0, 4);
$mes = (int)substr($fecha, 5, 2);
$dia = substr($fecha, 8, 2);
$cadena = $_POST['nombreComp'];//no funca para nombres con la primera letra con tilde
//$cadena = str_replace('Á', 'á', $cadena);
//$cadena = str_replace('É', 'é', $cadena);
//$cadena = str_replace('Í', 'í', $cadena);
//$cadena = str_replace('Ó', 'ó', $cadena);
//$cadena = str_replace('Ú', 'ú', $cadena);
//$cadena = str_replace('Ñ', 'ñ', $cadena);
$cadena = str_replace('Á', 'A', $cadena);
$cadena = str_replace('É', 'E', $cadena);
$cadena = str_replace('Í', 'I', $cadena);
$cadena = str_replace('Ó', 'O', $cadena);
$cadena = str_replace('Ú', 'U', $cadena);
$cadena = str_replace('Ñ', 'Ñ', $cadena);
$nombreComp = strtoupper($cadena);

//$nombreComp = (ucwords(strtolower($cadena)));

$rector = $_POST['rector'];
$decano = $_POST['secretario'];
$secretario = $_POST['decano'];
$rectorCargo = $_POST['rectorCargo'];
$secretarioCargo = $_POST['secretarioCargo'];
$decanoCargo = $_POST['decanoCargo'];

$nrolibro = $_POST['libro'];
$facultad = $_POST['facultad'];
$escuela = $_POST['escuela'];
$folio = $_POST['folio'];
$nroRegistro = $_POST['nroRegistro'];
$tipoDocumento = $_POST['tipoDocumento'];
$tipoFicha = $_POST['tipoFicha'];
$tipoActo = $_POST['actoAcademico'];
$fechaResolucionCU = $_POST['fechaConsuniv'];
$numResolucionUniv = $_POST['nroResolucionUniv'];
$idFicha = $_POST['idFicha'];
if(isset($_POST['idgraduadoDup'])) {
    $diplomasEstado = "DUPLICADO";
}
else{
    $diplomasEstado = "ORIGINAL";
}



ob_start();
$msg = "www.diplomas.unitru.edu.pe/consulta.php?id=".$id;
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
?>
<style type="text/css">
<!--
    table.page_header {width: 100%; border: none; background-color: #DDDDFF; border-bottom: solid 1mm #AAAADD; padding: 2mm }
    table.page_footer {width: 100%; border: none; background-color: #DDDDFF; border-top: solid 1mm #AAAADD; padding: 2mm}
    table.page_content {width: 100%;border: none; padding: 2mm }
-->
</style>
<page backtop="14mm" backbottom="0mm" backleft="10mm" backright="10mm">
    <table class="page_content" border="0">
        <tr border="0">
            <td style="width: 100%; text-align: left;" colspan="5">
                <img src="avatar2.png" align="right" style="margin-left: 20px; margin-right: 40px;  margin-top:115px; padding: 5px;">
                <p style="text-indent: 70px; text-align: justify; font-size:16px">
                    &nbsp;<br>
                    &nbsp;<br>
                    &nbsp;<br>
                    &nbsp;<br>
                    &nbsp;<br>
                    &nbsp;<br>
                </p>
                <p style="text-align: justify; margin-left: 2px; margin-top: 6px; margin-bottom: 1px; font-size:22px;"><b>El Rector de la Universidad Nacional de Trujillo</b></p>
                <p style="text-indent: 50px; text-align: justify;  font-family: Times; font-size:18px; margin-bottom: -5px;">
                    Por cuanto:</p>
                <p style="text-indent: 50px; text-align: justify;  font-size:19px; line-height: 34px; ">
                    EL CONSEJO UNIVERSITARIO DE ESTA UNIVERSIDAD, en la fecha, ha conferido el
                        <?php 
                        if(substr($diploma, 0,1) == 'B' || substr($diploma, 0,1) == 'M' || substr($diploma, 0,1) == 'D'){
                            echo " GRADO ACADÉMICO ";
                        }else{
                            echo " TÍTULO PROFESIONAL ";
                        }
                        ?>de :
                </p>
                <p style="text-align: center; margin-bottom:5px; margin-top: 15px;">
<!--                    <b><?php //echo $denominacion;?></b>-->
                    <b>
                        <?php 
                            if($posicion_coincidencia){
                                $primeraParte = substr($denominacion, 0, $posicion_coincidencia);
                                echo "<p style='font-size:32px; margin-top: -6px;'>".$primeraParte.'</p><br>';
                                $segundaParte = substr($denominacion, $posicion_coincidencia);
                                echo "<p style='font-size:23px;margin-top: -36px;;margin-bottom: -10px;'>".$segundaParte."</p>";
                            }else{
                                echo "<p style='font-size:37px;margin-top: -10px;'>".$denominacion."</p>";
                            }
                        ?></b>
                </p>
                <p style="font-size:20px; text-align: center;">
                <div style="float:right; margin-left: -532mm; ">a:&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <!--<font style="font-size:45px; font-family: brushib; margin-top:-10mm; "><b><?php //echo $nombreComp;?></b></font>-->
                <font style="font-size:31px; font-family: coopblb; margin-top:-8mm; "><b><?php echo $nombreComp;?></b></font>
                </p>
                <p style="text-align: justify; text-indent: 0px; margin-bottom: 18px; margin-top: -35px; font-size:18px">
                    De la <b><?php echo $facultad ?></b>, <b><?php if ($idFicha==1 || $idFicha==2){?>ESCUELA ACADÉMICO PROFESIONAL DE <?php }?><?php if($escuela=='RESIDENTADO MÉDICO'){?>PROGRAMA DE SEGUNDA ESPECIALIDAD<?php } else{ echo $escuela; }?></b></p>
                <!--De la <b>FACULTAD DE EDUCACIÓN Y CIENCIAS DE LA COMUNICACIÓN</b>, <b>ESCUELA ACADÉMICO PROFESIONAL DE EDUCACIÓN SECUNDARIA MENCIÓN : LENGUA NACIONAL Y LITERATURA</b></p>-->
                <p style="text-align: justify; text-indent: 50px; font-family: Times;  margin-bottom: -3px; margin-top: -9px; font-size:18px">
                    Por tanto:</p>
                <p style="text-align: justify; text-indent: 50px; font-size:18px; font-family: Times; line-height: 20px;">
                    Le expido el presente DIPLOMA para que se le reconozca como tal y se le otorgue los goces y privilegios que le 
                    confieren las Leyes de la República.
                </p>
                <p style="text-align: right;  margin-top: -12px; font-size:16px; font-family: Times;">
                    Trujillo, <?php echo $dia." de ".$meses[$mes-1]. " del ".$año; ?>
                </p>
            </td>
        </tr>
        <tr>
            <td style="width: 100%; text-align: left;" colspan="5">
                &nbsp;<br>
                &nbsp;<br>
                &nbsp;<br>
            </td>
        </tr>
        <tr style="margin-bottom: -5px;" valign="top">
            <td style="width: 30%; text-align: center;margin-top: 8px">
                <hr style=" width:80%;border-bottom: 0px dashed #ccc; background: #999;">
                PROFESOR SECRETARIO GENERAL (E)<br>
                <b><?php echo $decano?></b>
            </td>
            <td style="width: 5%; text-align: center;margin-top: 8px">
               &nbsp; 
            </td>
            <td style="width: 30%; text-align: center;">
                <hr style="width:80%; margin-bottom: 5px; border-bottom: 0px dashed #ccc; background: #999;">
                RECTOR<br>
                <b><?php echo $secretario?></b>
            </td>
            <td style="width: 5%; text-align: center;margin-top: 8px">
                &nbsp;
            </td>
            <td style="width: 30%; text-align: center;">
                <hr style="margin-bottom: 5px; border-bottom: 0px dashed #ccc; background: #999;">
                <?php echo $rectorCargo?><br>
                <b><?php echo $rector?></b>
            </td>
        </tr>
    </table>
</page>
<page pageset="old">
    <br>
    <table>
        <tr>
            <td style="width: 45mm; text-align: center; margin-left: 10px;">
                <qrcode value="<?php echo $msg; ?>" ec="L" style="width: 30mm; margin-top: -4px; margin-left: -51px; background-color: white; color: #251e9b;"></qrcode><br><br>
                <!--<span style="margin-left: -60px;"> C&oacute;digo para verificar validez del Documento </span>   251e9b-->
            </td>
            <td style="width: 130mm;">
                <div style="margin-top: -20px; margin-left: -40px;">
                    <p  style="font-size: 11px; margin-top: -0px; line-height: 15px;">
                        CÓDIGO DE UNIVERSIDAD :<b> 004</b><br>
                        REGISTRADO EN EL LIBRO DE
                        <?php 
                        if(substr($diploma, 0,1) == 'B'){
                            echo " GRADOS ";
                        }else{
                            echo " TÍTULOS ";
                        }
                        ?>
                        Nº:<b> <?php echo $nrolibro?> </b> <br>
                        EN EL FOLIO Nº:<b> <?php echo $folio;?></b> <br>
                        REGISTRO Nº: <b><?php echo $nroRegistro; ?> </b> DE SECRETARIA GENERAL <br>
                        TIPO DOCUMENTO:<b> <?php echo $tipoDocumento; ?></b> N° DOCUMENTO: <b> <?php echo $_POST['nroDoc']?></b> <br>
                        DIPLOMA OBTENIDO: <b><?php echo $tipoFicha; ?></b> <br>
                        OBTENIDO POR: <b><?php echo $tipoActo;?></b><br>
                        MODALIDAD DE ESTUDIOS: <b> PRESENCIAL</b>
                    </p>
                </div>
            </td>
            <td>
                <p  style="font-size: 11px; margin-top: -60px;">
                    RESOLUCIÓN <?php if(isset($_POST['idgraduadoDup'])) { echo "RECTORAL"; }else{ echo "DE CONSEJO UNIVERSITARIO"; } ?> Nº :<b> <?php echo $numResolucionUniv; ?></b><br>
                    FECHA RESOLUCIÓN <?php if(isset($_POST['idgraduadoDup'])) { echo "RECTORAL"; }else{ echo "DEL CONSEJO UNIVERSITARIO"; } ?>: <b> <?php echo $fechaResolucionCU; ?></b><br>
                    EMISIÓN DE DIPLOMA:  <b><?php echo $diplomasEstado; ?></b>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                    <br><br><br><br><br><br><br>
                    &nbsp;____________________________________<br>
                    <p style="font-size: 11px; text-align: right; margin-right: -15px;">
                        Firma del Interesado</p>
                </div>
            </td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="3">
                <div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                </div>
            </td>
        </tr>
    </table>
    <br>
</page>

<?php
    $content = ob_get_clean();
    require_once(dirname(__FILE__).'/../html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('L', 'A4', 'fr', true, 'UTF-8', 0);
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        
        header('Content-Type: application/pdf');
        header('Cache-Control: public, must-revalidate, max-age=0'); 
        header('Pragma: public');
        header('Expires: Sat, 29 Jun 1985 05:00:00 GMT');
        header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
        header('Content-Disposition: inline; filename="your-pdf-title";');

        $html2pdf->Output('diploma.pdf');        
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }