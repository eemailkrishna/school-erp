<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DuesController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\PenalityController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\HomeWorkController;
use App\Http\Controllers\SetPaperController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\TimeTableController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\RecycleBinController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ReminderCotroller;
use App\Http\Controllers\GovRequireController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\LiveBusController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UserRightController;
use App\http\Controllers\SmartClassController;
use App\Http\Controllers\VideoLectureController;
use App\Http\Controllers\VideoLectureAddController;
use App\Http\Controllers\ImportantController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\LoginDetailController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\SchoolInfoController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CallManagementController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\GatePassController;
use App\Http\Controllers\PdfFormatController;
use App\Http\Controllers\YoutubeController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index_content');
});

//  attendance route
// Route::get('/attendance',[AttendanceController::class,'attendance'])->name('attendance');
// Route::get('student/attendance',[AttendanceController::class,'student_attendance'])->name('students');
Route::get('/attendance',[AttendanceController::class,'attendance'])->name('attendance');
Route::get('/student/attendance',[AttendanceController::class,'student_attendance'])->name('students');
Route::get('/attendance_select',[AttendanceController::class,'AttendanceSelect'])->name('select');
Route::get('/attendance_registerwise_staff',[AttendanceController::class,'RegisterwiseStaff'])->name('registerwise');
Route::get('/attendance_student_rfid',[AttendanceController::class,'RfidStudent'])->name('studentrfid');
Route::get('/attendance_staff_rfid',[AttendanceController::class,'RfidStaff'])->name('staffrfid');
Route::get('/attendance_graphical_report',[AttendanceController::class,'GraPical'])->name('attendance_graphical_report');
Route::get('/student_attendance_sms_select',[AttendanceController::class,'SmsSelect'])->name('student_attendance_sms_select');
Route::get('/student_attendance_daily_report_classwise',[AttendanceController::class,'DailyReport'])->name('student_attendance_daily_report_classwise');
Route::get('/student_attendance_report_classwise_monthly',[AttendanceController::class,'MonthlyReport'])->name('student_attendance_report_classwise_monthly');
Route::get('/student_attendance_report_classwise_yearly',[AttendanceController::class,'yearlyReport'])->name('student_attendance_report_classwise_yearly');
Route::get('/emp_attendance_daily_report_categorywise',[AttendanceController::class,'EmpReport'])->name('ajax_emp_attendance_daily_report_categorywise');
Route::get('/emp_attendance_report_monthly',[AttendanceController::class,'EmpmonthReport'])->name('ajax_emp_attendance_report_monthly');
Route::get('/Attendance_download_list',[AttendanceController::class,'AttendanceList'])->name('Attendance_download_list');
Route::get('/emp_attendance_download_list',[AttendanceController::class,'EmpattendanceList'])->name('emp_attendance_download_list');
Route::get('/daywise_attendance_download_list',[AttendanceController::class,'DayattendanceList'])->name('daywise_attendance_download_list');
Route::get('/student_employee_leave_report',[AttendanceController::class,'Bothleave'])->name('student_employee_leave_report');



// enquiry routes
Route::get('/enquiry',[EnquiryController::class,'enquiry'])->name('enquiry');
Route::get('/add_enquiry',[EnquiryController::class,'NewEnquiry'])->name('add_enquiry');
Route::get('/enquiry_list',[EnquiryController::class,'ListEnquiry'])->name('enquiry_list');
Route::get('/enquiry_sms_list',[EnquiryController::class,'EnquirySms'])->name('enquiry_sms_list');
Route::get('/call_student_list',[EnquiryController::class,'CallList'])->name('call_student_list');
Route::get('/enquiry_daily_report',[EnquiryController::class,'EnquiryReport'])->name('enquiry_daily_report');

// staff route
Route::get('/staff',[StaffController::class,'staff'])->name('staff');
Route::get('/staff-add',[StaffController::class,'StaffAdd'])->name('staff-add');
Route::get('/Emp-List',[StaffController::class,'EmpList'])->name('emp-list');
Route::get('/Emp-Drop',[StaffController::class,'EmpDrop'])->name('emp-drop');
Route::get('/Emp-Attendance', [StaffController::class, 'EmpAttendance'])->name('emp-attendance');
Route::get('/Assign-Card', [StaffController::class, 'AssignCard'])->name('assign-card');
Route::get('/Attendance-Register', [StaffController::class, 'AttendRegister'])->name('attend-register');
Route::get('/Id_Generate', [StaffController::class, 'IdGenrator'])->name('id_generate');
Route::get('/salary_generate', [StaffController::class, 'Salary_Generate'])->name('generate_salary');

