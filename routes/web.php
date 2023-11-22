<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/training', function () {
    return view('frontend.training');
});

Route::get('/CQV_support', function () {
    return view('frontend.CQV_support');
});

Route::get('/CSV_validation', function () {
    return view('frontend.CSV_validation');
});

Route::get('/regulatory', function(){
    return view('frontend.regulatory');
});

Route::get('/why_us', function(){
    return view('frontend.why_us');
});

Route::get('/consulting', function(){
    return view('frontend.consulting');
});

Route::get('/MES_support', function(){
    return view('frontend.MES_support');
});

Route::get('/auotmation_service', function(){
    return view('frontend.auotmation_service');
});

Route::get('/QA&Regulatory', function(){
    return view('frontend.QA&Regulatory');
});

Route::get('/computer_system', function(){
    return view('frontend.computer_system');
});

Route::get('/manufacturing_production', function(){
    return view('frontend.manufacturing_production');
});

Route::get('/process&lab', function(){
    return view('frontend.process&lab');
});

Route::get('/pharma_compliance', function(){
    return view('frontend.pharma_compliance');
});

Route::get('/training_section_sop', function(){
    return view('frontend.training_section_sop');
});

Route::get('/equipment_qualification', function(){
    return view('frontend.equipment_qualification');
});

Route::get('/SAP_validation', function(){
    return view('frontend.SAP_validation');
});

Route::get('/remediation_plan', function(){
    return view('frontend.remediation_plan');
});

Route::get('/gap_assisment', function(){
    return view('frontend.gap_assisment');
});

Route::get('/risk_assessment', function(){
    return view('frontend.risk_assessment');
});

Route::get('/appointment', function(){
    return view('frontend.appointment');
});

Route::get('/QMS_software', function(){
    return view('frontend.QMS_software');
});

Route::get('/enterprises', function(){
    return view('frontend.enterprises');
});

Route::get('/compliance_pharma', function(){
    return view('frontend.compliance_pharma');
});

Route::get('/CSV_validation_compliance', function(){
    return view('frontend.CSV_validation_compliance');
});

Route::get('/QMS_training', function(){
    return view('frontend.QMS_training');
});

Route::get('/audit_complaince', function(){
    return view('frontend.audit_complaince');
});

Route::get('/CSV_training', function(){
    return view('frontend.CSV_training');
});

Route::get('/clean_validation', function(){
    return view('frontend.clean_validation');
});

Route::get('/qualification_part', function(){
    return view('frontend.qualification_part');
});

Route::get('/OOS_training', function(){
    return view('frontend.OOS_training');
});

Route::get('/OOT_training', function(){
    return view('frontend.OOT_training');
});

Route::get('/investigation_training', function(){
    return view('frontend.investigation_training');
});

Route::get('/complaints_training', function(){
    return view('frontend.complaints_training');
});

