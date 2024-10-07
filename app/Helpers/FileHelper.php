<?php

namespace App\Helpers;

use Image;
use File;

class FileHelper
{
    public static function uploadImage($request, $user = NULL, $type = array(), $width = 570, $height = 380)
    {
        $imageName = "";
        if ($user != NULL) {
            $imageName = $user->image;
        }
        if ($request->hasFile('image')) {
            FileHelper::deleteImage($user);
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize($width, $height)->save('images/' . $imageName, 50);
            // Avatart Image
            if (in_array('avatar', $type)) {
                if (array_key_exists('avatarWidth', $type) && array_key_exists('avatarHeight', $type)) {
                    $avatarWidth = $type['avatarWidth'];
                    $avatarHeight = $type['avatarHeight'];
                } else {
                    $avatarWidth = 100;
                    $avatarHeight = 100;
                }
                Image::make($image)->resize($avatarWidth, $avatarHeight)->save('images/avatar-' . $imageName, 50);
            }
            if (in_array('big', $type)) {
                if (array_key_exists('bigWidth', $type) && array_key_exists('bigHeight', $type)) {
                    $bigWidth = $type['bigWidth'];
                    $bigHeight = $type['bigHeight'];
                } else {
                    $bigWidth = 720;
                    $bigHeight = 1080;
                }
                Image::make($image)->resize($bigWidth, $bigHeight)->save('images/big-' . $imageName, 50);
            }
            // Image::make($image)->resize(400, null, function ($constraint) {
            //     $constraint->aspectRatio();
            // })->save('images/' . $imageName, 50);
        }
        return $imageName;
    }

    public static function uploadFile($request, $user = NULL)
    {
        $fileName = "";
        if ($user != NULL) {
            $fileName = $user->file;
        }
        if ($request->hasFile('file')) {

            if ($user != NULL) {
                FileHelper::deleteFile($user);
            }
            $file = $request->file('file');
            $fileName = time() . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('files', $fileName);
        }
        return $fileName;
    }


    public static function deleteFile($user)
    {
        if ($user != NULL) {
            if (File::exists('files/' . $user->file)) {
                File::delete('files/' . $user->file);
            }
        }
    }

    public static function deleteImage($user)
    {
        if ($user != NULL) {
            if (File::exists('images/avatar-' . $user->image)) {
                File::delete('images/avatar-' . $user->image);
            }
            if (File::exists('images/' . $user->image)) {
                File::delete('images/' . $user->image);
            }
            if (File::exists('images/big-' . $user->image)) {
                File::delete('images/big-' . $user->image);
            }
        }
    }
}
