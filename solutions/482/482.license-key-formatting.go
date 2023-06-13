/*
 * @lc app=leetcode id=482 lang=golang
 *
 * [482] License Key Formatting
 */

// @lc code=start
func licenseKeyFormatting(s string, k int) string {
	formatted := ""
	// charCount := 0

	for i := len(s) - 1; i >= 0; i-- {
		char := string(s[i])
		if char != "-" {
			// if charCount == k {
			// 	charCount = 0
			// 	formatted = "-" + formatted
			// }
			if len(formatted)%(k+1) == k {
				formatted = "-" + formatted
			}
			formatted = strings.ToUpper(char) + formatted
			// charCount++
		}
	}

	return formatted
}

// @lc code=end

