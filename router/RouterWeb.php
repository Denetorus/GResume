<?php

namespace router;

class RouterWeb extends \sketch\router\RouterWeb
{

    public function routes():array
    {
        return [

            '' => [
                'path' => 'index',
                'status' => -1
            ],

        ];
    }

}
