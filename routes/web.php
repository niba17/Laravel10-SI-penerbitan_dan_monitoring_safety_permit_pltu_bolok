<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JSAController;
use App\Http\Controllers\JSAPersonGroupController;
use App\Http\Controllers\PTWController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JSAWorkerController;
use App\Http\Controllers\JSASafetyPermitController;
use App\Http\Controllers\JSAWorkToolController;
use App\Http\Controllers\JSAWorkStageController;
use App\Http\Controllers\JSASkillOrPositionController;
use App\Http\Controllers\JSAPotentialHazardController;
use App\Http\Controllers\JSAImpactController;
use App\Http\Controllers\JSAPICController;
use App\Http\Controllers\JSADangerControlController;
use App\Http\Controllers\JSAK3LAppealOfRegulationController;
use App\Http\Controllers\FormDescriptionController;
use App\Http\Controllers\FormProtectiveEquipmentController;
use App\Http\Controllers\FormAdditionalNoteController;
use App\Http\Controllers\PTWDescriptionController;
use App\Http\Controllers\PTWIsolationMethodController;
use App\Http\Controllers\PTWNoteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleAndUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'guest'], function () {

    Route::get('auths', [AuthController::class, 'login'])->name('auths-login');
    Route::post('auths-authenticate', [AuthController::class, 'authenticate'])->name('auths-authenticate');
    Route::get('auths-create', [AuthController::class, 'create'])->name('auths-create');
    Route::post('auths-store', [AuthController::class, 'store'])->name('auths-store');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home-index');
    Route::get('auths-logout', [AuthController::class, 'logout'])->name('auths-logout');

    Route::group(['middleware' => 'role:super_user'], function () {

        Route::get('users-create', [UserController::class, 'create'])->name('users-create');
        Route::post('users-store', [UserController::class, 'store']);

        Route::get('roles_and_users', [RoleAndUserController::class, 'index'])->name('roles_and_users-index');
        Route::get('roles_and_users-create', [RoleAndUserController::class, 'create'])->name('roles_and_users-create');
        Route::post('roles_and_users-store', [RoleAndUserController::class, 'store']);
        Route::get('roles_and_users-edit/{id}', [RoleAndUserController::class, 'edit'])->name('roles_and_users-edit');
        Route::put('roles_and_users-update/{id}', [RoleAndUserController::class, 'update'])->name('roles_and_users-update');
        Route::get('roles_and_users-destroy/{id}', [RoleAndUserController::class, 'destroy']);
    });

    Route::group(['middleware' => 'role:super_user|spv_k3|staff_k3|spv_mekanik|spv_listrik|spv_instrumen|spv_rendal_ophar|spv_produksi'], function () {

        Route::get('users', [UserController::class, 'index'])->name('users-index');
        Route::get('users-edit/{id}', [UserController::class, 'edit'])->name('users-edit');
        Route::put('users-update/{id}', [UserController::class, 'update']);
        Route::get('users-destroy/{id}', [UserController::class, 'destroy']);

        Route::get('jsas', [JSAController::class, 'index'])->name('jsas-index');
        Route::get('jsas-print/{uuid}', [JSAController::class, 'print']);
        Route::get('jsas-jsa_jsa_safety_permit_request', [JSAController::class, 'jsa_jsa_safety_permit_request'])->name('jsas-jsa_jsa_safety_permit_request');
        Route::get('jsas-request', [JSAController::class, 'request'])->name('jsas-request');

        Route::get('person_groups', [JSAPersonGroupController::class, 'index'])->name('person_groups-index');

        Route::get('safety_permits', [JSASafetyPermitController::class, 'index'])->name('safety_permits-index');

        Route::get('workers', [JSAWorkerController::class, 'index'])->name('workers-index');

        Route::group(['middleware' => 'role:super_user|spv_k3|staff_k3|spv_mekanik|spv_listrik|spv_instrumen|spv_rendal_ophar'], function () {

            Route::get('jsas-create', [JSAController::class, 'create'])->name('jsas-create');
            Route::post('jsas-store', [JSAController::class, 'store']);
            Route::get('jsas-edit/{uuid}', [JSAController::class, 'edit'])->name('jsas-edit');
            Route::put('jsas-update/{uuid}', [JSAController::class, 'update'])->name('jsas-update');
            Route::get('jsas-destroy/{uuid}', [JSAController::class, 'destroy']);

            Route::get('person_groups-create', [JSAPersonGroupController::class, 'create'])->name('person_groups-create');
            Route::post('person_groups-store', [JSAPersonGroupController::class, 'store']);
            Route::get('person_groups-edit/{uuid}', [JSAPersonGroupController::class, 'edit'])->name('person_groups-edit');
            Route::put('person_groups-update/{uuid}', [JSAPersonGroupController::class, 'update']);
            Route::get('person_groups-destroy/{uuid}', [JSAPersonGroupController::class, 'destroy']);

            Route::get('safety_permits-create', [JSASafetyPermitController::class, 'create'])->name('safety_permits-create');
            Route::post('safety_permits-store', [JSASafetyPermitController::class, 'store']);
            Route::get('safety_permits-edit/{uuid}', [JSASafetyPermitController::class, 'edit'])->name('safety_permits-edit');
            Route::put('safety_permits-update/{uuid}', [JSASafetyPermitController::class, 'update']);
            Route::get('safety_permits-destroy/{uuid}', [JSASafetyPermitController::class, 'destroy']);

            Route::get('workers-create', [JSAWorkerController::class, 'create'])->name('workers-create');
            Route::post('workers-store', [JSAWorkerController::class, 'store']);
            Route::get('workers-edit/{uuid}', [JSAWorkerController::class, 'edit'])->name('workers-edit');
            Route::put('workers-update/{uuid}', [JSAWorkerController::class, 'update']);
            Route::get('workers-destroy/{uuid}', [JSAWorkerController::class, 'destroy']);

            Route::get('work_tools', [JSAWorkToolController::class, 'index'])->name('work_tools-index');
            Route::get('work_tools-create', [JSAWorkToolController::class, 'create'])->name('work_tools-create');
            Route::post('work_tools-store', [JSAWorkToolController::class, 'store']);
            Route::get('work_tools-edit/{uuid}', [JSAWorkToolController::class, 'edit'])->name('work_tools-edit');
            Route::put('work_tools-update/{uuid}', [JSAWorkToolController::class, 'update']);
            Route::get('work_tools-destroy/{uuid}', [JSAWorkToolController::class, 'destroy']);

            Route::get('work_stages', [JSAWorkStageController::class, 'index'])->name('work_stages-index');
            Route::get('work_stages-create', [JSAWorkStageController::class, 'create'])->name('work_stages-create');
            Route::post('work_stages-store', [JSAWorkStageController::class, 'store']);
            Route::get('work_stages-edit/{uuid}', [JSAWorkStageController::class, 'edit'])->name('work_stages-edit');
            Route::put('work_stages-update/{uuid}', [JSAWorkStageController::class, 'update']);
            Route::get('work_stages-destroy/{uuid}', [JSAWorkStageController::class, 'destroy']);

            Route::get('skills_or_positions', [JSASkillOrPositionController::class, 'index'])->name('skills_or_positions-index');
            Route::get('skills_or_positions-create', [JSASkillOrPositionController::class, 'create'])->name('skills_or_positions-create');
            Route::post('skills_or_positions-store', [JSASkillOrPositionController::class, 'store']);
            Route::get('skills_or_positions-edit/{uuid}', [JSASkillOrPositionController::class, 'edit'])->name('skills_or_positions-edit');
            Route::put('skills_or_positions-update/{uuid}', [JSASkillOrPositionController::class, 'update']);
            Route::get('skills_or_positions-destroy/{uuid}', [JSASkillOrPositionController::class, 'destroy']);

            Route::get('potential_hazards', [JSAPotentialHazardController::class, 'index'])->name('potential_hazards-index');
            Route::get('potential_hazards-create', [JSAPotentialHazardController::class, 'create'])->name('potential_hazards-create');
            Route::post('potential_hazards-store', [JSAPotentialHazardController::class, 'store']);
            Route::get('potential_hazards-edit/{uuid}', [JSAPotentialHazardController::class, 'edit'])->name('potential_hazards-edit');
            Route::put('potential_hazards-update/{uuid}', [JSAPotentialHazardController::class, 'update']);
            Route::get('potential_hazards-destroy/{uuid}', [JSAPotentialHazardController::class, 'destroy']);

            Route::get('impacts', [JSAImpactController::class, 'index'])->name('impacts-index');
            Route::get('impacts-create', [JSAImpactController::class, 'create'])->name('impacts-create');
            Route::post('impacts-store', [JSAImpactController::class, 'store']);
            Route::get('impacts-edit/{uuid}', [JSAImpactController::class, 'edit'])->name('impacts-edit');
            Route::put('impacts-update/{uuid}', [JSAImpactController::class, 'update']);
            Route::get('impacts-destroy/{uuid}', [JSAImpactController::class, 'destroy']);

            Route::get('danger_controls', [JSADangerControlController::class, 'index'])->name('danger_controls-index');
            Route::get('danger_controls-create', [JSADangerControlController::class, 'create'])->name('danger_controls-create');
            Route::post('danger_controls-store', [JSADangerControlController::class, 'store']);
            Route::get('danger_controls-edit/{uuid}', [JSADangerControlController::class, 'edit'])->name('danger_controls-edit');
            Route::put('danger_controls-update/{uuid}', [JSADangerControlController::class, 'update']);
            Route::get('danger_controls-destroy/{uuid}', [JSADangerControlController::class, 'destroy']);

            Route::get('pics', [JSAPICController::class, 'index'])->name('pics-index');
            Route::get('pics-create', [JSAPICController::class, 'create'])->name('pics-create');
            Route::post('pics-store', [JSAPICController::class, 'store']);
            Route::get('pics-edit/{uuid}', [JSAPICController::class, 'edit'])->name('pics-edit');
            Route::put('pics-update/{uuid}', [JSAPICController::class, 'update']);
            Route::get('pics-destroy/{uuid}', [JSAPICController::class, 'destroy']);

            Route::get('k3l_appeal_of_regulations', [JSAK3LAppealOfRegulationController::class, 'index'])->name('k3l_appeal_of_regulations-index');
            Route::get('k3l_appeal_of_regulations-create', [JSAK3LAppealOfRegulationController::class, 'create'])->name('k3l_appeal_of_regulations-create');
            Route::post('k3l_appeal_of_regulations-store', [JSAK3LAppealOfRegulationController::class, 'store']);
            Route::get('k3l_appeal_of_regulations-edit/{uuid}', [JSAK3LAppealOfRegulationController::class, 'edit'])->name('k3l_appeal_of_regulations-edit');
            Route::put('k3l_appeal_of_regulations-update/{uuid}', [JSAK3LAppealOfRegulationController::class, 'update']);
            Route::get('k3l_appeal_of_regulations-destroy/{uuid}', [JSAK3LAppealOfRegulationController::class, 'destroy']);

            Route::get('forms', [FormController::class, 'index'])->name('forms-index');
            Route::get('forms-create', [FormController::class, 'create'])->name('forms-create');
            Route::post('forms-store', [FormController::class, 'store']);
            Route::get('forms-edit/{uuid}', [FormController::class, 'edit'])->name('forms-edit');
            Route::put('forms-update/{uuid}', [FormController::class, 'update'])->name('forms-update');
            Route::get('forms-destroy/{uuid}', [FormController::class, 'destroy']);
            Route::get('forms-print/{uuid}', [FormController::class, 'print']);

            Route::get('descriptions', [FormDescriptionController::class, 'index'])->name('descriptions-index');
            Route::get('descriptions-create', [FormDescriptionController::class, 'create'])->name('descriptions-create');
            Route::post('descriptions-store', [FormDescriptionController::class, 'store']);
            Route::get('descriptions-edit/{uuid}', [FormDescriptionController::class, 'edit'])->name('descriptions-edit');
            Route::put('descriptions-update/{uuid}', [FormDescriptionController::class, 'update'])->name('descriptions-update');
            Route::get('descriptions-destroy/{uuid}', [FormDescriptionController::class, 'destroy']);
            Route::get('descriptions-request', [FormDescriptionController::class, 'request'])->name('descriptions-request');

            Route::get('protective_equipments', [FormProtectiveEquipmentController::class, 'index'])->name('protective_equipments-index');
            Route::get('protective_equipments-create', [FormProtectiveEquipmentController::class, 'create'])->name('protective_equipments-create');
            Route::post('protective_equipments-store', [FormProtectiveEquipmentController::class, 'store']);
            Route::get('protective_equipments-edit/{uuid}', [FormProtectiveEquipmentController::class, 'edit'])->name('protective_equipments-edit');
            Route::put('protective_equipments-update/{uuid}', [FormProtectiveEquipmentController::class, 'update'])->name('protective_equipments-update');
            Route::get('protective_equipments-destroy/{uuid}', [FormProtectiveEquipmentController::class, 'destroy']);

            Route::get('additional_notes', [FormAdditionalNoteController::class, 'index'])->name('additional_notes-index');
            Route::get('additional_notes-create', [FormAdditionalNoteController::class, 'create'])->name('additional_notes-create');
            Route::post('additional_notes-store', [FormAdditionalNoteController::class, 'store']);
            Route::get('additional_notes-edit/{uuid}', [FormAdditionalNoteController::class, 'edit'])->name('additional_notes-edit');
            Route::put('additional_notes-update/{uuid}', [FormAdditionalNoteController::class, 'update'])->name('additional_notes-update');
            Route::get('additional_notes-destroy/{uuid}', [FormAdditionalNoteController::class, 'destroy']);
        });
    });

    Route::group(['middleware' => 'role:super_user|spv_k3|staff_k3|spv_mekanik|spv_listrik|spv_instrumen|spv_rendal_ophar|spv_produksi'], function () {

        Route::get('ptws', [PTWController::class, 'index'])->name('ptws-index');
        Route::get('ptws-print/{uuid}', [PTWController::class, 'print']);

        Route::group(['middleware' => 'role:super_user|spv_k3|staff_k3|spv_produksi'], function () {

            Route::get('ptws-create', [PTWController::class, 'create'])->name('ptws-create');
            Route::post('ptws-store', [PTWController::class, 'store']);
            Route::get('ptws-edit/{uuid}', [PTWController::class, 'edit'])->name('ptws-edit');
            Route::put('ptws-update/{uuid}', [PTWController::class, 'update'])->name('ptws-update');
            Route::get('ptws-destroy/{uuid}', [PTWController::class, 'destroy']);

            Route::get('ptw_descriptions', [PTWDescriptionController::class, 'index'])->name('ptw_descriptions-index');
            Route::get('ptw_descriptions-create', [PTWDescriptionController::class, 'create'])->name('ptw_descriptions-create');
            Route::post('ptw_descriptions-store', [PTWDescriptionController::class, 'store']);
            Route::get('ptw_descriptions-edit/{uuid}', [PTWDescriptionController::class, 'edit'])->name('ptw_descriptions-edit');
            Route::put('ptw_descriptions-update/{uuid}', [PTWDescriptionController::class, 'update'])->name('ptw_descriptions-update');
            Route::get('ptw_descriptions-destroy/{uuid}', [PTWDescriptionController::class, 'destroy']);
            Route::get('ptw_descriptions-request', [PTWDescriptionController::class, 'request'])->name('ptw_descriptions-request');

            Route::get('isolation_methods', [PTWIsolationMethodController::class, 'index'])->name('isolation_methods-index');
            Route::get('isolation_methods-create', [PTWIsolationMethodController::class, 'create'])->name('isolation_methods-create');
            Route::post('isolation_methods-store', [PTWIsolationMethodController::class, 'store']);
            Route::get('isolation_methods-edit/{uuid}', [PTWIsolationMethodController::class, 'edit'])->name('isolation_methods-edit');
            Route::put('isolation_methods-update/{uuid}', [PTWIsolationMethodController::class, 'update'])->name('isolation_methods-update');
            Route::get('isolation_methods-destroy/{uuid}', [PTWIsolationMethodController::class, 'destroy']);

            Route::get('ptw_notes', [PTWNoteController::class, 'index'])->name('ptw_notes-index');
            Route::get('ptw_notes-create', [PTWNoteController::class, 'create'])->name('ptw_notes-create');
            Route::post('ptw_notes-store', [PTWNoteController::class, 'store']);
            Route::get('ptw_notes-edit/{uuid}', [PTWNoteController::class, 'edit'])->name('ptw_notes-edit');
            Route::put('ptw_notes-update/{uuid}', [PTWNoteController::class, 'update'])->name('ptw_notes-update');
            Route::get('ptw_notes-destroy/{uuid}', [PTWNoteController::class, 'destroy']);
        });
    });
});
