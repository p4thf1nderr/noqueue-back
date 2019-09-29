<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mtownsend\XmlToArray\XmlToArray;
use App\Models\FoodCourt;
use App\Models\Category;
use App\Models\Good;


class XmlImportController extends Controller
{
    public function import(Request $request)
    {
        if ($request->hasFile('xml')) {
            $file = $request->file('xml');

            $path = public_path() . '/assets/imports';

            $name = $file->getClientOriginalName();

            var_dump($path, $name);

            $file->move($path, $name);

            
            return response()->json([
                'data' => 'Success. Please confirm'
            ]);
        }
    }




    public function confirm()
    {
        $xmlfile = file_get_contents("/home/ubuntu/server/noqueue-back/public/assets/imports"."/"."noqueue.xml");             
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

        $good = new Good();
        $good->title = $array['offers']['offer']['name'];
        $good->cooking_time = $array['offers']['offer']['time'];
        $good->description = $array['offers']['offer']['description'];
        $good->price = $array['offers']['offer']['price'];
        $good->court_id = $array['offers']['offer']['court_id'];
        $good->category_id = $array['offers']['offer']['category_id'];
        $good->save();

        return response()->json([
            'data' => 'Success'
        ]);
    }
}
