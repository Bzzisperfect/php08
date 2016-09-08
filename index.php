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
?>
