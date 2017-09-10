<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Foundation\Validation\validate;
use Illuminate\Http\Request;

class UrlsController extends Controller
{
    public function create() {
    	return view('welcome');
    }

    public function store(Request $request) {
		$this->validate($request, ['url' => 'required|url']);

		$record = $this->getRecordForUrl($request->url);

		return view('result')->withShortened($record->shortened);
    }

    public function show($shortened) {
	    $url = Url::whereShortened($shortened)->firstOrFail();
		
		return redirect($url->url);
    }

    private function getRecordForUrl($url) {

		$record = Url::whereUrl($url)->first();

		if($record) {
			return $record;
		}

		return Url::create([
			'url' => $url,
			'shortened' => Url::getUniqueShortUrl()
		]);
    }
}
