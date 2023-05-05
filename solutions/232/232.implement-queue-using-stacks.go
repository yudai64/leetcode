/*
 * @lc app=leetcode id=232 lang=golang
 *
 * [232] Implement Queue using Stacks
 */

// @lc code=start
type MyQueue struct {
    list []int
}


func Constructor() MyQueue {
    return MyQueue{}
}


func (this *MyQueue) Push(x int)  {
    this.list = append(this.list, x)
}


func (this *MyQueue) Pop() int {
    v := this.list[0]
    this.list = this.list[1:]
	return v
}


func (this *MyQueue) Peek() int {
    return this.list[0]
}


func (this *MyQueue) Empty() bool {
    return len(this.list) == 0
}


/**
 * Your MyQueue object will be instantiated and called as such:
 * obj := Constructor();
 * obj.Push(x);
 * param_2 := obj.Pop();
 * param_3 := obj.Peek();
 * param_4 := obj.Empty();
 */
// @lc code=end

