<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use \Carbon\Carbon;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = ['name','date_ini','date_end'];



    public function getRouteKeyName()
    {
        return 'slug';
    }


    /**
     * Get the user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Get the user
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }


    /**
     * Get the costs
     */
    public function costs()
    {
        return $this->hasMany(Cost::class);
    }


    /**
     * Get total cost
     */
    public function getTotalCostAttribute()
    {
        return $this->costs->sum('price');
    }


    /**
     * Get total cost
     */
    public function getTotalCitiesAttribute()
    {
        return $this->cities->count();
    }


    /**
     * Get total cost
     */
    public function getTotalDaysAttribute()
    {
        $ini_date = Carbon::parse($this->date_ini);
        $end_date = Carbon::parse($this->date_end);

        return $end_date->diffInDays($ini_date);
    }


    /**
     * Save user_id and slug as standard values
     */
    public function save(array $options = array())
    {
        $this->user_id = auth()->id();
        $this->slug = Str::slug($this->name, '-');
        parent::save($options);
    }


}
