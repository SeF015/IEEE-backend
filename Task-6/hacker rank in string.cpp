#include "bits/stdc++.h"
using namespace std;


string found(string s);
//precondition given a string
//postconfition return yes if u found hacker rank in the string

int main(int argc, char const *argv[]) {
  int test_case;
  cin >> test_case;
  while (test_case--) {
    string value;
    cin >> value;
    std::cout << found (value)<< '\n';
  }
  return 0;
}


string found(string s){
  vector<char> v ={'k','n','a','r','r','e','k','c','a','h'} ;
  for (int i = 0; i < s.size(); i++) {
    if (v.size() == 0)
      break;
    else if (s[i] == v[v.size()-1])
      v.pop_back();
  }
  if (v.size() == 0)
    return "YES";
  else
    return "NO";

}
