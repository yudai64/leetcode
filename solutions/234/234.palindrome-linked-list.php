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
        $rev = null;
        $dummy = $head;
        while ($dummy) {
            $node = new ListNode($dummy->val, $rev);
            $rev = $node;
            $dummy = $dummy->next;
        }

        while ($head) {
            if ($head->val !== $rev->val) {
                return false;
            }
            $head = $head->next;
            $rev = $rev->next;
        }

        return true;
    }
}
// @lc code=end

