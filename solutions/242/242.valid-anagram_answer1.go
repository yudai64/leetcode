/*
 * @lc app=leetcode id=242 lang=golang
 *
 * [242] Valid Anagram
 */

// @lc code=start
func isAnagram(s string, t string) bool {
    if len(s) != len(t) {
		return false
	}

	m := [26]int{}
	for i := 0; i < len(s); i++ {
		m[s[i]-97]++
		m[t[i]-97]--
	}

	for _, n := range m {
		if n != 0 {
			return false
		}
	}

	return true
}
// @lc code=end

