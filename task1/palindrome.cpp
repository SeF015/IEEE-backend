#include "bits/stdc++.h"
using namespace std;
int main()
{
  int num ,digt,rev=0,prerev;
  cout<<"Enter the Number=";
  cin>>num;
 prerev = num;
 while(num>0)
{
 digt = num % 10;
 rev = (rev * 10) + digt;
 num = num / 10;
}

std::cout << rev << '\n';
if(prerev == rev)
cout << "YES";
else
cout<<"NO";   
  return 0;
}
