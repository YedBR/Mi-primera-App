<?php

echo "<pre>\n";
echo 'display_errors = ' . ini_get('display_errors') . "\n";

if ( ini_get('display_errors') == 1 ) {
    echo("It is all good...\n");
    echo "</pre>\n";
    return;
}
