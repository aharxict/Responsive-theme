<?php
$sql = mysql_query("SELECT count(*) FROM vld_messages WHERE member_id2 = '3' AND new = '1'");

if (mysql_result($sql, 0) == '0') {
echo '0';
}
else {
echo mysql_result($sql, 0);
}
?>