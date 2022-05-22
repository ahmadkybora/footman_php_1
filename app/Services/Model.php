<?php

namespace App\Services;

abstract class Model
{
    /**
     * در متدهای ابسترکت باید بدنه آنها داخل کلاس های فرزند اعمال شود
     * متد زیر نام جدول را میگیرد
     */
    abstract public static function tableName(): string;
    abstract public function attributes(): array;

    /**
     * اماده سازی برای کوئری زدن
     */
    public static function prepare($sql)
    {
        return App::$app->db->pdo->prepare($sql);
    }

    /**
     * متد ذخیره کردن برای داده های هر مدل میباشد به نوی یک دیتا رپر است
     */
    public function save()
    {
        /**
         * فراخوانی جدول
         */
        $tableName = $this->tableName();
        /**
         * فراخوانی فیلدها
         */
        $attributes = $this->attributes();
        dd($attributes);
        $params = array_map(fn ($attr) => ":$attr", $attributes);
        dd($params);
        /**
         * کوئری زدن
         */
        $sql = "INSERT INTO $tableName (" . implode(",", $attributes) . ") VALUES (
            " . implode(",", $params) . "
        );";

        /**
         * آماده سازی کوئری
         */
        $statement = $this->prepare($sql);

        /**
         * بایند کردن داده ها
         */
        dd($statement);
        foreach ($attributes as $attribute)
            $statement->bindValue(":$attribute", $this->{$attribute});

        /**
         * در نهایت تایید آنها و ذخیره در دیتابیس
         */
        $statement->execute();
        return true;
    }
} 