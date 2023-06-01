/*
 * @lc app=leetcode id=409 lang=golang
 *
 * [409] Longest Palindrome
 */

// @lc code=start
func longestPalindrome(s string) int {
	freq := make(map[rune]int)
	for _, v := range s {
		if _, ok := freq[v]; ok {
			freq[v]++
		} else {
			freq[v] = 1
		}
	}

	ans := 0
	for _, f := range freq {
		ans += f / 2 * 2
		// increment only once
		if f%2 != 0 && ans%2 == 0 {
			ans += 1
		}
	}

	return ans
}

// @lc code=end

// I was under the mistaken impression that odd-numbered letters could only be used once.
https://leetcode.com/problems/longest-palindrome/solutions/792329/go-simple-solution-using-map/
