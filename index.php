<?
include 'src/Smalot/PdfParser/Parser.php';
$parser = new Parser();
$pdf    = $parser->parseFile('samples/Document1_foxitreader.pdf');
$text = $pdf->getText();
echo $text;
?>
