<?php

namespace App\Models\Admin\settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $connection = "mysql-settings";

    protected $fillable = ['upLabel','widgetLabel1','widgetLabel2','widgetLabel3','widgetLabel4','widgetLabel5'
                            ,'rssLabel','socialLabel','supportLabel','phoneLabel','addressLabel','emailLabel','aboutHeadLabel'
                            ,'aboutbodyLabel','copyRight'];
}
