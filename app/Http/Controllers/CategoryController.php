<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
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

        $validated = $request->validate([
            'category_name' => 'required'
        ]);

        $category = new Category();

        $category->category_name = $validated['category_name'];
        $category->slug = self::toAscii($validated['category_name'],' ');

        $category->save();

        sleep(1);

        return redirect()->route('categories')->with('success', 'Category created successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category = Category::find($request->category_id);

        if ($category) {

            $category->category_name = $request->category_name;
            $category->slug = self::toAscii($request->category_name,' ');
            $category->save();
        }

        sleep(1);
        return redirect()->route('categories')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, Request $request)
    {
        $category = Category::find($request->category_id);

        if (!$category) {
            return abort(404);
        }

        sleep(1);

        $category->delete();

        return redirect()->route('categories')->with('success', 'Category deleted successfully');
    }
}