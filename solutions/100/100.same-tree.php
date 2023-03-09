/*
 * @lc app=leetcode id=100 lang=php
 *
 * [100] Same Tree
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
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {
        $pArray = $this->arrayPreOrder($p, []);
        $qArray = $this->arrayPreOrder($q, []);

        return $pArray === $qArray;
    }

    function arrayPreOrder($tree, $array) {
        if (!$tree) {
            $array[] = null;
            return $array;
        }

        $array[] = $tree->val;
        $array = $this->arrayPreOrder($tree->left, $array);
        $array = $this->arrayPreOrder($tree->right, $array);

        return $array;
    }
}
// @lc code=end

