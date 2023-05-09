/*
 * @lc app=leetcode id=263 lang=golang
 *
 * [263] Ugly Number
 */

// @lc code=start
func isUgly(n int) bool {
    if n <= 0 {
		return false
	}

	for _, v := range [3]int{2 ,3 ,5} {
		for n % v == 0 {
			n /= v
		}
	}

	return n == 1
}
// @lc code=end

