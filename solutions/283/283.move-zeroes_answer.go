/*
 * @lc app=leetcode id=283 lang=golang
 *
 * [283] Move Zeroes
 */

// @lc code=start
func moveZeroes(nums []int) {
	i := 0
	for _, num := range nums {
		if num != 0 {
			nums[i] = num
			i++
		}
	}
	for i < len(nums) {
		nums[i] = 0
		i++
	}
}

// @lc code=end

https://leetcode.com/problems/move-zeroes/solutions/72011/simple-o-n-java-solution-using-insert-index/
