<?php
function checkEmail($arg1)
{

    if (strpos($arg1, '.') !== false && strpos($arg1, '@') !== false) {
        return true;
    } else {
        return false;
    }
}
