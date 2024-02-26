<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\AttributeGroupModel;
use App\Models\CategoryModel;

class AttributeModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "attributes";

    protected $fillable =[
        'id',
        'group_id',
        'name',
        'col_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function group()
    {
        return $this->belongsTo(AttributeGroupModel::class, 'group_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'col_id', 'id');
    }

}
