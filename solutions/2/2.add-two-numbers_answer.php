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
        $dummy = new ListNode();
        $cur = $dummy;

        $carry = 0;
        while ($l1 !== null || $l2 !== null || $carry !== 0) {
            $sum = 0;
            if ($l1 !== null) {
                $sum += $l1->val;
                $l1 = $l1->next;
            }
            if ($l2 !== null) {
                $sum += $l2->val;
                $l2 = $l2->next;
            }
            $sum += $carry;
            $val = $sum % 10;
            $carry = (int)($sum / 10);

            $next = new ListNode($val);
            $cur->next = $next;
            $cur = $cur->next;
        }

        return $dummy->next;
    }
}
// @lc code=end

