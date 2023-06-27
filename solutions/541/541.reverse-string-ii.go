/*
 * @lc app=leetcode id=541 lang=golang
 *
 * [541] Reverse String II
 */

// @lc code=start
func reverseStr(s string, k int) string {
	ans := ""
	stack := make([]string, k)

	for i := 0; i < len(s); i++ {
		if i%(2*k) < k {
			stack[i%(2*k)] = string(s[i])
			continue
		}
		if i%(2*k) == k {
			for j := k - 1; j >= 0; j-- {
				ans += string(stack[j])
				stack[j] = ""
			}
		}
		ans += string(s[i])
	}

	for j := k - 1; j >= 0; j-- {
		ans += string(stack[j])
	}

	return ans
}

// @lc code=end

