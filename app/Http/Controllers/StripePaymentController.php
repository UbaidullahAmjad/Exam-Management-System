<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;
class StripePaymentController extends Controller
{
 public function paymentStripe($id)
 {

    $exam_id = $id;
 return view('paymentstripe',[
    'exam_id' => $exam_id,
 ]);
 }
public function postPaymentStripe(Request $request,$exam_id)
 {
 $validator = Validator::make($request->all(), [
 'card_no' => 'required',
 'ccExpiryMonth' => 'required',
 'ccExpiryYear' => 'required',
 'cvvNumber' => 'required',
 //'amount' => 'required',
 ]);
 $input = $request->all();

 if ($validator->passes()) {
 $input = $request->except('_token');

        $stripe = new Stripe();


        $stripe->setApiKey(env('STRIPE_SECRET'));

        try {
        $token = $stripe->tokens()->create([
        'card' => [
        'number' => $request->get('card_no'),
        'exp_month' => $request->get('ccExpiryMonth'),
        'exp_year' => $request->get('ccExpiryYear'),
        'cvc' => $request->get('cvvNumber'),
        ],
        ]);
        $charge = $stripe->charges()->create([
         'card' => $token['id'],
         'currency' => 'USD',
         'amount' => $request->get('amount'),
         'description' => 'wallet',
         ]);

         $data = [
            'exam_id' => $exam_id,
            'charge' => $charge,
            'token' => $token
         ];
         \Session::put('data',$data);
// dd('sds');
        if (!isset($token['id'])) {

        return redirect()->route('candidate.exam.paymentform');
        }


 if($charge['status'] == 'succeeded') {


 return redirect()->route('candidate.exam.paymentform');
 } else {

 \Session::put('error','Money not add in wallet!!');
 return redirect()->route('addmoney.paystripe',$exam_id);
 }
 } catch (Exception $e) {

 \Session::put('error',$e->getMessage());
 return redirect()->route('addmoney.paystripe',$exam_id);
 } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {

 \Session::put('error',$e->getMessage());
//  dd($e);
 return redirect()->route('addmoney.paystripe',$exam_id)->with('success',$e->getMessage());
 } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {

 \Session::put('error',$e->getMessage());

 return redirect()->route('addmoney.paystripe',$exam_id);
 }
 }
 }
}