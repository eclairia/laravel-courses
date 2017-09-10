<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
	public $fillable = ['url', 'shortened'];

    public $timestamps = false;

	public static function getUniqueShortUrl() {
		$shortened = str_random(5);

		if(static::whereShortened($shortened)->first()) {
			return static::getUniqueShortUrl();
		}

		return $shortened;
	}    
}
