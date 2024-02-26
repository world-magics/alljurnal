<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\AttributeModel;

class AttributeGroupModel extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = "attribute_groups";

    protected $fillable =[
        'id',
        'title',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function attributes()
    {
        return $this->hasMany(AttributeModel::class, 'group_id', 'id');
    }
}
