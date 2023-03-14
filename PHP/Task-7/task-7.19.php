<?php

function sum_all(...$nums)
{

    $sum=0;

        foreach($nums as $value)
        {
            if($value == 5)
            {
                $sum+=0;
            }
            elseif($value == 10)
            {
                $sum +=20;
            }
            else
            {
                $sum += $value;
            }

        }
    return $sum;

}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo '<br>';
echo sum_all(5, 10, 5, 10); // 40