/*
 * @lc app=leetcode id=383 lang=golang
 *
 * [383] Ransom Note
 */

// @lc code=start
func canConstruct(ransomNote string, magazine string) bool {
	mapM := make(map[string]int)
	for _, c := range magazine {
		if _, ok := mapM[string(c)]; ok {
			mapM[string(c)]++
		} else {
			mapM[string(c)] = 1
		}
	}

	for _, c := range ransomNote {
		n, ok := mapM[string(c)]
		if ok && n > 0 {
			mapM[string(c)]--
		} else {
			return false
		}
	}

	return true
}

// @lc code=end

