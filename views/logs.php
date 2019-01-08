<?php 
require_once "header.php";
?>

<body>
    <div class="nav">
        <a href="index.php">Main page</a>
        <a href="settings.php">Settings</a>
    </div>
    
    <h3>Logs</h3>
    <?php 
    	$lines = file('../logs/info/log.log');
    	$countLogs = $_SESSION['countLogs'];
    	$lines = array_slice($lines, -$countLogs);
		foreach ($lines as $line) {
		    if (preg_match('/\\btime":"*(.*).*\\b","res":"*(.*)".*/i', $line, $match))
				echo $match[1], '  ', $match[2].'<br>';
		}
    ?>


</body>
</html>