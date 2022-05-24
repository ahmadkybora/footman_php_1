<?php

namespace App\Models;

use App\Services\Model;

class User extends Model
{
    public string $first_name = '';
    public string $last_name = '';
    public string $username = '';

    public static function tableName(): string
    {
        return "users";
    }

    public function attributes(): array
    {
        // dd($this);
        // $att = [
        //     'id' => $this->id,
        //     'first_name' => $this->first_name,
        // ];
        
        // $attributes = [];

        /**
         * متد زیر اشاره گر به کلاس را گرفته و پراپرتی های 
         * کلاس را استخراج میکند
         */
        return get_object_vars($this);
        // dd($att);
        // dd($attributes);
        // dd($properties);
        // foreach ($properties as $attr => $property)
        //     $attributes[] = $property;
        // dd($properties[$attr]);
            // if (strpos($attr, 'field_') === 0)
            //     $attributes[] = substr($attr, strlen('field_'));

        // dd($attributes);
        // return $attributes;
    } 
    
}