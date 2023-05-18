/*
 * @lc app=leetcode id=338 lang=golang
 *
 * [338] Counting Bits
 */

// @lc code=start
func countBits(n int) []int {
	var ans []int
	for i := 0; i <= n; i++ {
		sum := 0
		num := i
		for num > 0 {
			sum += num % 2
			num /= 2
		}
		ans = append(ans, sum)
	}
	return ans
}

// @lc code=end

https://leetcode.com/problems/counting-bits/
