/*
 * @lc app=leetcode id=205 lang=php
 *
 * [205] Isomorphic Strings
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $map1 = [];
        $map2 = [];

        if (strlen($s) !== strlen($t)) {
            return false;
        }

        for ($i = 0; $i < strlen($s); $i++) {
            if ($map1[$s[$i]] !== $map2[$t[$i]]) {
                return false;
            }
            $map1[$s[$i]] = $i;
            $map2[$t[$i]] = $i;
        }

        return true;
    }
}
// @lc code=end

