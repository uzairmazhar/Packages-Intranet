<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/covid-19', 'CovidController@bulletins');
Route::get('/message/{message}', 'HomeController@loggedOut');
Route::get('logout', 'UserController@logout');
Route::post('/login', 'UserController@doLogin');

Route::get('ppp', 'PPPController@create');
Route::post('ppp', 'PPPController@store');

Route::get('historical/news', 'NewsController@historicalNews');

Route::get('company-profile','WhoWeAreController@companyProfile');
Route::get('over-the-years','WhoWeAreController@overTheYears');
Route::get('our-core-values','WhoWeAreController@ourCoreValues');
Route::get('legal-information','WhoWeAreController@legalInformation');

Route::get('legacy-of-love', 'WhoWeAreController@legacyOfLove');

Route::get('like', 'SubKehDoController@like');
Route::get('dislike', 'SubKehDoController@disLike');

Route::get('sap/{category}','SAPController@loadCategory');
Route::get('sap/{parent}/{subMenuName}','SAPController@loadSubPage');

Route::get('r&d', 'RNDController@index');

Route::get('login', 'UserController@login');

Route::get('sub-keh-do', 'SubKehDoController@index');
Route::post('sub-keh-do', 'SubKehDoController@store');
Route::get('message/approve/{id}', 'SubKehDoController@approve');
Route::get('message/decline/{id}', 'SubKehDoController@decline');

Route::get('count/unique/users/{id}', 'DashboardController@countUniqueUser');

Route::get('news/add', 'NewsController@create');
Route::post('news/add', 'NewsController@store');
Route::get('news', 'NewsController@index');
Route::get('news/enable/{id}', 'NewsController@enable');
Route::get('news/disable/{id}', 'NewsController@disable');

Route::get('directory/add', 'DirectoryController@create');
Route::post('directory/add', 'DirectoryController@store');
Route::get('complete-directory', 'DirectoryController@index');
Route::get('directory/disable/{id}', 'DirectoryController@disable');
Route::get('directory/enable/{id}', 'DirectoryController@enable');
Route::get('directory/delete/{id}', 'DirectoryController@destroy');
Route::get('directory/update/{id}', 'DirectoryController@edit');
Route::post('directory/update/{id}', 'DirectoryController@update');

Route::get('employee/announcement/add', 'AnnouncementsController@create');
Route::post('employee/announcement/add', 'AnnouncementsController@store');
Route::get('employee-announcements', 'AnnouncementsController@index');
Route::get('employee-announcements/enable/{id}', 'AnnouncementsController@enable');
Route::get('employee-announcements/disable/{id}', 'AnnouncementsController@disable');

Route::get('time-line/event/add', 'EventsController@create');
Route::get('time-line/event/update/{id}', 'EventsController@edit');
Route::post('time-line/event/update/{id}', 'EventsController@update');
Route::post('time-line/event/add', 'EventsController@store');
Route::get('time-line/events', 'EventsController@index');
Route::get('event/photos/{id}', 'EventsController@show');
Route::get('all-timeline-events', 'EventsController@allTimeLineEvents');

Route::get('mess/menu/add', 'MessController@create');
Route::post('mess/menu/add', 'MessController@store');
Route::get('get/menu/date/data', 'MessController@getMenuDateData');
Route::get('add/menu/item', 'MessController@addMenuItem');
Route::get('mess/menu/complete','MessController@index');
Route::get('mess/menu/update/{id}','MessController@edit');
Route::post('mess/menu/update/{id}','MessController@update');
Route::get('mess/menu/delete/{id}','MessController@destroy');


Route::get('request-initiation', 'SAPController@requestInitiation');

Route::get('dashboard', 'DashboardController@index');

Route::get('get/client/environment', 'DashboardController@getClientInformation');

Route::get('company-policy', 'PoliciesController@companyPolicy');
Route::get('hr/people-process/documents', 'PoliciesController@peopleProcessDocuments');
Route::get('hr/people-process/forms', 'PoliciesController@peopleProcessForms');
Route::get('hr/ppp', 'PoliciesController@ppp');
Route::get('hr/packages-group/talent-framework', 'PoliciesController@talentFramework');
Route::get('hr/packages-group/working-way', 'PoliciesController@workingWay');
Route::get('hr/packages-group/e-learning', 'PoliciesController@eLearning');
Route::get('cpd/irpolicies/documents', 'PoliciesController@inrpolicies');
Route::get('cpd/irpolicies/gateapprovalforms', 'PoliciesController@gateapprovalforms');
Route::get('cpd/irpolicies/productdevelopmentforms', 'PoliciesController@productdevelopmentforms');

Route::get('employee-trainings', 'TrainingController@employeeTraining');
Route::get('telephone-directory', 'DirectoryController@index');

Route::get('history', 'Packages@history');
Route::get('company-information', 'Packages@companyInformation');
Route::get('global-partner','Packages@globalPartner');
Route::get('policies','Packages@policies');
Route::get('company-information','Packages@companyInformation');

Route::get('materials-management','SAP@materialsManagement');
Route::get('sales-and-distribution','SAP@salesAndDistribution');
Route::get('production-planning','SAP@productionPlanning');
Route::get('controlling','SAP@controlling');
Route::get('human-resource','SAP@humanResources');
Route::get('human-capital-management','SAP@humanCapitalManagement');
Route::get('finance-accounting','SAP@financeAccounting');
Route::get('plant-maintenance','SAP@plantMaintenance');

Route::get('annual-reports','Reports@annualReports');
Route::get('quarterly-reports','Reports@quarterlyReports');

Route::get('qa&ehs','QAEHSController@qaEhs');
Route::get('green-office','QAEHSController@greenOffice');
Route::get('iso', 'QAEHSController@iso');
Route::get('fsc-coc', 'QAEHSController@fscCOC');
Route::get('ims-documents', 'QAEHSController@ims_documents');
Route::get('food-safety-documents', 'QAEHSController@food_safety_documents');

Route::get('qa&ehs/iso-documents/{subMenuName}','QAEHSController@loadSubPage');

Route::get('rd-introduction','RAndD@rdIntroduction');
Route::get('rd-high-yield-pulp','RAndD@rdHighYieldPulp');
Route::get('rd-continues-digestor','RAndD@rdContinuesDigestor');
Route::get('rd-liquid-packing','RAndD@rdLiquidPacking');

Route::get('all-policies','Allpolicies@policies');

Route::get('home', 'HomeController@index');
Route::get('timeline-see-more','HomeController@timelineSeeMore');
Route::get('event','HomeController@Event');
Route::get('event-submit-form','forms@eventForm');

Route::get('pic-video','HomeController@pivVideo');
Route::get('trends', 'DashboardController@trends');
Route::post('trends', 'DashboardController@generateTrends');
//Route::get('pic-video/#away-day','HomeController@pivVideo(id)');

