<!DOCTYPE html>
<html>
<body>

<h1>获取User-Agent</h1>

<?php
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    echo "您的User Agent是：" . htmlspecialchars($userAgent);
} else {
    echo "无法获取User Agent";
}
?>


</body>
</html>
