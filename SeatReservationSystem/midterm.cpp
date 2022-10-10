// midterm.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

#include <iostream>
#include <cstdlib>
#include <string>

using namespace std;
char result[5][6] = { {'E', 'E', 'E', 'E', 'E', 'E'}, {'E', 'E', 'E', 'E', 'E', 'E'},
{'E', 'E', 'E', 'E', 'E', 'E'}, {'E', 'E', 'E', 'E', 'E', 'E'}, {'E', 'E', 'E', 'E', 'E', 'E'} };


void instruction();
int rowN();
int colN();
void reservationList(int, int);

int main()
{
    //declare variables;
    int rowPosition, colPosition;
    string answer;

    //calling instruction function(void)
    instruction();

    do
    {
        //assigning value to variable got from calling rowN function
        rowPosition = rowN();

        //assigning value to variable got from calling colN function
        colPosition = colN();

        //passing rowPosition and colPosition values to reservationList function which have 2 integer parameters
        reservationList(rowPosition, colPosition);

        //asking user if he wants to reserve another ticket
        cout << "\nDo you want to reserve more seats? (Y/N): ";
        cin >> answer;
    } while ((answer == "Y") || (answer == "y"));

    //displaying thank you
    cout << "\n";
    if ((answer == "N") || (answer == "n"))
    {
        for (int z = 1; z <= 6; z++)
        {

            for (int x = 1; x <= z - 1; x++)
            {
                cout << "Thank You";
            }

            cout << "\n";
        }

        for (int q = 5; q > 1; q--)
        {
            for (int w = q; w > 1; w--)
            {
                cout << "Thank You";
            }
            cout << "\n";
        }
    }
}

//this void function just display a message
void instruction()
{
    cout << "Welcome to Seat Reservation System";
}


//this function asks user for row number
int rowN()
{
    //declare variable
    int row;

    //asking user to enter the row number
    cout << "\n";
    cout << "\nEnter the row using numbers from 1 to 5: " << endl;
    cin >> row;

    //checking user input valid row number
    while (true)
    {
        if ((row < 1) || (row > 5))
        {
            cout << "\nEnter the row number again: ";
            cin >> row;
        }
        else
        {
            //returning value to main function
            return row;
        }
    }
}


//this function asks user for column letter
int colN()
{
    //declare variables
    char column, colNumber;

    //asking user to enter the column letter
    cout << "\nEnter the column letter by entering letters A to F: " << endl;
    cin >> column;

    //checking user input valid column letter
    while (true)
    {
        if ((column == 'A') || (column == 'B') || (column == 'C') || (column == 'D') || (column == 'E') || (column == 'F'))
        {
            break;
        }
        else
        {
            cout << "\nEnter the column letter again: ";
            cin >> column;
        }
    }

    //giving position to column letter selected by user
    if (column == 'A')
    {
        colNumber = 1;
    }
    else if (column == 'B')
    {
        colNumber = 2;
    }
    else if (column == 'C')
    {
        colNumber = 3;
    }
    else if (column == 'D')
    {
        colNumber = 4;
    }
    else if (column == 'E')
    {
        colNumber = 5;
    }
    else
    {
        colNumber = 6;
    }

    //returning value to main function
    return colNumber;
}

//this function displays the final reservation list
//takes rowPosition and colPosition as arguments
void reservationList(int rowNumber, int colNumber)
{
    //declare variables
    int arrRow, arrCol;
    string rowValues[5] = { "1", "2", "3", "4", "5" };
    string columnValues[6] = { "A", "B", "C", "D", "E", "F" };

    //assigning rowNumber and colNumber value to two dimensional array named result
    //decreases one from rowNumber and colNumber so that position of array becomes corrrect
    arrRow = rowNumber - 1;
    arrCol = colNumber - 1;

    //condition to check if ticket already reserved or not
    if (result[arrRow][arrCol] == 'X')
    {
        cout << "\nERROR!Ticket already reserved\n";
        cout << "\n";
        return;
    }
    else
    {
        result[arrRow][arrCol] = 'X';

        //displaying result
        cout << "\n";
        cout << "\t" << "\t" << "Seat Reservation System\n";
        cout << "\t" << "*************************************\n";
        cout << "\n";

        //displaying column letters as heading
        for (int a = 0; a < 6; ++a)
        {
            cout << "\t" << columnValues[a];
        }

        cout << "\n";

        for (int i = 0; i < 5; ++i)
        {
            cout << rowValues[i] << "\t";

            for (int j = 0; j < 6; ++j)
            {
                cout << result[i][j] << "\t";
            }

            cout << "\n";
        }

    }

}

