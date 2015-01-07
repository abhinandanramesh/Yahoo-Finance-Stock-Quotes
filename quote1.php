<?

 /**
 * quote1.php
 *
 * Outputs price of given symbol as text/html.
 *
 * Building Mobile Applications
 * Harvard Extension School
 * David J. Malan
 */

 // get quote
 $handle = @fopen("http://download.finance.yahoo.com/d/quotes.csv?s={$_GET["symbol"]}&f=e1l1", "r");
 if ($handle !== FALSE)
 {
 $data = fgetcsv($handle);
 if ($data !== FALSE && $data[0] == "N/A")
 print($data[1]);
 fclose($handle);
 }
?>
