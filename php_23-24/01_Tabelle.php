<!DOCTYPE HTML>
<HTML>

<HEAD>
    <TITLE> Tabelle.php </TITLE>
    <meta charset="utf-8">
    <style>
    table,
    td {
        border: 1px solid black;
    }
    </style>

</HEAD>

<BODY>
    <?php
  echo "<h1>Tabelle</h1>\n"; 
  echo "<table>\n";
  for ($i=1;$i<=3;$i++)
  {
	echo "<tr>\n";
	for ($j=1;$j<=3;$j++)
	{
		echo "<td> Zelle $i#$j </td>\n";
	}	
  	echo "</tr>\n";
  }  
  echo "</table>\n";
 ?>
</BODY>

</HTML>