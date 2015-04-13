<?php

class Model
{
	private $attributes = [];

	

	public function __set($name, $value)
    {
        // Set the $name key to hold $value in $data
        $this->attributes[$name] = $value;
    }

	public function __get($name)
    {
        // Check for existence of array key $name
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];

        }

        return null;
    }
    protected static $table = 'model';

    public static function getTableName() 
    {
        return static::$table;
    }

}

$model = new Model();
$model->name = 'Mike Villarreal';
$model->group = 'Codeup';
$model->age = 19;


// echo $model->group;
// var_dump ($model->attributes);