/*
 * @lc app=leetcode id=492 lang=golang
 *
 * [492] Construct the Rectangle
 */

// @lc code=start
func constructRectangle(area int) []int {
	// ans := []int{area, 1}
	// for i := area - 1; i > 0; i-- {
	// 	if area%i == 0 && i >= area/i {
	// 		ans[0], ans[1] = i, area/i
	// 	}
	// }
	// return ans

	// can use math.Sqrt
	for i := int(math.Sqrt(float64(area))); i > 0; i-- {
		if area%i == 0 {
			return []int{area / i, i}
		}
	}
	return []int{}
}

// @lc code=end

