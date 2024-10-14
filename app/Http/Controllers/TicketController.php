<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\User;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('ticket')->get();
        return view('register', compact('users'));
    }

    /**
     * Show the form for creating a new resource.7
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

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'tgl_berangkat' => 'required|date',
            'no_kursi' => 'required|max:10',
            'asal' => 'required|max:255',
            'tujuan' => 'required|string|max:255'
        ]);

        try {
            $data = $request->all();
            unset($data['_token']);

            Ticket::insert($data);

            return redirect('/result')->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Data gagal disimpan']);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        $tickets = Ticket::with('user')->get();
        return view('result', compact('tickets'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
