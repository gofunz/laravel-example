<?php

namespace App\Http\Controllers;

use Modules\EcCore\Http\Controllers\InvoiceController as BaseInvoiceController;

// 覆写功能
class InvoiceController extends BaseInvoiceController
{
    public function index()
    {
        return view('invoices.index');
    }
}
