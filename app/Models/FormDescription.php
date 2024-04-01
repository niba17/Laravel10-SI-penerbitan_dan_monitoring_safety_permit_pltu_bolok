<?php

namespace App\Models;

use App\Models\FormFormDescription;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormDescriptionJSASafetyPermit;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormDescription extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'form_descriptions';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function form_form_description()
    {
        return $this->hasMany(FormFormDescription::class, 'form_description_uuid', 'uuid');
    }

    public function form_description_jsa_safety_permit()
    {
        return $this->hasMany(FormDescriptionJSASafetyPermit::class, 'form_description_uuid', 'uuid');
    }
}
