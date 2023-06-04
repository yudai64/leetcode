/*
 * @lc app=leetcode id=414 lang=golang
 *
 * [414] Third Maximum Number
 */

// @lc code=start
import "math"

func thirdMax(nums []int) int {
	first, second, third := math.Inf(-1), math.Inf(-1), math.Inf(-1)
	for i := 0; i < len(nums); i++ {
		current := float64(nums[i])
		if current == first || current == second || current == third {
			continue
		}
		if current > first {
			first, second, third = current, first, second
		} else if current > second {
			second, third = current, second
		} else if current > third {
			third = current
		}
	}

	if math.IsInf(third, -1) {
		return int(first)
	} else {
		return int(third)
	}
}

// @lc code=end

