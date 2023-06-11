/*
 * @lc app=leetcode id=463 lang=golang
 *
 * [463] Island Perimeter
 */

// @lc code=start
func islandPerimeter(grid [][]int) int {
	ans := 0

	for row := 0; row < len(grid); row++ {
		for col := 0; col < len(grid[row]); col++ {
			if grid[row][col] == 0 {
				continue
			}
			// left
			if col-1 >= 0 && grid[row][col-1] == 0 || (col-1 < 0) {
				ans++
			}
			// top
			if row-1 >= 0 && grid[row-1][col] == 0 || (row-1 < 0) {
				ans++
			}
			// right
			if col+1 < len(grid[row]) && grid[row][col+1] == 0 || (col+1 == len(grid[row])) {
				ans++
			}
			// bottom
			if row+1 < len(grid) && grid[row+1][col] == 0 || (row+1 == len(grid)) {
				ans++
			}
		}
	}

	return ans
}

// @lc code=end

