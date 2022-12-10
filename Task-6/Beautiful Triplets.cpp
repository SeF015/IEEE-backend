#include<iostream>
using namespace std;
int main()
{
	int Size, value;
	cin >> Size >> value;
	int* arr = new int[Size];
	for (int i = 0; i < Size; i++)
		cin >> arr[i];

    int triplets = 0;

    for (int i = 0; i < Size; i++) {
        for (int j = i + 1; j <Size; j++) {
            if (arr[j] - arr[i] == value) {
                for (int k = j + 1; k < Size; k++) {
                    if (arr[k] - arr[j] == value) {
                        triplets++;
                        break;
                    }
                }
            }
        }
    }
    cout << triplets << endl;

	return 0;
}
