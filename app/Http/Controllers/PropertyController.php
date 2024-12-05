<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\PropertyGallery;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $properties = Property::all()->sortByDesc('id');
        return view('admin.properties', compact('properties', 'categories'));
    }

    public function toAscii($str, $replace = array(), $delimiter = '-')
    {
        if (!empty($replace)) {
            $str = str_replace((array)$replace, ' ', $str);
        }
        $clean = str_replace('�', 'c', $str);
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

        return $clean;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $properties = new Property();

        $properties->p_title = $request->p_title;
        $properties->p_price = $request->p_price;
        $properties->p_address = $request->p_address;
        $properties->p_bedroom = $request->p_bedroom;
        $properties->p_bathroom = $request->p_bathroom;
        $properties->p_parking = $request->p_parking;
        $properties->p_area = $request->p_area;
        $properties->p_description = $request->p_description;
        $properties->p_category = $request->p_category;
        $properties->p_status = $request->p_status;
        $properties->p_zillow_url = $request->p_zillow_url;

        $slug = self::toAscii($request->p_title);
        $properties->p_slug = $slug;

        $img = $request->file('p_cover_img');
        $img_name = md5(time()) . '.' . $img->getClientOriginalExtension();
        $img->move('assets/images/properties_img', $img_name);

        $properties->p_cover_img = $img_name;

        sleep(2);

        if ($properties->save()) {

            return redirect()->route('properties')->with(['success', 'Imóvel adicionado com sucesso!']);
        } else {

            return redirect()->route('properties')->with(['error', 'Erro ao adicionar imóvel. Tente novamente.']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {

        $properties = Property::find($request->id);

        $properties->p_title = $request->p_title;
        $properties->p_price = $request->p_price;
        $properties->p_address = $request->p_address;
        $properties->p_bedroom = $request->p_bedroom;
        $properties->p_bathroom = $request->p_bathroom;
        $properties->p_parking = $request->p_parking;
        $properties->p_area = $request->p_area;
        $properties->p_description = $request->p_description;
        $properties->p_category = $request->p_category;
        $properties->p_status = $request->p_status;
        $properties->p_zillow_url = $request->p_zillow_url;

        $slug = self::toAscii($request->p_title);
        $properties->p_slug = $slug;

        if ($request->hasFile('p_cover_img')) {

            $img = $request->file('p_cover_img');
            $img_name = md5(time()) . '.' . $img->getClientOriginalExtension();

            unlink(public_path('assets/images/properties_img/' . $properties->p_cover_img));

            $img->move('assets/images/properties_img', $img_name);

            $properties->p_cover_img = $img_name;
        }

        sleep(2);

        if ($properties->save()) {

            return redirect()->route('properties')->with(['success', 'Imóvel alterado com sucesso!']);
        } else {

            return redirect()->route('properties')->with(['error', 'Erro ao alterar imóvel. Tente novamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Property $property)
    {
        $property = Property::find($request->p_id);

        if (!$property) {
            return abort(404);
        }

        unlink(public_path('assets/images/properties_img/' . $property->p_cover_img));

        $property->delete();

        sleep(1);

        return redirect()->route('properties')->with('success', 'Imóvel excluído com sucesso!');
    }

    /**
     * METODOS PARA GALERIA DE IMAGENS DOS IMÓVEIS
     */

    public function addGallery(Request $request, PropertyGallery $propertyGallery)
    {

        $img = $request->file('p_images');

        for ($i = 0; $i < count($img); $i++) {

            $imgs = $img[$i];
            $imgs_name = md5(time()) . '.' . $imgs->getClientOriginalExtension();

            if ($imgs->move('assets/images/properties_img', $imgs_name)) {

                $propertyGallery->img_name = $imgs_name;
                $propertyGallery->property_id = $request->p_id;

                $image = $propertyGallery::create([
                    "img_name" => $imgs_name,
                    "property_id" => $request->p_id
                ]);

                sleep(1);
            }
        }
    }
}
