<?php namespace Massada\Application\Models;

use Model;

/**
 * locations Model
 */
class Locations extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ms_locations';


    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'sites' => ['Massada\Application\Models\Sites']
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}