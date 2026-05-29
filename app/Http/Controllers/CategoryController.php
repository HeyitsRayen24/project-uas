<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $title = 'Category Table';
        return view('admin.categories.index', compact('title', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Category Add Form';
        return view('admin.categories.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => 'required',
            'name' => 'required'
        ]);

        Category::create($data);

        // Alert::success('Berhasil', 'Data Kategori Berhasil Ditambahkan')->autoClose(1000);
        toast('Data Kategori Berhasil Ditambah!','success');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $title = 'Category Form Detail';
        return view('admin.categories.show', compact('title', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $title = 'Category Edit Form';
        return view('admin.categories.edit', compact('title', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'code' => 'required',
            'name' => 'required'
        ]);

        $category->update($data);

        //Alert::success('Berhasil', 'Data Kategori Berhasil Diupdate')->autoClose(1000);
        toast('Data Kategori Berhasil Diupdate!','success');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        toast('Data Kategori Berhasil Dihapus!','success');

        return redirect()->route('category.index');
    }
}
