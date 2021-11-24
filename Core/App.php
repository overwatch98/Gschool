<?php

namespace Gschool\Core;

use Gschool\Model\Manager;


class App{

    public static function getDb(){
        $db = new Manager();
        return $db->dbConnect();
    }

}