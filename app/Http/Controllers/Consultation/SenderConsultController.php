<?php

namespace App\Http\Controllers\Consultation;

use App\Actions\TelegramSendAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Consultation\ConsultFormRequest;
use App\Mail\Consultation\ConsultMail;
use Illuminate\Support\Facades\Mail;

class SenderConsultController extends Controller
{
    public function send_consultation(ConsultFormRequest $request, TelegramSendAction $tgsender)
    {
        $data = $request->validated();

        $tmp = $tgsender->handle("<b>Консультация</b>\n\rТелефон: ".$data['phone']);

        Mail::to(explode(',', config('consultation.mailadresat')))->send(new ConsultMail($data));

        return redirect()->route('thencs_consult');
    }

    public function show_thencs()
    {
        return view('mail.consultation.thencs');
    }
}
