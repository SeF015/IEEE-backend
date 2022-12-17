#include "bits/stdc++.h"
using namespace std;


int library_fine(int returned[], int dua[]);
//precondition takes two arguments returned date and the dua date
//postcondiont return the value of fine if it's existed

void input(int returned[], int dua[]);

int main(int argc, char const *argv[]) {
  int returned[3],dua[3];
  input(returned,dua);
  std::cout << library_fine(returned,dua) << '\n';
  return 0;
}

int library_fine(int returned[], int dua[]){
  if(returned[2]-dua[2]<0)
        return 0;
    else if(returned[2]-dua[2]>0)
        return 10000;
    else if(returned[1]-dua[1]<0)
        return 0;
    else if(returned[1]-dua[1]>0)
        return 500*(returned[1]-dua[1]);
    else if(returned[0]-dua[0]>0)
        return 15*(returned[0]-dua[0]);
    else
        return 0;
}

void input(int returned[], int dua[]){
  for (int i = 0; i < 3; i++)
    std::cin >> returned[i];

    for (int i = 0; i < 3; i++) {
      std::cin >> dua[i];
    }

}
