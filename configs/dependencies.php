<?php

use Nurse\Di;

Di::set('connection', function () {
    return new PDO('some_dsl');
});
