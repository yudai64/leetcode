/*
 * @lc app=leetcode id=350 lang=golang
 *
 * [350] Intersection of Two Arrays II
 */

// @lc code=start
import "sort"

func intersect(nums1 []int, nums2 []int) []int {
	sort.Slice(nums1, func(i, j int) bool { return nums1[i] < nums1[j] })
	sort.Slice(nums2, func(i, j int) bool { return nums2[i] < nums2[j] })

	var ans []int
	i, j := 0, 0
	for i < len(nums1) && j < len(nums2) {
		if nums1[i] < nums2[j] {
			i++
		} else if nums1[i] > nums2[j] {
			j++
		} else {
			ans = append(ans, nums1[i])
			i++
			j++
		}
	}

	return ans
}

// @lc code=end

