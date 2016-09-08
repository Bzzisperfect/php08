<meta charset:"utf-8">
<?php
$yaga=77;
echo $yaga;
if (is_integer($yaga))
	echo "<br/>";
	echo "nektar";
	if (isset($yaga))
	echo "<br/>";
	echo "bogov";
	echo "<br/>";
	echo gettype($yaga);
	$yaga="nya";
	if (isset($yaga))
	{
		echo "<br/>";
		echo "pel`mennaya sywestvuet";
	}
    else
		echo "pel`mennaya ne sywestvuet";
    echo "<br/>";
$pelmeni=array(
        1=>"a",
        2=>"b",
        3=>"c",
        4=>"d",
	);
echo"<pre>";
print_r($pelmeni);
echo "<br/>";
var_dump($pelmeni);
echo "<br/>";
var_export($pelmeni);
echo "</pre>";
define("pi","3,14");
echo pi;
echo __FILE__;
echo "<br/>";
echo __LINE__;
echo "<br/>";
echo PHP_VERSION;
echo "<br/>";
echo PHP_OS;
$whatis="ilovepelmni";
unset($whatis);
echo $whatis;
$whatis="pelmeni is life";
$random=43;
$result=$whatis.$random;
if(is_integer($result))
{
echo "INT";
}
else
{
echo "<br/>";
echo "NOT INT";
echo "<br/>";
}

if(is_string($result))
{
echo "STR";
}
else
{
echo "<br/>";
echo "NOT STR";
}

$varone="73";
$vartwo="27";
$results=$varone+$vartwo;
echo $result;
?>

