<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FiletotextController;

class MiscController extends Controller
{
    public function get_pdf_text()
    {
        $filetotext = new FiletotextController('/Users/cyj/Documents/phparchitect-2017-11.pdf');
        $parsed = $filetotext->convertToText();
        dd($parsed);
    }


    public function get_docx_text()
    {
        $filetotext = new FiletotextController('/Users/cyj/Documents/LGFCU Phone No.docx');
        $parsed = $filetotext->convertToText();
        dd($parsed);
    }





}
