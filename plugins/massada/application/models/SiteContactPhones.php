<?php namespace Massada\Application\Models;

use Model;

/**
 * SiteContactPhones Model
 */
class SiteContactPhones extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table      = 'ms_siteContactPhones';


    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['phone', 'siteContacts_id'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'contacts' => ['Massada\Application\Models\SiteContacts']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}