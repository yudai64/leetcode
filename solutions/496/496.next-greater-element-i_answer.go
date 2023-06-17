/*
 * @lc app=leetcode id=496 lang=golang
 *
 * [496] Next Greater Element I
 */

// @lc code=start
func nextGreaterElement(nums1 []int, nums2 []int) []int {
	dict := make(map[int]int)
	stack := []int{}
	for i := 0; i < len(nums2); i++ {
		for len(stack) != 0 && nums2[i] > stack[len(stack)-1] {
			poped := stack[len(stack)-1]
			dict[poped] = nums2[i]
			stack = stack[:len(stack)-1]
		}
		stack = append(stack, nums2[i])
	}

	ans := []int{}
	for i := 0; i < len(nums1); i++ {
		if v, ok := dict[nums1[i]]; ok {
			ans = append(ans, v)
		} else {
			ans = append(ans, -1)
		}
	}

	return ans
}

// @lc code=end

https://leetcode.com/problems/next-greater-element-i/solutions/97595/java-10-lines-linear-time-complexity-o-n-with-explanation/
