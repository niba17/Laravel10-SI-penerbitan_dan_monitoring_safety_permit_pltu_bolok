<?php

namespace App\Models;

use App\Models\Form;
use App\Models\FormAdditionalNote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormFormAdditionalNote extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'form_form_additional_note';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class, 'form_uuid');
    }

    public function form_additional_note()
    {
        return $this->belongsTo(FormAdditionalNote::class, 'form_additional_note_uuid');
    }
}
