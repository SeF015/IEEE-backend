#include "bits/stdc++.h"
using namespace std;

bool exisst(int within, int value );
bool pos(int within, int value, int in);


int main(int argc, char const *argv[]) {
  srand(time(NULL));
  int randd= rand()%1000;
  cout<< "Random: "<< randd<<endl;
  int input;
  cin >> input;
  while(input!=randd)
  {
    int hit=0, miss=0;
    for (int i = 0; i < 3; ++i) {
      int temp=input%10;
      if (exisst(randd,temp)==true&& pos(randd,temp,i)==true) {
        ++hit;
      }
      else if (exisst(randd,temp)==true&& pos(randd,temp,i)==false) {
        ++miss;
      }
      input/=10;
    }
    cout << "hit = " << hit << " miss= " << miss<<endl;
    cin >> input;
  }
  return 0;
}

bool exisst(int within, int value ){
  for (int i = 1; i <= 3; ++i) {
    if (within%10==value) {
      return true;
    }
    else
      within/=10;
  }
  return false;
}

bool pos(int within, int value, int in){
  int dig = (within/(int) pow(10,in))%10;
  if (dig==value) {
    return true;
  }
  else
  return false;
}
