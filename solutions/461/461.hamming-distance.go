/*
 * @lc app=leetcode id=461 lang=golang
 *
 * [461] Hamming Distance
 */

// @lc code=start
func hammingDistance(x int, y int) int {
	ans := 0

	for x != 0 || y != 0 {
		bitX, bitY := 0, 0

		if x != 0 {
			bitX = x % 2
			x /= 2
		}
		if y != 0 {
			bitY = y % 2
			y /= 2
		}

		ans += bitX ^ bitY
	}

	return ans
}

// @lc code=end

