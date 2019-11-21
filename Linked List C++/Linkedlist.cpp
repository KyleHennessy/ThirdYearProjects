//Kyle Hennessy
//C00227463
//Singly Linked List

#include <iostream>

//linked list node
class Item
{
public:
	int data;
	Item* nextItemPointer;

};

//linked list
class List
{
public:
	//initialize head
	Item* frontPointer;				//head
	List() :frontPointer(NULL) {};	//head = null
	~List()
	{

	}
	//add item at head
	void pushFront(int data)		
	{
		Item* newItemPointer = new Item();	//create new node
		newItemPointer->data = data;		//new node.data = data(user input)
		newItemPointer->nextItemPointer = frontPointer;	//newnode.next = head
		frontPointer = newItemPointer;		//head = newnode
	}
	//print list
	void Display()
	{
		if (frontPointer == NULL) {
			std::cout << "List is EMPTY!!!!" << std::endl;
		}
		else {
			for (Item* curItemPointer = frontPointer; curItemPointer != NULL; curItemPointer = curItemPointer->nextItemPointer)
			{
				std::cout << curItemPointer->data << " -> ";
			}
		}
		std::cout << "\n \n";
	}
	//search list for a given element, return pointer position if found or NULL if not
	Item* Search(int data) {			//works
		if (frontPointer->data != NULL) {
			Item* currentItemPointer;
			currentItemPointer = frontPointer;
			while (currentItemPointer != NULL) {
				if (currentItemPointer->data == data) {
					return currentItemPointer;
				}
				else {
					currentItemPointer = currentItemPointer->nextItemPointer;
				}
			}
		}
		return NULL;
	}
	// erase the item pointed to by loc
	void Erase(Item* loc) {				
		if (frontPointer == NULL) {
			return;
		}
		Item* currentItemPointer;
		Item* previousItemPointer;
		currentItemPointer = frontPointer;

		if (frontPointer == loc) {
			frontPointer = currentItemPointer->nextItemPointer;
			delete currentItemPointer;
			return;
		}
		while (currentItemPointer != NULL) {
			previousItemPointer = currentItemPointer;
			currentItemPointer = currentItemPointer->nextItemPointer;
			if (currentItemPointer == loc) {
				previousItemPointer->nextItemPointer = currentItemPointer->nextItemPointer;
				currentItemPointer = NULL;
				return;
			}
		}
		return;
	}
	// insert a copy of data before or after loc
	void InsertBefore(Item* loc, int data) {
		if (frontPointer->data != NULL) {
			Item* currentItemPointer;
			currentItemPointer = frontPointer;
			if (frontPointer == loc) {
				Item* newItemPointer = new Item();
				newItemPointer->data = data;
				newItemPointer->nextItemPointer = frontPointer;
				frontPointer = newItemPointer;
			}
			while (currentItemPointer->nextItemPointer != NULL) {
				if (currentItemPointer->nextItemPointer == loc) {
					Item* newItemPointer = new Item();
					newItemPointer->data = data;
					newItemPointer->nextItemPointer = currentItemPointer->nextItemPointer;
					currentItemPointer->nextItemPointer = newItemPointer;
					return;
				}
				currentItemPointer = currentItemPointer->nextItemPointer;
			}
		}
	}
	void InsertAfter(Item* loc, int data) {
		if (frontPointer->data != NULL) {
			Item* currentItemPointer;
			currentItemPointer = frontPointer;
			while (currentItemPointer->nextItemPointer != NULL) {
				if (currentItemPointer == loc) {
					Item* newItemPointer = new Item();
					newItemPointer->data = data;
					newItemPointer->nextItemPointer = currentItemPointer->nextItemPointer;
					currentItemPointer->nextItemPointer = newItemPointer;
					return;
				}
				currentItemPointer = currentItemPointer->nextItemPointer;
			}
		}
	}
	//push a copy of data on to the back(end ) of the list. PushBack adds an item to the end of the list.
	void PushBack(int data) {
		Item* currentItemPointer;
		Item* newItemPointer = new Item();
		newItemPointer->data = data;
		newItemPointer->nextItemPointer = NULL;
		if (frontPointer == NULL) {
			frontPointer = newItemPointer;
			return;
		}
		currentItemPointer = frontPointer;
		while (currentItemPointer->nextItemPointer != NULL) {
			currentItemPointer = currentItemPointer->nextItemPointer;
		}
		currentItemPointer->nextItemPointer = newItemPointer;
		return;
	}
	//returns true if  PopBack is successful. Popback removes the last item in the list.Fill data with a copy the data in the node
	bool PopBack(int& data) {
		Item* currentItemPointer;
		Item* secondLastItemPointer = new Item();
		if (frontPointer == NULL) {
			return true;
		}
		if (frontPointer->nextItemPointer == NULL) {
			data = frontPointer->data;
			delete frontPointer;
			return true;
		}
		currentItemPointer = frontPointer;
		while (currentItemPointer->nextItemPointer != NULL) {
			secondLastItemPointer = currentItemPointer;
			currentItemPointer = currentItemPointer->nextItemPointer;
		}
		data = currentItemPointer->data;
		delete currentItemPointer;
		secondLastItemPointer->nextItemPointer = NULL;
		return true;
	}
	//returns true if  PopFront is successful. Pop an item from the front of the list. Fill data with a copy of the data in the node.
	bool PopFront(int& data) {
		if (frontPointer == NULL) {
			return true;
		}
		Item* temp;
		temp = frontPointer;
		data = frontPointer->data;
		frontPointer = frontPointer->nextItemPointer;
		delete temp;
		return true;
	}
	//Deletes Item from head of linked list
	void DeleteFront() {
		if (frontPointer == NULL) {
			return;
		}
		Item* temp;
		temp = frontPointer;
		frontPointer = frontPointer->nextItemPointer;
		delete temp;
		return;
	}
	void DeleteAll() {
		Item* currentItemPointer;
		Item* next;
		currentItemPointer = frontPointer;
		while (currentItemPointer != NULL) {
			next = currentItemPointer->nextItemPointer;
			currentItemPointer = NULL;
			currentItemPointer = next;
		}
		frontPointer = NULL;
	}

};
int main()
{
	List myList;
	//pushes these items to front and displays list
	std::cout << "pushFront() function" << std::endl;
	myList.pushFront(1);
	myList.pushFront(2);
	myList.pushFront(6);
	myList.pushFront(12);
	myList.Display();
	//searches for these numbers and displays them
	std::cout << "Search() function" << std::endl;
	std::cout << "2 was found at " << myList.Search(2) << std::endl;
	std::cout << "1 was found at " << myList.Search(1) << std::endl;
	std::cout << "\n";
	//erases 6 from the list
	std::cout << "Erase() function" << std::endl;
	Item* loc = myList.Search(6);
	myList.Erase(loc);
	myList.Display();
	//inserts 70 before 2
	std::cout << "InsertBefore() function" << std::endl;
	loc = myList.Search(2);
	myList.InsertBefore(loc, 70);
	myList.Display();
	//inserts 30 after 2
	std::cout << "InsertAfter() function" << std::endl;
	myList.InsertAfter(loc, 30);
	myList.Display();
	//pushes 50 on the back of the list
	std::cout << "PushBack() function" << std::endl;
	myList.PushBack(50);
	myList.Display();
	//pops the element from the back and displays it on screen
	std::cout << "PopBack() function" << std::endl;
	int i = 0;
	int& data = i;
	myList.PopBack(data);
	std::cout << data << std::endl;
	myList.Display();
	//pops the element from the front and displays it on screen
	std::cout << "PopFront() function" << std::endl;
	i = 0;
	data = i;
	myList.PopFront(data);
	std::cout << data << std::endl;
	myList.Display();
	//deletes an element from the front of the array
	std::cout << "DeleteFront() function" << std::endl;
	myList.DeleteFront();
	myList.Display();
	//deletes all elements from the list
	std::cout << "DeleteAll() function" << std::endl;
	myList.DeleteAll();
	myList.Display();
	return 0;
}