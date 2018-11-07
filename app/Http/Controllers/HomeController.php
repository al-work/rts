<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [

                'name' => 'required|string|max:50',
                'email' => 'required|email',
            ]);
            if ($validator->fails()) {
                $data = [
                    'error' => 'An error has occurred'
                ];
                return view('welcome', $data);
            }

            if ($request->hasFile('cv')) {
                if ($request->cv->extension() != 'pdf') {
                    $data = [
                        'error' => 'File must be pdf type'
                    ];
                    return view('welcome', $data);
                } else {
                    $fileName = strtolower(str_replace(' ', '', $request->name)).'-'.rand(0000, 99999).'.pdf';
                    $cvData = new Cv;

                    $cvData->name = $request->name;
                    $cvData->email = $request->email;
                    $cvData->text = $request->text;
                    $cvData->fileName = $fileName;

                    $cvData->save();
                    $request->cv->storeAs('public/cvs', $fileName);

                    $data = [
                        'success' => 'Your CV has been sent.'
                    ];
                    return view('welcome', $data);
                }
            }
        } else {
            return view('welcome');
        }

    }
}
