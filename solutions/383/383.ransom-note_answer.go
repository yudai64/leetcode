/*
 * @lc app=leetcode id=383 lang=golang
 *
 * [383] Ransom Note
 */

// @lc code=start
func canConstruct(ransomNote string, magazine string) bool {
	var canUseChar [26]int
	for _, c := range magazine {
		canUseChar[c-'a']++
	}
	for _, c := range ransomNote {
		if canUseChar[c-'a'] == 0 {
			return false
		}
		canUseChar[c-'a']--
	}
	return true
}

// @lc code=end

https://leetcode.com/problems/ransom-note/solutions/3146888/java-golang-0ms-100-easy-you-understand/
