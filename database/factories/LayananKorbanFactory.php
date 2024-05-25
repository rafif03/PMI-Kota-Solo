<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Relawan;
use App\Models\KejadianBencana;
use App\Models\KorbanTerdampak;
use App\Models\KerusakanFasilSosial;
use App\Models\KerusakanRumah;
use App\Models\KerusakanInfrastruktur;
use App\Models\Pengungsian;
use App\Models\EvakuasiKorban;
use App\Models\LayananKorban;
use App\Models\Assessment;
use App\Models\Tsr;
use App\Models\AlatTdb;
use App\Models\Personil;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LayananKorban>
 */
class LayananKorbanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_layanankankorban' => $this->faker->unique()->randomNumber(),
            'fk_id_assessment' => Assessment::factory()->create()->id_assessment,
            'distribusi' => $this->faker->sentence(),
            'dapur_umum' => $this->faker->sentence(),
        ];
    }
}
