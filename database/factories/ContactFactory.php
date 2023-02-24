<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        $fullname = '山田 太郎';
        return [
            'fullname' => $fullname,
            'gender' => $this->faker->numberBetween(1, 2),
            'email' => $this->faker->email(),
            'postcode' => $this->faker->regexify('^\d{3}-\d{4}$'),
            'address' => $this->faker->address(),
            'building_name' => $this->faker->secondaryAddress(),
            'opinion' => $this->faker->text(),
        ];
    }
}
