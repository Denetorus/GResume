<?php

namespace sign;

use sketch\sign\SignBase;
use database\DBMain\DB;
use database\DBMain\object\users;

class SignWeb extends SignBase
{

    public function options():array
    {

        return [
            'class' => 'sketch\sign\model\SignWithoutModel',
        ];


    }


}
