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
        $aNodes = [];
        while ($headA) {
            $aNodes[] = $headA;
            $headA = $headA->next;
        }

        while ($headB) {
            if (in_array($headB, $aNodes, TRUE)) {
                return $headB;
            }
            $headB = $headB->next;
        }

        return null;
    }
}
// @lc code=end

