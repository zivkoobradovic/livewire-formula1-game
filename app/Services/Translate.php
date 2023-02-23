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
                'race_again' => 'Race Again',

                'title_2' => 'Find Jeddah Cornish Circuit',
                'drag_2' => 'drag here',

                'title_3' => 'Get the car ready for the race',

                'title_4' => 'Select the finish flag',
                'drag_4' => 'drag here',

                'title_5' => 'Jeddah Cornish Circuit has the most',
                'traffic_5' => 'traffic',
                'corners_5' => 'corners',
                'stops_5' => 'stops',

                'title_6' => 'Who won the race in Azooz\'s dream?',

                'score' => 'your score',
                'share' => 'share',
            ],
            'arab' => [
                'login' => 'الدخول ',
                'leaderboard' => 'المتصدرين',
                'email' => 'البريد الإلكتروني ',
                'username' => 'اسم المستخدم ',
                'phone' => 'الجوال (اختياري )',
                'avatar' => 'اختار',
                'code' => '٢. ادخل رمز التحقق',
                'girl' => 'بنت',
                'boy' => 'ولد ',
                'race' => 'تسابق ',
                'race_again' => 'تسابق مرة اخرى',

                'title_2' => 'أوجد حلبة كورنيش جدة',
                'drag_2' => 'اسحب هنا ',

                'title_3' => 'جهز السيارة للسباق',

                'title_4' => 'اختر علم نهاية السباق',
                'drag_4' => 'اسحب هنا ',

                'title_5' => 'حلبة كورنيش جدة تتميز بكثرة',
                'traffic_5' => 'المرور ',
                'corners_5' => 'منعطفات ',
                'stops_5' => 'محطات الوقوف',

                'title_6' => 'من فاز بالسباق في حلم عزوز',

                'score' => 'النتيجة',
                'share' => 'شارك ',
            ]
        ];
    }
}
