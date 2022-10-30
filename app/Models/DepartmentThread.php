<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentThread extends Model
{
    use HasFactory;
    use SerializeDate;

    /**
     * Database to be connected
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * Tables to be associated
     *
     * @var string
     */
    protected $table = 'department_threads';

    /**
     * The attributes that are mass assignable
     *
     * @var string[]
     */
    protected $fillable = [
        'hub_id',
        'user_id',
        'message_id',
        'message',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'thread_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'update_at' => 'datetime:Y-m-d H:i:s',
    ];


    /**
     * Get the hub that owns the department thread.
     */
    public function hub()
    {
        return $this->belongsTo(Hub::class);
    }

    /**
     * Get the user that owns the department thread.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the likes for the club thread.
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * Get the thread image path associated with the department thread.
     */
    public function thread_image_path()
    {
        return $this->hasOne(ThreadImagePath::class);
    }
}
