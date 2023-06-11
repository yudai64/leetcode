/*
 * @lc app=leetcode id=476 lang=golang
 *
 * [476] Number Complement
 */

// @lc code=start
func findComplement(num int) int {
	ans, place := 0, 1

	for num != 0 {
		last := num & 1
		ans += (last ^ 1) * place

		num = num >> 1
		place *= 2
	}

	return ans
}

// @lc code=end

// didn't understand this solution
// https://leetcode.com/problems/number-complement/solutions/96017/3-line-1-line-c/
