<?php namespace Massada\Application\Models;

use Model;

/**
 * SiteContacts Model
 */
class SiteContact extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table      = 'ms_siteContact';


    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name'];

    /**
     * @var array Relations
     */

    
    public $hasOne = [];
    public $hasMany = [
        'phone' => ['Massada\Application\Models\SiteContactPhone'],
        'email' => ['Massada\Application\Models\SiteContactEmail']
    ];
    public $belongsTo = [
        'site' => ['Massada\Application\Models\Site']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}