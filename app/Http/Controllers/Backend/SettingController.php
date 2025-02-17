<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\SmtpSetting;
use App\Models\SiteSetting;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function SmtpSetting()
    {
        $setting = SmtpSetting::find(1);
        return view('backend.setting.smtp_update',compact('setting'));

    } //End Method

    public function UpdateSmtpSetting(Request $request)
    {
        $smtp_id = $request->id;

        SmtpSetting::findOrFail($smtp_id)->update([
            'mailer' => $request->mailer,
            'host' => $request->host,
            'post' => $request->post,
            'username' => $request->username,
            'password' => $request->password,
            'encryption' => $request->encryption,
            'from_address' => $request->from_address,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'SMTP Setting Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    } //End Method


    public function SiteSetting()
    {
        $sitesetting = SiteSetting::find(1);
        return view('backend.setting.site_update',compact('sitesetting'));

    } //End Method

    public function UpdateSiteSetting(Request $request){

        $site_id = $request->id;
        $oldImage = $request->old_img;

        if ($request->file('logo')) {
        $image = $request->file('logo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1500,386)->save('upload/logo/'.$name_gen);
        $save_url = 'upload/logo/'.$name_gen;

        if (file_exists($oldImage)) {
            unlink($oldImage);
            }

        SiteSetting::findOrFail($site_id)->update([
            'company_phone' => $request->company_phone,
            'company_address' => $request->company_address,
            'company_email' => $request->company_email,
            'office_hour' => $request->office_hour,
            'about_us' => $request->about_us,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'copyright' => $request->copyright, 
            'logo' => $save_url, 
        ]);

         $notification = array(
                'message' => 'SiteSetting Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

            }else{

         SiteSetting::findOrFail($site_id)->update([
            'company_phone' => $request->company_phone,
            'company_address' => $request->company_address,
            'company_email' => $request->company_email,
            'office_hour' => $request->office_hour,
            'about_us' => $request->about_us,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'copyright' => $request->copyright,   
        ]);

            $notification = array(
            'message' => 'SiteSetting Updated without Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        }

    }// End Method 





}
