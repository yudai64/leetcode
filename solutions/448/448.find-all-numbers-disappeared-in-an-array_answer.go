/*
 * @lc app=leetcode id=448 lang=golang
 *
 * [448] Find All Numbers Disappeared in an Array
 */

// @lc code=start
func findDisappearedNumbers(nums []int) []int {
	for i := 0; i < len(nums); i++ {
		tmp := nums[i]
		if tmp < 0 {
			tmp = -tmp
		}
		if nums[tmp-1] > 0 {
			nums[tmp-1] = -nums[tmp-1]
		}
	}

	var ans []int
	for i := 0; i < len(nums); i++ {
		if nums[i] > 0 {
			ans = append(ans, i+1)
		}
	}

	return ans
}

// @lc code=end

https://leetcode.com/problems/find-all-numbers-disappeared-in-an-array/solutions/92958/c-solution-o-1-space/