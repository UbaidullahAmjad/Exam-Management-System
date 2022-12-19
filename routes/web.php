<?php

use App\Mail\BookingConfirmed;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\ApproveCandidateMail;



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
    return redirect()->route('login');
});
//Route::get('/send-mail', function (){
//
//    Mail::to('tayyibyasin786@gmail.com')->send(new ApproveCandidateMail('asdf89798','tayyab','paper'));die;
//});




Route::get('logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'logout'])->name('user.logout');


Route::middleware(['role:admin','auth'])->group(function () {


    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
    Route::get('/viewpendingcandidates/{id}',[App\Http\Controllers\DashboardController::class,'showPendingCandidate'])->name('show.pending.cands');
// Route::post('/admindetails',[App\Http\Controllers\DashboardController::class,'setAdminDetails'])->name('admin.account.update');
Route::post('/companydetails',[App\Http\Controllers\DashboardController::class,'setCompanyDetails'])->name('admin.company.update');

    // Exam Routes
    Route::get('/exam',[App\Http\Controllers\ExamController::class,'index'])->name('exam.index');
    Route::get('/exam/create',[App\Http\Controllers\ExamController::class,'create'])->name('exam.create');
    Route::post('/exam/store',[App\Http\Controllers\ExamController::class,'store'])->name('exam.store');
    Route::get('/exam/edit/{id}',[App\Http\Controllers\ExamController::class,'edit'])->name('exam.edit');
    Route::post('/exam/update/{id}',[App\Http\Controllers\ExamController::class,'update'])->name('exam.update');
    Route::get('/exam/show/{id}',[App\Http\Controllers\ExamController::class,'show'])->name('exam.show');
    Route::get('/exam/delete/{id}',[App\Http\Controllers\ExamController::class,'destroy'])->name('exam.destroy');
    Route::get('/admin/candidate/exam/show/{date}',[App\Http\Controllers\ExamController::class,'showCandidateExam'])->name('exams.candidate.show');
    Route::get('/admin/candexaminfo/{exam_id}/{cand_id}',[App\Http\Controllers\ExamController::class,'seeAllinfo'])->name('viewcandidateexam');
    
    
    
    // Notifications Routes

    Route::get('/notification',[App\Http\Controllers\NotificationController::class,'index'])->name('notification.index');
    Route::get('/notification/create',[App\Http\Controllers\NotificationController::class,'create'])->name('notification.create');
    Route::post('/notification/store',[App\Http\Controllers\NotificationController::class,'store'])->name('notification.store');
    Route::get('/notification/edit/{id}',[App\Http\Controllers\NotificationController::class,'edit'])->name('notification.edit');
    Route::post('/notification/update/{id}',[App\Http\Controllers\NotificationController::class,'update'])->name('notification.update');
    Route::get('/notification/show/{id}',[App\Http\Controllers\NotificationController::class,'show'])->name('notification.show');
    Route::get('/notification/delete/{id}',[App\Http\Controllers\NotificationController::class,'destroy'])->name('notification.destroy');

    //Question Routes
    Route::get('/question',[App\Http\Controllers\QuestionController::class,'index'])->name('question.index');
    Route::get('/question/create',[App\Http\Controllers\QuestionController::class,'create'])->name('question.create');
    Route::post('/question/store',[App\Http\Controllers\QuestionController::class,'store'])->name('question.store');
    Route::get('/question/edit/{id}',[App\Http\Controllers\QuestionController::class,'edit'])->name('question.edit');
    Route::post('/question/update/{id}',[App\Http\Controllers\QuestionController::class,'update'])->name('question.update');
    Route::get('/question/show/{id}',[App\Http\Controllers\QuestionController::class,'show'])->name('question.show');
    Route::get('/question/delete/{id}',[App\Http\Controllers\QuestionController::class,'destroy'])->name('question.destroy');
    Route::post('/upload',[App\Http\Controllers\QuestionController::class,'upload'])->name('question.upload');
    Route::post('/uploada',[App\Http\Controllers\QuestionController::class,'uploada'])->name('question.uploada');
    Route::post('/uploadb',[App\Http\Controllers\QuestionController::class,'uploadb'])->name('question.uploadb');
    Route::post('/uploadc',[App\Http\Controllers\QuestionController::class,'uploadc'])->name('question.uploadc');
    Route::post('/uploadd',[App\Http\Controllers\QuestionController::class,'uploadd'])->name('question.uploadd');
    Route::post('/uploade',[App\Http\Controllers\QuestionController::class,'uploade'])->name('question.uploade');


    

    // Settings Routes
    Route::get('/settings',[App\Http\Controllers\SettingsController::class,'index'])->name('setting.index');
    Route::get('/email',[App\Http\Controllers\SettingsController::class,'writeEmail'])->name('setting.writeemail');
    Route::post('/sendemail',[App\Http\Controllers\SettingsController::class,'sendEmail'])->name('setting.sendemail');
    Route::get('/candidateactivity',[App\Http\Controllers\SettingsController::class,'candidateActivity'])->name('setting.candidateactivity');
    Route::get('/myaccount',[App\Http\Controllers\SettingsController::class,'myAccount'])->name('setting.myaccount');

    // candidate routes

    Route::get('/candidate',[App\Http\Controllers\CandidateController::class,'index'])->name('candidate.index');
    Route::get('/candidate/edit/{id}',[App\Http\Controllers\CandidateController::class,'edit'])->name('candidate.edit');
    Route::post('/candidate/update/{id}',[App\Http\Controllers\CandidateController::class,'update'])->name('candidate.update');
    Route::get('/candidate/delete/{id}',[App\Http\Controllers\CandidateController::class,'destroy'])->name('candidate.destroy');
    Route::post('/candidate/approveCandidate/{id}',[App\Http\Controllers\CandidateController::class,'approveCandidate'])->name('candidate.approveCandidate');
    Route::post('/candidate/rejectCandidate/{id}',[App\Http\Controllers\CandidateController::class,'rejectCandidate'])->name('candidate.rejectCandidate');
    Route::post('/candidate/newToPending',[App\Http\Controllers\CandidateController::class,'newToPending'])->name('candidate.newToPending');
    Route::post('/candidate/askfordocuments',[App\Http\Controllers\CandidateController::class,'askForDocuments'])->name('candidate.askfordocuments');
    Route::get('/candidate/download-file/{file}',[App\Http\Controllers\CandidateController::class,'downloadAttachment'])->name('candidate.downloadattachment');
    Route::post('/admin/datechange/{id}',[App\Http\Controllers\CandidateController::class,'changeDate'])->name('admin.datechange');




Route::get('/candidate/show/{id}',[App\Http\Controllers\CandidateController::class,'show'])->name('candidate.show');
    // payment account settings

    Route::get('/payment_setting_form',[App\Http\Controllers\SettingsController::class,'stripeCredentialsView'])->name('candidate.paymentsettings');
    Route::post('/payment_setting',[App\Http\Controllers\SettingsController::class,'setStripeCredentials'])->name('candidate.setpaymentsettings');
});





// ============================== Candidates routes ================
Route::middleware(['auth','role:candidate'])->group(function () {


    // Dashboard routes

    Route::get('/candidate/dashboard',[App\Http\Controllers\Candidates\DashboardController::class,'index'])->name('dashboard.index');

    // account routes
    Route::get('/candidate/account',[App\Http\Controllers\Candidates\SettingsController::class,'myAccount'])->name('candidate.account');
    Route::post('/candidate/updateaccount',[App\Http\Controllers\Candidates\SettingsController::class,'setAccountDetails'])->name('candidate.updateaccount');
    Route::post('/candidate/authid',[App\Http\Controllers\Candidates\SettingsController::class,'setAuthID'])->name('candidate.setAuthid');
    Route::get('/candidate/notification',[App\Http\Controllers\Candidates\SettingsController::class,'Notifications'])->name('candidate.notification.index');
    Route::get('/candidate/notification/show/{id}',[App\Http\Controllers\Candidates\SettingsController::class,'showNotification'])->name('candidate.notification.show');

    // Exams routes

    Route::get('/candidate/exam',[App\Http\Controllers\Candidates\ExamController::class,'index'])->name('candidate.exam.index');
    Route::get('/candidate/exam/paymentform',[App\Http\Controllers\Candidates\ExamController::class,'paymentForm'])->name('candidate.exam.paymentform');
    Route::post('/candidate/exam/paymentmade',[App\Http\Controllers\Candidates\ExamController::class,'paymentMade'])->name('candidate.exam.paymentmade');
    Route::get('/candidate/exam-history',[App\Http\Controllers\Candidates\ExamController::class,'examHistory'])->name('candidate.exam.history');


    Route::get('/candidate/exam/approved/{id}',[App\Http\Controllers\Candidates\ExamController::class,'approvedExam'])->name('candidate.exam.approved');
    Route::get('/candidate/exam/instructions/{id}',[App\Http\Controllers\Candidates\ExamController::class,'Instructions'])->name('candidate.exam.instructions');
    Route::get('/candidate/exam/takeexam/{id}',[App\Http\Controllers\Candidates\ExamController::class,'takeExam'])->name('candidate.exam.takeexam');



    Route::post('/candidate/exam/finish',[App\Http\Controllers\Candidates\ExamController::class,'finishExam'])->name('candidate.exam.finish');
    Route::get('/candidate/examcheck/{id}',[App\Http\Controllers\Candidates\ExamController::class,'checkExam'])->name('candidate.examcheck');
    Route::get('/candidate/exam/showresult/{exam_id}',[App\Http\Controllers\Candidates\ExamController::class,'showResult'])->name('candidate.exam.showresult');
    Route::get('/candidate/exam/viewanswers/{id}',[App\Http\Controllers\Candidates\ExamController::class,'viewAnswers'])->name('candidate.exam.viewanswer');

    Route::get('addmoney/stripe/{id}', [App\Http\Controllers\StripePaymentController::class, 'paymentStripe'])->name('addmoney.paystripe');
    Route::post('addmoney/stripe/{id}', [App\Http\Controllers\StripePaymentController::class, 'postPaymentStripe'])->name('addmoney.stripe');
});

Route::middleware(['auth','role:invigilator'])->group(function () {
    Route::get('/invigilator/dashboard',[App\Http\Controllers\Invigilator\DashboardController::class,'index'])->name('invigilator.dashboard');
    Route::get('/invigilator/exam/show/{date}',[App\Http\Controllers\Invigilator\DashboardController::class,'showCandidateExam'])->name('examss.candidate.show');
    Route::get('/invigilator/seeresult/{exam_id}/{cand_id}',[App\Http\Controllers\Invigilator\DashboardController::class,'seeResult'])->name('invigilatorviewcandidateexam');
    Route::get('/invigilator/printresult/{exam_id}/{cand_id}',[App\Http\Controllers\Invigilator\DashboardController::class,'printResult'])->name('invigilatorprintcandidateexam');

    // Notifications
    Route::get('/invigilator/notification',[App\Http\Controllers\Invigilator\NotificationController::class,'index'])->name('invigilator.notification.index');
    Route::get('/invigilator/notification/create',[App\Http\Controllers\Invigilator\NotificationController::class,'create'])->name('invigilator.notification.create');
    Route::post('/invigilator/notification/store',[App\Http\Controllers\Invigilator\NotificationController::class,'store'])->name('invigilator.notification.store');
    Route::get('/invigilator/notification/edit/{id}',[App\Http\Controllers\Invigilator\NotificationController::class,'edit'])->name('invigilator.notification.edit');
    Route::post('/invigilator/notification/update/{id}',[App\Http\Controllers\Invigilator\NotificationController::class,'update'])->name('invigilator.notification.update');
    Route::get('/invigilator/notification/show/{id}',[App\Http\Controllers\Invigilator\NotificationController::class,'show'])->name('invigilator.notification.show');
    Route::get('/invigilator/notification/delete/{id}',[App\Http\Controllers\Invigilator\NotificationController::class,'destroy'])->name('invigilator.notification.destroy');

    // Settings
    Route::get('/invigilator/settings',[App\Http\Controllers\Invigilator\SettingsController::class,'index'])->name('invigilator.setting.index');
    Route::get('/invigilator/email',[App\Http\Controllers\Invigilator\SettingsController::class,'writeEmail'])->name('invigilator.setting.writeemail');
    Route::post('/invigilator/sendemail',[App\Http\Controllers\Invigilator\SettingsController::class,'sendEmail'])->name('invigilator.setting.sendemail');
    Route::get('/invigilator/candidateactivity',[App\Http\Controllers\Invigilator\SettingsController::class,'candidateActivity'])->name('invigilator.setting.candidateactivity');
    Route::get('/invigilator/myaccount',[App\Http\Controllers\Invigilator\SettingsController::class,'myAccount'])->name('invigilator.setting.myaccount');
    Route::get('/invigilator/reports',[App\Http\Controllers\Invigilator\SettingsController::class,'reports'])->name('invigilator.reports');

    

});

// for admin and invigilator
Route::post('/changestatus',[App\Http\Controllers\Invigilator\SettingsController::class,'changeStatus'])->name('invigilator.changestatus');
Route::post('/admindetails',[App\Http\Controllers\DashboardController::class,'setAdminDetails'])->name('admin.account.update');

// CANDIDATE register routes

Route::get('/candidate/register',[App\Http\Controllers\Auth\RegisteredUserController::class,'candidateRegister'])->name('candidate.register');
Route::get('/invigilator/register',[App\Http\Controllers\Auth\RegisteredUserController::class,'invigilatorRegister'])->name('invigilator.register');
Route::post('/candidate/checkemail',[App\Http\Controllers\Auth\RegisteredUserController::class,'checkEmail'])->name('candidate.checkemail');


require __DIR__.'/auth.php';
