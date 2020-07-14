<!DOCTYPE HTML>
<html>
<head>
<title>Muhammad Hanan Asghar PHP</title>
</head>

<body>
<h1>Muhammad Hanan Asghar PHP</h1>
<?php
$msg = "Muhammad Hanan Asghar";
$details = "The SHA256 hash of '$msg' is ";
$val = hash('sha256',$msg);
print $details." ".$val;
?>
<pre>
ASCII ART:

    **   **
    * * * *
    *  *  *
    *     *
    *     *
</pre>
<a href="check.php">Click here to check the error setting</a>
<br>
<a href="fail.php">Click here to check a traceback</a>
</body>
</html>
