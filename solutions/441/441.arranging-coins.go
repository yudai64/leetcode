/*
 * @lc app=leetcode id=441 lang=golang
 *
 * [441] Arranging Coins
 */

// @lc code=start
func arrangeCoins(n int) int {
	ans := 0
	for ans*(ans+1)/2 <= n {
		ans++
	}
	return ans - 1
}

// @lc code=end

