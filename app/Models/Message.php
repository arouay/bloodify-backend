<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $donor_id
 * @property integer $seeker_id
 * @property string $datetime
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property Donor $donor
 * @property Seeker $seeker
 */
class Message extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'message';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['donor_id', 'seeker_id', 'datetime', 'content', 'created_at', 'updated_at'];

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
