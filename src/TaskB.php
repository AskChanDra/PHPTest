<?php
/**
 * Task B
 * 
 * Test Straigh and Straigh Flush
 * 
 */

namespace PHPTest\Task;

class TaskB {
  public static function is_straight($h){
      $p = array_flip([2,3,4,5,6,7,8,9,1,'j','q','k','a']);
      foreach($h as $c) {$a[] = $p[substr($c, 0, 1)];}
      rsort($a);
      if($a[0] == 12 && $a[1] == 3)$a[0] = 4;
      return $a[0] - $a[4] === 4;
  }

  public static function is_sright_flush($h){
    $p = array_flip([2,3,4,5,6,7,8,9,1,'j','q','k','a']);
    foreach($h as $c) {$a[] = $p[substr($c, 0, 1)];$b[] = substr($c, -1);}
    rsort($a);
    if($a[0] == 12 && $a[1] == 3)$a[0] = 4;
    return count(array_unique($b)) === 1 && $a[0] - $a[4] === 4;    
  }
}