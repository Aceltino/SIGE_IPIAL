<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UuidTrait
{
    /**
     * The "booting" method of the trait.
     *
     * @return void
     */
    protected static function bootUuid()
    {
        static::creating(function ($model) {
            $model->uuid = static::gerarUuid();
        });
    }

    /**
     * Gera uma chave UUID.
     *
     * @return string
     */
    public static function gerarUuid()
    {
        $uuid = '';
        do {
            $uuid = Str::uuid()->toString();
        } while (static::where('uuid', $uuid)->exists());

        return $uuid;
    }
}
