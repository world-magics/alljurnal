<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AttributeModel;
use App\Models\AttributeGroupModel;
use App\Models\CategoryModel;

class AttributeController extends Controller
{
    public function index()
    {
        $attributes = AttributeModel::query()->paginate(15);
        return view('admin.attribute.index', compact('attributes'));
    }

    public function create()
    {
        $groups = AttributeGroupModel::query()->get();
        $categories = CategoryModel::query()->get();
        return view('admin.attribute.create', compact('groups', 'categories'));
    }

    public function store(Request $request)
    {
        AttributeModel::query()->create([
            'group_id' => $request->input('group_id'),
            'name' => $request->input('name'),
            'col_id' => $request->input('category_id'),
        ]);
        return redirect()->route('admin.attribute.index')->with('message','Yangi ustun muvofaqiyatli saqlandi!');
    }

    public function delete($id)
    {
        AttributeModel::query()->FindOrFail($id)->delete();
        redirect()->route('admin.attribute.index')->with('message','Yangi ustun muvofaqiyatli o`chirildi!');
    }
}
