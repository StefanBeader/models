<?php

namespace App\Repositories;

use App\Models\Photo;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PhotoRepository
{
    /**
     * @var Photo
     */
    private $_model;

    public function __construct(Photo $photo)
    {
        $this->_model = $photo;
    }

    public function storeAll(array $files, int $mannequinId): void
    {
        foreach ($files as $key => $file)
        {
            $this->store($file, $key, $mannequinId);
        }
    }

    public function store(UploadedFile $file, string $name, int $mannequinId): Photo
    {
        $fileName = $name . '.' . $file->getClientOriginalExtension();

        $path = Storage::disk('photos')->putFileAs(
            'photos/' . $mannequinId,
            $file,
            $fileName
        );

        return $this->_model->create([
            'path' => $path,
            'type' => 'basic',
            'mannequin_id' => $mannequinId
        ]);
    }
}
