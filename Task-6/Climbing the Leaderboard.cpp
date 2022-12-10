#include "bits/stdc++.h"
using namespace std;

vector<int> board;

int main(int argc, char const *argv[]) {
  int num_on_leaderBoard, num_of_games, player_score;
  cin >> num_on_leaderBoard;
  for (int i = 0; i < num_on_leaderBoard; i++) {
    cin >> player_score;
    board.push_back(player_score);
  }

  sort(board.begin(),board.end());//to sort the vector
  board.resize(distance(board.begin(),unique(board.begin(),board.end())));//to give the container new size after deleting consecutive duplicate
  cin >> num_of_games;
  while (num_of_games--) {
    cin >> player_score;
    cout << distance(upper_bound(board.begin(), board.end(), player_score),board.end()+1) << '\n';//to compare the player score with the values of the board to put it in the correct position
  }
  return 0;
}
