<?php

namespace src;

use Tuupola\Middleware\HttpBasicAuthentication;

function basicAuth(): HttpBasicAuthentication
{
    return new HttpBasicAuthentication([
        "relaxed" => ["localhost", "http://sistema-cartao.rf.gd/"],
        "users" => [
            "root" => "teste123"
        ]
    ]);
}
