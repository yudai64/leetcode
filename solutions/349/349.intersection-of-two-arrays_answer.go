/*
 * @lc app=leetcode id=349 lang=golang
 *
 * [349] Intersection of Two Arrays
 */

// @lc code=start
import "sort"

func intersection(nums1 []int, nums2 []int) []int {
	sort.Slice(nums1, func(i, j int) bool { return nums1[i] < nums1[j] })
	sort.Slice(nums2, func(i, j int) bool { return nums2[i] < nums2[j] })

	set := make(map[int]bool)
	i, j := 0, 0
	for i < len(nums1) && j < len(nums2) {
		if nums1[i] < nums2[j] {
			i++
		} else if nums1[i] > nums2[j] {
			j++
		} else {
			if _, ok := set[nums1[i]]; !ok {
				set[nums1[i]] = true
			}
			i++
			j++
		}
	}

	var output []int
	for k, _ := range set {
		output = append(output, k)
	}

	return output
}

// @lc code=end

https://leetcode.com/problems/intersection-of-two-arrays/solutions/81969/three-java-solutions/
