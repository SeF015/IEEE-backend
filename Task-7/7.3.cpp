class Solution {
public:
    vector<vector<int>> kClosest(vector<vector<int>>& points, int k) {
           priority_queue<vector<int>> q;
        for(auto& point:points){
            int x = point[0],y = point[1];
            int Distance = x*x + y*y;//calculate the euclidean distance of the current point from the origin.
            q.push({Distance,x,y});//distance along with coordinates in the priority queue
            if(q.size()>k){//pop out the coordinate with maximum euclidean distance from the origin
                q.pop();
            }
        }
        vector<vector<int>> ans;
        while(!q.empty()){
            ans.push_back({q.top()[1],q.top()[2]});
            q.pop();
        }
        return ans;
    }
};