// student routes
Route::get('/student',[StudentController::class,'student'])->name('student');
Route::get('/student/student_registration',[StudentController::class,'registration'])->name('registration');
Route::get('/student/student_registration_list_fatch',[StudentController::class,'registration_list'])->name('registration_list');
Route::get('/student/student_admission_list',[StudentController::class,'admission_list'])->name('admission_list');
Route::get('/student/student_profile_update',[StudentController::class,'student_profile'])->name('student_profile');
Route::get('/student/student_mapping_data_update',[StudentController::class,'student_mapping'])->name('student_mapping');
Route::get('/student/student_photo_update',[StudentController::class,'student_photo'])->name('student_photo');
Route::get('/student/student_sms_contact_update',[StudentController::class,'student_sms'])->name('student_sms');
Route::get('/student/student_sms_notification_update',[StudentController::class,'student_sms_notification'])->name('student_sms_notification');
Route::get('/student/rfid_card_generate',[StudentController::class,'student_rfd'])->name('student_rfd');
Route::get('/student/student_roll_no',[StudentController::class,'student_roll_no'])->name('student_roll_no');
Route::get('/student/student_id_card',[StudentController::class,'student_id_card'])->name('student_id_card');
Route::get('/student/mother_student_id_card',[StudentController::class,'mother_student_id_card'])->name('mother_student_id_card');
Route::get('/student/father_student_id_card',[StudentController::class,'father_student_id_card'])->name('father_student_id_card');
Route::get('/student/guardian_student_id_card',[StudentController::class,'guardian_student_id_card'])->name('guardian_student_id_card');
Route::get('/student/health_zone',[StudentController::class,'health_zone'])->name('health_zone');
Route::get('/student/physical_fitness',[StudentController::class,'physical_fitness'])->name('physical_fitness');
Route::get('/student/report_student_strength_castewise',[StudentController::class,'student_strength'])->name('student_strength');
Route::get('/student/report_student_strength_religionwise',[StudentController::class,'student_strength_religion'])->name('student_strength_religion');
Route::get('/student/student_registration_report',[StudentController::class,'student_registration_rep'])->name('student_registration_rep');

// Account Routes
Route::get('/account',[AccountController::class,'Account'])->name('account');
Route::get('/add-account',[AccountController::class,'AddAccount'])->name('add-account');
Route::get('/account-list',[AccountController::class,'AccountList'])->name('account-list');
Route::get('/add-income-or-expence-info',[AccountController::class,'AddIncomeOrExpenceInfo'])->name('add-income-or-expence-info');
Route::get('/income-or-expence-list',[AccountController::class,'IncomeOrExpenceList'])->name('income-or-expence-list');
Route::get('/ledger',[AccountController::class,'Ledger'])->name('ledger');
Route::get('/ledger-report',[AccountController::class,'LedgerReport'])->name('ledger-report');
Route::get('/ledger-report-monthly',[AccountController::class,'LedgerReportMonthly'])->name('ledger-report-monthly');
Route::get('/income-expense-report',[AccountController::class,'IncomeExpenseReport'])->name('income-expense-report');
Route::get('/refund-report',[AccountController::class,'RefundReport'])->name('refund-report');
Route::get('/ledger-advance-salary-report',[AccountController::class,'LedgerAdvanceSalaryReport'])->name('ledger-advance-salary-report');



// Dues Routes
Route::get('/dues',[DuesController::class,'dues'])->name('account');
route::get('/duesNursery',[DuesController::class,'duesNursery'])->name('duesNursery');
route::get('/duesNurseryDetails',[DuesController::class,'duesNurseryDetails'])->name('duesNurseryDetails');

// Fees routes
Route::get('/fees',[FeesController::class,'fees'])->name('account');
Route::get('/reset-Fee', [FeesController::class, 'ResetFees'])->name('resetfees');
Route::get('/dues-detail', [FeesController::class, 'DuesDetail'])->name('dues');
Route::get('/fee-structure', [FeesController::class, 'FeeStructure'])->name('structure');
Route::get('/student_admission', [FeesController::class, 'Student_Admission'])->name('admission');
Route::get('/classwise_fees', [FeesController::class, 'Classwise_Fees'])->name('classwise');
Route::get('/classwise_transport', [FeesController::class, 'Classwise_Transport'])->name('Transport');
Route::get('/prev_year', [FeesController::class, 'Prev_Years'])->name('PrevYears');
Route::get('/std_fee_add_form',[FeesController::class,'Std_Fee_Form'])->name('std_form_add');
Route::get('/std_fee_list',[FeesController::class,'Std_Fee_List'])->name('std_list_fee');
Route::get('/std_fee_list_rfid',[FeesController::class,'Std_Fee_List_RFID'])->name('std_list_fee_RFID');
Route::get('/std_fee_dues_list',[FeesController::class,'Std_Fee_Dues_List'])->name('std_list_fee_dues');
Route::get('/std_fee_demand_bill',[FeesController::class,'Std_Fee_Demand_Bill'])->name('fee_bill_demand');
Route::get('/std_fee_demand_newbill_list',[FeesController::class,'Std_Fee_Demand_NewBill_List'])->name('fee_bill_demand_newbill');
Route::get('/std_fee_balance',[FeesController::class,'Std_Fee_Balance'])->name('fee_balance');
Route::get('/std_fee_balance_detail',[FeesController::class,'Std_Fee_Balance_Detail'])->name('fee_balanceDetail');
Route::get('/balance_detail',[FeesController::class,'Balance_Detail'])->name('balanceDetail');
Route::get('/reset_transport',[FeesController::class,'Reset_Transport'])->name('reset_transport');
Route::get('/set_transport_dues',[FeesController::class,'Set_Transport_Dues'])->name('set_transport_dues');
Route::get('/add_bus_fee_category',[FeesController::class,'Add_Bus_Fee_Category'])->name('bus_add_category');
Route::get('/set_classwise_transport',[FeesController::class,'Set_Classwise_Transport'])->name('fee detail');
Route::get('/challan_list',[FeesController::class,'Challan_List'])->name('challan_List');
Route::get('/transport_form',[FeesController::class,'Std_Transport_Fee_Add_Form'])->name('fee_add_form_transport');
Route::get('/transport_fee_list',[FeesController::class,'Fee_List_Transport'])->name('transport_fee_list');
Route::get('/dues_list',[FeesController::class,'Dues_List'])->name('dues_list');
Route::get('/report',[FeesController::class,'Report'])->name('report');
Route::get('/report_transport',[FeesController::class,'Report_Transport'])->name('report_transport');
Route::get('/buswise_list',[FeesController::class,'Buswise_List'])->name('buswise_list');


