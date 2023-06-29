/*
 * @lc app=leetcode id=557 lang=golang
 *
 * [557] Reverse Words in a String III
 */

// @lc code=start
func reverseWords(s string) string {
	words := strings.Split(s, " ")
	ans := ""
	for i := 0; i < len(words); i++ {
		reverse := ""
		for j := 0; j < len(words[i]); j++ {
			reverse = string(words[i][j]) + reverse
		}
		ans += reverse + " "
	}
	return ans[0 : len(ans)-1]
}

// @lc code=end

