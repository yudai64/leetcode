/*
 * @lc app=leetcode id=367 lang=golang
 *
 * [367] Valid Perfect Square
 */

// @lc code=start
func isPerfectSquare(num int) bool {
	// Newton Method
	r := num
	for r*r > num {
		r = (r + num/r) / 2
	}
	return r*r == num
}

// @lc code=end

