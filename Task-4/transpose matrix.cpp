#include "bits/stdc++.h"
using namespace std;
 int main(int argc, char const *argv[]) {
   int Size;
   cin >> Size;
   int mat[Size][Size];
   for (int i = 0; i < Size; i++) {
     for (int j = 0; j < Size; j++)
       cin >> mat[i][j];
   }

   for (int i = 0 ; i < Size; i++) {
     for (int j = Size-1; j >= 0; j--) {
       cout <<mat[j][i]<< ' '  ;
     }
     cout << "\n ";
   }
   return 0;
 }
