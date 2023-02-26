/*
 * @lc app=leetcode id=20 lang=php
 *
 * [20] Valid Parentheses
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $pairs = [
            '(' => ')',
            '[' => ']',
            '{' => '}'
        ];

        $stack = [];
        for ($i = 0; $i < mb_strlen($s); $i++) {
            $char = $s[$i];
            if (array_key_exists($char, $pairs)) {
                $stack[] = $char;
            } else {
                $poped = array_pop($stack);
                if ($pairs[$poped] !== $char) {
                    return false;
                }
            }
        }

        return count($stack) === 0;
    }
}
// @lc code=end

