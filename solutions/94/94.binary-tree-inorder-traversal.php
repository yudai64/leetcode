/*
 * @lc app=leetcode id=94 lang=php
 *
 * [94] Binary Tree Inorder Traversal
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
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $answer = [];

        $this->helper($root, $answer);

        return $answer;

    }

    function helper($root, &$answer) {
        if ($root->left !== null) $this->helper($root->left, $answer);
        $answer[] = $root->val;
        if ($root->right !== null) $this->helper($root->right, $answer);
    }
}
// @lc code=end

