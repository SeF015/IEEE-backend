#include <bits/stdc++.h>
using namespace std;

int main()
{
    bool flag = false;
    string s;
    cin>>s;
    int x = s.size();                 // abba
    for(int i=0; i<x/2; i++)
    {
        if(s[i]!=s[x-1-i])
        {
            flag = true;
        }
    }
    if(flag)
    {
        cout<<"no";
    }
    else
    {
        cout<<"yes";
    }

}
