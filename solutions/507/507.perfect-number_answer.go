/*
 * @lc app=leetcode id=507 lang=golang
 *
 * [507] Perfect Number
 */

// @lc code=start
func checkPerfectNumber(num int) bool {
	primes := []int{2, 3, 5, 7, 13, 17, 19, 31, 37, 41, 43, 47}
	for _, p := range primes {
		// 1<<n means 2 ** n
		if (1<<(p-1))*((1<<p)-1) == num {
			return true
		}
	}
	return false
}

// @lc code=end

// https://leetcode.com/problems/perfect-number/editorial/
