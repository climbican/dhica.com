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
 *
 * //// SQL STRUCTURE  ///

CREATE TABLE IF NOT EXISTS `reviews` (
`id` int(4) NOT NULL,
`reviewer_name` varchar(50) NOT NULL,
`stars` tinyint(1) NOT NULL,
`body_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 *
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {
    protected $table = 'reviews';
    protected $fillable = ['reviewer_name', 'reviewer_email', 'stars', 'token',
        'body_text', 'sent_by', 'sent_on', 'approved_on',
        'create_dte', 'last_update', 'removed_dte'];
    public $timestamps = false;
    protected $dateFormat = 'U';



}