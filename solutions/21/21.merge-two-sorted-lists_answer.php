/*
 * @lc app=leetcode id=21 lang=php
 *
 * [21] Merge Two Sorted Lists
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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $mergedListNode = new ListNode();
        $head = $mergedListNode;

        while ($list1 && $list2) {
            if ($list1->val <= $list2->val) {
                $mergedListNode->next = new ListNode($list1->val);
                $list1 = $list1->next;
            } else {
                $mergedListNode->next = new ListNode($list2->val);
                $list2 = $list2->next;
            }
            $mergedListNode = $mergedListNode->next;
        }

        if ($list1) {
            $mergedListNode->next = $list1;
        } else {
            $mergedListNode->next = $list2;
        }

        return $head->next;
    }
}
// @lc code=end

