/*
 * @lc app=leetcode id=543 lang=golang
 *
 * [543] Diameter of Binary Tree
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
func diameterOfBinaryTree(root *TreeNode) int {
	max := 0

	var dfs func(root *TreeNode) int
	dfs = func(root *TreeNode) int {
		if root == nil {
			return 0
		}
		left, right := dfs(root.Left), dfs(root.Right)
		max = int(math.Max(float64(max), float64(left+right)))
		return int(math.Max(float64(left), float64(right))) + 1
	}

	dfs(root)
	return max
}

// @lc code=end

// https://leetcode.com/problems/diameter-of-binary-tree/solutions/2128444/go-dfs-clear-solution/
