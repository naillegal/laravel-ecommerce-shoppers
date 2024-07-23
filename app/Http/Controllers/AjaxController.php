<?php

namespace App\Http\Controllers;
use App\Http\Requests\FormContentRequest;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function ContactForm(FormContentRequest $request) {
        $data = $request->all();
        $data['ip'] = request()->ip();
        $saved = ContactForm::create($data);
        return back()->with(['message'=>'Sent successfully']);
    }
}