// Penality
Route::get('/penalty',[PenalityController::class,'penality'])->name('penality');
Route::get('/penalty_form',[PenalityController::class,'penalityForm'])->name('penalityform');
Route::get('/penalty_list',[PenalityController::class,'penalityList'])->name('penalitylist');

//  Certificate route
Route::get('/certificate',[CertificateController::class,'certificate'])->name('certificate');
Route::get('certificate/character_certificate_form', [CertificateController::class, 'character_certificate_form'])->name('cc');
Route::get('certificate/character_certificate_form_edit', [CertificateController::class, 'character_certificate_form_edit'])->name('ccedit');
Route::get('certificate/annualfee_certificate_form_edit', [CertificateController::class, 'annualfee_certificate_form_edit'])->name('ac');
Route::get('certificate/annualfee_form',[CertificateController::class,'annualfee_form'])->name('af');
Route::get('certificate/birth_certificate', [CertificateController::class, 'birth_certificate'])->name('birth');
Route::get('certificate/character_certificate_list', [CertificateController::class, 'character_certificate_list'])->name('cclist');
Route::get('certificate/event_certificate_form', [CertificateController::class, 'event_certificate_form'])->name('ecf');
Route::get('certificate/bonafied_form', [CertificateController::class, 'bonafied_form'])->name('bf');
Route::get('certificate/bonafied_certificate_form', [CertificateController::class, 'bonafied_Cer_form'])->name('bcf');
Route::get('certificate/tutionfee_form', [CertificateController::class, 'tutionfee_form'])->name('tf');
Route::get('certificate/tc_list', [CertificateController::class, 'tc_list'])->name('tl');
Route::get('certificate/tc_form', [CertificateController::class, 'tc_form'])->name('tf');
Route::get('certificate/tc_form_edit', [CertificateController::class, 'tc_form_edit'])->name('tfe');
Route::get('certificate/sport_certificate_list', [CertificateController::class, 'sport_certificate_list'])->name('sc');
Route::get('certificate/sport_certificate_form', [CertificateController::class, 'sport_certificate_form'])->name('scf');
Route::get('certificate/sport_certificate_form', [CertificateController::class, 'sport_certificate_form'])->name('scf');
Route::get('certificate/event_certificate_list', [CertificateController::class, 'event_certificate_list'])->name('ecl');
Route::get('certificate/bonafied_certificate_list', [CertificateController::class, 'bonafied_certificate_list'])->name('bl');
Route::get('certificate/tutionfee_certificate_list', [CertificateController::class, 'tutionfee_certificate_list'])->name('bl');
Route::get('certificate/annualfee_certificate_list', [CertificateController::class, 'annualfee_certificate_list'])->name('afl');
Route::get('certificate/caste_certificate_form', [CertificateController::class, 'caste_certificate_form'])->name('ccf');
Route::get('certificate/caste_certificate_list', [CertificateController::class, 'caste_certificate_list'])->name('ccl');



