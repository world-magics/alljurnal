<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryModel::query()->paginate(15);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        CategoryModel::query()->create([
            'value' => $request->input('name'),
        ]);
        return redirect()->route('admin.category.index')->with('message','Ma`lumotlar muvofaqiyatli saqlandi!');
    }

    public function delete($id)
    {
        CategoryModel::query()->FindOrFail($id)->delete();
        return redirect()->route('admin.category.index')->with('message','Ma`lumotlar muvofaqiyatli o`chirildi!');
    }

    public function edit($id)
    {
        $category = CategoryModel::query()->FindOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        CategoryModel::query()->FindOrFail($id)->update([
            'value' => $request->input('name'),
        ]);
        return redirect()->route('admin.category.index')->with('message','Ma`lumotlar muvofaqiyatli yangilaydi!');
    }

}
