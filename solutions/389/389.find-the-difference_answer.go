/*
 * @lc app=leetcode id=389 lang=golang
 *
 * [389] Find the Difference
 */

// @lc code=start
func findTheDifference(s string, t string) byte {
	var xor byte
	for i := 0; i < len(s); i++ {
		xor ^= s[i]
	}
	for i := 0; i < len(t); i++ {
		xor ^= t[i]
	}

	return xor
}

// @lc code=end

