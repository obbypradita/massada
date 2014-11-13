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
    public $table = 'massada_application_site_contact_phones';

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
        'sitecontacts' => ['Massada\Application\Models\SiteContacts']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}