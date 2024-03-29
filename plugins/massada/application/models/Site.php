<?php namespace Massada\Application\Models;

use Model;

/**
 * Sites Model
 */
class Site extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ms_site';



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
        'contact' => ['Massada\Application\Models\SiteContact']
    ];
    /*
    public $hasManyThrough = [
        'phones' => ['Massada\Application\Models\SiteContactPhones', 'through' => 'Massada\Application\Models\SiteContacts'],
        'emails' => ['Massada\Application\Models\SiteContactEmails', 'through' => 'Massada\Application\Models\SiteContacts']
    ];
    */

    public $belongsTo = [
        'location' => ['Massada\Application\Models\Location']
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
        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/site/avatar/'   . $photofordelete . '.png'));
    }

    public function afterUpdate() {
        
    }

}