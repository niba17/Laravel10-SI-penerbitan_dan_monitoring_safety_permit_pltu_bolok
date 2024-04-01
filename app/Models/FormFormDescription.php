<?php

namespace App\Models;

use App\Models\Form;
use App\Models\FormDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormFormDescription extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'form_form_description';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class, 'form_uuid');
    }

    public function form_description()
    {
        return $this->belongsTo(FormDescription::class, 'form_description_uuid');
    }
}
