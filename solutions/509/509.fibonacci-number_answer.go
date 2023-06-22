/*
 * @lc app=leetcode id=509 lang=golang
 *
 * [509] Fibonacci Number
 */

// @lc code=start
func fib(n int) int {
	if n < 2 {
		return n
	}

	a, b, c := 0, 1, 0
	for i := 1; i < n; i++ {
		c = a + b
		a = b
		b = c
	}

	return c
}

// @lc code=end

