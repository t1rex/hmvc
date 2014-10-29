<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
    <link rel="STYLESHEET" href="../../css/style.css">
    <title>Simple</title>
</head>
<div id="wrapper_simple">
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
        <?php include 'application/views/'. $content_view;
            if (isset($partial)) {
                include 'application/views/'. $partial;
            }
        ?>

</div>
</body>
</html>