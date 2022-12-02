
/*Sorting algorithm is stable if for all indices i and j such that the key A[i] equals key A[j], if record
R[i] precedes record R[j] in the original file, record R[i] precedes record R[j] in the sorted list.*/
//Stable: Maintains relative order of input data if the keys are same
#include "bits/stdc++.h"
using namespace std;

void insrtaionSort(int arr[],int Size);
//precondition takes two arguments array and its Size
//postcondition sorted array
void printArray(int arr[], int n)
{
    int i;
    for (i = 0; i < n; i++)
        cout << arr[i] << " ";
    cout << endl;
}

int main(int argc, char const *argv[]) {
  int arr[] = { 12, 11, 13, 5, 6 };
   int N = sizeof(arr) / sizeof(arr[0]);
   insrtaionSort(arr, N);
   printArray(arr, N);

  return 0;
}

void insrtaionSort(int arr[],int Size){
  int i , j , v;
  for (int i = 1; i <= Size-1; i++) {
    /* code */
    v = arr[i];
    j = i;
    while (arr[j-1] > v && j >= 1) {
      /* code */
      arr[j] = arr[j-1];
      j--;
    }
    arr[j] = v;
  }
}
/*Worst case complexity: Θ(n^2)
Best case complexity: Θ(n)
Average case complexity: Θ(n^2)
Auxiliary Space: O(1)*/
