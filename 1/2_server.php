<html>

<head>
  <title></title>
</head>

<body>

<?php
echo "<h3>Server Details</h3>";
echo "Server Name : " . $_SERVER['SERVER_NAME'] . "<br/>";
echo "Server Port : " . $_SERVER['SERVER_PORT'] . "<br/>";
echo "Server IP : " . $_SERVER['SERVER_ADDR'] . "<br/>";
echo "Web Server Root Directory : " . $_SERVER['DOCUMENT_ROOT'] . "<br/>";

echo "<h3>Page Details</h3>";
echo "This file URL address : " . $_SERVER['PHP_SELF'] . "<br/>";
echo "The file Path on the server : " . $_SERVER['SCRIPT_FILENAME'] . "<br/>";

echo "<h3>Request Details From Outside Users</h3>";
echo "Request IP : " . $_SERVER['REMOTE_ADDR'] . "<br/>";
echo "Request PORT : " . $_SERVER['REMOTE_PORT'] . "<br/>";
echo "Requested Address : " . $_SERVER['REQUEST_URI'] . "<br/>";
// Request String after URL some thing like 'http://localhost/test2/server.php?line=1' then it would be 'line=1'
echo "Request String after URL : " . $_SERVER['QUERY_STRING'] . "<br/>";
echo "Request Type : " . $_SERVER['REMOTE_METHOD'] . "<br/>";
echo "Request time : " . $_SERVER['REQUEST_TIME'] . "<br/>";
echo "Request Referer : " . $_SERVER['HTTP_REFERER'] . "<br/>";
echo "Request Browser and OS type : " . $_SERVER['HTTP_USER_AGENT'] . "<br/>";

?>

</body>

</html>