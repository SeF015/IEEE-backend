#include "bits/stdc++.h"
using namespace std;


int main()
{

    int s;
    cin>>s;
    int r = s;
    while(r!=1&&r>0)
    {
        int w = r;
        r = 0;
        r += (w%10)^2;
    }
    if(r==1)
    {
        cout<<"true";
    }
    else
    {
        cout<<"false";
    }
}
