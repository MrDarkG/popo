<?php
namespace App\Services;

use Auth;
use App\Models\Answers;
use DB;
use Illuminate\Support\Facades\Http;
use Storage;
class SoundService 
{
	static public function getSound($word,$filename)
	{
		$response = Http::asForm()->post('162.55.213.155:5000', [
    		'data' => $word,
 	   		'auth_token' => 'vh8qrWHD5XcvsBOA1FQMdPemziILwrE9',
		]);
		return Storage::disk("question")->put($filename,base64_decode($response->json()["file"]));
	}
}