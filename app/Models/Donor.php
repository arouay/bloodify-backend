<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $cin
 * @property string $firstname
 * @property string $lastname
 * @property string $bloodgroup
 * @property string $location
 * @property string $city
 * @property string $created_at
 * @property string $updated_at
 * @property Donation[] $donations
 * @property Message[] $messages
 */
class Donor extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'donor';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['cin', 'firstname', 'lastname', 'bloodgroup', 'location', 'city', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function donations()
    {
        return $this->hasMany('App\Donation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
