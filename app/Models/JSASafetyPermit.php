<?php

namespace App\Models;

use App\Models\JSAJSASafetyPermit;
use App\Models\PTWJSASafetyPermit;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormDescriptionJSASafetyPermit;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSASafetyPermit extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_safety_permits';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_jsa_safety_permit()
    {
        return $this->hasMany(JSAJSASafetyPermit::class, 'jsa_safety_permit_uuid', 'uuid');
    }

    public function form_description_jsa_safety_permit()
    {
        return $this->hasMany(FormDescriptionJSASafetyPermit::class, 'jsa_safety_permit_uuid', 'uuid');
    }

    public function ptw_jsa_safety_permit()
    {
        return $this->hasMany(PTWJSASafetyPermit::class, 'jsa_safety_permit_uuid', 'uuid');
    }
}
