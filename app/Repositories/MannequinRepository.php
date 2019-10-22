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
        $school = $data['school'] === 'no' ? 'No' : $data['school_type'];

        return $this->model->create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'city' => $data['city'] ?? null,
            'instagram' => $data['instagram'] ?? null,
            'gender' => $data['gender'],
            'birthday' => $birthday,
            'school' => $school,
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
}
