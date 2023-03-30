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
        $height = $this->height($root);
        return $height >= 0;
    }

    function height($root) {
        if (!$root) return 0;

        $leftHeight = $this->height($root->left);
        $rightHeight = $this->height($root->right);

        if ($leftHeight < 0 || $rightHeight < 0 || abs($leftHeight - $rightHeight) > 1) {
            return -1;
        }

        return max($leftHeight, $rightHeight) + 1;
    }
}
// @lc code=end

<!-- https://leetcode.com/problems/balanced-binary-tree/solutions/2428871/very-easy-100-fully-explained-c-java-python-javascript-python3/ -->