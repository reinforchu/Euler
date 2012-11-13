<?php
$SubTitle = "005";
include('html_head.inc');
?>
<h1>Problem 5</h1>
<pre>
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
</pre>
<h2>Code</h2>
<pre>
$Target = 20; $Count = 0;
while ($Count &lt; 19):
	for ($i = 20; $i &gt; 1; $i--) if (($Target % $i) === 0) $Count++; else $i = 1;
	if ($Count &lt; 19) { $Count = 0; $Target = $Target + 20; }
endwhile;
print($Target);
</pre>
<h3>Result</h3>
<pre>
<?php $StartTime = microtime(TRUE); ?>
<?php
$Target = 20; $Count = 0;
while ($Count < 19):
	for ($i = 20; $i > 1; $i--) if (($Target % $i) === 0) $Count++; else $i = 1;
	if ($Count < 19) { $Count = 0; $Target = $Target + 20; }
endwhile;
print($Target);
?>
<?php $EndTime = microtime(TRUE); ?>
</pre>
<h3>Variables</h3>
<pre>
<?php
print("\$Target:&nbsp;"); var_dump($Target);
print("\$Count:&nbsp;"); var_dump($Count);
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