<?php
class Member extends ActiveRecord\Model { 
    static $table_name = 'member';  
}
//202.137.9.177/32
ActiveRecord\Config::initialize(function($cfg)
{
    //$cfg->set_model_directory('models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:c0b4d1b4c4@andrey.ckcjekw7tcrr.ap-southeast-1.rds.amazonaws.com:3306/belajar'));
});