// Examination
Route::get('/examination',[ExaminationController::class,'examination'])->name('examination');
Route::get('examination/admit_card',[ExaminationController::class,'ExaminationAdmitCard'])->name('examination/admit_card');
Route::get('examination/admit_card_print',[ExaminationController::class,'ExaminationAdmitCardPrint'])->name('examination/admit_card_print');
Route::get('examination/marksheet_fill',[ExaminationController::class,'ExaminationMarksheetFill'])->name('examination/marksheet_fill');
Route::get('examination/marksheet_fill_examwise',[ExaminationController::class,'ExaminationMarksheetFillExamwise'])->name('examination/marksheet_fill_examwise');
Route::get('examination/marksheet_view',[ExaminationController::class,'ExaminationMarksheetView'])->name('examination/marksheet_view');
Route::get('examination/marksheet_fill_monthly',[ExaminationController::class,'ExaminationMarksheetFillMonthly'])->name('examination/marksheet_fill_monthly');
Route::get('examination/marksheet_fill_monthly_examwise',[ExaminationController::class,'ExaminationMarksheetFillMonthlyExamwise'])->name('examination/marksheet_fill_monthly_examwise');
Route::get('examination/marksheet_view_monthly',[ExaminationController::class,'ExaminationMarksheetViewMonthly'])->name('examination/marksheet_view_monthly');
Route::get('examination/add_weekly_test',[ExaminationController::class,'ExaminationAddWeeklyTest'])->name('examination/add_weekly_test');
Route::get('examination/view_weekly_test',[ExaminationController::class,'ExaminationViewWeeklyTest'])->name('examination/view_weekly_test');
Route::get('examination/add_weekly_test_marks',[ExaminationController::class,'ExaminationAddWeeklyTestMarks'])->name('examination/add_weekly_test_marks');
Route::get('examination/resultsheet_view',[ExaminationController::class,'ExaminationResultsheetView'])->name('examination/resultsheet_view');
Route::get('examination/marks_download_state_board',[ExaminationController::class,'marks_download_state_board'])->name('examination/marks_download_state_board');
Route::get('examination/marks_download_state_board_monthly',[ExaminationController::class,'marks_download_state_board_monthly'])->name('examination/marks_download_state_board_monthly');


// homework
Route::get('/homework',[HomeWorkController::class,'Homework'])->name('homework');
Route::get('/homework-add',[HomeWorkController::class,'HomeworkAdd'])->name('homework-add');
Route::get('/homework-list',[HomeWorkController::class,'HomeworkList'])->name('homework-list');
Route::get('/add-classwork',[HomeWorkController::class,'AddClasswork'])->name('add-classwork');
Route::get('/classwork-list',[HomeWorkController::class,'ClassworkList'])->name('classwork-list');



// set paper routes

Route::get('/set-paper',[SetPaperController::class,'SetPaper'])->name('set-paper');
Route::get('/add-question',[SetPaperController::class,'AddQuestion'])->name('add-question');
Route::get('/view-question',[SetPaperController::class,'ViewQuestion'])->name('view-question');
Route::get('/instant-go-to-paper-setter',[SetPaperController::class,'InstantGoToPaperSetter'])->name('instant-go-to-paper-setter');
Route::get('/go-to-paper-setter',[SetPaperController::class,'GoToPaperSetter'])->name('go-to-paper-setter');
Route::get('/total-paper-list',[SetPaperController::class,'TotalPaperList'])->name('total-paper-list');


// complaint route
Route::get('/complaint',[ComplaintController::class,'complaint'])->name('complaint');
Route::get('/complaint-studentComplaint',[ComplaintController::class,'complaint_studentComplaint'])->name('complaint-studentComplaint');
Route::get('/complaint-staffFeedback',[ComplaintController::class,'complaint_staffFeedback'])->name('complaint_staffFeedback');
Route::get('/complaint-employeeComplaints',[ComplaintController::class,'complaint_employeeComplaints'])->name('complaint-employeeComplaints');

// gallary route
Route::get('/gallery',[GallaryController::class,'gallery'])->name('gallery');
Route::get('/gallery-addNewGallery',[GallaryController::class,'galleryAddNewGallery'])->name('galleryAddNewGallery');

// sms  routes
Route::get('/sms',[SmsController::class,'sms'])->name('sms');
Route::get('sms/holiday_sms',[SmsController::class,'smsholidaysms'])->name('sms/holiday_sms');
Route::get('sms/birthday_sms',[SmsController::class,'smsbirthdaysms'])->name('sms/birthday_sms');
Route::get('sms/student_notification',[SmsController::class,'smsstudentnotification'])->name('sms/student_notification');
Route::get('sms/message_list',[SmsController::class,'smsmessagelist'])->name('sms/message_list');
Route::get('sms/sms_from_mobile',[SmsController::class,'smssmsfrommobile'])->name('sms/sms_from_mobile');
Route::get('sms/delivery_report',[SmsController::class,'smsdeliveryreport'])->name('sms/delivery_report');
Route::get('sms/delivery_print_report',[SmsController::class,'SmsDeliveryPrintReport'])->name('sms/delivery_print_report');

// time table route
Route::get('/time-table',[TimeTableController::class,'TimeTable'])->name('time-table');
Route::get('time_table/add_class_period',[TimeTableController::class,'add_class_period'])->name('acp');
Route::get('time_table/subject_wise_teacher',[TimeTableController::class,'subject_wise_teacher'])->name('swt');
Route::get('time_table/time_table_generate',[TimeTableController::class,'time_table_generate'])->name('ttg');
Route::get('time_table/time_table_list',[TimeTableController::class,'time_table_list'])->name('ttl');
Route::get('time_table/teacher_availability',[TimeTableController::class,'teacher_availability'])->name('ta');
Route::get('time_table/teacher_assign',[TimeTableController::class,'teacher_assign'])->name('tan');
Route::get('time_table/time_table_sheet',[TimeTableController::class,'time_table_sheet'])->name('tts');
Route::get('time_table/diff_add_class_period',[TimeTableController::class,'diff_add_class_period'])->name('dacp');
Route::get('time_table/diff_time_table_generate',[TimeTableController::class,'diff_time_table_generate'])->name('dttg');
Route::get('time_table/diff_time_table_list',[TimeTableController::class,'diff_time_table_list'])->name('dttl');



