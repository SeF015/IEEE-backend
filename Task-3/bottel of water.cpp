#include <bits/stdc++.h>

using namespace std;

int main()
{
    bool flag = false;
    int n;
    cin>>n;
    int a[n] , b[n];
    int sum1 = 0 , sum2 = 0;
    for(int i=0;i<n;i++)
    {
        cin>>a[i]>>b[i];
        sum1 += a[i];

    }
    int x , y;
    for(int i=0;i<n;i++)
    {
        x = max(b[i],b[i+1]);
        if(x==b[i])
        {
            b[i] = 0;
        }
    }
    for(int i=0;i<n;i++)
    {
        y = max(b[i],b[i+1]);
    }
    sum2 = x + y;
    for(int i=0;i<n;i++)
    {
        if(sum1<=sum2)
        {
            flag = true;
        }
    }
    if(flag == true)
    {
        cout<<"Yes";
    }
    else
    {
        cout<<"No";
    }

}
