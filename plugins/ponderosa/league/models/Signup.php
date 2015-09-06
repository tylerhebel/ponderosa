<?php namespace Ponderosa\League\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Signup Model
 */
class Signup extends Model
{
    use Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ponderosa_league_signups';

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
        'league' => 'required',
        'team_name' => 'required',
        'location_name' => 'required',
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'league' => ['Ponderosa\League\Models\League'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}