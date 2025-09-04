<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $message = $request->validate([
            'team'  => ['required', Rule::in(['hardware', 'software', 'spices', 'other'])],
            'name'  => 'required',
            'phone' => 'required|numeric|digits:10',
            'email' => 'email:rfc,dns',
            'message'=> 'required',
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS'))->queue(new MessageRecived($message));

        return back()->with('message-confirmation', __('footer.message-success'));
    }
}
