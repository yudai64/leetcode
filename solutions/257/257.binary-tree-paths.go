/*
 * @lc app=leetcode id=257 lang=golang
 *
 * [257] Binary Tree Paths
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
import "strconv"
func binaryTreePaths(root *TreeNode) []string {
    var result []string
	if root != nil {
		helper(root, "", &result)
	}
	return result
}

func helper(root *TreeNode, path string, paths *[]string) {
	if root.Left == nil && root.Right == nil {
		*paths = append(*paths, path + strconv.Itoa(root.Val))
	}
	if root.Left != nil {
		helper(root.Left, path + strconv.Itoa(root.Val) + "->", paths)
	}
	if root.Right != nil {
		helper(root.Right, path + strconv.Itoa(root.Val) + "->", paths)
	}
}
// @lc code=end

