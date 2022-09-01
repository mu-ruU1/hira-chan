<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hub extends UuidModel
{
    use HasFactory;

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
    protected $table = 'hub';

    /**
     * The attributes that are mass assignable
     *
     * @var string[]
     */
    protected $fillable = [
        'thread_id',
        'thread_name',
        'thread_category',
        'thread_category_type',
        'user_email',
        'is_enabled'
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
}
