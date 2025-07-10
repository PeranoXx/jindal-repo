<?php

namespace Database\Seeders;

use App\Models\ShadeCard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ShadeCardImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $folderPath = storage_path('app/public/Jindal-shade-card-image');
        $files = File::files($folderPath);

        foreach ($files as $file) {
            $fileName = $file->getFilename();

            ShadeCard::create([
                'number' => pathinfo($fileName, PATHINFO_FILENAME),
                'image' => 'Jindal-shade-card-image/' . $fileName,
            ]);
        }
    }
}