//  Event routes
Route::get('/event',[EventController::class,'event'])->name('event');
Route::get('/event_management/add_house',[EventController::class,'add_house'])->name('add_house');
Route::get('/event_management/add_event',[EventController::class,'add_event'])->name('add_event');
Route::get('/event_management/add_participate',[EventController::class,'add_participate'])->name('add_participate');
Route::get('/event_management/participate_list_report',[EventController::class,'participate_list'])->name('participate_list');
Route::get('/event_management/activity_plane',[EventController::class,'activity_plane'])->name('activity_plane');
Route::get('/event_management/activity_plane_list',[EventController::class,'activity_plane_list'])->name('activity_plane_list');
Route::get('/event_management/event_result',[EventController::class,'event_result'])->name('event_result');
Route::get('/event_management/event_result_list',[EventController::class,'event_result_list'])->name('event_result_list');
Route::get('/event_management/team_creation',[EventController::class,'team_creation'])->name('team_creation');
Route::get('/event_management/team_creation_list',[EventController::class,'team_creation_list'])->name('team_creation_list');
Route::get('/event_management/participate_list_report',[EventController::class,'participate_list_report'])->name('participate_list_report');

// sport

Route::get('/sports',[SportController::class,'sport'])->name('sport');
Route::get('/add-sports',[SportController::class,'AddSport'])->name('add-sport');
Route::get('/sports-type',[SportController::class,'SportType'])->name('sport-type');
Route::get('/age-category',[SportController::class,'AgeCategory'])->name('age-category');
Route::get('/add-participate',[SportController::class,'AddParticipate'])->name('add-participate');
Route::get('/participate-list',[SportController::class,'ParticipateList'])->name('participate-list');
Route::get('/team-creation',[SportController::class,'TeamCreation'])->name('team-creation');
Route::get('/team-creation-list',[SportController::class,'TeamCreationList'])->name('team-creation-list');





//  download routes
Route::get('/download',[DownloadController::class,'download'])->name('download');
Route::get('/select-student',[DownloadController::class,'SelectStudent'])->name('select-student');
Route::get('/select-student-groupwise',[DownloadController::class,'SelectStudentGroupwise'])->name('select-student-groupwise');
Route::get('/employee-download',[DownloadController::class,'EmployeeDownload'])->name('employee-download');
Route::get('/employee-salary',[DownloadController::class,'EmployeeSalary'])->name('employee-salary');
Route::get('/enquiry-download-info',[DownloadController::class,'EnquiryDownloadInfo'])->name('enquiry-download-info');
Route::get('/student-fees-download-list',[DownloadController::class,'EnquiryDownloadInfo'])->name('student-fees-download-list');
Route::get('/account-expense-info',[DownloadController::class,'AccountExpenseInfo'])->name('account-expense-info');
Route::get('/account-info-download',[DownloadController::class,'AccountExpenseInfo'])->name('account-info-download');
Route::get('/Attendance-download-list',[DownloadController::class,'AttendanceDownloadList'])->name('Attendance-download-list');
Route::get('/userid-password',[DownloadController::class,'UseridPassword'])->name('userid-password');
Route::get('/student-tc',[DownloadController::class,'StudentTc'])->name('student-tc');





//  recycle bin routes
Route::get('/recycle-bin',[RecycleBinController::class,'RecycleBin'])->name('recycle-bin');
Route::get('/recycle-student-admission-list',[RecycleBinController::class,'RecycleStudentAdmissionList'])->name('recycle-student-admission-list');
Route::get('/recycle-employee-list',[RecycleBinController::class,'RecycleEmployeeList'])->name('recycle-employee-list');
Route::get('/recycle-expense-list',[RecycleBinController::class,'RecycleExpenseList'])->name('recycle-expense-bin');
Route::get('/recycle-hostel-student-list',[RecycleBinController::class,'RecycleHostelStudentList'])->name('recycle-hostel-student-list');
Route::get('/recycle-hostel-account-list',[RecycleBinController::class,'RecycleHostelAccountList'])->name('recycle-hostel-account-list');
Route::get('/student-registration-list',[RecycleBinController::class,'StudentRegistrationList'])->name('student-registration-list');



// session  routes
Route::get('/session',[SessionController::class,'session'])->name('session');
Route::get('/add-session',[SessionController::class,'AddSession'])->name('add-session');
Route::get('/move-student',[SessionController::class,'MoveStudent'])->name('move-student');




