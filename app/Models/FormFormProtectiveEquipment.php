<?php

namespace App\Models;

use App\Models\Form;
use App\Models\FormProtectiveEquipment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormFormProtectiveEquipment extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'form_form_protective_equipment';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class, 'form_uuid');
    }

    public function form_protective_equipment()
    {
        return $this->belongsTo(FormProtectiveEquipment::class, 'form_protective_equipment_uuid');
    }
}
