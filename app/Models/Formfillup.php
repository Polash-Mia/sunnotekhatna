<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formfillup extends Model
{
    use HasFactory;
    private static $formFillup;

    public static function newForm($request){
        self::$formFillup = new Formfillup();
        self::$formFillup->name =$request->name;
        self::$formFillup->age =$request->age;
        self::$formFillup->emgMobile =$request->emgMobile;
        self::$formFillup->mobile =$request->mobile;
        self::$formFillup->father =$request->father;
        self::$formFillup->fatherWork =$request->fatherWork;
        self::$formFillup->mother =$request->mother;
        self::$formFillup->motherWork =$request->motherWork;
        self::$formFillup->address =$request->address;
        self::$formFillup->date =$request->date;
        self::$formFillup->week =$request->week;
        self::$formFillup->one =$request->one;
        self::$formFillup->two =$request->two;
        self::$formFillup->three =$request->three;

        self::$formFillup->save() ;
    }
}
