/*
 * @lc app=leetcode id=110 lang=php
 *
 * [110] Balanced Binary Tree
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
    function isBalanced($root) {
        if (!$root) return true;

        $leftHeight = $this->isBalancedHelper($root->left);
        $rightHeight = $this->isBalancedHelper($root->right);

        if (abs($leftHeight - $rightHeight) > 1) return false;
        return $this->isBalanced($root->left) && $this->isBalanced($root->right);
    }

    function isBalancedHelper($root) {
        if (!$root) return 0;

        $leftHeight = $this->isBalancedHelper($root->left);
        $rightHeight = $this->isBalancedHelper($root->right);

        return max($leftHeight, $rightHeight) + 1;
    }
}
// @lc code=end

<!-- A height-balanced binary tree is defined as a binary tree in which the height of the left and the right subtree of any node differ by not more than 1.  -->