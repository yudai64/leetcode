/*
 * @lc app=leetcode id=145 lang=php
 *
 * [145] Binary Tree Postorder Traversal
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
    function postorderTraversal($root) {
        if (!$root) return [];

        $answer = [];
        if ($root->left) $answer = array_merge($answer, $this->postorderTraversal($root->left));
        if ($root->right) $answer = array_merge($answer, $this->postorderTraversal($root->right));
        $answer[] = $root->val;

        return $answer;
    }
}
// @lc code=end

