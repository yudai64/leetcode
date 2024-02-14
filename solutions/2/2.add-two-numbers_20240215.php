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
        $firstNode = new ListNode();
        $dummy = $firstNode;
        $digit = 0;

        while ($l1 !== null || $l2 !== null) {
            $value1 = 0;
            $value2 = 0;

            if ($l1 !== null) {
                $value1 =  $l1->val;
                $l1 = $l1->next;
            }
            if ($l2 !== null) {
                $value2 =  $l2->val;
                $l2 = $l2->next;
            }

            $sum = $value1 + $value2 + $digit;
            $digit = intdiv($sum, 10);
            $dummy->next = new ListNode($sum % 10, null);
            $dummy = $dummy->next;
        }

        if ($digit !== 0) {
            $dummy->next = new ListNode($digit, null);
        }

        return $firstNode->next;
    }
}
// @lc code=end

