/*
 * @lc app=leetcode id=290 lang=golang
 *
 * [290] Word Pattern
 */

// @lc code=start
import "strings"

func wordPattern(pattern string, s string) bool {
	sliceS := strings.Fields(s)
	if len(pattern) != len(sliceS) {
		return false
	}

	hashtable := make(map[string]string)
	for i, p := range pattern {
		str, ok := hashtable[string(p)]
		if ok {
			if str != sliceS[i] {
				return false
			}
		} else {
			hashtable[string(p)] = sliceS[i]
		}
	}

	values := make(map[string]bool)
	for _, v := range hashtable {
		if _, ok := values[v]; ok {
			return false
		} else {
			values[v] = true
		}
	}

	return true
}

// @lc code=end

