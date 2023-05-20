/*
 * @lc app=leetcode id=349 lang=golang
 *
 * [349] Intersection of Two Arrays
 */

// @lc code=start
func intersection(nums1 []int, nums2 []int) []int {
	map1 := map[int]bool{}
	for _, num := range nums1 {
		map1[num] = true
	}

	var output []int
	for _, num := range nums2 {
		if _, ok := map1[num]; ok {
			output = append(output, num)
			delete(map1, num)
		}
	}

	return output
}

// @lc code=end

