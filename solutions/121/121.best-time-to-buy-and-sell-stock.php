/*
 * @lc app=leetcode id=121 lang=php
 *
 * [121] Best Time to Buy and Sell Stock
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $maxProfit = 0;
        $minIndex = 0;

        for ($i = 1; $i < count($prices); $i++) {
            $profit = $prices[$i] - $prices[$minIndex];
            $maxProfit = max($maxProfit, $profit);
            if ($prices[$i] < $prices[$minIndex]) {
                $minIndex = $i;
            }
        }

        return $maxProfit;
    }
}
// @lc code=end

