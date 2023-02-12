#include <bits/stdc++.h>
using namespace std;
struct Node
{
    int data;
    Node* next;
    Node(int x)
    {
        data = x;
        next = NULL;
    }
};

void PrintLst(Node* head);
//precondition takes one argument which is a head for list
//postcondiont traverse and print the list

Node* mergeTwoSortedLists(Node* l1 , Node* l2);
//precondition takes two lists
//postcondiont return one sorted list

void push(Node** head_ref, int new_data);

int main(int argc, char const *argv[]) {
  Node* l1 = NULL;
  Node* l2 = NULL;


}

void PrintLst(Node* head){
  while (head!=NULL) {
    cout << head->data <<" ";
    head = head->next;
  }
}

Node* mergeTwoSortedLists(Node* list1 , Node* list2){
  Node *temp_head = new Node(-1);
  Node *pre_head = temp_head;
  while (list1 && list2) {
    if (list1->data < list2->data) {
      temp_head->next = list1;
      list1 = list1->next;
    }
    else{
      temp_head->next = list2;
           list2 = list2->next;
    }
    temp_head = temp_head->next;
  }
  temp_head-> next = (list1 ? list1 : list2);
  return pre_head->next;
}

void push(Node** head_ref, int new_data){
   Node* new_node = new Node();
   new_node->data = new_data;
   new_node->next = (*head_ref);
   (*head_ref) = new_node;
}
