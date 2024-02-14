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
        if ($head === null) {
            return $head;
        }

        $map = [
            $head->val => true
        ];

        $answer = $head;
        while ($head->next !== null) {
            if ($map[$head->next->val]) {
                $head->next = $head->next->next;
            } else {
                $map[$head->next->val] = true;
                $head = $head->next;
            }
        }

        return $answer;
    }
}
// @lc code=end

