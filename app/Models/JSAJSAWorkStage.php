<?php

namespace App\Models;

use App\Models\JSA;
use App\Models\JSAWorkStage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAJSAWorkStage extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_jsa_work_stage';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa()
    {
        return $this->belongsTo(JSA::class, 'jsa_uuid');
    }

    public function jsa_work_stage()
    {
        return $this->belongsTo(JSAWorkStage::class, 'jsa_work_stage_uuid');
    }
}
