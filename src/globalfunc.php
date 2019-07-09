<?php

/*
|--------------------------------------------------------------------------
| Link to CSS or Javascript or image
|--------------------------------------------------------------------------
*/
if (!function_exists('asset')) {
    function asset($File)
    {
        return '/'.$File;
    }
}
