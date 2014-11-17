<?php namespace Massada\Application\Models;

use Model;

/**
 * OperatorContactPhones Model
 */
class OperatorContactPhone extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ms_operatorContactPhone';

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
        'contact' => ['Massada\Application\Models\OperatorContact']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}