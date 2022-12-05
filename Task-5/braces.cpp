#include "bits/stdc++.h"
using namespace std;


int main()
{
    bool flag = false;
    string s;
    cin>>s;
    int x = s.size();
    for(int i=0;i<x;i++)
    {
        if(s[i]=='('&&s[i+1]==')')
        {
            flag = true;
        }
        else if(s[i]=='['&&s[i+1]==']')
        {
            flag = true;
        }
       else if(s[i]=='{'&&s[i+1]=='}')
        {
            flag = true;
        }
    }
    if(flag == true)
    {
        cout<<"true";
    }
    else
    {
        cout<<"false";
    }


}
