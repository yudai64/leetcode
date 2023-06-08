/*
 * @lc app=leetcode id=459 lang=golang
 *
 * [459] Repeated Substring Pattern
 */

// @lc code=start
func repeatedSubstringPattern(s string) bool {
	if len(s) == 1 {
		return false
	}

	for repeatLength := 1; repeatLength <= len(s)/2; repeatLength++ {
		if len(s)%repeatLength != 0 {
			continue
		}

		current := s[:repeatLength]
		j := repeatLength
		for j < len(s) {
			if s[j:j+repeatLength] != current {
				break
			}
			j += repeatLength
		}

		if j == len(s) {
			return true
		}
	}

	return false
}

// @lc code=end

