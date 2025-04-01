<?php

namespace App\Model\Common;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';

    public function districts()
    {
        return $this->hasMany(District::class, 'parent_code', 'id');
    }

    public static function getForSelect()
    {
        return self::select('id', 'name', 'name_with_type')->get();
    }
}
