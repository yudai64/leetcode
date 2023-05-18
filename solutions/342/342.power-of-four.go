/*
 * @lc app=leetcode id=342 lang=golang
 *
 * [342] Power of Four
 */

// @lc code=start
func isPowerOfFour(n int) bool {
	for n >= 4 {
		if n%4 != 0 {
			return false
		}
		n /= 4
	}

	return n == 1
}

// @lc code=end

