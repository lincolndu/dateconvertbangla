<?php


function convertBangla($data){
    return strtr($data,['am'=>'পূর্বাহ্ণ','pm'=>'অপরাহ্ণ',1=>'১',2=> '২', 3=>'৩', 4=>'৪', 5=>'৫', 6=>'৬', 7=>'৭', 8=>'৮', 9=>'৯', 0=>'০']);
}

function engToBangla($date){
    $months=['জানুয়ারি','ফেব্রুয়ারি','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','নভেম্বর','ডিসেম্বর'];
    $weeks=['সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার','শনিবার','রবিবার'];
   
    $day= $weeks[$date[0]];
    $month= $months[$date[1]];
    $today=substr($date,2,2);
    
    return $day . ', '. convertBangla(ltrim($today,'0')) . ' ' . $month . ' ' . convertBangla(substr($date, 5));
}

echo engToBangla(date('Nnd Y; g:i a'));

?>
