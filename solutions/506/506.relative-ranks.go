/*
 * @lc app=leetcode id=506 lang=golang
 *
 * [506] Relative Ranks
 */

// @lc code=start
func findRelativeRanks(score []int) []string {
	sortedScore := make([]int, len(score))
	copy(sortedScore, score)
	sort.Slice(sortedScore, func(i, j int) bool { return sortedScore[i] > sortedScore[j] })

	ranks := make(map[int]string, len(sortedScore))
	for i := 0; i < len(sortedScore); i++ {
		if i == 0 {
			ranks[sortedScore[i]] = "Gold Medal"
		} else if i == 1 {
			ranks[sortedScore[i]] = "Silver Medal"
		} else if i == 2 {
			ranks[sortedScore[i]] = "Bronze Medal"
		} else {
			ranks[sortedScore[i]] = strconv.Itoa(i + 1)
		}
	}

	var ans []string
	for i := 0; i < len(score); i++ {
		ans = append(ans, ranks[score[i]])
	}

	return ans
}

// @lc code=end

