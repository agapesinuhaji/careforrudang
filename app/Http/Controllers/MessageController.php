<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create()
    {
        return view('kritik-saran');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kritik' => 'nullable|string',
            'curhat' => 'nullable|string',
            'saran'  => 'nullable|string',
        ]);

        Message::create([
            'name'   => 'Anonymous',
            'kritik' => $request->kritik,
            'curhat' => $request->curhat,
            'saran'  => $request->saran,
        ]);

        return redirect('/')->with('success', 'Terima kasih atas pesannya. God Bless You ❤️');
    }
}