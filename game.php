<?php

// Define the board as a 2D array with 3 rows and 3 columns
$board = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-']
];

// Define the player symbols
$player1 = 'X';
$player2 = 'O';

// Initialize the current player as player 1
$currentPlayer = $player1;

// Initialize a variable to track the game status
$gameOver = false;

// Display the final board
displayBoard($board);

// Function to display the board
function displayBoard($board) {
  // Loop through the rows
  for ($i = 0; $i < 3; $i++) {
    // Loop through the columns
    for ($j = 0; $j < 3; $j++) {
      echo $board[$i][$j] . ' ';
    }
    echo "\n";
  }
}