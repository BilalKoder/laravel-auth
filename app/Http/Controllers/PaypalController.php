<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Traits\Paypal;
use App\Models\Invoices;
use App\Models\User;
use App\Models\Transactions;
use Illuminate\Support\Facades\Log;

class PaypalController extends BaseController
{

    use Paypal;

    public function index()
    {

         $users = User::all();

         if($users){

            foreach ($users as $key => $value) {
             
                $invoice = $this->generateInvoice($value);
                // dd($invoice);
                if($invoice){
                    $id = $invoice->id;
                    $saveInvoice = new Invoices;
                    $saveInvoice->invoice_id= (string)$id;
                    $saveInvoice->payload=json_encode($invoice);
                    $saveInvoice->user_id=  $value->id;
                    $saveInvoice->save();
                }
            }
         }
        return $this->sendResponse(true, "Success");
    }

    public function sendInvoice(){
        
        $invoices = Invoices::where('status','draft')->get();
        if($invoices){
            foreach ($invoices as $key => $value) {
                $invoiceResult = $this->sendInvoicesToUsers($value->invoice_id);

                if($invoiceResult){
                    Invoices::where('invoice_id', $value->invoice_id)
                    ->update([
                        'status' => "sent"
                     ]);
                }
            }
        }
        return $this->sendResponse($invoiceResult, "Success");
    }

    public function invoiceWebhookEvent(Request $request){

        if($request){
            Log::info('Webhook ran');
            $WEBHOOK = $request->all();
            $invoiceId = $WEBHOOK['resource']['id'];
                Invoices::where('invoice_id', $invoiceId)
                ->update([
                    'status' => "paid"
                ]);

            return true;
        }
    }
}

