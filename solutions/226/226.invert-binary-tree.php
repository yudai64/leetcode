/*
 * @lc app=leetcode id=226 lang=php
 *
 * [226] Invert Binary Tree
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
     * @return TreeNode
     */
    function invertTree($root) {
        if (!$root) {
            return null;
        }

        $left = $this->invertTree($root->left);
        $right = $this->invertTree($root->right);

        $root->left = $right;
        $root->right = $left;

        return $root;
    }
}
// @lc code=end

