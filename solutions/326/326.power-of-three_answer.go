/*
 * @lc app=leetcode id=326 lang=golang
 *
 * [326] Power of Three
 */

// @lc code=start
func isPowerOfThree(n int) bool {
	return n > 0 && 1162261467%3 == 0
}

// @lc code=end

// It is worthwhile to mention that Method 1 works only when the base is prime. For example, we cannot use this algorithm to check if a number is a power of 4 or 6 or any other composite number.
https://leetcode.com/problems/power-of-three/solutions/77876/a-summary-of-all-solutions-new-method-included-at-15-30pm-jan-8th/

