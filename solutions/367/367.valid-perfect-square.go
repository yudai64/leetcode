/*
 * @lc app=leetcode id=367 lang=golang
 *
 * [367] Valid Perfect Square
 */

// @lc code=start
func isPerfectSquare(num int) bool {
	if num == 1 {
		return true
	}

	for i := 1; i < num; i++ {
		if i*i == num {
			return true
		}
	}
	return false
}

// @lc code=end

