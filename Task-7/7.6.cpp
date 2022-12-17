#include "bits/stdc++.h"
using namespace std;
int main() {
    
    long long p;
    long long q;
    cin>>p;
    cin>>q;
    vector<long long> res;
    for(long long i = p; i <= q; ++i){
        long long square = i*i;
        string s = to_string(square);
        int digit = s.size()/2;
        if(digit == 0){
            if(i == square)
                res.push_back(i);

            continue;
        }
        if(stoll(s.substr(0,digit))+stoll(s.substr(digit,s.size()-digit)) == i)
            res.push_back(i);

           }
    if(res.size()>0){
           for(int i=0; i<res.size(); ++i){
               cout<<res[i]<<" ";
           }
        cout<<endl;}
    else{
        cout<<"INVALID RANGE"<<endl;
    }
           return 0;
}
