<?php
shell_exec('/home/cwc/http/app/hellotime.sh');
shell_exec("./hellotime.sh 2>/dev/null >/dev/null &");
echo shell_exec('./hellotime.sh');
exec('bash -c "./hellotime.sh &>/dev/null &" &>/dev/null &');
$output = shell_exec('/bin/bash -c ./hellotime.sh ');
echo $output;
?>

<a href = "time.html">time.html</a>
