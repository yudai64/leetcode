/*
 * @lc app=leetcode id=111 lang=php
 *
 * [111] Minimum Depth of Binary Tree
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
    function minDepth($root) {
        if (!$root) return 0;

        $leftDepth = $this->minDepth($root->left);
        $rightDepth = $this->minDepth($root->right);

        if ($leftDepth === 0 && $rightDepth === 0) return 1;
        if ($leftDepth === 0) return $rightDepth + 1;
        if ($rightDepth === 0) return $leftDepth + 1;

        return min($leftDepth, $rightDepth) + 1;
    }
}
// @lc code=end

