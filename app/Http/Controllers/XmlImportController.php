<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mtownsend\XmlToArray\XmlToArray;
use App\Models\FoodCourt;
use App\Models\Category;
use App\Models\Good;
use App\Models\Photo;
use Log;



class XmlImportController extends Controller
{
    public function import(Request $request)
    {
        if ($request->hasFile('xml')) {
            $file = $request->file('xml');

            $path = public_path() . '/assets/imports';

            $name = $file->getClientOriginalName();

            $file->move($path, $name);

            return redirect()->action(
                'XmlImportController@confirm'
            );
        }
    }




    public function confirm()
    {
        $xmlfile = file_get_contents("/var/www/html/noqueue-back/public/assets/imports"."/"."noqueue.xml");             
        $array = XmlToArray::convert($xmlfile);

        // сохранение компании
        $court = new FoodCourt();
        $court->name = $array['company'];
        $court->description = $array['description'];
        $court->mall_id = $array['mall_id'];
        $court->photo = $array['company_img'];
        $court->save();


        // сохранене категорий товаров

        foreach ($array['categories']['category'] as $value) {
            $category = new Category();
            $category->title = $value['@content'];
            $category->save();
        }

        foreach ($array['offers']['offer'] as $offer) {
            $good = new Good();
            $good->title = $offer['name'];
            $good->cooking_time = $offer['time'];
            $good->description = $offer['description'];
            $good->price = $offer['price'];
            $good->court_id = $offer['court_id'];
            $good->category_id = $offer['category_id'];
            $good->save();

            $photo = new Photo();
            $photo->good_id = $good->id;
            $photo->link = $offer['picture'];
            $photo->save();            
        }

        return response()->json([
            'data' => 'Success'
        ]);
    }
}
