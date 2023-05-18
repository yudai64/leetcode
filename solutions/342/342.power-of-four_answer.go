/*
 * @lc app=leetcode id=342 lang=golang
 *
 * [342] Power of Four
 */

// @lc code=start
func isPowerOfFour(n int) bool {
	return n > 0 && n&(n-1) == 0 && n&0x55555555 != 0
}

// @lc code=end

https://leetcode.com/problems/power-of-four/solutions/80457/java-1-line-cheating-for-the-purpose-of-not-using-loops/
