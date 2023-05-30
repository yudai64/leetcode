/*
 * @lc app=leetcode id=404 lang=golang
 *
 * [404] Sum of Left Leaves
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
func sumOfLeftLeaves(root *TreeNode) int {
	sum := 0
	sum = helperLeftNode(root.Left, sum)
	sum = helperRightNode(root.Right, sum)
	return sum
}

func helperLeftNode(node *TreeNode, sum int) int {
	if node == nil {
		return sum
	}
	if node.Left == nil && node.Right == nil {
		sum += node.Val
		return sum
	}
	sum = helperLeftNode(node.Left, sum)
	sum = helperRightNode(node.Right, sum)
	return sum
}

func helperRightNode(node *TreeNode, sum int) int {
	if node == nil || (node.Left == nil && node.Right == nil) {
		return sum
	}
	sum = helperLeftNode(node.Left, sum)
	sum = helperRightNode(node.Right, sum)
	return sum
}

// @lc code=end

