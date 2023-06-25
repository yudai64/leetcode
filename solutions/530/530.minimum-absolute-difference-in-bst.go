/*
 * @lc app=leetcode id=530 lang=golang
 *
 * [530] Minimum Absolute Difference in BST
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

func getMinimumDifference(root *TreeNode) int {
	nodes := []int{}
	nodes = getAllNodes(root, nodes)
	// binary search tree is that an inorder traversal handles the nodes in sorted order. This allows us to skip the sorting at the end.
	// sort.Slice(nodes, func(i, j int) bool { return nodes[i] > nodes[j] })
	min := math.Inf(1)
	for i := 1; i < len(nodes); i++ {
		min = math.Min(min, float64(nodes[i-1]-nodes[i]))
	}
	return int(min)
}

func getAllNodes(root *TreeNode, nodes []int) []int {
	if root == nil {
		return nodes
	}

	nodes = getAllNodes(root.Right, nodes)
	nodes = append(nodes, root.Val)
	nodes = getAllNodes(root.Left, nodes)

	return nodes
}

// @lc code=end
