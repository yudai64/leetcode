/*
 * @lc app=leetcode id=303 lang=golang
 *
 * [303] Range Sum Query - Immutable
 */

// @lc code=start
type NumArray struct {
	nums []int
}

func Constructor(nums []int) NumArray {
	for i := 1; i < len(nums); i++ {
		nums[i] += nums[i-1]
	}
	return NumArray{nums: nums}
}

func (this *NumArray) SumRange(left int, right int) int {
	if left == 0 {
		return this.nums[right]
	}
	return this.nums[right] - this.nums[left-1]
}

/**
 * Your NumArray object will be instantiated and called as such:
 * obj := Constructor(nums);
 * param_1 := obj.SumRange(left,right);
 */
// @lc code=end

https://leetcode.com/problems/range-sum-query-immutable/solutions/75192/java-simple-o-n-init-and-o-1-query-solution/
