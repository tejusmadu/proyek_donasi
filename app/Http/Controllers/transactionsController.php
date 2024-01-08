<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transactions;


class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = transactions::all();
        return view('transaksi', compact('transactions'));
    }

    public function riwayatransaksi()
    {
        $transactions = transactions::all();
        return view('riwayatransaksi', compact('transactions'));
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bankName' => 'required',
            'uploadBukti' => 'required|image|mimes:jpeg,png,pdf|max:2048',
        ]);

        $imageName = time().'.'.$request->uploadBukti->extension();  
        $request->uploadBukti->move(public_path('images/bukti_pembayaran'), $imageName);

        $transaction = new transactions;
        $transaction->nama_bank = $request->bankName;
        $transaction->nomor_rekening = $request->nomor_rekening; // adjust to the appropriate field
        $transaction->bukti_pembayaran = $imageName;
        $transaction->save();

        return redirect()->route('transactions.index')->with('success', 'Transaksi Anda berhasil terkirim.');
    }

    public function show($id)
    {
        $transaction = transactions::find($id);
        return view('transactions.show', compact('transaction'));
    }

    public function edit($id)
    {
        $transaction = transactions::find($id);
        return view('edit_transaksi', compact('transaction'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'bankName' => 'required',
            'uploadBukti' => 'file|mimes:jpeg,png,pdf|max:2048',
        ]);

        $transaction = transactions::find($id);
        $transaction->nama_bank = $request->bankName;
        $transaction->nomor_rekening = $request->nomor_rekening; // adjust to the appropriate field
        
        if ($request->hasFile('uploadBukti')) {
            $imageName = time().'.'.$request->file('uploadBukti')->extension();  
            $request->file('uploadBukti')->move(public_path('images/bukti_pembayaran'), $imageName);
            $transaction->bukti_pembayaran = $imageName;
        }

        $transaction->save();

        return redirect()->route('riwayatransaksi')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroyt($id)
    {
        $transaction = transactions::find($id);
        $transaction->delete();

        return redirect()->route('riwayatransaksi')->with('success', 'Transaksi berhasil dihapus.');
    }
}
