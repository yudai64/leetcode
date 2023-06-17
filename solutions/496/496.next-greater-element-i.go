/*
 * @lc app=leetcode id=496 lang=golang
 *
 * [496] Next Greater Element I
 */

// @lc code=start
func nextGreaterElement(nums1 []int, nums2 []int) []int {
	nextGreaterMap := make(map[int]int, len(nums2))
	for i := 0; i < len(nums2); i++ {
		nextGreaterMap[nums2[i]] = -1
		for j := i + 1; j < len(nums2); j++ {
			if nums2[i] < nums2[j] {
				nextGreaterMap[nums2[i]] = nums2[j]
				break
			}
		}
	}

	ans := make([]int, len(nums1))
	for i := 0; i < len(nums1); i++ {
		ans[i] = nextGreaterMap[nums1[i]]
	}

	return ans
}

// @lc code=end
