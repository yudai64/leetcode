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
        return $this->toArrayPreorderLtoR($root->left, []) === $this->toArrayPreorderRtoL($root->right, []);
    }

    function toArrayPreorderLtoR($root, $array) {
        if (!$root) {
            $array[] = null;
            return $array;
        }

        $array[] = $root->val;
        $array = $this->toArrayPreorderLtoR($root->left, $array);
        $array = $this->toArrayPreorderLtoR($root->right, $array);

        return $array;
    }

    function toArrayPreorderRtoL($root, $array) {
        if (!$root) {
            $array[] = null;
            return $array;
        }

        $array[] = $root->val;
        $array = $this->toArrayPreorderRtoL($root->right, $array);
        $array = $this->toArrayPreorderRtoL($root->left, $array);

        return $array;
    }
}
// @lc code=end

