/*
 * @lc app=leetcode id=389 lang=golang
 *
 * [389] Find the Difference
 */

// @lc code=start
func findTheDifference(s string, t string) byte {
	freq := make(map[byte]int)
	for i := 0; i < len(s); i++ {
		_, ok := freq[s[i]]
		if ok {
			freq[s[i]]++
		} else {
			freq[s[i]] = 1
		}
	}

	var ans byte
	for i := 0; i < len(t); i++ {
		v, ok := freq[t[i]]
		if !ok || v <= 0 {
			ans = t[i]
			break
		}
		freq[t[i]]--
	}

	return ans
}

// @lc code=end

