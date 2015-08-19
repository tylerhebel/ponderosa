<?php namespace Ponderosa\League\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * League Model
 */
class League extends Model
{
    use Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ponderosa_league_leagues';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'description' => 'required',
        'players_per_team' => 'required',
        'season_id' => 'required',
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'season' => ['Ponderosa\League\Models\Season'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}