<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomainSetting extends Model
{
    protected $table = "domain_settings";
    protected $fillable = ['domain_name', 'domain_description','theme_name'];
}
