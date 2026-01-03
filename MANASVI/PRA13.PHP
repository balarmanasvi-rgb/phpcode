<?php

echo"<b>example of strlower() function</b>"."<br>";
echo strtolower("My name is KHAN")."<br>"."<br>";

echo"<b>example of strupper() function</b>"."<br>";
echo strtoupper("My name is KHAN")."<br>"."<br>";

echo"<b>example of strrev() function</b>"."<br>";
echo strrev("Hello World!")."<br>"."<br>";

echo"<b>example of strlen() function</b>"."<br>";
echo strlen("Hello World!")."<br>"."<br>";

echo"<b>example of str_word_count() function</b>"."<br>";
echo str_word_count("Hello World!")."<br>"."<br>";

echo"<b>example of str_replace() function</b>"."<br>";
echo str_replace("World!","Friends!","Hello World!")."<br>"."<br>";

echo"<b>example of strucword() function</b>"."<br>";
echo ucwords("Hello World!")."<br>"."<br>";

echo"<b>example of chr() function</b>"."<br>";
$str=chr(046);
echo("ASSC $str CS")."<br>"."<br>";

echo"<b>example of ord() function</b>"."<br>";
echo ord("h")."<br>"."<br>";
echo ord("hello")."<br>"."<br>";

echo"<b>example of trim(),ltrim(),rtrim() function</b>"."<br>";
$str="Hello World!";
echo "without used function:".$str."<br>"."<br>";
echo"trim function:".trim($str,"Hed!")."<br>"."<br>";
echo"ltrim function:".ltrim($str,"Hed!")."<br>"."<br>";
echo"rtrim function:".rtrim($str,"Hed!")."<br>"."<br>";

echo"<b>example of substr() function</b>"."<br>";
echo substr("Hello World!",6)."<br>"."<br>";

echo"<b>example of strcmp() & strcasecmp() function</b>"."<br>";
echo "strcmp fumction:". strcmp("Hello World!","Hello World!")."<br>"."<br>";
echo "strcasecmp fumction:". strcasecmp("Hello World!","HELLO WORLD!")."<br>"."<br>";

?>