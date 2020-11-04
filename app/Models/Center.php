<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $phoneNo
 * @property string $website
 * @property string $email
 * @property string $location
 * @property string $city
 * @property string $created_at
 * @property string $updated_at
 * @property Donation[] $donations
 */
class Center extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'center';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'address', 'phoneNo', 'website', 'email', 'location', 'city', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function donations()
    {
        return $this->hasMany('App\Donation');
    }
}
