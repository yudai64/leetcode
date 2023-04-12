/*
 * @lc app=leetcode id=144 lang=php
 *
 * [144] Binary Tree Preorder Traversal
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
    function preorderTraversal($root) {
        if (!$root) return [];

        $answer = [];
        $answer[] = $root->val;
        if ($root->left) $answer = array_merge($answer, $this->preorderTraversal($root->left));
        if ($root->right) $answer =  array_merge($answer, $this->preorderTraversal($root->right));

        return $answer;
    }
}
// @lc code=end

