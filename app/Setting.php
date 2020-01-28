<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
//    const PAGE_TITLE_INDEX = 'الإعدادات';
//    const PAGE_TITLE_EDIT = 'تعديل الإعدادات';
//    const PAGE_TITLE_SHOW = 'عرض الإعدادات';

    const MEDIA_PATH = 'media\settings\\';

    protected $table = 'settings';
    protected $fillable = [
        'name',
        'logo',
        'icon',
    ];
}
