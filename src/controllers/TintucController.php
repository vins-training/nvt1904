<?php

namespace Nvt1904\Qltt;

use App\Http\Controllers\Controller;
use Nvt1904\Qltt\News;

class TintucController extends Controller {

      public function GetAll(){
            $news=News::all();
            return view('Qltt::tintuc',compact('news'));
      }
}