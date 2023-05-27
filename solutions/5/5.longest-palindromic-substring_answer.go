/*
 * @lc app=leetcode id=5 lang=golang
 *
 * [5] Longest Palindromic Substring
 */

// @lc code=start
func longestPalindrome(s string) string {
	ans := ""
	start, end := 0, 0
	for i := 0; i < len(s); i++ {
		// Consider a palindrome of odd length
		len1 := maxlengthAroundCenter(s, i, i)
		// Consider a palindrome of even length
		len2 := maxlengthAroundCenter(s, i, i+1)

		var maxLen int
		if len1 > len2 {
			maxLen = len1
		} else {
			maxLen = len2
		}

		if maxLen > len(ans) {
			start = i - (maxLen-1)/2
			end = i + maxLen/2
			ans = s[start : end+1]
		}
	}
	return ans
}

func maxlengthAroundCenter(s string, l, r int) int {
	for l >= 0 && r < len(s) && s[l] == s[r] {
		l--
		r++
	}
	// l and r point to outside the palindrome.
	return r - l - 1
}

// @lc code=end

