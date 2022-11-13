#include "bits/stdc++.h"
 int main(int argc, char const *argv[]) {
  /* code */int n,fact=1;
  std::cin >> n;//the number u want to get factorial to it
  //below is a loop to calce the factorial
  for (int i = 1; i <= n; i++) {
    fact *= i;
  }
  std::cout << fact << '\n';
  return 0;
}
