<?php namespace Massada\Application\Models;

use Model;

/**
 * SiteContactPhones Model
 */
class SiteContactPhone extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table      = 'ms_siteContactPhone';


    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['phone'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'contact' => ['Massada\Application\Models\SiteContact']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}