<?php

namespace App\Http\Controllers;

use Redirect;
use View;
use URL;
use Session;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PaypalController extends Controller
{
	private $_api_context;
    public function __construct() {
    	$paypal_conf = \Config::get('paypal');
    	$this->_api_context = new ApiContext(new OAuthTokenCredential(
    		$paypal_conf['client_id'],
    		$paypal_conf['secret']
    	));
    	$this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function index() {
    	return View::make('paypal.donate');
    }

    public function donate(Request $request) {
    	if($request->amount != NULL) {
            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $item = new Item();
            $item->setName('Donation to MES Modder')
                ->setCurrency('EUR')
                ->setQuantity(1)
                ->setPrice($request->get('amount'));

            $item_list = new ItemList();
            $item_list->setItems(array($item));

            $amount = new Amount();
            $amount->setCurrency('EUR')
                ->setTotal($request->get('amount'));

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription('Donation to MES Modder');

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(URL::to('status'))
                ->setCancelUrl(URL::to('status'));

            $payment = new Payment();
            $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));
            $request = clone $payment;
            try {
                $payment->create($this->_api_context);
            } catch (Exception $ex) {
                ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $request, $ex);
                exit(1);
            }
            $approvalUrl = $payment->getApprovalLink();
            return Redirect::to($approvalUrl);
        } else {
            return redirect()->action('PaypalController@index')->with('status', 'Donation amount is required');
        }
    }

    public function getPaymentStatus()
    {
        if(isset($_GET['paymentId'])) {
            $payment_id = $_GET['paymentId'];
        }
        /* clear the session payment ID */
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('error', 'Payment failed');
            return Redirect::to('/');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        /* Execute the payment */
        $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState() == 'approved') {
            \Session::put('success', 'Payment success');
            if(Auth::check()) {
            	$user = Auth::user();
            	$user->donated += $payment->transactions[0]->amount->total;
            	$user->save();
            }
            return Redirect::to('/');
        }
        \Session::put('error', 'Payment failed');
        return Redirect::to('/');
    }
}
