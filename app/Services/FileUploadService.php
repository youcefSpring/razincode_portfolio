<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadService
{
    public function upload(Request $request, string $path, array $attributes = [])
    {
        $file = $request->file('photo'); // Assuming the file input name is 'file'

        $fileName = time() . '_' . $file->getClientOriginalName();
        $destinationPath = $path . '/' . $fileName;

        // Add validations and custom logic for file type, size, etc.
        // Move the file to the public path with its original name
        $file->move(public_path($path), $fileName);
        // Storage::disk('local')->put($fullPath, file_get_contents($file));

        // Optionally return information about the uploaded file
        return [
            'name' => $fileName,
            'path' => $destinationPath,
        ];
    }
}
