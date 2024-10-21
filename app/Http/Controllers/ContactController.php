<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::all();
        return view('contacts.index', [
            'contact' => $contact,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        $contact = Contact::all();
        return view('contacts.edit', [
            'contact' => $contact,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        $data = $request->all();
        if ($request->hasFile('qr_code')) {
            Storage::delete('public/'.$contact->qr_code);  // Delete the old qr_code
            $qr_codePath = $request->file('qr_code')->store('assets/QrCode', 'public');  // Save new qr_code
            $data['qr_code'] = $qr_codePath;  // Update qr_code path in data array
        }

        $contact->update($data);  // Update the single contact record

        return redirect()->route('contacts.index')->with('status', 'Berhasil Edit Data');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
