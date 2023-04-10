/*
 * @lc app=leetcode id=141 lang=php
 *
 * [141] Linked List Cycle
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
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        $slow = $head;
        $fast = $head;

        while ($fast && $fast->next) {
            $slow = $slow->next;
            $fast = $fast->next->next;
            if ($slow === $fast) return true;
        }

        return false;
    }
}
// @lc code=end

<!-- Floyd’s Cycle Finding Algorithm -->
