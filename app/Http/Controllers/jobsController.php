<?php

namespace App\Http\Controllers;

use App\job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class jobsController extends Controller
{
    public function index()
    {
        $items = job::all();


        return view('admin.jobs.index', compact('items'));
    }

    public function create()
    {

        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $requsetData = $request->all();


        //上傳檔案
        $items = $request->file('img')->store('', 'public');
        // 檔案存到public裡
        $requsetData['img'] = $items;

        job::create($requsetData);

        // $new_product = movie::create($requsetData);
        // $new_product_id = $new_product->id;
        // //多張上傳
        // $files = $request->file('imgs');
        // if ($request->hasFile('imgs')) {
        //     foreach ($files as $file) {
        //         // 上傳圖片
        //         $items = $file->store('', 'public');

        //         // 新增進DB
        //         $product_img = new productimg;
        //         $product_img->product_id = $new_product_id;
        //         $product_img->imges = $items;
        //         $product_img->save();
        //     }
        // }


        return redirect('/admin/jobs');
    }


    public function edit($id)
    {
        $items = job::where('id', $id)->first();

        return view('admin.jobs.edit', compact('items'));
    }


    public function update(Request $request, $id)
    {
        $item = job::find($id);

        $requsetData = $request->all();

        if ($request->hasFile('img')) {
            //上傳單一檔案
            $items = $request->file('img')->store('', 'public');
            $requsetData['img'] = $items;

            $old_image = '/storage/' . $item->img;
            File::delete(public_path($old_image));
        }

        $item->update($requsetData);

        return redirect('/admin/jobs');
    }


    public function destroy($id)
     {
        //  單一圖片刪除

        $item = job::find($id);
        // 只到圖片路徑
        $old_image = '/storage/' . $item->img;

        // 確認圖片是否一樣
        if (file_exists(public_path($old_image))) {
            File::delete(public_path($old_image));
        }
        $item->delete();



        return redirect('/admin/jobs');
    }
}
