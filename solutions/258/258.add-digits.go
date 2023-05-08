/*
 * @lc app=leetcode id=258 lang=golang
 *
 * [258] Add Digits
 */

// @lc code=start
func addDigits(num int) int {
    sum := 0

	for num > 0 {
		sum += num % 10
		num /= 10
	}

	if (sum < 10) {
		return sum
	}

	return addDigits(sum)
}
// @lc code=end

