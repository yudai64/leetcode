/*
 * @lc app=leetcode id=231 lang=golang
 *
 * [231] Power of Two
 */

// @lc code=start
func isPowerOfTwo(n int) bool {
    if n <= 0 {
        return false;
    }

    if n == 1 {
        return true;
    }

    return n % 2 == 0 && isPowerOfTwo(n / 2)
}
// @lc code=end

// https://leetcode.com/problems/power-of-two/solutions/1638961/c-python-simple-solutions-w-explanation-all-possible-solutions-explained/
