/*
 * @lc app=leetcode id=257 lang=php
 *
 * [257] Binary Tree Paths
 */

// @lc code=start
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return String[]
     */
    function binaryTreePaths($root) {
        return $this->helper($root, [], []);
    }

    function helper($root, $paths, $path) {
        if ($root === null) {
            return $paths;
        }

        $path[] = $root->val;

        if ($root->left === null && $root->right === null) {
            $paths[] = implode('->', $path);
            return $paths;
        }

        $paths = $this->helper($root->left, $paths, $path);
        $paths = $this->helper($root->right, $paths, $path);

        return $paths;
    }
}
// @lc code=end

