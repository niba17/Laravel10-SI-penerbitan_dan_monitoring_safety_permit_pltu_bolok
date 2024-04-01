<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FormFormAdditionalNote;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormAdditionalNote extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'form_additional_notes';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function form_form_additional_note()
    {
        return $this->hasMany(FormFormAdditionalNote::class, 'form_additional_note_uuid', 'uuid');
    }
}
