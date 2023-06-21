/*
 * @lc app=leetcode id=507 lang=golang
 *
 * [507] Perfect Number
 */

// @lc code=start
func checkPerfectNumber(num int) bool {
	sum := 0
	for i := 1; i*i <= num; i++ {
		if num%i == 0 {
			if i*i == num {
				sum += i
			} else {
				sum += (i + num/i)
			}
		}
	}
	return sum == num*2
}

// @lc code=end

