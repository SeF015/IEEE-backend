#include "bits/stdc++.h"
using namespace std;
struct Node{
  int data;
  Node *next;
};

void push(Node** head_ref, int new_data);
//precondition this function takes 2 arguments pointer to hold the head pointer and the new new_data
//postcondition puch a new data to the front of the linked list
void appened(Node** head_ref, int new_data);
//precondition this function takes 2 arguments pointer to hold the head pointer and the new new_data
//postcondition add a new node to the end of the linked list
void displaylst(Node* itra) {
  while (itra != NULL) {
    std::cout << "   " <<itra->data ;
    itra = itra->next;
  }

}

int main() {
    Node* lst= NULL;
    int Num, data;
    char ans='8';
    while(ans!='4'){
    std::cout << "\t \t \t Chose option \n " << endl;
    std::cout << "\t 1- front" << '\n';
    std::cout << "\t 2- at the end" << '\n';
    std::cout << "\t 3- display" << '\n';
    std::cout << "\t 4- exit \n";
    std::cin >> ans;
    switch (ans) {
      case '1':
          std::cout << "Enter number of elements u  want to add  " ;
          std::cin >> Num;
          while (Num--) {
              std::cout << "Enter the data  " ;
              std::cin >> data;
              push(&lst,data);
            }break;
      case '2':
      std::cout << "Enter number of elements u  want to add  " ;
      std::cin >> Num;
      while (Num--) {
          std::cout << "Enter the data  " ;
          std::cin >> data;
          appened(&lst,data);
        }
      case '3':
          cout<< endl;
          displaylst(lst);
          cout<< endl;
          break;
    }


    }



  return 0;
}

void push(Node** head_ref, int new_data){
  Node* new_node = new Node();
  new_node->data = new_data;
  new_node->next = (*head_ref);
  (*head_ref)=new_node;
}


void appened(Node** head_ref, int new_data){
  Node* new_node = new Node();
  Node* itra = (*head_ref);
  new_node->data = new_data;
  new_node->next = NULL;
  if (*head_ref == NULL)
    {
        *head_ref = new_node;
        return;
    }

    while (itra->next != NULL) {
      itra = itra->next;
    }

    itra->next = new_node;
    return;
}
