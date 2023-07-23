<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\fileExists;

class Blog extends Model
{

    use HasFactory;
    static $blog, $image, $directory, $imageName , $imageNew;

    static function imageUrl($imagedata)
    {
        self::$image = $imagedata->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'blog-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    static function createBlog($data){
        self::$blog = new Blog();
        self::$blog->title = $data->title;
        self::$blog->description = $data->description;
        self::$blog->image = self::imageUrl($data);
        self::$blog->save();
    }
    static function deleteSBlock($id){
        $oBlog= Blog::find($id);
        if (fileExists($oBlog->image)){
            unlink($oBlog->image);
        }
        $oBlog->delete();

    }
    static function updateSblog($req,$id){
        $oBlog = Blog::find($id);
        if($req->file('image')){
            if (fileExists($oBlog->image)){
                unlink($oBlog->image);
            }
            self::$imageNew = self::imageUrl($req);
        }else{
            self::$imageNew = $oBlog->image;
        }
        $oBlog->title =$req->title;
        $oBlog->description =$req->description;
        $oBlog->image =self::$imageNew;
        $oBlog->save();
    }
}
