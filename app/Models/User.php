<?php

namespace App\Models;

use App\Services\Model;

class User extends Model
{
    public string $username = '';

    public static function tableName(): string
    {
        return "users";
    }

    public function attributes(): array
    {
        return [
            'username' => $this->username,
        ]; 
    } 
    
}