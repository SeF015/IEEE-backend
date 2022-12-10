#include "bits/stdc++.h"
using namespace std;

int main(int argc, char const *argv[]) {
  int Size, num_rout, num_queries;
  cin >> Size >> num_rout >> num_queries;
  int arr[Size];
  for (int i = 0; i < Size; i++)
    cin >> arr[i];
  num_rout %= Size;
  while (num_queries--) {
    int index;
    cin >> index;
    index -= num_rout;
    if (index < 0)
      index += Size;
    cout << arr[index] << '\n';
  }

  return 0;
}
