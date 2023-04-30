/*
 * @lc app=leetcode id=225 lang=php
 *
 * [225] Implement Stack using Queues
 */

// @lc code=start
class MyStack {
    private array $list;

    /**
     */
    function __construct() {
        $this->list = [];
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->list[] = $x;
    }

    /**
     * @return Integer
     */
    function pop() {
        return array_pop($this->list);
    }

    /**
     * @return Integer
     */
    function top() {
        return $this->list[count($this->list) - 1];
    }

    /**
     * @return Boolean
     */
    function empty() {
        return count($this->list) === 0;
    }
}

/**
 * Your MyStack object will be instantiated and called as such:
 * $obj = MyStack();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->empty();
 */
// @lc code=end

