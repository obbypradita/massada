<?php namespace Massada\Application\Models;

use Model;

/**
 * OperatorContacts Model
 */
class OperatorContact extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ms_operatorContact';

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
        'phone' => ['Massada\Application\Models\OperatorContactPhone'],
        'email' => ['Massada\Application\Models\OperatorContactEmail']
    ];
    public $belongsTo = [
        'operator' => ['Massada\Application\Models\Operator']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}