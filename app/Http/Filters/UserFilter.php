<?php

namespace App\Http\Filters;



use Illuminate\Database\Eloquent\Builder;

class UserFilter extends AbstractFilter
{
    public const FIRST_NAME = 'first_name';
    public const MIDDLE_NAME = 'middle_name';
    public const LAST_NAME = 'last_name';

    protected function getCallbacks(): array
    {
        return [
            self::FIRST_NAME => [$this, 'firstName'],
            self::MIDDLE_NAME => [$this, 'middleName'],
            self::LAST_NAME => [$this, 'lastName'],
        ];
    }

    public function firstName(Builder $builder, $value)
    {
        $builder->where('first_name', 'like', "%{$value}%");
    }

    public function middleName(Builder $builder, $value)
    {
        $builder->where('middle_name', 'like', "%{$value}%");
    }

    public function lastName(Builder $builder, $value)
    {
        $builder->where('last_name', 'like', "%{$value}%");
    }
}
