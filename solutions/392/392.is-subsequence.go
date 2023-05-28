/*
 * @lc app=leetcode id=392 lang=golang
 *
 * [392] Is Subsequence
 */

// @lc code=start
func isSubsequence(s string, t string) bool {
	p1, p2 := 0, 0
	for p1 < len(s) && p2 < len(t) {
		if s[p1] == t[p2] {
			p1++
			p2++
		} else {
			p2++
		}
	}
	return p1 == len(s)
}

// @lc code=end

