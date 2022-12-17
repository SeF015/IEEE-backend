#include <bits/stdc++.h>

using namespace std;

struct student
{
    string name;
    double degree;
};
void insertionSort(student arr[], int n)
{
    int i, j;
    student key;
    for (i = 1; i < n; i++)
    {
        key.degree = arr[i].degree;
        key.name = arr[i].name;
        j = i - 1;
        while (j >= 0 && arr[j].degree > key.degree)
        {
            arr[j + 1].degree = arr[j].degree;
            arr[j + 1].name = arr[j].name;
            j = j - 1;
        }
        arr[j + 1].degree = key.degree;
        arr[j + 1].name = key.name;
    }
}


int main()
{
    int s;
    cin>>s;
    student st[s];
    for(int i=0;i<s;i++)
    {
        cin>>st[i].name;
        cin>>st[i].degree;
    }
    insertionSort(st,s);
    cout<<st[0].name<<endl<<st[1].name;

}
