/*
 * @lc app=leetcode id=405 lang=golang
 *
 * [405] Convert a Number to Hexadecimal
 */

// @lc code=start
func toHex(num int) string {
	if num == 0 {
		return "0"
	}

	ans := ""
	m := []string{"0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f"}

	for i := 0; i < 8 && num != 0; i++ {
		ans = m[num&0xf] + ans
		num = num >> 4
	}

	return ans
}

// @lc code=end

