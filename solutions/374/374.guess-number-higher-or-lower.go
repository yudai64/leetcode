/*
 * @lc app=leetcode id=374 lang=golang
 *
 * [374] Guess Number Higher or Lower
 */

// @lc code=start
/**
 * Forward declaration of guess API.
 * @param  num   your guess
 * @return 	     -1 if num is higher than the picked number
 *			      1 if num is lower than the picked number
 *               otherwise return 0
 * func guess(num int) int;
 */

func guessNumber(n int) int {
	s, e, m := 1, n, 0
	for s <= e {
		// m = (e-s)/2 + s
		m = (s + e) / 2
		res := guess(m)
		if res == 0 {
			break
		}
		if res == -1 {
			e = m - 1
		} else {
			s = m + 1
		}
	}
	return m
}

// @lc code=end

