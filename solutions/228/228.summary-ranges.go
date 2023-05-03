/*
 * @lc app=leetcode id=228 lang=golang
 *
 * [228] Summary Ranges
 */

// @lc code=start
import "strconv"

func summaryRanges(nums []int) []string {
    result := []string{}
    if (len(nums) == 0) {
        return result
    }

    start := nums[0]
    for i := 0; i < len(nums); i++ {
        if i == len(nums)-1 || nums[i]+1 != nums[i+1] {
            if nums[i] == start {
                result = append(result, strconv.Itoa(nums[i]))
            } else {
                result = append(result, strconv.Itoa(start) + "->" + strconv.Itoa(nums[i]))
            }
            if i != len(nums)-1 {
                start = nums[i+1]
            }
        }
    }
    return result
}
// @lc code=end

