<?php

# check if user agent contains "PSP"
if (strpos($_SERVER['HTTP_USER_AGENT'], 'PSP') !== false) {
    echo 'im a psp';
#} elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'PlayStation Vita') !== false) {
#    echo 'im a vita';
} else {
    echo 'im not a psp';
}

?>
