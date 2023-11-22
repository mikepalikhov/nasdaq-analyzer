<?php

    namespace MikePal;

    $curl = new Curl([
        "PARAM_1" => 1,
        "PARAM2" => [
            "SUBPARAM_1" => 1,
            "SUBPARAM_2" => 2
        ]
    ]);