/*
 * @lc app=leetcode id=509 lang=golang
 *
 * [509] Fibonacci Number
 */

// @lc code=start
func fib(n int) int {
	if n == 0 || n == 1 {
		return n
	}

	fibonacci := make([]int, n+1)
	fibonacci[0] = 0
	fibonacci[1] = 1
	for i := 2; i < len(fibonacci); i++ {
		fibonacci[i] = fibonacci[i-1] + fibonacci[i-2]
	}
	return fibonacci[n]
}

// @lc code=end

