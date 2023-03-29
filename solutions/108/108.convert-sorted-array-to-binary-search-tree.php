/*
 * @lc app=leetcode id=108 lang=php
 *
 * [108] Convert Sorted Array to Binary Search Tree
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
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        if (!$nums) return null;

        $numsCount = count($nums);
        $midIndex = intdiv($numsCount, 2);

        $left = $this->sortedArrayToBST(array_slice($nums, 0, $midIndex));
        $right = $this->sortedArrayToBST(array_slice($nums, $midIndex+1));

        return new TreeNode($nums[$midIndex], $left, $right);
    }
}
// @lc code=end

