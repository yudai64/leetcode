/*
 * @lc app=leetcode id=459 lang=golang
 *
 * [459] Repeated Substring Pattern
 */

// @lc code=start
func repeatedSubstringPattern(s string) bool {
	s2 := s + s

	if strings.Contains(s2[1:len(s2)-1], s) {
		return true
	} else {
		return false
	}
}

// @lc code=end

https://leetcode.com/problems/repeated-substring-pattern/solutions/94334/easy-python-solution-with-explaination/
