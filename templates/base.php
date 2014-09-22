<!DOCTYPE html>

<html>

    <?php require_once 'phpti/ti.php' ?>

    <head>
        <meta author="Justin Kellogg" http-equiv="Content-Type", content="text/html; charset=UTF-8">
        <title> <?php startblock('title')?> Home <?php endblock()?> </title>

        <link rel="stylesheet" type="text/css" href="static/styles/stylesheet.css" />
        <link rel="stylesheet" type="text/css" href="static/js/jquery-ui/jquery-ui.min.css">
        <script type="text/javascript" src="static/js/jquery-ui/external/jquery/jquery.js"></script>
        <script type="text/javascript" src="static/js/jquery-ui/jquery-ui.js"></script>
        <script type="text/javascript" src="static/js/home.js"></script>
        <script type="text/javascript" src="static/js/github.js"></script>
    </head>

    <body>

<! ------ Nav Bar -->
    <?php startblock('nav') ?>
            <nav id="navigation">
                <ul id="nav_list">
                    <li><a href="home.php">Home</a></li>
                </ul>
            </nav>
    <?php endblock() ?>

<! ------ Aside content -->
    <?php startblock('aside') ?>

            <aside>
                 Aside stuff
                 <p> this is where I could say <br> stuff about stuff <p>
             </aside>
    <?php endblock()?>

<! ------- Main Content -->
        <div class="wrapper">
            <div id="content_body" class="content">
                 <?php startblock('main_content') ?>
                 <?php endblock() ?>
            </div>
        </div>
    </body>

<! ------- Footer -->
    <?php startblock('footer') ?>
            <footer>
                <p> Justin Kellogg</p>
            </footer>
   <?php endblock() ?>

</html>

