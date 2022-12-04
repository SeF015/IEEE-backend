#include "bits/stdc++.h"
using namespace std;

void fill_list(int arr[], int Size);
//preconditon takes two arguments lsit and its Size
//postconditon the list had filled

bool comp(const pair<int, int> a,
               const pair<int, int> b);

void mostFreq (int arr[], int Size, int numOf_val);
//preconditon takes 3 arguments nomber of most frequent , list of elements , its Size
//postconditon most frequent list had been filled

int main(int argc, char const *argv[]) {
  int Size, num ;
  cin >> Size >> num;
  int arr[Size];
  fill_list(arr,Size);
  mostFreq(arr,Size,num);
  return 0;
}

void fill_list(int arr[], int Size){
  for (int i = 0; i < Size; i++) {
    cin >> arr[i];
  }
}

bool comp(pair<int, int> a,
                pair<int, int> b)
{
  if (a.second == b.second)
      return a.first > b.first;

  return a.second > b.second;
}

void mostFreq (int arr[], int Size, int numOf_val){
  unordered_map <int, int> record;

  for (int i = 0; i < Size; i++)
    record[arr[i]]++;

  vector<pair<int, int>> vec(record.begin(),record.end());

   sort(vec.begin(), vec.end(), comp);
   for (int i = 0; i < numOf_val; i++)
 {
   cout << vec[i].first << " ";
 }
}
