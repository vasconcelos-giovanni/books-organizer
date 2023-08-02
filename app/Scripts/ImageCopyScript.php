<?php

namespace App\Scripts;

use Illuminate\Support\Facades\File;

class ImageCopyScript
{
    public function __invoke($sourceFolder, $destinationFolder)
    {
        if (!File::isDirectory($destinationFolder)) {
            File::makeDirectory($destinationFolder, 0777, true, true);
        }

        $files = File::allFiles($sourceFolder);

        foreach ($files as $file) {
            $filename = $file->getFilename();
            $destinationPath = $destinationFolder . '/' . $filename;

            // Check if the file does not exist in the destination folder
            if (!File::exists($destinationPath)) {
                File::copy($file->getPathname(), $destinationPath);
            }
        }
    }
}
