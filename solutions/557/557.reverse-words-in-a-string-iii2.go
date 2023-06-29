/*
 * @lc app=leetcode id=557 lang=golang
 *
 * [557] Reverse Words in a String III
 */

// @lc code=start
func reverseWords(s string) string {
	ans := ""
	reverse := ""
	for i := 0; i < len(s); i++ {
		if string(s[i]) == " " {
			ans += reverse + " "
			reverse = ""
		} else {
			reverse = string(s[i]) + reverse
		}
	}
	return ans + reverse
}

// @lc code=end