// reminder routes
Route::get('/reminder',[ReminderCotroller::class,'reminder'])->name('reminder');
Route::get('/reminder-add',[ReminderCotroller::class,'ReminderAdd'])->name('reminder-add');
Route::get('/reminder-list',[ReminderCotroller::class,'ReminderList'])->name('reminder-list');
Route::get('/reminder-teacher-add',[ReminderCotroller::class,'ReminderTeacherAdd'])->name('reminder-teacher-add');
Route::get('/reminder-teacher-list',[ReminderCotroller::class,'ReminderTeacherList'])->name('reminder-teacher-list');



//  govt routes
Route::get('/govt-requirement',[GovRequireController::class,'gov_requirement'])->name('gov-requirement');
Route::get('/govt-require-mappingList',[GovRequireController::class,'govt_require_mappingList'])->name('govt-require-mappingList');
Route::get('/govt_require_studentList',[GovRequireController::class,'govt_require_studentList'])->name('govt_require_studentList');
Route::get('/govt_require_contactNo',[GovRequireController::class,'govt_require_contactNo'])->name('govt_require_contactNo');


// hostel route
Route::get('/hostel',[HostelController::class,'hostel'])->name('hostel');
Route::get('/hostel_list',[HostelController::class,'Hostel_List'])->name('hostel_list');
Route::get('/room_list',[HostelController::class,'Room_List'])->name('room_list');
Route::get('/seat_avail',[HostelController::class,'Seat_Available'])->name('seatavailable');
Route::get('/hostel_staff',[HostelController::class,'Hostel_Staff'])->name('hostal_staff');
Route::get('/hostal_stu_list',[HostelController::class,'Hostal_Stu_List'])->name('hostal_student_list');
Route::get('/hostal_mess',[HostelController::class,'Hostal_Mess'])->name('hostal_mess');
Route::get('/emp_add',[HostelController::class,'Emp_Add'])->name('empAdd');
Route::get('/emp_list',[HostelController::class,'Emp_List'])->name('empList');
Route::get('/hostel_mess_list',[HostelController::class,'Hostel_Mess_List'])->name('messlist');
Route::get('/daily_mess_detail',[HostelController::class,'Purchase_Detail'])->name('dailymessdetail');

//libary  route
Route::get('/library',[LibraryController::class,'library'])->name('library');
Route::get('/library_add_book',[LibraryController::class,'LibraryBook'])->name('librarybook');
Route::get('/view_book_library',[LibraryController::class,'ViewBook'])->name('Viewbook');
Route::get('/issue_book',[LibraryController::class,'IssueBook'])->name('issuebook');
Route::get('/view_return_book_list',[LibraryController::class,'ReturnBook'])->name('returnbook');
Route::get('/e_library',[LibraryController::class,'Elibrary'])->name('elibrary');
Route::get('/exam_stuff_add',[LibraryController::class,'ExamStaffadd'])->name('examstaff');

// Stock  routes
Route::get('/stock',[StockController::class,'stock'])->name('stocks');
Route::get('/category_add',[StockController::class,'CategoryAdd'])->name('category_add');
Route::get('/category_list',[StockController::class,'ListCategory'])->name('category');
Route::get('/add_item',[StockController::class,'AddItem'])->name('item');
Route::get('/item_list',[StockController::class,'ItemList'])->name('list');
Route::get('/purchase_list',[StockController::class,'PurchaseList'])->name('purchase');
Route::get('/sale_list',[StockController::class,'SaleList'])->name('sale');
Route::get('/sales_item',[StockController::class,'SaleItem'])->name('salesitem');


// live bus tracking routes
Route::get('/live-bus',[LiveBusController::class,'live_bus'])->name('live-bus');
Route::get('/bus-password-change',[LiveBusController::class,'BusPasswordChange'])->name('bus-password-change');
Route::get('/bus-location-current',[LiveBusController::class,'BusLocationCurrent'])->name('bus-location-current');
Route::get('/bus-location-live',[LiveBusController::class,'BusLocationLive'])->name('bus-location-live');
Route::get('/bus-location-route',[LiveBusController::class,'BusLocationRoute'])->name('bus-location-route');



//  Android app controller
Route::get('/app',[AppController::class,'android_app'])->name('app');
Route::get('/notification-add',[AppController::class,'NotificationAdd'])->name('notification-add');
Route::get('/student-user-password-change',[AppController::class,'StudentUserPasswordChange'])->name('student-user-password-change');
Route::get('/publish-marks',[AppController::class,'PublishMarks'])->name('publish-marks');

//  user right
Route::get('/user-right',[UserRightController::class,'UserRight'])->name('user-right');
Route::get('/userRightAddUser',[UserRightController::class,'userRightAddUser'])->name('userRightAddUser');
Route::get('/userRightUserList',[UserRightController::class,'userRightUserList'])->name('userRightUserList');
Route::get('/userRightAdduserEdit',[UserRightController::class,'userRightAdduserEdit'])->name('userRightAdduserEdit');


