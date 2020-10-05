<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportSignature extends Controller
{
    /*
    _ Flag the given signature.
    _
    _ @param Signature $signature
    _ @return Signature
    */
   public function update(Signature $signature)
   {
       $signature->flag();

       return $signature;
   }
}
