#include "bits/stdc++.h"
using namespace std;

int times(int);
//preconditon takes 1 argument number
//postconditon return the number of number of times

int main(int argc, char const *argv[])
{
    int num;
    cin>>num;
    times(num);
    return 0;
}
bool Comp(char a , char b)
{
    return a > b;
}
int times(int num)
{
    string value = to_string(num);
    int ASC = 0, DESC = 0, coun=0;
    while(num != 6174)
    {

        sort(value.begin() , value.end());
        ASC = stoi(value);
        sort(value.begin() , value.end(), Comp);
        DESC = stoi(value);
        num = DESC - ASC;
        value = to_string(num);
        if(value.size()<4){
          value.append("0");
        }
        coun++;
    }
    cout<<coun;

}