// smartclass
Route::get('/smartclass',[SmartClassController::class,'SmartClass'])->name('smartclass');
Route::get('/video-lecture',[SmartClassController::class,'VideoLecture'])->name('video-lecture');
Route::get('/notification',[SmartClassController::class,'Notification'])->name('notification');
Route::get('/study-material',[SmartClassController::class,'StudyMaterial'])->name('study-material');
Route::get('/study-material-add',[SmartClassController::class,'StudyMaterialAdd'])->name('study-material-add');
Route::get('/study-material-list',[SmartClassController::class,'StudyMaterialList'])->name('study-material-list');


// online exam
Route::get('/online-exam',[SmartClassController::class,'OnlineExam'])->name('online-exam');
Route::get('/online-exam-paper-add',[SmartClassController::class,'OnlineExamPaperAdd'])->name('online-exam-paper-add');
Route::get('/online-exam-paper-list',[SmartClassController::class,'OnlineExamPaperList'])->name('online-exam-paper-list');
Route::get('/online-exam-paper-result',[SmartClassController::class,'OnlineExamPaperResult'])->name('online-exam-paper-result');
Route::get('/online-exam-question-add',[SmartClassController::class,'OnlineExamQuestionAdd'])->name('online-exam-question-add');
Route::get('/online-exam-question-view',[SmartClassController::class,'OnlineExamQuestionView'])->name('online-exam-question-view');


Route::get('/smartclass-app-rights',[SmartClassController::class,'SmartclassAppRights'])->name('smartclass-app-rights');
Route::get('/student-user-password-change',[SmartClassController::class,'StudentUserPasswordChange'])->name('student-user-password-change');
Route::get('/student-login-details',[SmartClassController::class,'StudentLoginDetails'])->name('student-login-details');
Route::get('/result-show',[SmartClassController::class,'ResultShow'])->name('result-show');
Route::get('/active-user-list',[SmartClassController::class,'ActiveUserList'])->name('active-user-list');

// live class
Route::get('/liveclass',[SmartClassController::class,'LiveClass'])->name('liveclass');
Route::get('/liveclass-add-class',[SmartClassController::class,'LiveclassAddClass'])->name('liveclass-add-class');
Route::get('/liveclass-class-list',[SmartClassController::class,'LiveclassClassList'])->name('liveclass-class-list');


// video-lecture
Route::get('/video_lecture',[VideoLectureController::class,'VideoLecture'])->name('videolecture');
Route::get('/video-lecture-add',[SmartClassController::class,'VideoLectureAdd'])->name('video-lecture-add');
Route::get('/video-lecture-list',[SmartClassController::class,'VideoLectureList'])->name('video-lecture-list');
Route::get('/notification-add',[SmartClassController::class,'NotificationAdd'])->name('notification-add');
Route::get('/notification-list',[SmartClassController::class,'NotificationList'])->name('notification-list');


// VideoLectureAdd
Route::get('smartclass/video_lecture_add',[VideoLectureAddController::class,'VideoLectureAdd'])->name('videolectureadd');


// Important
Route::get('/important',[ImportantController::class,'important'])->name('important');
Route::get('important/add_document',[ImportantController::class,'govtdocument'])->name('important/add_document');
Route::get('important/document_list',[ImportantController::class,'importantdocumentlist'])->name('important/document_list');
Route::get('important/add_other_document',[ImportantController::class,'important_add_other_document'])->name('important/add_other_document');
Route::get('important/contact_info',[ImportantController::class,'important_contact_info'])->name('important/contact_info');
Route::get('important/contact_info_list',[ImportantController::class,'important_contact_info_list'])->name('important/contact_info_list');
Route::get('important/other_document_list',[ImportantController::class,'other_document_list'])->name('important/other_document_list');


// Bus
Route::get('/bus',[BusController::class,'bus'])->name('bus');
Route::get('bus/add_bus',[BusController::class,'bus_add_bus'])->name('bus/add_bus');
Route::get('bus/bus_list',[BusController::class,'bus_bus_list'])->name('bus/bus_list');
Route::get('bus/route_add',[BusController::class,'bus_route_add'])->name('bus/route_add');
Route::get('bus/bus_route_list',[BusController::class,'bus_bus_route_list'])->name('bus/bus_route_list');
Route::get('bus/asigned_bus_route',[BusController::class,'bus_asigned_bus_route'])->name('bus/asigned_bus_route');
Route::get('bus/bus_student_list',[BusController::class,'bus_bus_student_list'])->name('bus/bus_student_list');
Route::get('bus/bus_staff',[BusController::class,'bus_bus_staff'])->name('bus/bus_staff');
Route::get('bus/employee-add',[BusController::class,'bus_employee_add'])->name('bus/employee-add');
Route::get('bus/purchase_list',[BusController::class,'bus_purchase_list'])->name('bus/purchase_list');
Route::get('bus/add_bus_expance',[BusController::class,'bus_add_bus_expance'])->name('bus/add_bus_expance');
Route::get('bus/bus_expense_report',[BusController::class,'bus_bus_expense_report'])->name('bus/bus_expense_report');
Route::get('bus/student_list_bus_wise',[BusController::class,'bus_student_list_bus_wise'])->name('bus/student_list_bus_wise');
Route::get('route_add',[BusController::class,'route_add'])->name('route_add');


