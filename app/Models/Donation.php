<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $center_id
 * @property integer $donor_id
 * @property integer $seeker_id
 * @property string $date
 * @property int $Quanity
 * @property string $created_at
 * @property string $updated_at
 * @property Center $center
 * @property Donor $donor
 * @property Seeker $seeker
 */
class Donation extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'donation';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['center_id', 'donor_id', 'seeker_id', 'date', 'Quanity', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function center()
    {
        return $this->belongsTo('App\Center');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function donor()
    {
        return $this->belongsTo('App\Donor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seeker()
    {
        return $this->belongsTo('App\Seeker');
    }
}
