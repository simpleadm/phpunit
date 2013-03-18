<?php

class Sum {

	public function fib($num = 3) {
        $fibs = array(1,2);

        if ($num < 3) { 
        	$num = 3; 
        }
        
        for ($i = 2; $i < $num; $i++) {
            $fibs[$i] = $fibs[$i - 1] + $fibs[$i - 2]; 
        }

        return $fibs;
    }

    public function getEvens($nums) {
    	$filtered = array_filter($nums, function ($num){
    		if( $num%2 == 0 ) return $num;
    	});

    	return array_values($filtered);
    }

    public function fibSum($max) {
    	$num = 3;
    	$fibs = array();

    	do {
    		$fibs = $this->fib($num);
    		$num++;
    	} while( array_pop($fibs) <= $max );

    	$sum = array_sum( $this->getEvens($fibs) );

    	return $sum;
    }

}