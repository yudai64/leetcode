/*
 * @lc app=leetcode id=3 lang=golang
 *
 * [3] Longest Substring Without Repeating Characters
 */

// @lc code=start
func lengthOfLongestSubstring(s string) int {
    max := 0
	m := make(map[string]int)
	j := 0

	for i := 0; i < len(s); i++ {
		cur := string(s[i])
		v, ok := m[cur]
		// 現在のsubstringの一部であるかどうかを判定
		if (ok && v >= j) {
			j = m[cur] + 1
		}
		m[cur] = i
		if (i - j + 1) > max {
			max = i - j + 1
		}
	}

	return max
}
// @lc code=end

https://leetcode.com/problems/longest-substring-without-repeating-characters/solutions/1729/11-line-simple-java-solution-o-n-with-explanation/
