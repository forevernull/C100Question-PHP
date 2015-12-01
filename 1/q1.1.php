<?php
$question = <<<Q
/**
 * 题目: 有1，2, 3，4, 四个数字，能组成多少个互不相同且无重复数字的三位数？
 * 都是多少？
 *
 */

Q;
print_r($question);

//解法一

$data = array(1, 2, 3, 4);
$count = 0;
foreach($data as $h){
    foreach($data as $t){
        foreach($data as $o){
            if($h!=$t and $t != $o and $o != $h){
                $result = $h*100+$t*10+$o;
                $count++;
                echo $result."\n";
            }
        }
    }
}
echo "共有:$count\n";
