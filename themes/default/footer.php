<?php
if( !defined('PHURL' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
?>
<div id="footer">
<p>&copy; <?php echo date('Y'); ?> <?php echo $config['site_name']; ?> - Powered by <a
	href="http://www.phurlproject.org/">Phurl</a>.</p>
</div>
</div>
</body>
</html>
