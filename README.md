# Unpredictable Array Iteration Order in PHP

This repository demonstrates a subtle bug in PHP related to the unpredictable order of array iteration when the array contains a mix of string and numeric keys.

The `bug.php` file shows the problem.  The `bugSolution.php` file provides a solution.

The core issue is that PHP's internal array handling doesn't guarantee any specific order when iterating through arrays with a mixture of string and integer keys. This can lead to unexpected results and is easily overlooked in larger codebases.

This example serves as a cautionary tale and emphasizes the importance of understanding PHP's array key behavior and the necessity for explicit ordering when required.