<pre>
    <?php

    switch (PHP_OS_FAMILY) {
        case "Windows":
            system("dir ..\\");
            break;
        case "Linux":
            system("find ../");
    }

    ?>
</pre>