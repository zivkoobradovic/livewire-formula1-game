<?php

namespace App\Services;


class Translate
{
    public static function getTranslation()
    {
        return  [
            'eng' => [
                'login' => 'login',
                'leaderboard' => 'leaderboard',
                'email' => 'email',
                'username' => 'user name',
                'phone' => 'phone (optional)',
                'avatar' => 'Choose',
                'code' => 'Enter Your Code',
                'girl' => 'girl',
                'boy' => 'boy',
                'race' => 'Race',

                'title_2' => 'Find Jeddah Cornish Circuit',
                'drag_2' => 'drag here',

                'title_3' => 'get the car ready for the race',

                'title_4' => 'select the finish flag',
                'drag_4' => 'drag here',

                'title_5' => 'jeddah cornish circuit has the most',
                'traffic_5' => 'traffic',
                'corners_5' => 'corners',
                'stops_5' => 'stops',

                'title_6' => 'who won the race in Azooz\'s dream?',

                'score' => 'your score',
                'share' => 'share',
            ],
            'arab' => [
                'login' => 'الدخول',
                'leaderboard' => 'المتصدرين',
                'email' => 'البريد الإلكتروني ',
                'username' => 'اسم المستخدم ',
                'phone' => 'الجوال (اختياري )',
                'avatar' => 'اختار',
                'code' => '٢. ادخل رمز التحقق',
                'girl' => 'بنت',
                'boy' => 'ولد',
                'race' => 'تسابق',

                'title_2' => 'أوجد حلبة كورنيش جدة',
                'drag_2' => 'اسحب هنا',

                'title_3' => 'جهرة السيارة للسباق',

                'title_4' => 'اختار علم نهاية السباق',
                'drag_4' => 'اسحب هنا',

                'title_5' => 'حلبة كورنيس جدة تتميز بكثرة',
                'traffic_5' => 'الاشارات',
                'corners_5' => 'المنعطفات',
                'stops_5' => 'محطات الوقوف',

                'title_6' => 'من فاز السباق في حلم عزوز',

                'score' => 'النتيجة',
                'share' => 'شارك',
            ]
        ];
    }
}
