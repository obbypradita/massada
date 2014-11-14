<?php namespace Massada\Application\Models;

use Model;

/**
 * OperatorContacts Model
 */
class OperatorContacts extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ms_operatorContacts';

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
        'phones' => ['Massada\Application\Models\OperatorContactPhones'],
        'emails' => ['Massada\Application\Models\OperatorContactEmails']
    ];
    public $belongsTo = [
        'operators' => ['Massada\Application\Models\Operators']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}