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

// Main game loop
while (!$gameOver) {
  // Display the current board
  displayBoard($board);

  // Prompt the user for their move
  $move = getMove();

  // Update the board with the user's move
  updateBoard($board, $move, $currentPlayer);

  // Check if the game is over
  $gameOver = isGameOver($board);

  // Switch the current player
  if ($currentPlayer == $player1) {
    $currentPlayer = $player2;
  } else {
    $currentPlayer = $player1;
  }
}

// Display the final board
displayBoard($board);

// Announce the winner or declare a tie
announceResult($board);

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

// Function to get the user's move
function getMove() {
    global $board;
    // Loop until we get a valid move
    while (true) {
      // Prompt the user for their move
      echo "enter your move (row column): ";
      $handle = fopen("php://stdin","r");
      $line = fgets($handle);
      $move = explode(' ', $line);
  
      // Make sure the input is valid
      if (count($move) == 2 &&
          is_numeric($move[0]) &&
          is_numeric((int)$move[1]) &&
          $move[0] >= 0 && $move[0] < 3 &&
          (int)$move[1] >= 0 && (int)$move[1] < 3 &&
          $board[$move[0]][(int)$move[1]] === "-") {
      
        return array((int)$move[0], (int)$move[1]);

      }
  
      echo "Invalid move, try again.\n";
    }
  }
