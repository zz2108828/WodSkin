<?php

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    header('location: https://' . $_SERVER['HTTP_HOST']);
} else {
	header('location: http://' . $_SERVER['HTTP_HOST']);
}

?><script type="text/javascript">
history.go(-1);
</script>
<noscript>
Permission denied.
</noscript>