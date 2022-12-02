#include <bits/stdc++.h>

using namespace std;


#define endl '\n'
#define all(x) x.begin(),x.end()

typedef long long ll;

void fast()
{
    ios_base::sync_with_stdio(false);
    cin.tie(NULL);
    cout.tie(NULL);
}

void solve()
{
    string s;
    cin>>s;
    const string t = "hello";
    int x =0;
    int i =0;                        // ahhellllloou
    while(true)
    {
        if(x==5||i==s.size())
        {
            break;
        }
        if(s[i]==t[x])
        {
            x++;
        }
        i++;
    }

    if(x==5)
    {
        cout<<"YES";
    }
    else
    {
        cout<<"NO";
    }
}
int main()
{

    fast();

    //CODE HERE

    ll t=1;

   // cin>>t;
    while(t--)
    {
        solve();
    }

    return 0;
}
___
