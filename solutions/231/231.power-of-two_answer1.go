/*
 * @lc app=leetcode id=231 lang=golang
 *
 * [231] Power of Two
 */

// @lc code=start
func isPowerOfTwo(n int) bool {
    return n > 0 && (n & (n-1) == 0)
}
// @lc code=end

// https://leetcode.com/problems/power-of-two/solutions/1638707/python-c-java-detailly-explain-why-n-n-1-works-1-line-100-faster-easy/
