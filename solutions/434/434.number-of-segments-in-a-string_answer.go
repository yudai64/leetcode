/*
 * @lc app=leetcode id=434 lang=golang
 *
 * [434] Number of Segments in a String
 */

// @lc code=start
func countSegments(s string) int {
	count := 0
	for i := 0; i < len(s); i++ {
		if string(s[i]) != " " && (i == 0 || string(s[i-1]) == " ") {
			count++
		}
	}
	return count
}

// @lc code=end

https://leetcode.com/problems/number-of-segments-in-a-string/solutions/91607/clean-java-solution-o-n/
