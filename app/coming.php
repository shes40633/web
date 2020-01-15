<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property string $time
 * @property string $description
 * @property string $vedio
 * @property string $sort
 * @property string $created_at
 * @property string $updated_at
 */
class coming extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['title', 'img', 'time', 'description', 'vedio', 'sort', 'created_at', 'updated_at'];

}
