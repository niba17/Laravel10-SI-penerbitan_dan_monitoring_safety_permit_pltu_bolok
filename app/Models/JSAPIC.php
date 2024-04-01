<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\JSAWorkStageJSAPIC;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAPIC extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_pics';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_work_stage_jsa_pic()
    {
        return $this->hasMany(JSAWorkStageJSAPIC::class, 'jsa_pic_uuid', 'uuid');
    }
}
