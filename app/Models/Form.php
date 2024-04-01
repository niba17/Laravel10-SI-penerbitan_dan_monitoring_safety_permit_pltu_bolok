<?php

namespace App\Models;

use App\Models\JSA;
use App\Models\FormJSAWorker;
use App\Models\JSAPersonGroup;
use App\Models\FormFormDescription;
use App\Models\FormFormAdditionalNote;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormFormProtectiveEquipment;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'forms';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa()
    {
        return $this->belongsTo(JSA::class, 'jsa_uuid');
    }
    public function jsa_safety_permit()
    {
        return $this->belongsTo(JSASafetyPermit::class, 'jsa_safety_permit_uuid');
    }

    public function jsa_person_group()
    {
        return $this->belongsTo(JSAPersonGroup::class, 'jsa_person_group_uuid');
    }

    public function form_form_description()
    {
        return $this->hasMany(FormFormDescription::class, 'form_uuid', 'uuid');
    }

    public function form_form_protective_equipment()
    {
        return $this->hasMany(FormFormProtectiveEquipment::class, 'form_uuid', 'uuid');
    }

    public function form_jsa_worker()
    {
        return $this->hasMany(FormJSAWorker::class, 'form_uuid', 'uuid');
    }

    public function form_form_additional_note()
    {
        return $this->hasMany(FormFormAdditionalNote::class, 'form_uuid', 'uuid');
    }
}
