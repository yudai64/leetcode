/*
 * @lc app=leetcode id=504 lang=golang
 *
 * [504] Base 7
 */

// @lc code=start
func convertToBase7(num int) string {
	if num < 0 {
		return "-" + convertToBase7(-num)
	}
	if num < 7 {
		return strconv.Itoa(num)
	}

	return convertToBase7(num/7) + strconv.Itoa(num%7)
}

// @lc code=end

// https://leetcode.com/problems/base-7/solutions/98364/java-c-python-iteration-and-recursion/
