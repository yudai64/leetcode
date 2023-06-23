--
-- @lc app=leetcode id=511 lang=mysql
--
-- [511] Game Play Analysis I
--

-- @lc code=start
# Write your MySQL query statement below
SELECT player_id, MIN(event_date) AS first_login
FROM Activity
GROUP BY player_id

-- SELECT
--     DISTINCT player_id,
--     FIRST_VALUE(event_date) OVER (
--         PARTITION BY player_id
--         ORDER BY event_date
--     ) AS first_login
-- FROM Activity

-- @lc code=end

-- https://leetcode.com/problems/game-play-analysis-i/editorial/
