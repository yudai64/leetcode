/*
 * @lc app=leetcode id=463 lang=golang
 *
 * [463] Island Perimeter
 */

// @lc code=start
func islandPerimeter(grid [][]int) int {
	islands, neighbours := 0, 0

	for i := 0; i < len(grid); i++ {
		for j := 0; j < len(grid[i]); j++ {
			if grid[i][j] == 1 {
				islands++
				if i != 0 && grid[i-1][j] == 1 {
					neighbours++
				}
				if j != 0 && grid[i][j-1] == 1 {
					neighbours++
				}
			}
		}
	}

	return islands*4 - neighbours*2
}

// @lc code=end

// https://leetcode.com/problems/island-perimeter/solutions/95001/clear-and-easy-java-solution/
