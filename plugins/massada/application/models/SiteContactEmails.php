<?php namespace Massada\Application\Models;

use Model;

/**
 * SiteContactEmails Model
 */
class SiteContactEmails extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'massada_application_site_contact_emails';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['email'];

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