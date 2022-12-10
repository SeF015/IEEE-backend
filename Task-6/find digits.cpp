#include "bits/stdc++.h"
using namespace std;

int get_count (string num, int digit );
//preconditon takes two arguments the number and the devisor digit
//postcondiont return the number of valid devisors

int main(int argc, char const *argv[]) {
  int test_case, counter = 0;
  string number;
  std::cin >> test_case;
  while (test_case--) {
    std::cin >> number;
    counter = 0;
    for (int i = 0; i < number.size(); i++)
      counter += get_count(number, number[i] - '0');

    std::cout << counter << '\n';

  }
}

int get_count (string num, int digit ){
  if (!digit)// to avoide dividing by 0
    return 0;
  int int_num = 0 ;// to save the value of num after casting it
  for (int i = 0; i < num.size(); ++i) {
    int_num *= 10;
    int_num += (num[i] - '0');
    int_num %= digit;
  }
  if (!int_num)
    return 1;
  return 0;

}
