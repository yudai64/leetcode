/*
 * @lc app=leetcode id=367 lang=golang
 *
 * [367] Valid Perfect Square
 */

// @lc code=start
func isPerfectSquare(num int) bool {
	r := 1
	for num > 0 {
		num -= r
		r += 2
	}
	return num == 0
}

// @lc code=end

https://leetcode.com/problems/valid-perfect-square/solutions/83874/a-square-number-is-1-3-5-7-java-code/
