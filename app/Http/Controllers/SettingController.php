<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Setting;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  protected $breadcrumb = array('/settings'=>'Settings','/settings'=>'Settings');
  protected $listing = array('/settings'=>'Settings');
  public function __construct()
  {
      $this->middleware('auth');
  } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*$employeedetails = Employees::orderBy('id', 'desc')
                      ->paginate($this->rowPerPage);
      return view('admin.employee.index')->with('page_title','settings')
      ->with('employeedetails',$employeedetails)
      ->with('listing',$this->listing)
      ->with('breadcrumb',$this->breadcrumb);
      */
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function setting()
     {
       //$this->p($this->rowPerPage);
      // $this->p($this->settings);
       $breadcrumb = array();
       $settingDetails  = Setting::get();
      // $this->p($settings,0);
       foreach($settingDetails as $value){
        //$this->p($value->label,0);
       }
       //die();
   		$pincode=array();
   		return view('admin.setting.create')
   				        ->with('page_title','Settings')
                   ->with('breadcrumb',$this->breadcrumb)
                   ->with('listing',$this->listing)
                   ->with('settingDetails',$settingDetails);

     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSettings(Request $request)
    {
        $this->p($request->all(),0);
        echo $request->companyname;
        $file_path = storage_path('app/public/'.$request->imagename);
            $imagename = $request->file('imagename');
            if(isset($imagename) && !empty($imagename) && $imagename !='logo.png'){
                if(file_exists($file_path))
                    unlink($file_path);
                $extension = $imagename->getClientOriginalExtension();
                Storage::disk('public')->put($imagename->getFilename().'.'.$extension,  File::get($imagename));
            }



        $data['companyname'] =  $request->companyname;

        $fieldnamearray = $request->fieldname;
        $this->p($fieldnamearray,0);
        foreach($fieldnamearray as $fieldname){
          Setting::where('field_name',$fieldname)->update(['value' => $request->{$fieldname}]);
        }

        if($request->file('imagename')){
           $imagename  =   $imagename->getFilename().'.'.$extension;
          Setting::where('field_name','companylogo')->update(['value' => $imagename]);

        }

        $request->session()->flash('alert-success', trans('message.settingsupdatedsuccess'));
            return redirect('settings');
        //Setting::update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
