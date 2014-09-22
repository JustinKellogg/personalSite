<?php include "templates/base.php"; ?>

<?php startblock('main_content') ?>

<body>

    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Home</a></li>
            <li><a href="#tabs-2">Skills</a></li>
            <li><a href="#tabs-3">Work</a><li>
            <li><a href="#tabs-4">Github</a><li>
            <li><a href="#tabs-5">GoodReads</a></li>
            <li><a href="#tabs-6">Resume</a></li>
        </ul>

        <div id="tabs-1">
            <?php include "templates/work.php" ?>
        </div>

        <div id="tabs-2">
            <?php include "templates/skills.php" ?>
        </div>

        <div id="tabs-3">
            <?php include "templates/work.php" ?>
        </div>

        <div id="tabs-4">
            <?php include "templates/github.php" ?>
        </div>

        <div id="tabs-5">
            <?php include "templates/goodreads.php" ?>
        </div>

        <div id="tabs-6">
            <?php include "templates/goodreads.php" ?>
        </div>
    </div>
</body>

<?php endblock() ?>

