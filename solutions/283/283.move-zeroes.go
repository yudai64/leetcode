/*
 * @lc app=leetcode id=283 lang=golang
 *
 * [283] Move Zeroes
 */

// @lc code=start
func moveZeroes(nums []int) {
	zeroIndex := -1
	i := 0
	for i < len(nums) {
		if nums[i] == 0 {
			if zeroIndex < 0 || i < zeroIndex {
				zeroIndex = i
			}
			i++
		} else {
			if zeroIndex >= 0 {
				nums[zeroIndex], nums[i] = nums[i], nums[zeroIndex]
				zeroIndex, i = i, zeroIndex+1
			} else {
				i++
			}
		}
	}
}

// @lc code=end

