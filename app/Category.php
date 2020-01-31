<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model
{
    use Translatable;

    protected $guarded = [];
    public $translatedAttributes = ['name'];
	
	
	
	
   // use Translatable;
    
  //  public $translatedAttributes = ['title', 'content'];
  //  protected $fillable = ['author'];



}//end of model
