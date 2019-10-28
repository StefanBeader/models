<?php

namespace App\Repositories;

use App\Models\Mannequin;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class MannequinRepository
{
    private $model;

    public function __construct(Mannequin $mannequin)
    {
        $this->model = $mannequin;
    }

    /**
     * @param array $data
     * @return Mannequin|bool
     */
    public function store(array $data): ?Mannequin
    {
        $birthday = $data['year'] . '/' . $data['month'] . '/' . $data['day'];
        $school = $data['school'] === 'no' ? false : true;

        return $this->model->create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'city' => $data['city'] ?? null,
            'instagram' => $data['instagram'] ?? null,
            'gender' => $data['gender'],
            'birthday' => $birthday,
            'school' => $school,
            'school_type' => $data['school_type'] ?? null,
            'height' => $data['height'],
            'waist' => $data['waist'],
            'bust' => $data['bust'],
            'hips' => $data['hips'],
            'shoe_size' => $data['shoe_size'],
            'eyes_color' => $data['eyes_color'],
            'hair_color' => $data['hair_color'],
        ]);
    }

    /**
     * @param string $category
     * @param string $gender
     * @return Collection|null
     */
    public function findByCategory(string $category, string $gender = ''): ?Collection
    {
        $query = $this->model->whereHas(
            'categories', function (Builder $query) use ($category) {
                $query->where('name', $category);
            }
        )
            ->where('status', 'approved')
            ->with('photos');

        if ($gender) {
            $query->where('gender', $gender);
        }

        return $query->get();

    }

    /**
     * @param int $id
     * @return Mannequin
     */
    public function findById(int $id): ?Mannequin
    {
        return $this->model->where('id', $id)
            ->with('photos')
            ->firstOrFail();
    }

    public function findAllWithPagination($perPage = 8)
    {
        return $this->model->where('id', '!=', null)->orderBy('id', 'DESC')->paginate($perPage);
    }

    /**
     * @param array $data
     * @param int $id
     * @return bool
     */
    public function update(array $data, int $id): bool
    {
        $birthday = $data['year'] . '/' . $data['month'] . '/' . $data['day'];
        $school = $data['school'] === 'no' ? false : true;

        $update = [];

        if (isset($data['first_name']) && !empty($data['first_name'])) {
            $update['first_name'] = $data['first_name'];
        }
        if (isset($data['last_name']) && !empty($data['last_name'])) {
            $update['last_name'] = $data['last_name'];
        }
        if (isset($data['email']) && !empty($data['email'])) {
            $update['email'] = $data['email'];
        }
        if (isset($data['phone']) && !empty($data['phone'])) {
            $update['phone'] = $data['phone'];
        }
        if (isset($data['instagram']) && !empty($data['instagram'])) {
            $update['instagram'] = $data['instagram'];
        }
        if (isset($data['gender']) && !empty($data['gender'])) {
            $update['gender'] = $data['gender'];
        }
        if (isset($birthday) && !empty($birthday)) {
            $update['birthday'] = $birthday;
        }
        if (isset($school) && !empty($school)) {
            $update['school'] = $school;
        }
        if (isset($data['school_type']) && !empty($data['school_type'])) {
            $update['school_type'] = $data['school_type'];
        }
        $update['height'] = $data['height'];
        $update['waist'] = $data['waist'];
        $update['bust'] = $data['bust'];
        $update['hips'] = $data['hips'];
        $update['shoe_size'] = $data['shoe_size'];
        $update['eyes_color'] = $data['eyes_color'];
        $update['hair_color'] = $data['hair_color'];

        return $this->model->where('id', $id)
            ->update($update);
    }
}
