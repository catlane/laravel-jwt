<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tel_arr = array(
            '1883846',
            '1883847',
            '1883856',
            '1883990',
            '1883991',
            '1883992',
            '1883993',
            '1883995',
            '1883996',

        );
        $phone = $tel_arr[array_rand($tel_arr)].mt_rand(1000,9999);
//        return array_unique($tmp);
        return [
            'nickname' => fake()->unique()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => $phone,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'avatar' => 'https://img1.baidu.com/it/u=898692534,2766260827&fm=253&app=138&size=w931&n=0&f=JPEG&fmt=auto?sec=1688058000&t=69722fa63827fc172d8355f6a1c351fa',

            'remember_token' => Str::random(10),
        ];
    }

}
