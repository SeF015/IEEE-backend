#include "bits/stdc++.h"

using namespace std;
int main() {
    int test_case, budget, bar_cost, exchange_wra;
    cin >> test_case;
    while (test_case--) {
        cin >> budget >> bar_cost >> exchange_wra;
        int counter = budget / bar_cost;
        int num_wrappers = counter;

        while (num_wrappers >= exchange_wra) {
            num_wrappers -= exchange_wra;
            counter++;
            num_wrappers++;
        }
        cout << counter << endl;
    }
    return 0;
}
