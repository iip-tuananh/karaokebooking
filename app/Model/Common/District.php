<?php

namespace App\Model\Common;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

    public function province()
    {
        return $this->belongsTo(Province::class, 'parent_code', 'id');
    }

    public static function getForSelect()
    {
        return self::select('id', 'name', 'code', 'name_with_type', 'path_with_type', 'parent_code')->get();
    }
}
