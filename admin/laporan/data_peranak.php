<?PHP ob_start(); // buka library laporan
//koneksi
include "../action/koneksi.php";
include(dirname(__FILE__).'/data_peranak_lap.php');// memanggil file laporan 
$content = ob_get_clean();

// conversion HTML => PDF
require_once(dirname(__FILE__).'./html2pdf/html2pdf.class.php');
try
{
$html2pdf = new HTML2PDF('L','A4', 'fr', false, 'ISO-8859-15');
$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
$html2pdf->Output('hasil-laporan-perkembangan-anak.pdf');//output laporan setelah di download
}
catch(HTML2PDF_exception $e) { echo $e; }?>
