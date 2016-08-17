<meta charset="UTF-8">
<?php

$pattern= '/(?<gun> ([0-9][0-9] ) ) (?<imsak>([0-9][0-9] [0-9][0-9]))  (?<gunes>([0-9][0-9] [0-9][0-9]))  (?<ogle>([0-9][0-9] [0-9][0-9]))  (?<ikindi>([0-9][0-9] [0-9][0-9]))  (?<aksam>([0-9][0-9] [0-9][0-9]))  (?<yatsi>([0-9][0-9] [0-9][0-9]))  (?<ksaat>([0-9][0-9] [0-9][0-9]))/';

$filename = 'adana.doc';
if ( file_exists($filename) ) {

if ( ($fh = fopen($filename, 'r')) !== false ) {

$headers = fread($fh, 0xA00);

# 1 = (ord(n)*1) ; Document has from 0 to 255 characters
$n1 = ( ord($headers[0x21C]) - 1 );

# 1 = ((ord(n)-8)*256) ; Document has from 256 to 63743 characters
$n2 = ( ( ord($headers[0x21D]) - 8 ) * 256 );

# 1 = ((ord(n)*256)*256) ; Document has from 63744 to 16775423 characters
$n3 = ( ( ord($headers[0x21E]) * 256 ) * 256 );

# (((ord(n)*256)*256)*256) ; Document has from 16775424 to 4294965504 characters
$n4 = ( ( ( ord($headers[0x21F]) * 256 ) * 256 ) * 256 );

# Total length of text in the document
$textLength = ($n1 + $n2 + $n3 + $n4);

$extracted_plaintext = fread($fh, $textLength);

# if you want the plain text with no formatting, do this
$extracted_plaintext;

# if you want to see your paragraphs in a web page, do this
$dosya = nl2br($extracted_plaintext);

}

}

preg_match_all($pattern, $dosya, $results);

echo "<pre>";
print_r($results);
echo "</pre>";


foreach ($results[0] as $deger) {
   echo $deger;
   echo "<br>";
}
?>


