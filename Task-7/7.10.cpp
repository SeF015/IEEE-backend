#include<bits/stdc++.h>
using namespace std;
int main()
{
    int n=3;
    int a[3][3],b[3][3];
    for(int i=0; i<n; i++)
    {
        for(int j=0; j<n; j++)
        {
            cin>>a[i][j];
            b[i][j]=1;
        }
    }
    for(int i=0; i<n; i++)
    {
        for(int j=0; j<n; j++)
        {
            if(a[i][j]%2==0)
            {}
            else
            {
                if(b[i][j]==1)
                    b[i][j]=0;

                else
                    b[i][j]=1;

                if(i+1<n)
                {
                    if(b[i+1][j]==1)
                        b[i+1][j]=0;

                    else
                        b[i+1][j]=1;
                }
                if(j+1<n)
                {
                    if(b[i][j+1]==1)
                        b[i][j+1]=0;

                    else
                        b[i][j+1]=1;
                }
                if(j-1>=0)
                {
                    if(b[i][j-1]==1)
                        b[i][j-1]=0;

                    else
                        b[i][j-1]=1;
                }
                if(i-1>=0)
                {
                    if(b[i-1][j]==1) b[i-1][j]=0;
                    else b[i-1][j]=1;
                }
            }
        }
    }
    for(int i=0; i<n; i++)
    {
        for(int j=0; j<n; j++)
            cout<<b[i][j];
        cout<<endl;
    }
}
