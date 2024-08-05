#include <iostream>  
#include <conio.h>  
using namespace std;  
int main ()  
{  
     
    int arr[100], startingpoint, mid, end, i, num, search;  
      
    cout << " Define the size of the array: " << endl;  
    cin >> num; 
        cout << " Enter the values : " << endl;  

    for (i = 0; i < num; i++)  
    {  
        cout << " arr [" << i << "] = ";  
        cin >> arr[i];  
    }  
      
    startingpoint = 0;  
    end = num - 1; 
    cout << " Define a value to be searched from sorted array: " << endl;  
    cin >> search;  
     
    while ( startingpoint <= end)  
    {  
        mid = ( startingpoint + end ) / 2; 
        if (arr[mid] == search)  
        {  
            cout << " Element is found at index " << (mid + 1);  
            exit (0);  
        }   
        else if ( search > arr[mid])  
        {  
            startingpoint = mid + 1;  
        }  
          
        else if ( search < arr[mid])  
        {  
            end = mid - 1;  
        }  
    }  
    cout << " Number is not found. " << endl;  
    return 0;  
}