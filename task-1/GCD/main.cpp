#include "bits/stdc++.h"
int GcD(int n1, int n2);
  //precondition takes two arg num 1 and num 2
  //postcondition calce their GCD by keep getting the reminder of the 2 numbers till 0
int main(int argc, char const *argv[]) {
  int num1,num2;
  std::cin >> num1 >>num2;
  std::cout << GcD(num1,num2) << '\n';
  return 0;
}
int GcD(int n1, int n2){
  if (n2 != 0)
       return GcD(n2, n1 % n2);
    else
       return n1;
}
