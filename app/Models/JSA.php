<?php

namespace App\Models;

use App\Models\JSAJSAWorker;
use App\Models\JSAJSAWorkTool;
use App\Models\JSAPersonGroup;
use App\Models\JSAJSAWorkStage;
use App\Models\JSAJSASafetyPermit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSA extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsas';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_person_group()
    {
        return $this->belongsTo(JSAPersonGroup::class, 'person_group_uuid');
    }

    public function jsa_jsa_safety_permit()
    {
        return $this->hasMany(JSAJSASafetyPermit::class, 'jsa_uuid', 'uuid');
    }

    public function jsa_jsa_worker()
    {
        return $this->hasMany(JSAJSAWorker::class, 'jsa_uuid', 'uuid');
    }

    public function jsa_jsa_work_stage()
    {
        return $this->hasMany(JSAJSAWorkStage::class, 'jsa_uuid', 'uuid');
    }

    public function jsa_jsa_work_tool()
    {
        return $this->hasMany(JSAJSAWorkTool::class, 'jsa_uuid', 'uuid');
    }

    public function form()
    {
        return $this->hasMany(Form::class, 'jsa_uuid', 'uuid');
    }
}
