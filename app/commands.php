<?php
$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";
$output = shell_exec('ps');
echo "<pre>$output</pre>";
?>
