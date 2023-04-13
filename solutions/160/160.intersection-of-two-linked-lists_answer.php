/*
 * @lc app=leetcode id=160 lang=php
 *
 * [160] Intersection of Two Linked Lists
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    function getIntersectionNode($headA, $headB) {
        $a = $headA;
        $b = $headB;

        while ($a !== $b) {
            $a = $a === null ? $headB : $a->next;
            $b = $b === null ? $headA : $b->next;
        }

        return $a;
    }
}
// @lc code=end

<!-- https://leetcode.com/problems/intersection-of-two-linked-lists/solutions/2116221/visual-explanation-one-pass-java/ -->
