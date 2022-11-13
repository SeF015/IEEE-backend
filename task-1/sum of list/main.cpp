#include "bits/stdc++.h"

int forsum(int lst[],int n);
//precondition the function takes to arguments an array and its size
//postcondition the function return the sum of the list of elements with the for loop
int whsum(int lst[],int n);
//precondition the function takes to arguments an array and its size
//postcondition the function return the sum of the list of elements with the while loop
int recsum(int lst[],int n);
//precondition the function takes to arguments an array and its size
//postcondition the function return the sum of the list of elements with the recursion

int main(int argc, char const *argv[]) {
  int size, sum1=0/*for sum*/, sum2=0/*while sum*/, sum3=0/*rec sum*/;

  std::cin >> size;//the size of the list
  int list[size];
  //loop to add items to the list
   for (int i = 0; i < size; i++) {
     std::cin >> list[i];
   }
   sum1 = forsum(list,size);
   sum2 = whsum(list,size);
   sum3 = recsum(list,size);
   std::cout << sum1 << '\n';
   std::cout << sum2 << '\n';
   std::cout << sum3 << '\n';
     return 0;
  }

//---------------------------------------------
int forsum(int lst[],int n){
  int tsum=0;
  for (int i = 0; i < n; i++) {
    tsum += lst[i];
  }
  return tsum;
}

//------------------------------------
int whsum(int lst[],int n){
  int tsum=0, coun=0;
  while (n--) {
    tsum += lst[coun];
    coun++;
  }
   return tsum;
}
//--------------------------------------------
int tsum=0;
int recsum(int lst[],int n){

  if (n>=0) {
    tsum += lst[n-1];
    n--;
    recsum(lst,n);
  }
  return tsum;

}
