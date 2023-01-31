<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;


    protected $fillable = ['name','date_ini','date_end', 'destination_id'];

    protected $appends = ['color'];


    /**
     * Get the destination
     */
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }



    /**
     * Get the costs
     */
    public function costs()
    {
        return $this->hasMany(Cost::class);
    }



    public function getColorAttribute() {

        return 'success';

    }

    public function getSlugAttribute() {

        return Str::slug($this->name, '-');

    }


    /**
     * Get avg cost method by Tab
     */
    public function avgCostTab($tab)
    {
        $avgCost =  $this->costs()
        ->select('cost_tab_id')
        ->selectRaw('sum(price) as avg')
        ->selectRaw('round((sum(price) / (select sum(price) from costs))*100) as percentage')
        ->groupBy('cost_tab_id')
        ->get()
        ->toArray();

        $keyed = Arr::keyBy($avgCost, 'cost_tab_id');
        if($keyed && !empty($keyed[$tab->id])) {
            return $keyed[$tab->id];
        } else {
            return ['avg' => 0, 'percentage' => 0];
        }


    }






}



