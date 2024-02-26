<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AttributeGroupModel;

class AttributeGroupController extends Controller
{
    public function index(){
        $groups = AttributeGroupModel::query()->paginate(15);
        return view('admin.attributegroup.index', compact('groups'));
    }

    public function create(){
        return view('admin.attributegroup.create');
    }

    public function store(Request $request){
        AttributeGroupModel::query()->create([
            'title' => $request->input('name'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('admin.attribute-group.index')->with('message','Ma`lumotlar muvofaqiyatli saqlandi!');
    }

    public function delete($id)
    {
        AttributeGroupModel::query()->FindOrFail($id)->delete();
        return redirect()->route('admin.attribute-group.index')->with('message','Ma`lumotlar muvofaqiyatli o`chirildi!');
    }

    public function edit($id)
    {
        $group = AttributeGroupModel::query()->FindOrFail($id);
        return view('admin.attributegroup.edit', compact('group'));
    }

    public function update(Request $request, $id){
        AttributeGroupModel::query()->FindOrFail($id)->update([
            'title' => $request->input('name'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('admin.attribute-group.index')->with('message','Ma`lumotlar muvofaqiyatli yangilandi!');
    }

}
