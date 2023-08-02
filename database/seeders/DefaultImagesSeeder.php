<?php

namespace Database\Seeders;

use App\Scripts\ImageCopyScript;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DefaultImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sourceFolder = public_path('storage/seedImages');
        $destinationFolder = public_path('storage/uploads');

        $imageCopier = new ImageCopyScript();
        $imageCopier($sourceFolder, $destinationFolder);
    }
}
