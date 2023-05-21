/*
 * @lc app=leetcode id=350 lang=golang
 *
 * [350] Intersection of Two Arrays II
 */

// @lc code=start
func intersect(nums1 []int, nums2 []int) []int {
	map1 := make(map[int]int)
	for i := 0; i < len(nums1); i++ {
		_, ok := map1[nums1[i]]
		if ok {
			map1[nums1[i]]++
		} else {
			map1[nums1[i]] = 1
		}
	}

	var ans []int
	for i := 0; i < len(nums2); i++ {
		cur := nums2[i]
		v, ok := map1[cur]
		if ok && v > 0 {
			ans = append(ans, cur)
			map1[cur]--
		}
	}

	return ans
}

// @lc code=end

