/*
 * @lc app=leetcode id=2 lang=golang
 *
 * [2] Add Two Numbers
 */

// @lc code=start
/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */
func addTwoNumbers(l1 *ListNode, l2 *ListNode) *ListNode {
    dummy := &ListNode{}
	cur := dummy

	carry := 0
	for l1 != nil || l2 != nil || carry != 0 {
		sum := 0
		if l1 != nil {
			sum += l1.Val
			l1 = l1.Next
		}
		if l2 != nil {
			sum += l2.Val
			l2 = l2.Next
		}
		sum += carry
		val := sum % 10
		carry = sum / 10

		next := &ListNode{Val: val}
		cur.Next = next
		cur = cur.Next
	}

    return dummy.Next
}
// @lc code=end

