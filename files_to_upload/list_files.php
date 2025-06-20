<?php

switch (PHP_OS_FAMILY) {
    case "Windows":
        $output = shell_exec("dir ..");
        break;
    case "Linux":
        $output = shell_exec("ls -l ..");
}

echo '<pre>' . htmlspecialchars($output) . '</pre>';