// Login Detail
Route::get('/login_details',[LoginDetailController::class,'login_detail'])->name('login_details');
Route::get('utility/login_details_traking',[LoginDetailController::class,'utility_login_details_traking'])->name('utility/login_details_traking');
Route::get('utility/student_login_details',[LoginDetailController::class,'student_login_detail'])->name('utility/student_login_details');
Route::get('utility/teacher_login_details',[LoginDetailController::class,'teacher_login_details'])->name('utility/teacher_login_details');


//holiday
Route::get('/holiday',[HolidayController::class,'index'])->name('holiday');
Route::get('/holiday-addHoliday',[HolidayController::class,'holidayAddHoliday'])->name('holidayAddHoliday');
Route::get('/holiday-editHoliday',[HolidayController::class,'holidayEditHoliday'])->name('holidayEditHoliday');
Route::get('/holiday-holidayList',[HolidayController::class,'holidayHolidayList'])->name('holidayHolidayList');


//leave

Route::get('/leave',[LeaveController::class,'index'])->name('leave');
Route::get('/student-leave-form',[LeaveController::class,'studentleaveform'])->name('studentleaveform');
Route::get('/student-leave-list',[LeaveController::class,'studentleavelist'])->name('studentleavelist');


//school info
Route::get('/school-info',[SchoolInfoController::Class,'index'])->name('schoolInfo');
Route::get('/school-school_general_info',[SchoolInfoController::Class,'schoolgeneralinfo'])->name('schoolgeneralinfo');
Route::get('/school-info_academic-calender',[SchoolInfoController::Class,'schoolinfoacademiccalender'])->name('schoolinfoacademiccalender');
Route::get('/schoolInfo-AddBusFeeCategory-MonthlyInstallmentwise',[SchoolInfoController::Class,'schoolinfoaddbuscategorymonthlywise'])->name('schoolinfoaddbuscategorymonthlywise');
Route::get('/schoolInfo-addstudentidentitycategory',[SchoolInfoController::Class,'schoolInfoaddstudentidentitycategory'])->name('schoolInfoaddstudentidentitycategory');
Route::get('/school-info_addfeecategory',[SchoolInfoController::class,'schoolInfoAddFeeCategory'])->name('schoolInfoAddFeeCategory');
Route::get('/school-info_syllabusDetails',[SchoolInfoController::class,'school_info_syllabusDetails'])->name('school_info_syllabusDetails');
Route::get('/student-user-password-change',[SchoolInfoController::class,'student_user_password_change'])->name('student_user_password_change');
Route::get('/school-info-add-class-stream',[SchoolInfoController::class,'school_info_add_class_stream'])->name('school_info_add_class_stream');
Route::get('/school-info-add-section',[SchoolInfoController::class,'school_info_add_section'])->name('school_info_add_section');
Route::get('/school-info-add-group',[SchoolInfoController::class,'school_info_add_group'])->name('school_info_add_group');
Route::get('/school-info-exam-type-add',[SchoolInfoController::class,'school_info_exam_type_add'])->name('school_info_exam_type_add');
Route::get('/school-info-subject-add',[SchoolInfoController::class,'school_info_subject_add'])->name('school_info_subject_add');
Route::get('/school-info-fee-types-add',[SchoolInfoController::class,'school_info_fee_types_add'])->name('school_info_fee_types_add');
Route::get('/school-info-class-wise-subject',[SchoolInfoController::class,'school_info_class_wise_subject'])->name('school_info_class_wise_subject');
Route::get('/school-info-discount-types-add',[SchoolInfoController::class,'school_info_discount_types_add'])->name('school_info_discount_types_add');
Route::get('/school-info-total-list',[SchoolInfoController::class,'school_info_total_list'])->name('school_info_total_list');


// WebsiteController
Route::get('/website-management',[WebsiteController::class,'index'])->name('website-management');


// call management
Route::get('/call-management',[CallManagementController::class,'CallManagement'])->name('call-management');
Route::get('/call-student-list',[CallManagementController::class,'CallStudentList'])->name('call-student-list');

// support
Route::get('/customer-support',[SupportController::class,'CustomerSupport'])->name('customer-support');
Route::get('/add-query',[SupportController::class,'AddQuery'])->name('add-query');
Route::get('/query-list',[SupportController::class,'QueryList'])->name('query-list');

// GatePass
Route::get('/gate-pass',[GatePassController::class,'GatePass'])->name('gate-pass');
Route::get('/new-gate-pass',[GatePassController::class,'NewGatePass'])->name('new-gate-pass');
Route::get('/gate-pass-list',[GatePassController::class,'GatePassList'])->name('gate-pass-list');


// PdfFormat
Route::get('/pdf-format',[PdfFormatController::class,'PdfFormat'])->name('pdf-format');
Route::get('/pdf-format-view',[PdfFormatController::class,'PdfFormatView'])->name('pdf-format-view');


// YoutubeController
Route::get('/youtube-videos',[YoutubeController::class,'YoutubeVideos'])->name('youtube-videos');