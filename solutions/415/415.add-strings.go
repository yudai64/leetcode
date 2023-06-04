/*
 * @lc app=leetcode id=415 lang=golang
 *
 * [415] Add Strings
 */

// @lc code=start
import "strconv"

func addStrings(num1 string, num2 string) string {
	ans := ""
	i, j := len(num1)-1, len(num2)-1
	carry := 0

	for i >= 0 || j >= 0 || carry == 1 {
		cur1, cur2 := 0, 0
		if i >= 0 {
			cur1, _ = strconv.Atoi(string(num1[i]))
		}
		if j >= 0 {
			cur2, _ = strconv.Atoi(string(num2[j]))
		}

		sum := carry + cur1 + cur2
		// if sum >= 10 {
		// 	sum -= 10
		// 	carry = 1
		// } else {
		// 	carry = 0
		// }
		ans = strconv.Itoa(sum%10) + ans
		carry = sum / 10

		i--
		j--
	}

	// not necessary since the value is checked in the loop condition.
	// if carry == 1 {
	// 	ans = "1" + ans
	// }

	return ans
}

// @lc code=end

