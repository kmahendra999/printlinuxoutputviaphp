<!DOCTYPE html>
<html>
<head>
<title>Hostname</title>
</head>
<body>
<h1>
<?php
$result=shell_exec("cat /etc/hosts");
echo "<pre>".$result."</pre>";
?>

</h1>
</body>
</html>
