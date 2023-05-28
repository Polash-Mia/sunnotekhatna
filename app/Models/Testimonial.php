<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    private static $testimonial,$image,$imageName,$directory,$imageUrl,$extension;

    public static function getImageUrl($request)
    {
        self::$image =$request->file('image');
        self::$extension =self::$image->getClientOriginalExtension();
        self::$imageName = 'testimonial'.time().'.'.self::$extension;
        self::$directory ='upload/testimonial/';
        self::$image->move(self::$directory,self::$imageName);

        return self::$directory.self::$imageName;
    }
    public static function newTestimonial($request)
    {
        self::$testimonial  = new Testimonial();

       
        self::$testimonial->name                = $request->name;
        self::$testimonial->comment                = $request->comment;
       
        self::$testimonial->image               = self::getImageUrl($request);

        self::$testimonial->save();

        return self::$testimonial;
        

    }

    public static function updateTestimonial($request,$id)
    {
        self::$testimonial = Testimonial::find($id);
        
        if($request->file('image'))
        {
            if(file_exists(self::$testimonial->image))
            {
                unlink(self::$testimonial->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl=self::$testimonial->image;
        }
        
        self::$testimonial->name                = $request->name;
        self::$testimonial->comment             = $request->comment;
        self::$testimonial->image =self::$imageUrl;
        self::$testimonial->save();
        return self::$testimonial;

        
    }


    public static function deleteTestimonial($id)
    {
        self::$testimonial=Testimonial::find($id);
        
        if(file_exists(self::$testimonial->image))
        {
            unlink(self::$testimonial->image);
        }
        self::$testimonial->delete();
        
    }
    
}
