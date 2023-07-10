#include <iostream>
using namespace std;

/**
* main - program that determines a student's grade
* @params: quiz, mid-term and final scores
* @print: grade based on the average score
* Student : Whitney
*/

int main(void)
{
	int quiz, midterm, final_score, average; // Initialize variables
	char grade; // Variable to store grade

	// Take user input for quiz score
	cout << "Enter quiz score: ";
	cin >> quiz; // console input

	// Take user input for midterm score
	// Notice the line break
	cout << "\nEnter midterm score: ";
	cin >> midterm; // console input

	// Take user input for final score: Note the line break
	cout << "\nEnter final score: ";
	cin>> final_score; // Console input

	average = (quiz + midterm + final_score) / 3;

	if (average >= 90) // If average is 90 or above
	{
		grade = 'A';
	}
	else if (average >= 70 && average < 90) // if average is between 70 and 90
	{
		grade = 'B';
	}
	else if (average >= 50 && average < 70) // if average is between 50 and 70
	{
		grade = 'C';
	}
	else if (average < 50) // if average is below 50
	{
		grade = 'F';
	}

	cout << "\nYour grade is: " << grade << endl; // Print the grade to the console
	return (0); // Terminate the program
}
