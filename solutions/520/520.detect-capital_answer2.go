/*
 * @lc app=leetcode id=520 lang=golang
 *
 * [520] Detect Capital
 */

// @lc code=start
func detectCapitalUse(word string) bool {
	return regexp.MustCompile(`^[A-Z]*$|^.[a-z]*$`).MatchString(word)
}

// @lc code=end

// https://leetcode.com/problems/detect-capital/editorial/
