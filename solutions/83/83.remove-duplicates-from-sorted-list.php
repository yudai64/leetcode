/*
 * @lc app=leetcode id=83 lang=php
 *
 * [83] Remove Duplicates from Sorted List
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
    function deleteDuplicates($head) {
        $answer = $head;
        $hashtable = [];

        while ($head->next !== null) {
            while ($head->next !== null && $head->val === $head->next->val) {
                $head->next = $head->next->next;
            }
            $head = $head->next;
        }

        return $answer;
    }
}
// @lc code=end

