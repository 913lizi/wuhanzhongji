<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SettingsServices;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    protected $service;
    public function __construct(){
        $this->service  = new SettingsServices();
    }
      public function index()
      {
          $data = $this->service->getIndex();

          return view('admin.Settings.index',compact('data'));
      }

      public function create(Request $request)
      {
          $res = $this->service->createWeb($request);
          return redirect('admin/web/settings');

      }
}
