#include<bits/stdc++.h>
using namespace std;

vector<vector<string>> group_of_anagrams(vector<string>& str);
//preconditon takes one argument list of strings
//postconditon return 2D group of anagrams

void fill_list(vector<string>& str,int Size);
//preconditon takes 2 arguments list and its Size
//postconditon the list had filled

int main()
{
vector<string> str ;
int sizee;
vector<vector<string>> ans;
cin >> sizee;
  fill_list(str, sizee);
  ans=group_of_anagrams(str);
   cout<<"The grouped anagrams are as follows:"<<endl;
   for (int i = 0; i <ans.size(); i++) {
        for (int j = 0; j < ans[i].size(); j++)
            cout << ans[i][j] << " ";
        cout << endl;
    }
}

vector<vector<string>> group_of_anagrams(vector<string>& str) {
        vector<vector<string> > temp;
        unordered_map<string,vector<string> > record;
        for(int i=0;i<str.size();i++){
                string val=str[i];
                sort(val.begin(),val.end());
                record[val].push_back(str[i]);
        }
        for(auto i:record){
            temp.push_back(i.second);
        }
        return temp;
    }

    void fill_list(vector<string>& str,int Size){
      string temp;
      for (int i = 0; i < Size; i++) {
        cin >> temp;
        str.push_back(temp);
      }
    }
