/*
 * @lc app=leetcode id=520 lang=golang
 *
 * [520] Detect Capital
 */

// @lc code=start
func detectCapitalUse(word string) bool {
	if len(word) < 2 {
		return true
	}

	if word[0] >= 97 {
		// first letter is lower
		for i := 1; i < len(word); i++ {
			if word[i] < 97 {
				return false
			}
		}
	} else {
		// first letter is upper
		if word[1] >= 97 {
			// second letter is lower
			for i := 2; i < len(word); i++ {
				if word[i] < 97 {
					return false
				}
			}
		} else {
			// second letter is upper
			for i := 2; i < len(word); i++ {
				if word[i] >= 97 {
					return false
				}
			}
		}
	}

	return true
}

// @lc code=end

