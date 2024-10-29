<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Write code on Method
     *
     * @return \Illuminate\Http\RedirectResponse()
     */
    public function change(Request $request)
    {
        $lang = $request->lang;

        if (!in_array($lang, ['en', 'it', 'fr'])) {
            abort(400);
        }

        Session::put('locale', $lang);

        return redirect()->back();
    }
}
