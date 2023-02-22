<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\adBanner;

class AdBannerController extends Controller
{
    public function add_banner(Request $request)
    {
        $data = new adBanner();
        $data->banner_name = $request->banner_name;
        $data->posted_date = $request->posted_date;
        $file = $request->file('file');
        $filename = time() . '.' . $file->extension();
        $file->move(public_path('banner'), $filename);
        $data->banner_image = $filename;
        $add_banner = $data->save();

        if ($add_banner) {
            return redirect('admin/index')->with('success', 'Blog added successfully');
        } else {
            return back()->with('fail', 'something went wrong');
        }
    }


    public function delete_banner(Request $request, $id)
    {
        $model = adBanner::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Banner deleted successfully');
    }

}