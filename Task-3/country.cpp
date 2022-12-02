#include <iostream>

using namespace std;

int main()
{

    int n , m;
    cin>>n>>m;
    int a1[n] , a2[m];
    int c = 0 , d = 0 , r = 0;
    for(int j=0;j<m;j++)
    {
        cin>>a2[m];
    }
    for(int i=0;i<n/2;i++)
    {

        d = abs(a1[i] - a2[i]);
        c++;
        for(int j = i;j>n/2&&j<n;j++)
        {
            d = abs(a1[j] - a2[j]);
            r++;
        }
    }
    cout<<max(c,r);
}
