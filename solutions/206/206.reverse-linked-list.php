/*
 * @lc app=leetcode id=206 lang=php
 *
 * [206] Reverse Linked List
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
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $pre = null;
        $cur = $head;

        while ($cur) {
            $tmp = $cur->next;
            $cur->next = $pre;
            $pre = $cur;
            $cur = $tmp;
        }

        return $pre;
    }
}
// @lc code=end

