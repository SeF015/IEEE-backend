#include "bits/stdc++.h"
using namespace std;


int minimumDistance(int arr[], int Size);
//preconditon takes two arguments lsit and its Size
//postconditon return the minimum distance

void fill_list(int arr[], int Size);
//preconditon takes two arguments lsit and its Size
//postconditon the list had filled


int main(int argc, char const *argv[]) {
  int Size;
  cin >> Size;
  int arr[Size];
  fill_list(arr, Size);
cout << minimumDistance(arr, Size);

  return 0;
}

int minimumDistance(int arr[], int Size){
  map<int,int> record;
  int min_distance = INT_MAX ;
  int previous_index = 0, current_index = 0;
  for (int i = 0; i < Size; i++) {
    if (record.find(arr[i]) != record.end()) {
      current_index = i;
      previous_index = record[arr[i]];
      min_distance = min((current_index - previous_index),min_distance);
    }
    record[arr[i]] = i;
  }
  return (min_distance == INT_MAX ? -1 : min_distance);
}

void fill_list(int arr[], int Size){
  for (int i = 0; i < Size; i++) {
    cin >> arr[i];
  }
}
