/*
 * @lc app=leetcode id=520 lang=golang
 *
 * [520] Detect Capital
 */

// @lc code=start
func detectCapitalUse(word string) bool {
	for i := 1; i < len(word); i++ {
		if isLower(word[i-1]) != isLower(word[i]) {
			if !(i == 1 && isLower(word[i-1]) == false) {
				return false
			}
		}
	}
	return true
}

func isLower(b byte) bool {
	return b >= 97
}

// @lc code=end

