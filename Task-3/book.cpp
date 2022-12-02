#include <bits/stdc++.h>

using namespace std;

int main()
{
    int n , p;
    int c = 0;
    cin>>n>>p;
    int a = p;
    for(int i=1;i<a;i+=2)
    {
        p = p-2;
        c++;
    }
    cout<<c;
}
