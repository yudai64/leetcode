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
        $hashtable = [];
        for ($i = 0; $i < strlen($s); $i++) {   
            if (!in_array($s[$i], array_values($hashtable))) {
                $hashtable[$t[$i]] = $s[$i];
            }
        }

        $t2 = '';
        for ($i = 0; $i < strlen($t); $i++) {
            $t2 .= $hashtable[$t[$i]];
        }

        return $s === $t2;
    }
}
// @lc code=end

