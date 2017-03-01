<?php
/**
 * Name
 * Description:
 * @author Michael Rumack
 * User: climbican
 * Date: 2/5/16
 * Time: 2:27 PM
 * Last Mod:
 * Notes:
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
    protected $table = 'content';
    protected $fillable = ['page_name', 'author_name', 'title', 'sub_title', 'body', 'meta_descript', 'keywords', 'metatag_descript', 'image_url', 'image_alt_text', 'image_title', 'media_link', 'create_dte', 'last_update', 'removed_dte'];
    public $timestamps = false;
    protected $dateFormat = 'U';

}