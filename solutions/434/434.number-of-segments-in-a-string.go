/*
 * @lc app=leetcode id=434 lang=golang
 *
 * [434] Number of Segments in a String
 */

// @lc code=start
func countSegments(s string) int {
	count := 0
	inSegment := false
	for _, v := range s {
		if v == ' ' {
			inSegment = false
		} else {
			if !inSegment {
				count++
				inSegment = true
			}
		}
	}
	return count
}

// @lc code=end

