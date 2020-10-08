<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Inertia\Inertia;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;


class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Invoices/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Auth::user()->account->organizations()->create(
            Request::validate([
                'recipient' => 'required',
                'amount' => 'required',
                'due_date' => 'required',
                'invoice_type' => 'required',
                'description' => 'required'
            ])
        );
        return Redirect::route('dashboard')->with('success', 'Organization created.');

        // $this->validate($request, [
        //     'recipient' => 'required',
        //     'amount' => 'required',
        //     'due_date' => 'required',
        //     'invoice_type' => 'required',
        //     'description' => 'required'
        // ]);
        // $invoice = new Invoice();
        // $task->description = $request->description;
        // $task->user_id = auth()->user()->id;
        // $task->save();
        // return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
