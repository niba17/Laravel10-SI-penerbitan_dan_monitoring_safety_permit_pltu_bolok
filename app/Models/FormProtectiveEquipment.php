<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FormFormProtectiveEquipment;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormProtectiveEquipment extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'form_protective_equipments';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function form_form_protective_equipment()
    {
        return $this->hasMany(FormFormProtectiveEquipment::class, 'form_protective_equipment_uuid', 'uuid');
    }
}
