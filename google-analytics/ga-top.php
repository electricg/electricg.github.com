<?php
function google_analytics($buffer) {
$ga = <<<END
<script type="text/javascript">
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='//www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-35209681-1');ga('send','pageview');
</script>
END;
return str_ireplace("</body>", "{$ga}</body>", $buffer);
}
ob_start("google_analytics");
?>