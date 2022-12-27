<?php

namespace Litecms\Block\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Sluggable;
use Litepie\Database\Traits\Sortable;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Trans\Traits\Translatable;

class Block extends Model
{
    use Filer;
    use Hashids;
    use Sluggable;
    use SoftDeletes;
    use Sortable;
    use Translatable;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
     protected $config = 'litecms.block.block.model';

    /**
     * The blog_categories that belong to the blog.
     */
    public function category()
    {

        return $this->belongsTo('Litecms\Block\Models\Category', 'category_id');
    }

    public function user()
    {

        return $this->belongsTo('App\User', 'user_id');
    }
}