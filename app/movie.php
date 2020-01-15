<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property string $sort
 * @property string $created_at
 * @property string $updated_at
 */
class movie extends Model
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
    protected $fillable = ['title', 'img', 'sort', 'created_at', 'updated_at','time','description','vedio'];

}
