<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostTab extends Model
{
    use HasFactory;



    public function getSlugAttribute() {

        return Str::slug($this->name, '-');

    }


    public function getColorAttribute() {

        $colors = ['primary', 'success', 'danger', 'warning', 'info'];

        return $colors[array_rand($colors, 1)];

    }

}
