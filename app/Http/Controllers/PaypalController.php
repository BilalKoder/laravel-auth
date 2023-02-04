<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Traits\Paypal;
use App\Models\Invoices;
use App\Models\Transactions;

class PaypalController extends BaseController
{

    use Paypal;

    public function index()
    {

        $clientId = env('PAYPAL_CLIENT_ID');
        $clientSecret = env('PAYPAL_SECRET');

        $token =  $this->generateAccessToken();

        if(!$token){
            return $this->sendError('Validation Error.', "some error occured");
        }

        // dd($token);

        $currentDate = Carbon::now();
               
          $invoice = $this->generateInvoice($token);
          
          if(!$invoice){
            return $this->sendError('Validation Error.', "some error occured");
          }
        
          $id = $invoice->id;

          $saveInvoice = new Invoices;
          $saveInvoice->invoice_id= (string)$id;
          $saveInvoice->payload=json_encode($invoice);
          $saveInvoice->user_id=1;
          $saveInvoice->save();

          return $this->sendResponse($saveInvoice, "Success");
                
    }

    public function sendInvoice(){
        
        $invoices = Invoices::all();

        // foreach ($invoices as $key => $value) {
            # code...
            $invoiceResult = $this->sendInvoicesToUsers("INV2-EC3D-94SK-WN3T-HMMJ");
        // }

        return $this->sendResponse($invoiceResult, "Success");
        // $this->sendInvoicesToUsers();
    }
}
