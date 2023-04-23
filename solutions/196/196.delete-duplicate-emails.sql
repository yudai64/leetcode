--
-- @lc app=leetcode id=196 lang=mysql
--
-- [196] Delete Duplicate Emails
--

-- @lc code=start
# Please write a DELETE statement and DO NOT write a SELECT statement.
# Write your MySQL query statement below
DELETE p2 FROM Person p1
JOIN Person p2 ON p1.email = p2.email
WHERE p1.id < p2.id
-- @lc code=end

