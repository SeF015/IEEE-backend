#include "bits/stdc++.h"
using namespace std;
int main(int argc, char const *argv[]) {
  int Size, FSumDig=0, SSumDig=0, dif, temp;
  int mat[10][10];
  std::cin >> Size;
  temp = Size-1;
  for (int i = 0; i < Size; i++) {
    for (int j = 0; j < Size; j++) {
      std::cin >> mat[i][j];
    }
  }

  for (int i = 0; i < Size; i++) {
    for (int j = 0; j < Size; j++) {
      if (i==j) {
        FSumDig+=mat[i][j];
      }
      if (Size-1-j==i) {
        SSumDig+=mat[i][j];
      }



    dif = FSumDig - SSumDig;
    std::cout << abs(dif) << '\n';

  return 0;
}
