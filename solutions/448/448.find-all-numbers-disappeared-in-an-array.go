/*
 * @lc app=leetcode id=448 lang=golang
 *
 * [448] Find All Numbers Disappeared in an Array
 */

// @lc code=start
func findDisappearedNumbers(nums []int) []int {
	n := len(nums)

	used := make([]int, n+1)
	for i := 0; i < n; i++ {
		used[nums[i]] = 1
	}

	var ans []int
	for i := 1; i < len(used); i++ {
		if used[i] != 1 {
			ans = append(ans, i)
		}
	}

	return ans
}

// @lc code=end

