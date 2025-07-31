<?php
function fibonnaci($old,$new,$start,$end){

    if($start>$end){
        return ;
    }

    $start ++;
    echo $old. " ";
    $temp = $old + $new;
    $old = $new;
    $new = $temp;
    fibonnaci($old,$new,$start,$end);
}
fibonnaci(0,1,1,15);