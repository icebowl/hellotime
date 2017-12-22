<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("/home/cwc/http/app/time.sh");
}
?>
<pre>
LINK TO START time.sh
<a href="?run=true">START GAME</a>
LINK TO VIEW bash OUTPUT
<a href="out.html">out.html</a>
</pre>
