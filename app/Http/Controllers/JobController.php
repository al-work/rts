<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    public function index()
    {
        $cvs = Cv::all();
        $url = Storage::url('cvs/');
        $data = [
            'url' => $url,
          'cvs' => $cvs
        ];
        return view('vendor/voyager/jobofer', $data);
    }
}
