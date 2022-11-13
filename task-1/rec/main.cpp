#include <bits/stdc++.h>
using namespace std;
 int main(int argc, char const *argv[]) {
  /* code */int lin , wid, area, perim;
  cin >> lin;
  cin >> wid;
  area= lin*wid;
  perim= (lin + wid)*2;
  std::cout << area << '\n';
  std::cout << perim << '\n';
  return 0;
}
