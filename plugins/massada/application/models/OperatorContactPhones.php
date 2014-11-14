<?php namespace Massada\Application\Models;

use Model;

/**
 * OperatorContactPhones Model
 */
class OperatorContactPhones extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ms_operatorContactPhones';

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
    public $hasMany = [];
    public $belongsTo = [
        'contacts' => ['Massada\Application\Models\OperatorContacts']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}