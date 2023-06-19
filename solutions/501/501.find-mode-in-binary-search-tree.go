/*
 * @lc app=leetcode id=501 lang=golang
 *
 * [501] Find Mode in Binary Search Tree
 */

// @lc code=start
/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */
func findMode(root *TreeNode) []int {
	frequent := make(map[int]int)
	frequent = countFrequent(root, frequent)

	var ans []int
	max := 0
	for k, v := range frequent {
		if v > max {
			ans = []int{k}
			max = v
		} else if v == max {
			ans = append(ans, k)
		}
	}
	return ans
}

func countFrequent(root *TreeNode, frequent map[int]int) map[int]int {
	if root == nil {
		return frequent
	}

	if _, ok := frequent[root.Val]; ok {
		frequent[root.Val]++
	} else {
		frequent[root.Val] = 1
	}

	frequent = countFrequent(root.Left, frequent)
	frequent = countFrequent(root.Right, frequent)

	return frequent
}

// @lc code=end

