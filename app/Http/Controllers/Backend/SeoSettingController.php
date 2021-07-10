<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class SeoSettingController extends Controller
{
    public function SeoSetting()
    {
        $seoSetting = SeoSetting::find(1);
        return view('backend.setting.seo_update',compact('seoSetting'));
    }

    public function SeoSettingUpdate(Request $request,$setting_id)
    {
        SeoSetting::findOrFail($setting_id)->update([
            'meta_title' => $request->meta_title,
            'meta_author' => $request->meta_author,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'google_analytics' => $request->google_analytics,

            ]);

	    $notification = array(
			'message' => 'SEO Setting Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);
    }
}