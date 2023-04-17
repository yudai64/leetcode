--
-- @lc app=leetcode id=181 lang=mysql
--
-- [181] Employees Earning More Than Their Managers
--

-- @lc code=start
# Write your MySQL query statement below
SELECT e.name AS Employee
FROM Employee e JOIN Employee em ON e.managerId = em.id
WHERE e.salary > em.salary

-- @lc code=end

