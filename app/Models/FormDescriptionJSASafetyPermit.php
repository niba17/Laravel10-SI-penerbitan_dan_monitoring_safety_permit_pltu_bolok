<?php

namespace App\Models;

use App\Models\FormDescription;
use App\Models\JSASafetyPermit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormDescriptionJSASafetyPermit extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'form_description_jsa_safety_permit';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function form_description()
    {
        return $this->belongsTo(FormDescription::class, 'form_description_uuid');
    }

    public function jsa_safety_permit()
    {
        return $this->belongsTo(JSASafetyPermit::class, 'jsa_safety_permit_uuid');
    }
}
