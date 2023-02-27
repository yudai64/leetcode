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

        while ($list1 != null || $list2 != null) {
            if (!$list1) {
                $mergedListNode->next = new ListNode($list2->val);
                $mergedListNode = $mergedListNode->next;
                $list2 = $list2->next;
                
            }
            else if (!$list2) {
                $mergedListNode->next = new ListNode($list1->val);
                $mergedListNode = $mergedListNode->next;
                $list1 = $list1->next;
                
            }
            else {
                if ($list1->val <= $list2->val) {
                    $mergedListNode->next = new ListNode($list1->val);
                    $mergedListNode = $mergedListNode->next;
                    $list1 = $list1->next;
                } else {
                    $mergedListNode->next = new ListNode($list2->val);
                    $mergedListNode = $mergedListNode->next;
                    $list2 = $list2->next;
                }
            }
            
        }

        return $head->next;
    }
}
// @lc code=end

