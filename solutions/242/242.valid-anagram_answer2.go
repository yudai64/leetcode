/*
 * @lc app=leetcode id=242 lang=golang
 *
 * [242] Valid Anagram
 */

// @lc code=start
func isAnagram(s string, t string) bool {
	m1 := [26]int{}
	for i := 0; i < len(s); i++ {
		m1[s[i]-97]++
	}

	m2 := [26]int{}
	for i := 0; i < len(t); i++ {
		m2[t[i]-97]++
	}

	return m1 == m2
}
// @lc code=end

