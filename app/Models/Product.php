<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','description','image'];

    public function search($filter = '')
    {
        $results = $this->where(function ($query) use($filter){
            if ($filter)
            {
                $query->where('name','=',$filter);
                $query->where('description','=',$filter);
            }
        })
        ->paginate();

        return $results;
    }

}
