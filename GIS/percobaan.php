<?php
$dbconn = pg_connect("host=localhost dbname=fp_sig_pur user=postgres password=admin")
or die('Could not connect: ' . pg_last_error());
?>