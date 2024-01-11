<?php
// function checkEmail($arg1)
// {

//     if (str_contains($arg1, '.')  && str_contains($arg1, '@') ) {
//         return true;
//     } else {
//         return false;
//     }
// }
function checkEmail($arg1)
{

    return str_contains($arg1, '.') && str_contains($arg1, '@');
}
