/*
 * @lc app=leetcode id=414 lang=golang
 *
 * [414] Third Maximum Number
 */

// @lc code=start
import "sort"

func thirdMax(nums []int) int {
	sort.Slice(nums, func(i, j int) bool { return nums[i] > nums[j] })

	max := nums[0]
	count := 1
	for i := 0; i < len(nums); i++ {
		if nums[i] < max {
			max = nums[i]
			count++
		}
		if count == 3 {
			return max
		}
	}
	return nums[0]
}

// @lc code=end

