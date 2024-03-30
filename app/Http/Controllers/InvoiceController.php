<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use Illuminate\Http\Request;
use Illuminate\View\View;


class InvoiceController extends Controller
{

    function InvoicePage(): View
    {
        return view('pages.dashboard.invoice-page');
    }

    function SalePage(): View
    {
        return view('pages.dashboard.sale-page');
    }
}
