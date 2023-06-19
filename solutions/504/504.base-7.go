/*
 * @lc app=leetcode id=504 lang=golang
 *
 * [504] Base 7
 */

// @lc code=start
func convertToBase7(num int) string {
	if num == 0 {
		return "0"
	}

	abs := int(math.Abs(float64(num)))

	ans := ""
	for abs > 0 {
		ans = strconv.Itoa(abs%7) + ans
		abs /= 7
	}
	if num < 0 {
		ans = "-" + ans
	}

	return ans
}

// @lc code=end

