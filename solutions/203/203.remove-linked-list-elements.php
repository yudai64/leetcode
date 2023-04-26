/*
 * @lc app=leetcode id=203 lang=php
 *
 * [203] Remove Linked List Elements
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
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        if (!$head) return [];

        $pre = null;
        $cur = $head;

        while ($cur) {
            if ($cur->val !== $val) {
                $pre = $cur;
                $cur = $cur->next;
                continue;
            }

            if ($pre === null) {
                $head = $head->next;
                $cur = $cur->next;
            }
            else {
                $cur = $cur->next;
                $pre->next = $cur;
            }
        }

        return $head;
    }
}
// @lc code=end

