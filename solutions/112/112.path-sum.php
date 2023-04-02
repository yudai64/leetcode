/*
 * @lc app=leetcode id=112 lang=php
 *
 * [112] Path Sum
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
     * @param Integer $targetSum
     * @return Boolean
     */
    function hasPathSum($root, $targetSum) {
        return $this->helper($root, $targetSum, 0);
    }

    function helper($root, $targetSum, $sum) {
        if (!$root) return false;

        $sum += $root->val;

        if (!$root->left && !$root->right) {
            return $sum === $targetSum;
        }

        return $this->helper($root->left, $targetSum, $sum) ||
            $this->helper($root->right, $targetSum, $sum);
    }
}
// @lc code=end

