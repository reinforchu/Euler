<?php
$SubTitle = "048";
include('html_head.inc');
?>
<h1>Problem 48</h1>
<pre>
Find the last ten digits of the series
</pre>
<h2>Code</h2>
<pre>
/*  */
</pre>
<h3>Result</h3>
<pre>
<?php $StartTime = microtime(TRUE); ?>
<?php
$sum = 0;
for ($i = 1; $i <=1001; $i++) {
	$pow = pow($i,$i);
}
	$sum = pow(20,20);
?>
<?php $EndTime = microtime(TRUE); ?>
</pre>
<h3>Variables</h3>
<pre>
<?php
print("\$sum:&nbsp;"); var_dump($sum);
?>
</pre>
<h3>Execution time</h3>
<pre>
<?php
$Time = $EndTime - $StartTime;
print("{$Time} Seconds.");
?>
</pre>
<?php include('html_foot.inc'); ?> 