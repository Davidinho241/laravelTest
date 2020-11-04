<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public const PRODUCTS_IMAGE_PATH = 'products/images';
    public const AVATAR_IMAGE_PATH = 'users/avatars';

    /**
     * @param $base24_encode
     * @param $fileName
     * @param $directory
     * @return string
     */
    public function saveMediaB64($base64_encode, $directory)
    {
        if (empty($base64_encode))
            return null;
        $extension = explode('/', mime_content_type($base64_encode))[1];
        $fileName = $directory.'/img-'.time() . '.' . $extension;

        if(!Storage::disk('public_uploads')->put($fileName, base64_decode(explode(',', $base64_encode)[1]))) {
            return false;
        }

        return $fileName;
    }
}
