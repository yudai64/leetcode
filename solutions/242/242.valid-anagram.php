/*
 * @lc app=leetcode id=242 lang=php
 *
 * [242] Valid Anagram
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if (strlen($s) !== strlen($t)) {
            return false;
        }

        $mapS = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if (array_key_exists($s[$i], $mapS)) {
                $mapS[$s[$i]]++;
            } else {
                $mapS[$s[$i]] = 1;
            }
        }
        $mapT = [];
        for ($i = 0; $i < strlen($t); $i++) {
            if (array_key_exists($t[$i], $mapT)) {
                $mapT[$t[$i]]++;
            } else {
                $mapT[$t[$i]] = 1;
            }
        }

        if (count($mapS) !== count($mapT)) {
            return false;
        }

        $skeys = array_keys($mapS);
        foreach ($skeys as $key) {
            if ($mapS[$key] !== $mapT[$key]) {
                return false;
            }
        }

        return true;
    }
}
// @lc code=end

