<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //jangan lupa nama model harus di awali huruf besar dan singular
    //model merupakan representative kecil dari database table yang anda miliki jadi setiap satu table = satu model

    //digunakan jika nama table kita tidak jamak / tidak sesuai kaidah table = plural & model = singular
    //protected $table = 'student';


}
