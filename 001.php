<?php
$SubTitle = "001";
include('html_head.inc');
?>
<h1>Problem 1</h1>
<pre>
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below 1000.
</pre>
<h2>Code</h2>
<pre>
$Sum = 0;
for ($Count = 1; $Count &lt; 1000; $Count++) if (($Count % 3) === 0 || ($Count % 5) === 0) $Sum = $Sum + $Count;
print($Sum);
</pre>
<h3>Result</h3>
<pre>
<?php $StartTime = microtime(TRUE); ?>
<?php
$Sum = 0;
for ($Count = 1; $Count < 1000; $Count++) if (($Count % 3) === 0 || ($Count % 5) === 0) $Sum = $Sum + $Count;
print($Sum);
?>
<?php $EndTime = microtime(TRUE); ?>
</pre>
<h3>Variables</h3>
<pre>
<?php
print("\$Sum:&nbsp;"); var_dump($Sum);
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