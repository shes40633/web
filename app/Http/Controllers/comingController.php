<?php

namespace App\Http\Controllers;

use App\coming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class comingController extends Controller
{
    public function index()
    {
        $items = coming::all();

        return view('admin.comings.index', compact('items'));
    }

    public function create()
    {

        return view('admin.comings.create');
    }

    public function store(Request $request)
    {
        $requsetData = $request->all();


        //上傳檔案
        $items = $request->file('img')->store('', 'public');
        // 檔案存到public裡
        $requsetData['img'] = $items;

        coming::create($requsetData);




        return redirect('/admin/comings');
    }


    public function edit($id)
    {
        $items = coming::where('id', $id)->first();

        return view('admin.comings.edit', compact('items'));
    }


    public function update(Request $request, $id)
    {
        $item = coming::find($id);

        $requsetData = $request->all();

        if ($request->hasFile('img')) {
            //上傳單一檔案
            $items = $request->file('img')->store('', 'public');
            $requsetData['img'] = $items;

            $old_image = '/storage/' . $item->img;
            File::delete(public_path($old_image));
        }

        $item->update($requsetData);

        return redirect('/admin/comings');
    }


    public function destroy($id)
     {
        //  單一圖片刪除

        $item = coming::find($id);
        // 只到圖片路徑
        $old_image = '/storage/' . $item->img;

        // 確認圖片是否一樣
        if (file_exists(public_path($old_image))) {
            File::delete(public_path($old_image));
        }
        $item->delete();



        return redirect('/admin/comings');
    }
}
