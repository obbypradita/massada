<?php namespace Massada\Application\Models;

use Model;

/**
 * Operators Model
 */
class Operators extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ms_operators';

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
        'contacts' => ['Massada\Application\Models\OperatorContacts'],
    ];
    
    public $hasManyThrough = [];

    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

     public function afterDelete() {
        $photofordelete = $this->logo;
        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/operator/original/' . $photofordelete . '.png'));
        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/operator/avatar/'   . $photofordelete . '.png'));
    }

}