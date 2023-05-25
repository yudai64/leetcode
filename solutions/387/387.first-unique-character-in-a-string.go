/*
 * @lc app=leetcode id=387 lang=golang
 *
 * [387] First Unique Character in a String
 */

// @lc code=start
func firstUniqChar(s string) int {
	used := make(map[string]int)
	for i := 0; i < len(s); i++ {
		cur := string(s[i])
		if _, ok := used[cur]; ok {
			used[cur]++
		} else {
			used[cur] = 1
		}
	}

	for i := 0; i < len(s); i++ {
		cur := string(s[i])
		if v, ok := used[cur]; ok && v == 1 {
			return i
		}
	}

	return -1
}

// @lc code=end

