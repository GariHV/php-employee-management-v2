    <?php
    if (EXECUTION_FLOW)
        echo "<p>Main view</p>";

    require VIEWS . '/header.php';
    ?>
    <div id="main">
        <h1 class="center">Welcome to the Advanced MVC</h1>
    </div>
    <div class="msgContainer">

    </div>

    <div id="jsGrid">

    </div>
    <?php
    require VIEWS . '/footer.php';
    ?>