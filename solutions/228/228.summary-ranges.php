/*
 * @lc app=leetcode id=228 lang=php
 *
 * [228] Summary Ranges
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return String[]
     */
    function summaryRanges($nums) {
        if (!$nums) return [];

        $answer = [];
        $start = $nums[0];
        $diff = 1;

        for ($i = 1; $i < count($nums); $i++) {
            $cur = $nums[$i];
            if ($cur - $start === $diff) $diff++;
            else {
                if ($diff === 1) $answer[] = (string)$start;
                else $answer[] = (string)$start . "->" . (string)$nums[$i-1];
                $start = $cur;
                $diff = 1;
            }
        }

        if ($diff === 1) $answer[] = (string)$start;
        else $answer[] = (string)$start . "->" . (string)$nums[count($nums)-1];

        return $answer;
    }
}
// @lc code=end

