/*
 * @lc app=leetcode id=500 lang=golang
 *
 * [500] Keyboard Row
 */

// @lc code=start
func findWords(words []string) []string {
	keyMap := map[string]int{"q": 1, "w": 1, "e": 1, "r": 1, "t": 1, "y": 1, "u": 1, "i": 1, "o": 1, "p": 1, "a": 2, "s": 2, "d": 2, "f": 2, "g": 2, "h": 2, "j": 2, "k": 2, "l": 2, "z": 3, "x": 3, "c": 3, "v": 3, "b": 3, "n": 3, "m": 3}

	ans := []string{}
	for i := 0; i < len(words); i++ {
		current := strings.ToLower(words[i])
		usedOnlyOneRow := true
		for j := 1; j < len(current); j++ {
			if keyMap[string(current[j])] != keyMap[string(current[j-1])] {
				usedOnlyOneRow = false
				break
			}
		}
		if usedOnlyOneRow {
			ans = append(ans, words[i])
		}
	}

	return ans
}

// @lc code=end

