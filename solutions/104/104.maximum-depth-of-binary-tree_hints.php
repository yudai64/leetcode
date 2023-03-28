/*
 * @lc app=leetcode id=104 lang=php
 *
 * [104] Maximum Depth of Binary Tree
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
     * @return Integer
     */
    function maxDepth($root) {
        if (!$root) return 0;

        $leftMax = $this->maxDepth($root->left);
        $rightMax = $this->maxDepth($root->right);

        return max($leftMax, $rightMax) + 1;
    }
}
// @lc code=end

