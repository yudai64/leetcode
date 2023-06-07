/*
 * @lc app=leetcode id=455 lang=golang
 *
 * [455] Assign Cookies
 */

// @lc code=start
import "sort"

func findContentChildren(g []int, s []int) int {
	sort.Slice(g, func(i, j int) bool { return g[i] < g[j] })
	sort.Slice(s, func(i, j int) bool { return s[i] < s[j] })

	// countOfSatisfied is not necessary because i means the same thing.
	// countOfSatisfied := 0
	i, j := 0, 0
	for i < len(g) && j < len(s) {
		if g[i] <= s[j] {
			// countOfSatisfied++
			i++
			j++
		} else {
			j++
		}
	}

	// return countOfSatisfied
	return i
}

// @lc code=end

