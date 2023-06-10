/*
 * @lc app=leetcode id=461 lang=golang
 *
 * [461] Hamming Distance
 */

// @lc code=start
func hammingDistance(x int, y int) int {
	dist, xor := 0, x^y
	for xor != 0 {
		dist++
		xor &= xor - 1
	}
	return dist
}

// @lc code=end

// Brian Kernighan's algorithm
// https://leetcode.com/problems/hamming-distance/solutions/94705/my-c-solution-using-bit-manipulation/
