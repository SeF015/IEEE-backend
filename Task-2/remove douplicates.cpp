#include <bits/stdc++.h>
using namespace std;

int main(int argc, char const *argv[]) {
  /* code */
  set<int>list;
  int n;
  std::cin >> n;
  int arr[n];
  for (int i = 0; i < n; i++) {
    std::cin >> arr[i];
  }
  for(int i = 0; i < n; i++) {
    list.insert(arr[i]);
  }

  for (auto& itr : list ) {
    std::cout << itr ;
  }
  return 0;
}
