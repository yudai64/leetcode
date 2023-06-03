/*
 * @lc app=leetcode id=6 lang=golang
 *
 * [6] Zigzag Conversion
 */

// @lc code=start
import "math"

func convert(s string, numRows int) string {
	if numRows == 1 {
		return s
	}

	strlen := len(s)
	section := int(math.Ceil(float64(strlen) / float64(numRows+1*(numRows-2))))
	columns := (numRows - 1) * section

	var matrix [][]string
	for i := 0; i < columns; i++ {
		var rows []string
		for j := 0; j < numRows; j++ {
			rows = append(rows, "")
		}
		matrix = append(matrix, rows)
	}

	sIndex := 0
	curRow, curCol := 0, 0
	// loop by section
	for sIndex < strlen {
		// move down
		for sIndex < strlen && curRow < numRows {
			matrix[curCol][curRow] = string(s[sIndex])
			sIndex++
			curRow++
		}
		curRow -= 2
		curCol++
		// move up
		for sIndex < strlen && curRow > 0 {
			matrix[curCol][curRow] = string(s[sIndex])
			sIndex++
			curRow--
			curCol++
		}
	}

	ans := ""
	for r := 0; r < numRows; r++ {
		for c := 0; c < columns; c++ {
			ans += matrix[c][r]
		}
	}

	return ans
}

// @lc code=end

https://leetcode.com/problems/zigzag-conversion/editorial/
