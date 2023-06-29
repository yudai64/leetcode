/*
 * @lc app=leetcode id=557 lang=golang
 *
 * [557] Reverse Words in a String III
 */

// @lc code=start
func reverseWords(s string) string {
	words := strings.Split(s, "")
	lastSpaceIndex := -1
	for i := 0; i <= len(words); i++ {
		if i == len(words) || words[i] == " " {
			start := lastSpaceIndex + 1
			end := i - 1
			for start < end {
				words[start], words[end] = words[end], words[start]
				start++
				end--
			}
			lastSpaceIndex = i
		}
	}
	return strings.Join(words, "")
}

// @lc code=end

// https://leetcode.com/problems/reverse-words-in-a-string-iii/editorial/
