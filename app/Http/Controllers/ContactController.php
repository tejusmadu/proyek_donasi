<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();

        return view('index', compact('contacts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'message' => 'required',
        ]);

        Contact::create($validatedData);

        return redirect()->route('create')->with('success', 'Kontak Anda telah berhasil terkirim.');
    }

    public function edit(Contact $contact)
    {
        return view('edit_kontak', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'message' => 'required',
    ]);

    $contact->update($validatedData);

    return redirect()->route('index')->with('success', 'Data kontak berhasil diperbarui.');
}
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('index')->with('success', 'Data kontak berhasil dihapus.');
    }
}
