<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = ['id','nama','jabatan','cover','link_fb','link_google','testimoni'];
}
