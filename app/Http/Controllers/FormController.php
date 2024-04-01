<?php

namespace App\Http\Controllers;

use App\Models\JSA;
use App\Models\Form;
use App\Models\JSAWorker;
use Illuminate\Http\Request;
use App\Models\FormJSAWorker;
use App\Models\JSAPersonGroup;
use App\Models\FormDescription;
use App\Models\JSASafetyPermit;
use App\Http\Requests\FormRequest;
use App\Models\FormAdditionalNote;
use App\Models\FormFormDescription;
use App\Models\FormFormAdditionalNote;
use App\Models\FormProtectiveEquipment;
use Illuminate\Support\Facades\Session;
use App\Models\FormFormProtectiveEquipment;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::with([
            'jsa',
            'jsa_safety_permit',
            'jsa_person_group',
            'form_form_description.form_description',
            'form_form_protective_equipment.form_protective_equipment',
            'form_form_additional_note.form_additional_note',
            'form_jsa_worker.jsa_worker'
        ])->get();

        return view('forms.index', ['forms' => $forms]);
    }

    public function create()
    {
        $jsas = JSA::all();
        $forms = Form::all();
        $person_groups = JSAPersonGroup::all();
        $safety_permits = JSASafetyPermit::all();
        $descriptions = FormDescription::all();
        $protective_equipments = FormProtectiveEquipment::all();
        $additional_notes = FormAdditionalNote::all();
        $workers = JSAWorker::all();

        return view('forms.create', ['jsas' => $jsas, 'forms' => $forms, 'safety_permits' => $safety_permits, 'descriptions' => $descriptions, 'person_groups' => $person_groups, 'workers' => $workers, 'protective_equipments' => $protective_equipments, 'additional_notes' => $additional_notes]);
    }

    public function store(FormRequest $request)
    {
        $collection = collect($request->all());

        $to_form = $collection->except(['_token', 'form_description_uuid', 'form_protective_equipment_uuid', 'form_additional_note_uuid', 'jsa_worker_uuid'])->toArray();

        try {
            Form::create($to_form);

            $last_form_uuid = Form::latest()->first();

            foreach ($request->form_description_uuid as $key => $value) {
                FormFormDescription::create([
                    'form_uuid' => $last_form_uuid->uuid,
                    'form_description_uuid' => $value,
                ]);
            }

            foreach ($request->form_protective_equipment_uuid as $key => $value) {
                FormFormProtectiveEquipment::create([
                    'form_uuid' => $last_form_uuid->uuid,
                    'form_protective_equipment_uuid' => $value,
                ]);
            }

            if (isset($request->form_additional_note_uuid)) {

                foreach ($request->form_additional_note_uuid as $key => $value) {
                    FormFormAdditionalNote::create([
                        'form_uuid' => $last_form_uuid->uuid,
                        'form_additional_note_uuid' => $value,
                    ]);
                }
            }

            foreach ($request->jsa_worker_uuid as $key => $value) {
                FormJSAWorker::create([
                    'form_uuid' => $last_form_uuid->uuid,
                    'jsa_worker_uuid' => $value,
                ]);
            }

            Session::flash('succMessage', 'Form berhasil dibuat!');
        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Form gagal dibuat!');
        }

        return redirect('/forms');
    }

    public function edit($uuid)
    {
        $form = Form::with([
            'jsa_safety_permit',
            'jsa_person_group',
            'form_form_description.form_description',
            'form_form_protective_equipment.form_protective_equipment',
            'form_form_additional_note.form_additional_note',
            'form_jsa_worker.jsa_worker'
        ])->findOrFail($uuid);

        $jsas = JSA::all();
        $person_groups = JSAPersonGroup::all();
        $safety_permits = JSASafetyPermit::all();
        $descriptions = FormDescription::all();
        $protective_equipments = FormProtectiveEquipment::all();
        $workers = JSAWorker::all();
        $additional_notes = FormAdditionalNote::all();

        return view('forms.edit', ['jsas' => $jsas, 'form' => $form, 'safety_permits' => $safety_permits, 'descriptions' => $descriptions, 'person_groups' => $person_groups, 'workers' => $workers, 'protective_equipments' => $protective_equipments, 'additional_notes' => $additional_notes]);
    }

    public function update(FormRequest $request, $uuid)
    {
        $form = Form::with([
            'jsa_safety_permit',
            'jsa_person_group',
            'form_form_description.form_description',
            'form_form_protective_equipment.form_protective_equipment',
            'form_form_additional_note.form_additional_note',
            'form_jsa_worker.jsa_worker'
        ])->findOrFail($uuid);

        $form_form_description = FormFormDescription::with(['form_description'])->get();
        $form_form_protective_equipment = FormFormProtectiveEquipment::with(['form_protective_equipment'])->get();
        $form_form_additional_note = FormFormAdditionalNote::with(['form_additional_note'])->get();
        $form_jsa_worker = FormJSAWorker::with(['jsa_worker'])->get();

        $collection = collect($request->all());

        $to_form = $collection->except(['_token', 'form_description_uuid', 'form_protective_equipment_uuid', 'form_additional_note', 'jsa_worker_uuid'])->toArray();

        $result = $form->update($to_form);

        try {

            // <!-- DESCRIPTION --> //
            //jika data description belum ada di tb pivot saat update jsa
            foreach ($request->form_description_uuid as $key => $value) {

                $bool = false;

                foreach ($form_form_description as $key => $value2) {

                    if ($uuid == $value2->form_uuid) {

                        if ($value2->form_description_uuid == $value) {
                            $bool = true;
                        }
                    }
                }

                if ($bool == false) {

                    FormFormDescription::create([
                        'form_uuid' => $uuid,
                        'form_description_uuid' => $value,
                    ]);
                }
            }

            //jika data description merupakan data yang dieliminasi saat update jsa
            foreach ($form_form_description as $key => $value) {

                $bool = false;

                if ($uuid == $value->form_uuid) {

                    foreach ($request->form_description_uuid as $key => $value2) {

                        if ($value->form_description_uuid == $value2) {
                            $bool = true;
                        }
                    }

                    if ($bool == false) {

                        $delete = FormFormDescription::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            // <!-- PROTECTIVE EQUIPMENT --> //
            //jika data protective equipment belum ada di tb pivot saat update jsa
            foreach ($request->form_protective_equipment_uuid as $key => $value) {

                $bool = false;

                foreach ($form_form_protective_equipment as $key => $value2) {

                    if ($uuid == $value2->form_uuid) {

                        if ($value2->form_protective_equipment_uuid == $value) {
                            $bool = true;
                        }
                    }
                }

                if ($bool == false) {

                    FormFormProtectiveEquipment::create([
                        'form_uuid' => $uuid,
                        'form_protective_equipment_uuid' => $value,
                    ]);
                }
            }

            //jika data protective equipment merupakan data yang dieliminasi saat update jsa
            foreach ($form_form_protective_equipment as $key => $value) {

                $bool = false;

                if ($uuid == $value->form_uuid) {

                    foreach ($request->form_protective_equipment_uuid as $key => $value2) {

                        if ($value->form_protective_equipment_uuid == $value2) {
                            $bool = true;
                        }
                    }

                    if ($bool == false) {

                        $delete = FormFormProtectiveEquipment::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            // <!-- ADDITIONAL NOTE --> //
            //jika data additional note belum ada di tb pivot saat update form
            if (isset($request->form_additional_note_uuid)) {

                foreach ($request->form_additional_note_uuid as $key => $value) {

                    $bool = false;

                    foreach ($form_form_additional_note as $key => $value2) {

                        if ($uuid == $value2->form_uuid) {

                            if ($value2->form_additional_note_uuid == $value) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        FormFormAdditionalNote::create([
                            'form_uuid' => $uuid,
                            'form_additional_note_uuid' => $value,
                        ]);
                    }
                }
            }

            //jika data additional note merupakan data yang dieliminasi saat update form
            foreach ($form_form_additional_note as $key => $value) {

                $bool = false;

                if ($uuid == $value->form_uuid) {

                    if (isset($request->form_additional_note_uuid)) {

                        foreach ($request->form_additional_note_uuid as $key => $value2) {

                            if ($value->form_additional_note_uuid == $value2) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        $delete = FormFormAdditionalNote::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            // <!-- WORKER --> //
            //jika data worker belum ada di tb pivot saat update jsa
            // dd($request->jsa_work_stage_uuid);
            foreach ($request->jsa_worker_uuid as $key => $value) {

                $bool = false;

                foreach ($form_jsa_worker as $key => $value2) {

                    if ($uuid == $value2->form_uuid) {

                        if ($value2->jsa_worker_uuid == $value) {
                            $bool = true;
                        }
                    }
                }

                if ($bool == false) {

                    FormJSAWorker::create([
                        'form_uuid' => $uuid,
                        'jsa_worker_uuid' => $value,
                    ]);
                }
            }

            //jika data worker merupakan data yang dieliminasi saat update jsa
            foreach ($form_jsa_worker as $key => $value) {

                $bool = false;

                if ($uuid == $value->form_uuid) {

                    foreach ($request->jsa_worker_uuid as $key => $value2) {

                        if ($value->jsa_worker_uuid == $value2) {
                            $bool = true;
                        }
                    }

                    if ($bool == false) {

                        $delete = FormJSAWorker::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            Session::flash('succMessage', 'Form berhasil diubah!');

        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Form gagal diubah!');
        }

        return redirect('/forms');
    }

    public function destroy($uuid)
    {
        $form = Form::findOrFail($uuid);
        $result = $form->delete();

        if ($result) {
            Session::flash('succMessage', 'Form berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Form gagal dihapus!');
        }

        return redirect('/forms');
    }

    public function request()
    {
        $forms = Form::all();

        return response()->json([$forms]);
    }

    public function print($uuid)
    {
        set_time_limit(0);
        $form = Form::with([
            'jsa_safety_permit',
            'jsa_person_group',
            'form_form_description.form_description',
            'form_form_protective_equipment.form_protective_equipment',
            'form_form_additional_note.form_additional_note',
            'form_jsa_worker.jsa_worker.jsa_worker_jsa_skill_or_position.jsa_skill_or_position',
        ])->findOrFail($uuid)->toArray();

        $descriptions = FormDescription::all();

        // dd($form);

        // $data = [
        //     'form' => $form,
        //     'safety_permits' => $safety_permits,
        // ];

        // $pdf = Pdf::loadView('forms.print', $data);
        // return $pdf->download('form-' . $form['name'] . '.pdf');

        return view('forms.print', ['form' => $form, 'descriptions' => $descriptions]);
    }
}
