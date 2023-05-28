/*
 * @lc app=leetcode id=392 lang=golang
 *
 * [392] Is Subsequence
 */

// @lc code=start
func isSubsequence(s string, t string) bool {
	if len(s) == 0 {
		return true
	}
	if len(s) > len(t) {
		return false
	}

	sequence := 0
	for i := 0; i < len(t); i++ {
		if s[sequence] == t[i] {
			sequence++
		}
		if sequence == len(s) {
			return true
		}
	}

	return false
}

// @lc code=end

