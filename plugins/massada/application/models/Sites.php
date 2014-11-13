<?php namespace Massada\Application\Models;

use Model;

/**
 * Sites Model
 */
class Sites extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'massada_application_sites';


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
        'sitecontacts' => ['Massada\Application\Models\SiteContacts']
    ];
    public $belongsTo = [
        'locations' => ['Massada\Application\Models\Locations']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'avatar' => ['System\Models\File']
    ];
    public $attachMany = [];

    public function afterDelete() {
        $photofordelete = $this->photo;
        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/site/original/' . $photofordelete . '.png'));
        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/site/avatar/' . $photofordelete . '.png'));
    }

    public function afterUpdate() {
        
    }

}