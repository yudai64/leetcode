/*
 * @lc app=leetcode id=387 lang=golang
 *
 * [387] First Unique Character in a String
 */

// @lc code=start
func firstUniqChar(s string) int {
	var freq [26]int
	for _, r := range s {
		freq[r-'a']++
	}
	for k, r := range s {
		if freq[r-'a'] == 1 {
			return k
		}
	}
	return -1
}

// @lc code=end

https://leetcode.com/problems/first-unique-character-in-a-string/solutions/86348/java-7-lines-solution-29ms/
