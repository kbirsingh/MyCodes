#include <iostream>
#include <fstream>
#include <map>
#include <string>
#include <iomanip>
#include <vector>

using namespace std;

void readafile();
int writeafile();
void add();
void edit();
void del();
void print();

//declare map as global
map<string, string>phonebook = {
        {"Aman", "343243"},
        {"Gruela", "33243"},
        {"Jessic Rod", "34343"},
        {"Johnny", "34343"},
        {"Zanip", "4345454"},
};

int main()
{
    //declare variables
    string response, programExit;

    writeafile();
    readafile();

    do
    {
        //asking the user whether he wants to add, edit, delete, print or exit
        cout << "\nA to Add, E to Edit, D to Delete, P to Print, Ex to exit: ";
        cin >> response;
        programExit = response;

        //loop to validate user enter correct response
        while (true)
        {
            if (response == "A" || response == "E" || response == "D" || response == "P" || response == "Ex")
            {
                break;
            }
            else
            {
                cout << "\nWrong Input! Enter Again: ";
                cin >> response;
            }
        }

        //if, else-if statements used to do task according to what response we get from user
        //when user wants to enter new record to phone book data
        if (response == "A")
        {
            add();
        }
        //when user wants to edit phone number in phone book
        else if (response == "E")
        {
            edit();
        }
        //when user wants to delete record in phone book
        else if (response == "D")
        {
            del();
        }
        //when user wants to see the record. it will display phone book data.
        else if (response == "P")
        {
            print();

        }
        //when user wants to exit
        else if (response == "Ex")
        {
            cout << "Exit";
        }

    } while (programExit != "Ex");
}

//function to write a file
int writeafile()
{
    //declare a file object
    fstream file;

    //declare variable
    string data;

    //open the file
    file.open("Phonebook.txt", ios::out);

    //validation to check if file opens
    if (!file) {
        cout << "Error in creating a file!!!!!!!!!!";
        return 0;
    }

    //writing to the file
    file << setw(27) << "Phone Book" << "\n";
    file << "********************************************" << endl;

    file << setw(20) << "Name" << "\t" << "Telephone Number" << endl;
    //loop to write values of map inside file
    for (pair<string, string> element : phonebook)
    {
        file << setw(20) << element.first << "\t" << element.second << endl;
    }

    //closing the file opened for writing
    file.close();
}

//function to read a file
void readafile()
{
    //declare a file object
    fstream file;
    //open the file
    file.open("Phonebook.txt", ios::in);

    string tp;
    //read the file line by line
    while (getline(file, tp))
    {
        cout << tp << "\n";
    }

}

//function to add new records to phone book
void add()
{
    //declare variables
    string nameToAdd, numberToAdd;

    //ask user to enter name to add to the phonebook
    cout << "\nEnter the name of person: ";
    cin >> nameToAdd;

    //loop to see if person already exist in phone book or not
    for (pair<string, string> element : phonebook)
    {
        //if person with that name already exists
        if (nameToAdd == element.first)
        {
            cout << "\nDouble entry not allowed!" << endl;
            cout << "The person with this name is already in phone book." << endl;
            cout << "\nEnter name again: ";
            cin >> nameToAdd;
        }
    }

    //ask user to enter number to add to the phonebook
    cout << "Enter the telephone number: ";
    cin >> numberToAdd;

    //updating new records to the map
    phonebook.insert(pair<string, string>(nameToAdd, numberToAdd));

    cout << "Records updated......\n";

    //writing the values again to the text file named phone book
    writeafile();

    //reading the phone book text file after updating records
    readafile();

}


//function to edit telephone number of phone book
void edit()
{
    //declare variables
    string personName, editNumber;
    bool already = false;

    //ask user to enter name of the person whom number want to edit
    cout << "\nEnter the name of person: ";
    cin >> personName;

    do {
        for (pair<string, string> element : phonebook)
        {
            if (element.first == personName) {
                cout << "done";
                already = false;
                break;
            }
            else {
                already = true;
            }
        }

        if (already == true) {
            cout << "Enter Value again: ";
            cin >> personName;
        }

    } while (already == true);

    phonebook.erase(personName);

    cout << "Enter the telephone number: ";
    cin >> editNumber;

    //updating new records to the map
    phonebook.insert(pair<string, string>(personName, editNumber));

    cout << "Records updated......\n";

    //writing the values again to the text file named phone book
    writeafile();

    //reading the phone book text file after updating records
    readafile();
}

void del() {
    //declare variables
    string personName, editNumber;
    bool already = false;

    //ask user to enter name of the person whom number want to edit
    cout << "\nEnter the name of person: ";
    cin >> personName;

    do {
        for (pair<string, string> element : phonebook)
        {
            if (element.first == personName) {
                cout << "done";
                already = false;
                break;
            }
            else {
                already = true;
            }
        }

        if (already == true) {
            cout << "Enter Value again: ";
            cin >> personName;
        }

    } while (already == true);

    //deleting the element
    phonebook.erase(personName);

    cout << "Records updated......\n";

    //writing the values again to the text file named phone book
    writeafile();

    //reading the phone book text file after updating records
    readafile();
}

void print() {
    int numberElement = 0;
    for (pair<string, string> element : phonebook)
    {
        ++numberElement;
    }

    cout << "The number of elements in the phonebook is " << numberElement << endl;

    readafile();

}
