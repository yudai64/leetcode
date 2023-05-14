/*
 * @lc app=leetcode id=290 lang=golang
 *
 * [290] Word Pattern
 */

// @lc code=start
import "strings"

func wordPattern(pattern string, s string) bool {
	words := strings.Fields(s)
	if len(pattern) != len(words) {
		return false
	}

	hashtable1 := make(map[string]string)
	hashtable2 := make(map[string]string)
	for i, p := range pattern {
		str, ok := hashtable1[string(p)]
		if ok {
			if str != words[i] {
				return false
			}
		} else {
			if _, ok := hashtable2[words[i]]; ok {
				return false
			}
		}
		hashtable1[string(p)] = words[i]
		hashtable2[words[i]] = string(p)
	}

	return true
}

// @lc code=end

