<?php
include '../../includes/config.php';

$userid = $_POST['userid'];

mysql_connect("localhost","".$conf['db_username']."","".$conf['db_password']."") or exit( mysql_error() );
mysql_select_db("".$conf['db_name']."") or exit( mysql_error() );

$sql = mysql_query("SELECT count(*) FROM {db_prefix}_messages WHERE member_id2 = '".$userid."' AND new = '1'");

if (mysql_result($sql, 0) == '0') {
}
else {
echo '<span class="badge" style="background:#AEC62C;">';
echo mysql_result($sql, 0);
echo '</span>';
}
?>