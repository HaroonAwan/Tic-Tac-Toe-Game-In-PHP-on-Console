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

// Function to update the board with the user's move
function updateBoard(&$board, $move, $player) {
  // Get the row and column from the move array
  $row = $move[0];
  $col = $move[1];
  // Update the board with the player's symbol
  $board[$row][$col] = $player;
}

// Function to check if the game is over
function isGameOver($board) {
  // Check if there is a winner
  if (isWinner($board)) {
    return true;
  }
  // Check if the board is full
  if (isBoardFull($board)) {
    return true;
  }
  // Otherwise, the game is not over
  return false;
}

// Function to check if there is a winner
// Function to check if there is a winner
function isWinner($board) {
    // Check the rows for a winner
    for ($i = 0; $i < 3; $i++) {
      if ($board[$i][0] == $board[$i][1] && $board[$i][1] == $board[$i][2] && $board[$i][0] != '-') {
        return true;
      }
    }
  
    // Check the columns for a winner
    for ($i = 0; $i < 3; $i++) {
      if ($board[0][$i] == $board[1][$i] && $board[1][$i] == $board[2][$i] && $board[0][$i] != '-') {
        return true;
      }
    }
  
    // Check the diagonals for a winner
    if ($board[0][0] == $board[1][1] && $board[1][1] == $board[2][2] && $board[0][0] != '-') {
      return true;
    }
    if ($board[0][2] == $board[1][1] && $board[1][1] == $board[2][0] && $board[0][2] != '-') {
      return true;
    }
  
    // If no winner was found, return false
    return false;
  }
  


  // Function to check if the board is full
function isBoardFull($board) {
    // Loop through the rows
    for ($i = 0; $i < 3; $i++) {
      // Loop through the columns
      for ($j = 0; $j < 3; $j++) {
        // If there is an empty cell, the board is not full
        if ($board[$i][$j] == '-') {
          return false;
        }
      }
    }
    // If no empty cells were found, the board is full
    return true;
  }
  

  // Function to announce the result of the game
function announceResult($board) {
    // Check if there is a winner
    if (isWinner($board)) {
      // Announce the winner
      echo "Congratulations, you won!\n";
    } else {
      // Otherwise, the game is a tie
      echo "The game is a tie.\n";
    }
  }
  