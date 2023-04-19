<?php
function multiplication($int)
{
    if (!is_int($int)) {
        throw new Exception('Is not a number');
    }
    return $int * 5;
}
try {
    echo multiplication('5');
    } catch (Exception $error) {
        var_dump($error);
        echo $error->getMessage();
            }

