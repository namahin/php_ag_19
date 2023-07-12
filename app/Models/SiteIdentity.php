<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class SiteIdentity extends Model
{
    protected $table ='site_identity';
    protected $fillable = ['title', 'tagLine', 'logo', 'favicon', 'ogImage', 'copyright'];
}

