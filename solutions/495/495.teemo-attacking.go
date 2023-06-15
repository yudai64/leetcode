/*
 * @lc app=leetcode id=495 lang=golang
 *
 * [495] Teemo Attacking
 */

// @lc code=start
func findPoisonedDuration(timeSeries []int, duration int) int {
	poisoned := 0

	for i := 1; i < len(timeSeries); i++ {
		turnDiff := timeSeries[i] - timeSeries[i-1]
		if duration > turnDiff {
			poisoned += turnDiff
		} else {
			poisoned += duration
		}
	}

	return poisoned + duration
}

// @lc code=end

