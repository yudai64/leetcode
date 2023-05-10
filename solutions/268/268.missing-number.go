/*
 * @lc app=leetcode id=268 lang=golang
 *
 * [268] Missing Number
 */

// @lc code=start
func missingNumber(nums []int) int {
	max := 0
	sum := 0
	for _, num := range nums {
		if num > max {
			max = num
		}
		sum += num
	}
	if max < len(nums) {
		max = len(nums)
	}

	expext := (0 + max) * (len(nums) + 1) / 2

	return expext - sum
}

// @lc code=end
