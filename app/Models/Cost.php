<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;




    protected $fillable = ['name','price','type', 'city_id', 'currency', 'cost_tab_id', 'destination_id'];


    /**
     * Get the destination
     */
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }


    /**
     * Get the cities
     */
    public function cities()
    {
        return $this->belongsTo(City::class);
    }



    /**
     * return money format
     */
    public function getPriceFormatedAttribute() {
        $fmt = new \NumberFormatter( 'de_DE', \NumberFormatter::CURRENCY );
        return $fmt->formatCurrency($this->price, $this->currency) ;
    }



}
