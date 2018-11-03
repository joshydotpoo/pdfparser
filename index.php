<?
$parser = new src\Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile('samples/Document1_foxitreader.pdf');

$text = $pdf->getText();
echo $text;
?>
