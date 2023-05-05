/*
 * @lc app=leetcode id=2 lang=php
 *
 * [2] Add Two Numbers
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $dummy = new ListNode(0, new ListNode());
        $pre = $dummy;
        $cur = $dummy->next;

        $c = 0;
        while ($l1 !== null || $l2 !== null) {
            $v1 = $l1 ? $l1->val : 0;
            $v2 = $l2 ? $l2->val : 0;

            $v = $v1 + $v2 + $c;
            if ($v >= 10) {
                $v -= 10;
                $c = 1;
            } else {
                $c = 0;
            }

            $cur->val = $v;
            $cur->next = new ListNode();
            $pre = $cur;
            $cur = $cur->next;
            $l1 = $l1->next;
            $l2 = $l2->next;
        }

        if ($c === 1) {
            $cur->val = 1;
        } else {
            $pre->next = null;
        }

        return $dummy->next;
    }
}
// @lc code=end

