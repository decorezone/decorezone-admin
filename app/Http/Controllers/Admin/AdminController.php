<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\accessory_type;
use App\accessory_item;
use Image;
use Carbon\Carbon;
use File;
use Illuminate\Support\Arr;
use App\Utils\MobileUtil;
class AdminController extends Controller
{

  /**
     * All Utils instance.
     *
     */
    protected $MobileUtil;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(MobileUtil $MobileUtil)
    {
        $this->MobileUtil = $MobileUtil;
    }

  public function MobileinPakistanAdmin($value='')
  {
  	$dashboard=$this->MobileUtil->dashboard();
  
    return view('admin.welcome',compact('dashboard'));
  }


}
