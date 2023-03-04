/*
 * @lc app=leetcode id=67 lang=php
 *
 * [67] Add Binary
 */

// @lc code=start
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $aLen = strlen($a);
        $bLen = strlen($b);
        if ($aLen < $bLen) $a = str_repeat('0', $bLen - $aLen) . $a;
        else $b = str_repeat('0', $aLen - $bLen) . $b;

        $result = '';
        $carry = 0;
        for ($i = strlen($a) - 1; $i >= 0; $i--) {
            $num = (int)$a[$i] + (int)$b[$i] + $carry;
            if ($num > 1) {
                $result = (string)$num - 2 . $result;
                $carry = 1;
            } else {
                $result = (string)$num . $result;
                $carry = 0;
            }
        }
        if ($carry === 1) $result = '1' . $result;

        return $result;
    }
}
// @lc code=end

