/*
 * @lc app=leetcode id=405 lang=golang
 *
 * [405] Convert a Number to Hexadecimal
 */

// @lc code=start
import "math"

func toHex(num int) string {
	if num == 0 {
		return "0"
	}

	if num > 0 {
		return toHexP(num)
	}

	max := 0xffffffff
	bit := 0x1
	complement := int(math.Abs(float64(num))) ^ max + bit
	return toHexP(complement)
}

func toHexP(num int) string {
	ans := ""
	m := map[int]string{0: "0", 1: "1", 2: "2", 3: "3", 4: "4", 5: "5", 6: "6", 7: "7", 8: "8", 9: "9", 10: "a", 11: "b", 12: "c", 13: "d", 14: "e", 15: "f"}
	for num > 0 {
		add, _ := m[num%16]
		ans = add + ans
		num /= 16
	}
	return ans
}

// @lc code=end

