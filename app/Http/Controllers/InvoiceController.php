<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class InvoiceController extends Controller
{
    public function admin(){

        $invoices = new Collection;
        if (auth()->user()->stripe_id){
            $invoices = auth()->user()->invoices();
        }
        return view('invoices.admin', compact('invoices'));
    }
}
