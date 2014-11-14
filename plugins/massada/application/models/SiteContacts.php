<?php namespace Massada\Application\Models;

use Model;

/**
 * SiteContacts Model
 */
class SiteContacts extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table      = 'ms_siteContacts';


    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name', 'siteContacts_id'];

    /**
     * @var array Relations
     */

    
    public $hasOne = [];
    public $hasMany = [
        'phones' => ['Massada\Application\Models\SiteContactPhones' ],
        'emails' => ['Massada\Application\Models\SiteContactEmails' ]
    ];
    public $belongsTo = [
        'sites' => ['Massada\Application\Models\Sites' ]
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}