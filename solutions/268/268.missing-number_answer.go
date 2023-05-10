/*
 * @lc app=leetcode id=268 lang=golang
 *
 * [268] Missing Number
 */

// @lc code=start
func missingNumber(nums []int) int {
	result := 0
	for i, v := range nums {
		result ^= i
		result ^= v
	}

	return result ^ len(nums)
}

// @lc code=end

https://leetcode.com/problems/missing-number/solutions/69791/4-line-simple-java-bit-manipulate-solution-with-explaination/
