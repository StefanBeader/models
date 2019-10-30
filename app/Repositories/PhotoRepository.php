<?php

namespace App\Repositories;

use App\Models\Photo;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

    /**
     * @param array $files
     * @param int $mannequinId
     * @param string $type
     */
    public function storeAll(array $files, int $mannequinId, string $type = 'basic'): void
    {
        foreach ($files as $file)
        {
            $this->store($file, $type, $mannequinId);
        }
    }

    /**
     * @param UploadedFile $file
     * @param string $type
     * @param int $mannequinId
     * @return Photo
     */
    public function store(UploadedFile $file, string $type, int $mannequinId): Photo
    {
        $fileName = Str::uuid()->toString() . '.' . $file->getClientOriginalExtension();

        $path = Storage::disk('photos')->putFileAs(
            'photos/' . $mannequinId,
            $file,
            $fileName
        );

        return $this->_model->create([
            'path' => $path,
            'type' => $type,
            'mannequin_id' => $mannequinId
        ]);
    }

    /**
     * @param Photo $photo
     * @return bool
     * @throws \Exception
     */
    public function delete(Photo $photo): bool
    {
        $deleted = Storage::disk('photos')->delete($photo->path);
        if ($deleted) {
            return $photo->delete();
        }
        return false;
    }

    /**
     * @param array $data
     * @param int $id
     * @return bool
     */
    public function update(array $data, int $id): bool
    {
        return $this->_model->where('id', $id)->update($data);
    }

    /**
     * @param int $mannequin_id
     * @return Photo|null
     */
    public function findPrimary(int $mannequin_id): ?Photo
    {
        return $this->_model->where('mannequin_id', $mannequin_id)
            ->where('is_primary', true)
            ->first();
    }
}
