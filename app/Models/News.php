<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * @var string
     */
    public $table = 'pwp_news';

    /**
     * @var string[]
     */
    public $dates = ['created_at', 'updated_at'];

    /**
     * @var string[]
     */
    public $fillable = ['title', 'og_image', 'description', 'keywords', 'content', 'category', 'author'];

    /**
     * @param $type
     * @return string
     */
    public function color($type): string
    {
        $colors = [
            'update' => 'bg-primary hover:bg-primary-darker',
            'maintenance' => 'bg-red-700 hover:bg-red-500',
            'event' => 'bg-green-700 hover:bg-green-500',
            'contest' => 'bg-yellow-700 hover:bg-yellow-500',
            'other' => 'bg-blue-700 hover:bg-blue-500'
        ];
        return $colors[$type];
    }
}