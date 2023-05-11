/*
 * @lc app=leetcode id=278 lang=golang
 *
 * [278] First Bad Version
 */

// @lc code=start
/**
 * Forward declaration of isBadVersion API.
 * @param   version   your guess about first bad version
 * @return 	 	      true if current version is bad
 *			          false if current version is good
 * func isBadVersion(version int) bool;
 */

func firstBadVersion(n int) int {
	start, end := 1, n
	return helper(start, end)
}

func helper(start, end int) int {
	mid := (start + end + 1) / 2
	if start <= mid && mid <= end {
		b := isBadVersion(mid)
		if b {
			return helper(start, mid-1)
		} else {
			return helper(mid+1, end)
		}
	}

	for !isBadVersion(mid) {
		mid++
	}

	return mid
}

// @lc code=end

