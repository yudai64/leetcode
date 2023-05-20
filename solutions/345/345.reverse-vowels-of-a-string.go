/*
 * @lc app=leetcode id=345 lang=golang
 *
 * [345] Reverse Vowels of a String
 */

// @lc code=start
func reverseVowels(s string) string {
	return reverse([]byte(s), 0, len(s)-1)
}

func reverse(ba []byte, left, right int) string {
	if left >= right {
		return string(ba)
	}

	lok := isVowel(ba[left])
	rok := isVowel(ba[right])
	if lok && rok {
		ba[left], ba[right] = ba[right], ba[left]
		return reverse(ba, left+1, right-1)
	}
	if !lok {
		return reverse(ba, left+1, right)
	}

	if !rok {
		return reverse(ba, left, right-1)
	}

	return reverse(ba, left+1, right-1)
}

func isVowel(b byte) bool {
	return b == 97 || b == 101 || b == 105 || b == 111 || b == 117 ||
		b == 65 || b == 69 || b == 73 || b == 79 || b == 85
}

// @lc code=end

