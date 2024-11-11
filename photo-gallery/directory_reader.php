<?php 
function directoryReader($directory, array $excludeFiles = ['.', '..', '.DS_Store']) {
    $files = [];

    if (!is_dir($directory)) {
        return null;
    }

    if (!($filesDirectory = opendir($directory))) {
        return null;
    }

    while (($file = readdir($filesDirectory)) !== false) {
        if (!in_array($file, $excludeFiles)) {
            $filePath = $directory . '/' . $file;
            if (is_file($filePath)) {
                $files[] = $filePath;
            } elseif (is_dir($filePath)) {
                $files = array_merge($files, directoryReader($filePath, $excludeFiles));
            }
        }
    }

    closedir($filesDirectory);

    return $files;
}