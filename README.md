# Tic-Tac-Toe

This is a simple script for a game of Tic-Tac-Toe written in PHP. The game is played by two players, who take turns making moves on a 3x3 grid. The first player uses the symbol 'X' and the second player uses the symbol 'O'. The objective of the game is to be the first player to get three of their symbols in a row (horizontally, vertically, or diagonally) on the grid, or to block the other player from getting three in a row. If all of the spaces on the grid are filled and no player has won, the game is a tie.

## Requirements

* PHP 7.0 or higher

## Running the script

### Running the script

To run the script, navigate to the directory containing the script and run the following command:

```
php game.php

```

### Gameplay

The script will prompt the players for their moves, which should be entered as a row and column number separated by a space. For example, to make a move in the top left corner of the board, the player would enter 0 0. The script will then update the board with the player's symbol and switch to the other player's turn. The game continues until one player wins or the board is full.

### Customization

You can customize the player symbols by modifying the $player1 and $player2 variables at the beginning of the script. You can also modify the displayBoard(), getMove(), and announceResult() functions to change the way the board is displayed, how moves are entered, and how the result of the game is announced.


### Additional functions

The script includes several additional functions to help with the gameplay:

        * `displayBoard()`: This function displays the current state of the board.
        * `getMove()`: This function prompts the player for their next move and returns a valid move.
        * `updateBoard()`: This function updates the board with the player's move.
        * `isGameOver()`: This function checks if the game is over and returns a boolean value.
        * `isWinner()`: This function checks if there is a winner by checking the rows, columns, and diagonals of the board.
        * `isBoardFull()`: This function checks if the board is full by checking if all of the spaces are filled.

## Future improvements

There are several ways that this script could be improved in the future:

        * Add the ability to play against an AI opponent.
        * Implement more advanced AI strategies for the computer player.
        * Allow the players to choose their own symbols.
        * Add the ability to play on a larger board.
        * Implement a more user-friendly interface, such as a web-based version.
        * Add the ability to save and load games, so that players can resume a game at a later time.
        * Add options to customize the board size and number of players.
        * Implement a scoring system to keep track of wins, losses, and ties for each player.
        * Add a timer option to limit the time each player has to make their move.
        * Allow players to enter their names and display them on the board or during the game.
        * Implement a replay feature to allow players to review previous moves.
        * Add support for multiple languages and localization options.
        * Implement a multiplayer option to allow players to play against each other over the internet.
        * Add the ability to undo moves or take back turns.


## Authors

Contributors names and contact info

ex. Dominique Pizzie  
ex. [@DomPizzie](https://twitter.com/dompizzie)

## Version History

* 0.1
    * Initial Release
