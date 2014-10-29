<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
    <link rel="STYLESHEET" href="../../css/style.css">
    <title>Main</title>
</head>
    <div id="wrapper">
        <div id="header">
            <ul class="menu" >
                <li><a href="/">Main</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/portfolio">Table</a></li>
                <li><a href="/contacts">Contakts</a></li>
                <li><a href="/reg">Registration</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
        <div id="content">
            <?php include 'application/views/'. $content_view; ?>
        </div>
    </div>
</body>
</html>