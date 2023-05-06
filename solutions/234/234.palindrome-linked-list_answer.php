/*
 * @lc app=leetcode id=234 lang=php
 *
 * [234] Palindrome Linked List
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
     * @return Boolean
     */
    function isPalindrome($head) {
        $fast = $head;
        $slow = $head;
        $rev = null;

        while ($fast !== null && $fast->next !== null) {
            $fast = $fast->next->next;
            $next = $slow->next;
            $slow->next = $rev;
            $rev = $slow;
            $slow = $next;
        }

        if ($fast !== null) {
            $slow = $slow->next;
        }

        while ($rev !== null) {
            if ($rev->val !== $slow->val) {
                return false;
            }
            $rev = $rev->next;
            $slow = $slow->next;
        }

        return true;
    }
}
// @lc code=end

