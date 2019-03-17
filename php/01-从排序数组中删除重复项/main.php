<?php

/**
 * 从排序数组中删除重复项
 */
class Solution
{

    /**
     * 从排序数组中删除重复项
     *
     * 示例:
     * 给定 nums = [0,0,1,1,1,2,2,3,3,4],
     * 函数应该返回新的长度 5, 并且原数组 nums 的前五个元素被修改为 0, 1, 2, 3, 4。
     *
     * @param Integer[] $nums
     * @return Integer  返回移除后数组的新长度
     */
    public static function removeDuplicates(&$nums)
    {
        $i = 0;
        for ($j = 1; $j < count($nums); $j++) {
            if ($nums[$j] != $nums[$i]) {
                $i++;
                $nums[$i] = $nums[$j];
            }
        }
        return $i + 1;
    }
}


$nums = [0,0,1,1,1,2,2,3,3,4];

$count = Solution::removeDuplicates($nums);

echo "Total count: ". $count . "\n";

for ($i = 0; $i < $count; $i++) {
    echo $nums[$i] . "\n";
}
