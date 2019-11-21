//Kyle Hennessy
//C00227463
//lab 3

#include <iostream>
#include <time.h>


using namespace std;
void drawMaze(char mz[10][10], int numRows, int numCols)
{
	for (int row = 0; row < numRows; row++)
	{
		for (int col = 0; col < numCols; col++)
		{
			cout << mz[row][col];
		}
		cout << endl;
	}

}
//places walkers and plants in the maze
void placeActors(char maze[10][10], char type, int number) {
	int count = 0;
	srand(time(0));
	int row = rand() % 10; //random number between 0 and 9
	int col = rand() % 10;
	while (count < number) {
		while (maze[row][col] != '0') { // if current position isnt empty (0), keep getting a random number
			row = rand() % 10;
			col = rand() % 10;
		}
		if (maze[row][col] == '0') {
			maze[row][col] = type;
			count++;
		}
	}
}

void moveWalkers(char maze[10][10], int row, int col) {
	srand(time(0));
	int number = rand() % 8;
	while (maze[row][col] != 0) {
		switch (number) {
		case 0: //west
			if (maze[row][col - 1] == '0' || (maze[row][col - 1] <= 'y' && maze[row][col - 1] >= 'a')) {
				maze[row][col - 1] = 'T'; // t is a temp that we will change after to avoid same walker being moved twice
				maze[row][col] = '0';
				return;
			}
			else if (maze[row][col - 1] == '2') {
				return;
			}
			break;
		case 1: //east
			if (maze[row][col + 1] == '0' || (maze[row][col + 1] <= 'y' && maze[row][col - 1] >= 'a')) {
				maze[row][col + 1] = 'T';
				maze[row][col] = '0';
				return;
			}
			else if (maze[row][col + 1] == '2') {
				return;
			}
			break;
		case 2: //north
			if (maze[row - 1][col] == '0' || (maze[row - 1][col] <= 'y' && maze[row - 1][col] >= 'a')) {
				maze[row - 1][col] = 'T';
				maze[row][col] = '0';
				return;
			}
			else if (maze[row - 1][col] == '2') {
				return;
			}
			break;
		case 3: //south
			if (maze[row + 1][col] == '0' || (maze[row + 1][col] <= 'y' && maze[row + 1][col] >= 'a')) {
				maze[row + 1][col] = 'T';
				maze[row][col] = '0';
				return;
			}
			else if (maze[row + 1][col] == '2') {
				return;
			}
			break;
		case 4: //north west
			if (maze[row - 1][col - 1] == '0' || (maze[row - 1][col - 1] <= 'y' && maze[row - 1][col - 1] >= 'a')) {
				maze[row - 1][col - 1] = 'T';
				maze[row][col] = '0';
				return;
			}
			else if (maze[row - 1][col - 1] == '2') {
				return;
			}
			break;
		case 5: //north east
			if (maze[row - 1][col + 1] == '0' || (maze[row - 1][col + 1] <= 'y' && maze[row - 1][col + 1] >= 'a')) {
				maze[row - 1][col + 1] = 'T';
				maze[row][col] = '0';
				return;
			}
			else if (maze[row - 1][col + 1] == '2') {
				return;
			}
			break;
		case 6: //south west
			if (maze[row + 1][col - 1] == '0' || (maze[row + 1][col - 1] <= 'y' && maze[row + 1][col - 1] >= 'a')) {
				maze[row + 1][col - 1] = 'T';
				maze[row][col] = '0';
				return;
			}
			else if (maze[row + 1][col - 1] == '2') {
				return;
			}
			break;
		case 7: //south east
			if (maze[row + 1][col + 1] == '0' || (maze[row + 1][col + 1] <= 'y' && maze[row + 1][col + 1] >= 'a')) {
				maze[row + 1][col + 1] = 'T';
				maze[row][col] = '0';
				return;
			}
			else if (maze[row + 1][col + 1] == '2') {
				return;
			}
			break;
		default: return;
		}
		number = rand() % 8;
	}
	return;
}

void plantGrowth(char maze[10][10], int row, int col) {
	char letter = maze[row][col];
	if (letter <= 'y' && letter >= 'b') {
		letter--;
		maze[row][col] = letter;
	}
	else if (letter == 'a') {
		letter = 'y';
		maze[row][col] = letter;
	}
}

int main()
{
	const int numRows = 10;
	const int numCols = 10;
	char  maze[numRows][numCols] = {
			{'*','*','*','0','*','*','*','*','*','*'},
			{'*','*','*','0','*','*','*','*','*','*'},
			{'*','0','0','0','0','0','0','0','0','*'},
			{'*','0','*','0','*','0','*','*','0','0'},
			{'*','0','*','0','*','0','*','*','0','*'},
			{'*','0','*','0','*','0','*','*','0','*'},
			{'*','0','0','0','0','0','0','0','0','*'},
			{'*','*','*','0','*','0','*','*','0','*'},
			{'*','0','0','0','*','0','0','0','0','*'},
			{'*','0','*','*','*','*','*','*','*','*'} };
	char c = 'a';
	//place walker actors
	placeActors(maze, '2', 5);
	//place plants in the maze
	placeActors(maze, 'y', 3);
	int plantCount = 0;
	while (c != 'x')
	{
		drawMaze(maze, numRows, numCols);
		cin >> c;
		//find all wakers and move them
		for (int row = 0; row < numRows; row++) {
			for (int col = 0; col < numCols; col++) {
				if (maze[row][col] == '2') {
					moveWalkers(maze, row, col);
				}
			}
		}
		//after walkers have been moved and changed to t, we need to convert them back
		for (int row = 0; row < numRows; row++) {
			for (int col = 0; col < numCols; col++) {
				if (maze[row][col] == 'T') {
					maze[row][col] = '2';
				}
			}
		}
		//any plants left in the maze we need to make them grow
		for (int row = 0; row < numRows; row++) {
			for (int col = 0; col < numCols; col++) {
				if (maze[row][col] <= 'y' && maze[row][col] >= 'a') {
					plantGrowth(maze, row, col);
				}
				
			}
		}
		//count plants left in the maze
		for (int row = 0; row < numRows; row++) {
			for (int col = 0; col < numCols; col++) {
				if (maze[row][col] <= 'y' && maze[row][col] >= 'a') {
					plantCount++;
				}
			}
		}
		//end game
		if (plantCount == 0) {
			cout << "\n \n" << "All plants are dead, life simulation complete" << endl;
			drawMaze(maze, numRows, numCols);
			c = 'x';
		}
		plantCount = 0; //plantcount reset after each iteration
	}
}