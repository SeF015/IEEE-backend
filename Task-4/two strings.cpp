#include <bits/stdc++.h>

using namespace std;

int main()
{
    bool flag = false;
    string s1, s2;
    cin>>s1>>s2;
    reverse(s1.begin(),s1.end());
    for(int i=0; i<s2.size(); i++)
    {
        if(s2.substr(i,s1.size())==s1)
            flag = true;
        }
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
    return 0;
}
