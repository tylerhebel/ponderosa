<?php namespace Ponderosa\League\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Season Model
 */
class Season extends Model
{
    use Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ponderosa_league_seasons';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public $rules = [
        'name' => 'required'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'leagues' => ['Ponderosa\League\Models\League'],
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}