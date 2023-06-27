/*
 * @lc app=leetcode id=541 lang=golang
 *
 * [541] Reverse String II
 */

// @lc code=start
func reverseStr(s string, k int) string {
	strs := []byte(s)
	for i := 0; i < len(strs); i += (2 * k) {
		l, r := i, int(math.Min(float64(i+k-1), float64(len(strs)-1)))
		for l < r {
			tmp := strs[r]
			strs[r] = strs[l]
			strs[l] = tmp
			r--
			l++
		}
	}

	return string(strs)
}

// @lc code=end

// https://leetcode.com/problems/reverse-string-ii/editorial/