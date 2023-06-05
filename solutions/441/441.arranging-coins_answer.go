/*
 * @lc app=leetcode id=441 lang=golang
 *
 * [441] Arranging Coins
 */

// @lc code=start
func arrangeCoins(n int) int {
	left, right := 0, n

	for left <= right {
		mid := left + (right-left)/2
		if mid*(mid+1)/2 == n {
			return mid
		}
		if mid*(mid+1)/2 > n {
			right = mid - 1
		} else {
			left = mid + 1
		}
	}

	return right
}

// @lc code=end

https://leetcode.com/problems/arranging-coins/editorial/
