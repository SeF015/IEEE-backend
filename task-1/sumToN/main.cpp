#include "bits/stdc++.h"
int main(int argc, char const *argv[]) {
  int NUM,  sum=0;
  std::cin >> NUM;
  for (int i = 0; i <= NUM; i++) {
    sum += i;
  }
  std::cout << sum << '\n';
  return 0;
}
