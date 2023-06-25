/*
 * @lc app=leetcode id=520 lang=golang
 *
 * [520] Detect Capital
 */

// @lc code=start
func detectCapitalUse(word string) bool {
	upperCount := 0
	for _, c := range word {
		if unicode.IsUpper(c) {
			upperCount++
		}
	}

	if upperCount == 0 || upperCount == len(word) {
		return true
	}

	return upperCount == 1 && unicode.IsUpper([]rune(word)[0])
}

// @lc code=end

// https://leetcode.com/problems/detect-capital/editorial/
