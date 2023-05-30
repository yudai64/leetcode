/*
 * @lc app=leetcode id=401 lang=golang
 *
 * [401] Binary Watch
 */

// @lc code=start
import "fmt"

func readBinaryWatch(turnedOn int) []string {
	var ans []string
	for h := 0; h <= 11; h++ {
		for m := 0; m <= 59; m++ {
			if bitCount(h)+bitCount(m) == turnedOn {
				ans = append(ans, fmt.Sprintf("%d:%02d", h, m))
			}
		}
	}
	return ans
}

func bitCount(n int) int {
	count := 0
	for n > 0 {
		if n%2 == 1 {
			count++
		}
		n /= 2
	}
	return count
}

// @lc code=end

https://leetcode.com/problems/binary-watch/solutions/88458/simple-python-java/
