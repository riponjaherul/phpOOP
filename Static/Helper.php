<?php 
class Helper{
    static function numberOfDays($firstDate, $lastDate)
    {
        if ($firstDate > $lastDate) {
            return 0;
        }
        $earlier = new DateTime($firstDate);
        $later = new DateTime($lastDate);
        return $later->diff($earlier)->format("%a");
    }   

    static function checkNull($arg)
    {
        if (empty($arg)) {
            return NULL;
        }
        return $arg;
    }
}

echo "Number of Days = ".Helper::numberOfDays('2019-12-03','2020-01-18').'<br>';
echo "Has value = ".(Helper::checkNull(null)?'Yes':'No').'<br>';