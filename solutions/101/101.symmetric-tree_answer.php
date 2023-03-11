/*
 * @lc app=leetcode id=101 lang=php
 *
 * [101] Symmetric Tree
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
     * @return Boolean
     */
    function isSymmetric($root) {
        return $this->isSameNode($root->left, $root->right);
    }

    function isSameNode($left, $right) {
        if ($left === null && $right === null) return true;
        if ($left === null || $right === null) return false;

        if ($left->val === $right->val) {
            return $this->isSameNode($left->left, $right->right) && $this->isSameNode($left->right, $right->left);
        }

        return false;
    }
}
// @lc code=end

