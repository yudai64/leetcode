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
        $answer = [];

        while ($root) {
            // 左木がない場合 自身を追加してルートを右ノードに移す
            if (!$root->left) {
                $answer[] = $root->val;
                $root = $root->right;
            }
            else {
                // 左木がある場合 まず左木の最右ノードを探す (ただし現ルートへのポインタを持っていたら終了)
                $pre = $root->left;
                while ($pre->right !== null && $pre->right !== $root) {
                    $pre = $pre->right;
                }
                // 最右ノードが現ルートのポインタを持っていない場合
                // 自身を追加し、最右ノードに自身のポインタを持たせる。ルートは左木に移動させる
                if ($pre->right === null) {
                    $answer[] = $root->val;
                    $pre->right = $root;
                    $root = $root->left;
                }
                // 最右ノードが現ルートへのポインタを持っていた場合 ポインタ消してルートを右ノードに移す
                else {
                    $pre->rihgt = null;
                    $root = $root->right;
                }
            }
        }

        return $answer;
    }
}
// @lc code=end

<!-- Morris traversal -->
<!-- https://leetcode.com/problems/binary-tree-preorder-traversal/solutions/3022021/c-easy-beats100-3-approach-with-explaination/ -->