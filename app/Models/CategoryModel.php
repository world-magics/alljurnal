<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\AttributeModel;

class CategoryModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "column_type";

    protected $fillable = [
        'id',
        'value',
    ];
    
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function attribute()
    {
        return $this->hasOne(AttributeModel::class, 'col_id', 'id');
    }

}
