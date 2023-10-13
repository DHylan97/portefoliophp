<?php

namespace App\Controllers;

use App\Models\Image;
use App\Utils\Redirect;

class ImageController
{
    public function deleteImage($id)
    {
        $image = Image::find($id);
        $projectId = $image->project_id;
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$image->path)) {
            unlink($_SERVER['DOCUMENT_ROOT'].$image->path);
        }
        Image::deleteImage($id);

        Redirect::to('/project/'.$projectId.'/edit', [
            'success' => 'Image supprimée avec succès !'
        ]);
    }
}