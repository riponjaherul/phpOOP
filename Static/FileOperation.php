<?php
class FileOperation{
    /**
     * Check Image contain, if not get default image
     */
    static function checkImage($imgPath)
    {
        if ($imgPath) {
            $fullPath = public_path($imgPath);
            return file_exists($fullPath) ? $imgPath : 'assets/images/basic/no_user.jpg';
        }
        return 'assets/images/basic/no_user.jpg';
    }
}

echo "Image Path = ".FileOperation::checkImage(null).'<br>';