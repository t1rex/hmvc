<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
<!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
    <title>Title</title>
</head>
<body>
    <ul>
        <li><a href="/">Main</a></li>
        <li><a href="/services">Services</a></li>
        <li><a href="/portfolio">Table</a></li>
        <li><a href="/contacts">Contakts</a></li>
        <li><a href="/reg">Registration</a></li>
    </ul>
    <div>
        <?php include 'application/views/'.$content_view; ?>
    </div>
</body>
</html>