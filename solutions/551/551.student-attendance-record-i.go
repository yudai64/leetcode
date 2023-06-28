/*
 * @lc app=leetcode id=551 lang=golang
 *
 * [551] Student Attendance Record I
 */

// @lc code=start
func checkRecord(s string) bool {
	return strings.Count(s, "A") < 2 && strings.Count(s, "LLL") == 0
}

// @lc code=end

