<?php

namespace App\Model\Common;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'wards';

    public function district()
    {
        return $this->belongsTo(District::class, 'parent_code', 'id');
    }

    public static function getForSelect()
    {
        return self::select('id', 'name', 'code', 'name_with_type', 'path_with_type', 'parent_code')->get();
    }
}
