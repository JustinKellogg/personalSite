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
            <img class="experience_image" src="static/images/pict.jpeg" height="168" width="84" alt="pretty">
            <p> Some text saying some stuff I did </p>
        </div>

        <div id="tabs-2">
            <p> Use star ratings</p>
        </div>

        <div id="tabs-3">
            <p> use accordians</p>
        </div>

        <div id="tabs-4">
            <div id="github-tabs">
                <ul>
                    <li><a href="#tabs-4">General</a><li>
                </ul>
                <div id="github-tabs-1">
                   <div id="ghapidata" class="clearfix"></div>
                </div>
            </div>
        </div>



        <div id="tabs-5">
            <p> not sure what style I want here </p>
        </div>

        <div id="tabs-6">
            make better pdf display
            <iframe src="static/resume.pdf" frameborder="0" height="100%" width="100%"></iframe>
        </div>
    </div>
</body>

<?php endblock() ?>

